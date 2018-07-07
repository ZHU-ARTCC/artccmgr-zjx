<?php

class ATIS extends Eloquent {

	public static $FacilityLong = [
'a' => 'ZHU - Enroute',
'b' => 'ZHU - Oceanic',
'c' => 'I90 - Houston TRACON',
'd' => 'IAH - Houston Intercontinental ATCT',
'e' => 'HOU - Hobby Houston ATCT',
'f' => 'AUS - Austin TRACON',
'g' => 'BPT - Beaumont TRACON',
'h' => 'BTR - Baton Rouge TRACON',
'i' => 'CRP - Corpus Christi TRACON',
'j' => 'DLF - Del Rio TRACON',
'k' => 'GRK - Gray TRACON',
'l' => 'GPT - Gulfport TRACON',
'm' => 'HRL - Valley TRACON',
'n' => 'LCH - Lake Charles TRACON',
'o' => 'LFT - Lafeyette TRACON',
'p' => 'MOB - Mobile TRACON',
'q' => 'MSY - New Orleans TRACON',
'r' => 'NQI - Kingsville TRACON',
's' => 'POE - Polk TRACON',
't' => 'SAT - San Antonio TRACON',
'u' => 'MSY - New Orleans ATCT',
        ];

    protected $table = 'comms_atis';
    protected $fillable = array('position', 'name', 'facility', 'frequency');

    public function getFacilityLongAttribute()
    {
        foreach (ATIS::$FacilityLong as $id => $facility) {
            if ($this->facility == $id) {
                return $facility;
            }
        }

        return "";
    }

}
