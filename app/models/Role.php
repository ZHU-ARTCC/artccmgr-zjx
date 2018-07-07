<?php

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	public function staff() {
        return $this->hasOne('User', 'id', 'user_id');
    }
}
