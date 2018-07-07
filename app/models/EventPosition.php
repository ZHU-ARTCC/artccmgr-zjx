<?php

class EventPosition extends Eloquent {

	protected $table = 'event_positions';

	public $timestamps = false;

	protected $fillable = array('event_id', 'name', 'controller_id', 'order_index');

    public function event() {
        return $this->belongsTo('Events', 'event_id');
    }

    public function user() {
        return $this->hasOne('User', 'id', 'controller_id');
    }
}
