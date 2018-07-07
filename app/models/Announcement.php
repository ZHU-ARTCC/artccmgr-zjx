<?php

class Announcement extends Eloquent {

    protected $table = 'announcements';
    protected $fillable = array('message', 'class', 'active', 'admin_id');

    public static $type = [
        1 => 'Message',
        2 => 'Error', 
        3 => 'Warning',
    ];

    public function admin() {
        return $this->hasOne('User', 'id', 'admin_id');
    }

}