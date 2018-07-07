<?php

class SMFAnnouncements extends Eloquent {

	protected $connection = 'zjxforum';
    protected $table = 'smf_topics';

    public static function getAnnouncements($limit = 5)
    {
    	return static::query()
    		->join('smf_messages', 'smf_topics.id_first_msg', '=', 'smf_messages.id_msg')
    		->where('smf_topics.id_board', 2)
    		->selectRaw('`smf_topics`.id_topic, FROM_UNIXTIME(`smf_messages`.`poster_time`, "%b %e") as poster_time, `smf_messages`.`subject`')
    		->orderBy('smf_messages.poster_time', 'desc')
    		->take($limit)->get();
    }

}