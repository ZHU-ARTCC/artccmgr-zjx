<?php

class Feedback extends Eloquent {

    public static $Positions = [
     'HOU_CTR' => 'Enroute (Houston Center)',
     'ZHU_FSS' => 'Oceanic (Houston Oceanic)',
     'APP' => '-------- APPROACH/DEPARTURE --------',
     'HOU_APP' => '(HOU) Houston Approach/Departure', 
     'AUS_APP' => '(AUS) Austin Approach/Departure', 
     'MSY_APP' => '(MSY) New Orleans Approach/Departure',
     'BTR_APP' => '(BTR) Baton Rouge Approach/Departure',
     'CRP_APP' => '(CRP) Corpus Christi Approach/Departure',
     'GPT_APP' => '(GPT) Gulfport–Biloxi Approach/Departure',
     'LCH_APP' => '(LCH) Lake Charles Regional Approach/Departure',
     'MOB_APP' => '(MOB) Mobile Regional Approach/Departure',
     'SAT_APP' => '(SAT) San Antonio Approach/Departure',
     'TWR' => '-------------- TOWER --------------',
     'IAH_TWR' => '(IAH) Houston Intercontinental Tower', 
     'HOU_TWR' => '(HOU) Houston Hobby Tower', 
     'AUS_TWR' => '(AUS) Austin Tower', 
     'MSY_TWR' => '(MSY) New Orleans Tower',
     'BTR_TWR' => '(BTR) Baton Rouge Tower',
     'CRP_TWR' => '(CRP) Corpus Christi Tower',
     'GPT_TWR' => '(GPT) Gulfport–Biloxi Tower',
     'LCH_TWR' => '(LCH) Lake Charles Regional Tower',
     'MOB_TWR' => '(MOB) Mobile Regional Tower',
     'SAT_TWR' => '(SAT) San Antonio Tower',
     'GND' => '-------------- GROUND --------------',
     'IAH_GND' => '(IAH) Houston Intercontinental Ground', 
     'HOU_GND' => '(HOU) Houston Hobby Ground', 
     'AUS_GND' => '(AUS) Austin Ground', 
     'MSY_GND' => '(MSY) New Orleans Ground',
     'BTR_GND' => '(BTR) Baton Rouge Ground',
     'CRP_GND' => '(CRP) Corpus Christi Ground',
     'GPT_GND' => '(GPT) Gulfport–Biloxi Ground',
     'LCH_GND' => '(LCH) Lake Charles Regional Ground',
     'MOB_GND' => '(MOB) Mobile Regional Ground',
     'SAT_GND' => '(SAT) San Antonio Ground',
     'DEL' => '------------ DELIVERY ------------',
     'IAH_DEL' => '(IAH) Houston Intercontinental Delivery', 
     'HOU_DEL' => '(HOU) Houston Hobby Delivery', 
     'AUS_DEL' => '(AUS) Austin Delivery', 
     'MSY_DEL' => '(MSY) New Orleans Delivery',
     'BTR_DEL' => '(BTR) Baton Rouge Delivery',
     'CRP_DEL' => '(CRP) Corpus Christi Delivery',
     'GPT_DEL' => '(GPT) Gulfport–Biloxi Delivery',
     'LCH_DEL' => '(LCH) Lake Charles Regional Delivery',
     'MOB_DEL' => '(MOB) Mobile Regional Delivery',
     'SAT_DEL' => '(SAT) San Antonio Delivery',
     'UNKNOWN' => 'Unknown'
    ];

    protected $table = 'feedback';

    protected $fillable = array('controller_id', 'position', 'level', 'comments', 'staff_comments', 'pilot_name', 'pilot_id', 'pilot_email', 'flight_callsign', 'status');

    public function controller() {
        return $this->hasOne('User', 'id', 'controller_id');
    }

    public function getLevelTextAttribute()
    {
    	switch($this->level)
    	{
    		case 0: return "Unsatisfactory";
    		case 1: return "Poor";
    		case 2: return "Fair";
    		case 3: return "Good";
    		case 4: return "Excellent";
    	}
    }

    public function getFeedbackPosAttribute()
    {
        foreach (Feedback::$Positions as $id => $Long) {
            if ($this->position == $id) {
                return $Long;
            }
        }

        return "";
    }

    public function sendPilotEmail()
    {
        return Mail::send('emails.feedbackpilot', ['feedback' => $this], function($message){
            $message->from('no-reply@zhuartcc.org', 'vZHU No-Reply');
            $message->to($this->pilot_email);
            $message->subject('vZHU - Feedback Response');
        });
    }

    public function sendControllerEmail()
    {
        return Mail::send('emails.feedbackcontroller', ['feedback' => $this], function($message){
            $message->from('no-reply@zhuartcc.org', 'vZHU No-Reply');
            $message->to($this->controller->email);
            $message->subject('vZHU - New Feedback');
        });
    }

}
