<?php

class Document extends Eloquent {

    protected $table = 'document';
    protected $fillable = array('name', 'comments', 'type', 'url');

    public static $DownloadCats = [
		'vrc' => 'VRC',
        'vstars' => 'vSTARS',
        'veram' => 'vERAM',
        'vatis' => 'vATIS',
        'sop' => 'SOPs',
        'loa' => 'LOAs',
    ];

}