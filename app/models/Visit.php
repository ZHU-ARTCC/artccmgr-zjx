<?php

class Visit extends Eloquent {

    public static $RatingShort = [
        0 => 'N/A',
        1 => 'OBS', 2 => 'S1', 
        3 => 'S2', 4 => 'S3', 
        5 => 'C1', 7 => 'C3', 
        8 => 'I1', 10 => 'I3', 
        11 => 'SUP', 12 => 'ADM',
    ];

    protected $table = 'visit_requests';

    protected $fillable = array('cid', 'first_name', 'last_name', 'rating_id', 'email', 'home', 'accepted', 'reason');

	public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getRatingShortAttribute()
    {
        foreach (Visit::$RatingShort as $id => $Short) {
            if ($this->rating_id == $id) {
                return $Short;
            }
        }

        return "";
    }

    public function sendVReqDeclineEmail() {
        return Mail::send('emails.visitdeny', ['session' => $this], function($message){
            $message->to($this->email);
            $message->subject('vZHU - Visiting Application Denied');
        });
    }

    public function sendVReqUpdateEmail() {
        return Mail::send('emails.2weekvisitr', ['session' => $this], function($message){
            $message->to($this->email);
            $message->subject('vZHU - Visiting Application Update');
        });
    }

}
