<?php

use \Illuminate\Database\Eloquent\Builder as QueryBuilder;

class ControllerLog extends Eloquent {

    protected $table = 'controller_log';
    public $timestamps = false;
    protected $fillable = ['cid', 'date', 'start', 'duration', 'position', 'streamupdate'];

    public function user() 
    {
        return $this->hasOne('User', 'id', 'cid');
    }

    public function getDurationTimeAttribute()
    {
        $seconds_count = $this->duration;
        $delimiter  = ':';
        $seconds = $seconds_count % 60;
        $minutes = floor($seconds_count/60)%60;
        $hours   = floor($seconds_count/3600);

        $seconds = str_pad($seconds, 2, "0", STR_PAD_LEFT);
        $minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
        $hours = str_pad($hours, 2, "0", STR_PAD_LEFT);

        return "$hours$delimiter$minutes$delimiter$seconds";
    }

    public function getLocalHrsAttribute()
    {
        return floatval($this->attributes['local_hrs']) ? self::secondsToTime($this->attributes['local_hrs']) : '--';
    }

    public function getApproachHrsAttribute()
    {
        return floatval($this->attributes['approach_hrs']) ? self::secondsToTime($this->attributes['approach_hrs']) : '--';
    }

    public function getEnrouteHrsAttribute()
    {
        return floatval($this->attributes['enroute_hrs']) ? self::secondsToTime($this->attributes['enroute_hrs']) : '--';
    }

    public function getTotalHrsAttribute()
    {
        return floatval($this->attributes['total_hrs']) ? self::secondsToTime($this->attributes['total_hrs']) : '--';
    }

    public static function getAllControllerStats()
    {
        return static::aggregateStatsByTime(static::query());
    }

    public static function getControllerStats($id)
    {
        return static::aggregateStatsByTime(static::where('cid', $id));
    }

    public static function aggregateStatsByTime(QueryBuilder $query)
    {
        $results = $query->select(DB::raw("
            SUM(IF(date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%m/%Y') = date_format(now(), '%m/%Y'), duration, 0)) as `month`,
            SUM(IF(year(STR_TO_DATE(`date`, '%m/%d/%Y')) = year(now()), duration, 0)) as `year`,
            SUM(duration) as `total`
        "))->first();

        // Convert seconds to hours
        return [
            'month' => self::secondsToTime($results->month),
            'year' => self::secondsToTime($results->year),
            'total' => self::secondsToTime($results->total),
        ];
    }

    public static function aggregateAllControllersByPosAndMonth( $year = null, $month = null )
    {
        $query = static::query()
            ->rightJoin('roster', function($join) use ($year, $month) {
                $join->on('roster.id', '=', 'controller_log.cid');

                if ($month != null)
                    $join->where(DB::Raw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%c')"), 'like', $month);

                if ($year != null)
                    $join->where(DB::Raw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%y')"), 'like', $year);
            })
            ->selectRaw("
                roster.id `cid`,
                SUM(IF(position LIKE '%_DEL' OR position LIKE '%_GND' OR position LIKE '%_TWR', duration, 0)) `local_hrs`,
                SUM(IF(position LIKE '%_APP', duration, 0)) `approach_hrs`,
                SUM(IF(position LIKE '%_CTR', duration, 0)) `enroute_hrs`,
                SUM(duration) `total_hrs`
            ")
            ->groupBy('roster.id');

        return $query->get()->reduce(function($m, $r){
            $m[$r->cid] = $r;
            return $m;
        }, []);
    }

    public static function top5Controllers($year_month)
    {
        return static::where(DB::Raw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%Y-%c')"), 'like', $year_month)
            ->join('roster', 'controller_log.cid', '=', 'roster.id')
            ->groupBy('roster.id')
            ->selectRaw('roster.*, SUM(duration) as `duration`')
            ->orderBy('duration', 'desc')
            ->limit(5)
            ->get();
    }

    public static function top5EnrouteControllers($year_month)
    {
                return static::where(DB::Raw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%Y-%c')"), 'like', $year_month)
            ->where('position', 'like', '%_CTR')
                        ->join('roster', 'controller_log.cid', '=', 'roster.id')
                        ->groupBy('roster.id')
                        ->selectRaw('roster.*, SUM(duration) as `duration`')
                        ->orderBy('duration', 'desc')
                        ->limit(5)
                        ->get();
    }
        public static function top5ApproachControllers($year_month)
        {
                return static::where(DB::Raw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%Y-%c')"), 'like', $year_month)
                        ->where('position', 'regexp', '_(APP|DEP)$')
                        ->join('roster', 'controller_log.cid', '=', 'roster.id')
                        ->groupBy('roster.id')
                        ->selectRaw('roster.*, SUM(duration) as `duration`')
                        ->orderBy('duration', 'desc')
                        ->limit(5)
                        ->get();
        }
        public static function top5LocalControllers($year_month)
        {
                return static::where(DB::Raw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%Y-%c')"), 'like', $year_month)
                        ->where('position', 'regexp', '_(DEL|GND|TWR)$')
                        ->join('roster', 'controller_log.cid', '=', 'roster.id')
                        ->groupBy('roster.id')
                        ->selectRaw('roster.*, SUM(duration) as `duration`')
                        ->orderBy('duration', 'desc')
                        ->limit(5)
                        ->get();
        }

        public static function secondsToTime($seconds_time)
        {
            if ($seconds_time < 24 * 60 * 60) {
                return gmdate('H:i:s', $seconds_time);
            } else {
                $hours = floor($seconds_time / 3600);
                $minutes = floor(($seconds_time - $hours * 3600) / 60);
                $seconds = floor($seconds_time - ($hours * 3600) - ($minutes * 60));
                ($minutes < 10) ? $minutes = '0'.$minutes : $minutes = $minutes;
                ($seconds < 10) ? $seconds = '0'.$seconds : $seconds = $seconds;
                return "$hours:$minutes:$seconds";
            }
        }
}
