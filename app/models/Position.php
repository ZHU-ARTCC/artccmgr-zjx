<?php

class Position extends Eloquent {

	protected $table = 'event_position_requests';

    public $timestamps = false;

	protected $fillable = array('event_id', 'position_id', 'controller_id', 'done');

    public function event() {
        return $this->belongsTo('Events', 'event_id');
    }

    public function user() {
        return $this->hasOne('User', 'id', 'controller_id');
    }

    public function eventPosition() {
        return $this->hasOne('EventPosition', 'id', 'position_id');
    }
}