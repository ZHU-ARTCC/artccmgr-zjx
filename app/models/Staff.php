<?php

class Staff extends Eloquent {

    protected $table = 'staff';

    protected $fillable = array('role', 'name', 'cid');

}