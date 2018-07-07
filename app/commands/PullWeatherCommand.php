<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;
use GuzzleHttp\Client;

class PullWeatherCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'weather:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull weather from sources';

    protected $source = "https://www.aviationweather.gov/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&hoursBeforeNow=2&mostRecentForEachStation=true&stationString=%s";

    protected $defaultAirports = [
        'KIAH', 'KHOU', 'KEFD', 'KDWH', 'KSGR', 'KTME', 'KGLS', 'KCLL', 'KBPT', 'KCXO', 'KAUS', 'KBTR', 'KCRP', 'KGPT', 'KLCH', 'KMOB', 'KMSY', 'KSAT', 'KHRL', 'KDLF', 'KAEX',
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {   
        $airports = explode(",", $this->option('airports'));

        $this->info("Fetching airport information for: " . implode(', ', $airports));

        $client = new Client;
        $url = sprintf($this->source, implode(",", $airports));
        $response = $client->get($url);

        $root = new SimpleXMLElement($response->getBody());

        $i = 0;

        foreach($root->data->children() as $metar) {
            $Station = Weather::firstOrCreate(['id' => $metar->station_id]);

            $wind = 'Calm';

            if ($metar->wind_dir_degrees->__toString() > 0 && $metar->wind_dir_degrees->__toString() < 100) {
                $winds = "0" . $metar->wind_dir_degrees->__toString();
            } else {
                $winds = $metar->wind_dir_degrees->__toString(); 
            }

            if ($winds > 0 && $metar->wind_speed_kt->__toString() > 0) {
                if($metar->wind_speed_kt->__toString() < 10) {
                    $windspeed = '0'.$metar->wind_speed_kt->__toString();
                } else {
                    $windspeed = $metar->wind_speed_kt->__toString();
                }
                $wind = $winds . '@' . $windspeed; 

                if ($metar->wind_gust_kt) {
                    $wind .= "G" . $metar->wind_gust_kt->__toString();
                }
            }

            $Station->fill([
                'type' => $metar->flight_category->__toString(),
                'wind' => $wind,
                'baro' => number_format((double)$metar->altim_in_hg, 2),
                'metar' => $metar->raw_text->__toString(),
            ]);

            $Station->save();

            $i++;
        }
        
        $time = Carbon::now('Etc/UTC')->format('H:i').'Z';
        $setting = Settings::where('key', 'WXUPDATE')->first();
        $setting->value = $time;
        $setting->save();

        //$this->info("Saved weather information for $i airports at $time");
        //Log::info("Saved weather information for $i airports at $time");
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['airports', 'a', InputOption::VALUE_OPTIONAL, 'Airports to gather most recent data on (CSV delimited).', implode(",", $this->defaultAirports)],
        ];
    }

}
