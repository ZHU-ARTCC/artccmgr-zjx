<?php

class Mailbox extends Eloquent {

	protected $table = 'mailbox';
    protected $fillable = ['password'];
    protected $connection = 'vmail';
    protected $primaryKey = 'username';

    public $timestamps = false;

}