<?php

class OTSRequest extends Eloquent {

	public static $PosReq = [
        1 => 'Minor Delivery',
        2 => 'Major Delivery', 
        3 => 'Minor Ground', 
        4 => 'Major Ground', 
        5 => 'Minor Tower', 
        6 => 'Major Tower', 
        7 => 'Minor Approach',
        8 => 'Major Approach', 
        9 => 'Enroute',
        ];

    protected $table = 'training_ots_request';

    protected $fillable = array('controller_id', 'position', 'complete', 'requested_by');


    public function controller() {
        return $this->hasOne('User', 'id', 'controller_id');
    }

    public function mentor() {
        return $this->hasOne('User', 'id', 'requested_by');
    }

    public function instructor() {
        return $this->hasOne('User', 'id', 'mentor_id');
    }

    public function getPosReqAttribute()
    {
        foreach (OTSRequest::$PosReq as $id => $request) {
            if ($this->position == $id) {
                return $request;
            }
        }

        return "";
    }

}
