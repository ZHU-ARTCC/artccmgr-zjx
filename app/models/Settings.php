<?php

class Settings extends Eloquent {

    protected $primaryKey = 'key';

    protected $table = 'settings';
    protected $fillable = array('key', 'value');
    public $timestamps = false;

}