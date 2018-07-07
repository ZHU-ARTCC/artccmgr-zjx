<?php

class Airport extends Eloquent {
    protected $table = 'airports';
    public $timestamps = false;

    public function loadChartsData() {
    	$client = new GuzzleHttp\Client;
    	$response = $client->get("http://api.aircharts.org/Airport/" . $this->id . ".json");
    	$aircharts_info = json_decode($response->getBody(), true);
    	$aircharts_info = $aircharts_info[$this->id];

    	$this->charts = $aircharts_info['charts'];
    	
    	$this->airport_diagram = array_first($this->charts, function($i, $chart) {
    		return $chart['type'] == 'General' && $chart['name'] == 'AIRPORT DIAGRAM';
    	}, null);

    	$this->general = array_filter($this->charts, function($chart){
    		return $chart['type'] == 'General';
    	});

    	$this->departures = array_filter($this->charts, function($chart){
    		return $chart['type'] == 'Departure';
    	});

    	$this->arrivals = array_filter($this->charts, function($chart){
    		return $chart['type'] == 'Arrival';
    	});

    	$this->approaches = array_filter($this->charts, function($chart){
    		return $chart['type'] == 'Approach';
    	});
    }

}