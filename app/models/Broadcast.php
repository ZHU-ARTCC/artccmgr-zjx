<?php

class Broadcast extends Eloquent {

	protected $table = 'broadcast';

    protected $fillable = array('subject', 'content', 'admin_id', 'home', 'visitors', 'rating_obs', 'rating_s1', 'rating_s2', 
                                'rating_s3', 'rating_c1', 'rating_c3', 'rating_i1', 'rating_i3', 'rating_sup', 'rating_adm');

    public function admin()
    {
        return $this->hasOne('User', 'id', 'admin_id');
    }

    public function sendBroadcast($u)
    {
    	$subject = $this->subject;
        return Mail::send('emails.broadcast', ['broadcast' => $this], function($message) use ($u, $subject) {
			$message->from('no-reply@zhuartcc.org', 'vZHU No-Reply');
			$message->to($u->email);
			$message->subject("vZHU - {$subject}");
		});
    }

}
