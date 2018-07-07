<?php

class TrainingFile extends Eloquent {

    protected $table = 'training_files';
    protected $fillable = array('name', 'comments', 'type', 'url');

}