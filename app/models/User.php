<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Zizaco\Entrust\HasRole;


class User extends Eloquent implements UserInterface {
    use UserTrait;
    use HasRole;

    public static $RatingShort = [
        0 => 'N/A',
        1 => 'OBS', 2 => 'S1', 
        3 => 'S2', 4 => 'S3', 
        5 => 'C1', 7 => 'C3', 
        8 => 'I1', 10 => 'I3', 
        11 => 'SUP', 12 => 'ADM',
    ];

    public $timestamps = true;

    public static $RatingLong = [
        0 => 'Pilot',
        1 => 'Pilot/Observer', 2 => 'Student', 
        3 => 'Student 2', 4 => 'Senior Student', 
        5 => 'Controller', 7 => 'Senior Controller', 
        8 => 'Instructor', 10 => 'Senior Instructor', 
        11 => 'Supervisor', 12 => 'Admin',
    ];

    public static $StaffRoleToSMFGroup = [
        '0' => '20',
        '1' => '9',
        '2' => '10',
        '3' => '11',
        '4' => '12',
        '5' => '13',
        '6' => '14',
        '7' => '15',
        '8' => '16',
        '9' => '17',
        '12' => '22',
	'13' => '23',
    ];

    public static $TrainingRoleToSMFGroup = [
        '0' => '',
        '10' => '18',
        '11' => '19',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roster';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    protected $fillable = array('id', 'first_name', 'last_name', 'email', 'rating_id', 'canTrain', 'visitor', 'visitor_from', 'status', 'loa', 'del', 'gnd', 'twr', 'app', 'ctr');

    public function controller_log() {
        $this->hasMany('ControllerLog', 'cid');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getBackwardsNameAttribute()
    {
        return $this->last_name . ", " . $this->first_name;
    }

    public function getRatingShortAttribute()
    {
        foreach (User::$RatingShort as $id => $Short) {
            if ($this->rating_id == $id) {
                return $Short;
            }
        }

        return "";
    }

    public function getRatingLongAttribute()
    {
        foreach (User::$RatingLong as $id => $Long) {
            if ($this->rating_id == $id) {
                return $Long;
            }
        }

        return "";
    }

    public function getLocalHoursAttribute()
    {
        $duration = DB::table('controller_log')->where('cid', $this->id)
            ->where(function($query){
                $query->where('position', 'LIKE', '%_DEL')
                      ->orWhere('position', 'LIKE', '%_GND')
                      ->orWhere('position', 'LIKE', '%_TWR');
            })
            ->whereRaw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%m/%Y') = date_format(now(), '%m/%Y')")
            ->sum('duration'); 

        if(!$duration == 0) {
            $hours = $duration / 3600;
            return number_format($hours, 2);
        } else {
            return '--';
        }
    }

    public function getApproachHoursAttribute()
    {
        $duration = DB::table('controller_log')
            ->where('cid', $this->id)
            ->where('position', 'LIKE', '%_APP')
            ->whereRaw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%m/%Y') = date_format(now(), '%m/%Y')")
            ->sum('duration');

        if(!$duration == 0) {
            $hours = $duration / 3600;
            return number_format($hours, 2);
        } else {
            return '--';
        }
    }

    public function getCenterHoursAttribute()
    {
        $duration = DB::table('controller_log')
            ->where('cid', $this->id)
            ->where('position', 'LIKE', '%_CTR')
            ->whereRaw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%m/%Y') = date_format(now(), '%m/%Y')")
            ->sum('duration');

        if(!$duration == 0) {
            $hours = $duration / 3600;
            return number_format($hours, 2);
        } else {
            return '--';
        }
    }

    public function getTotalHoursAttribute()
    {
        $duration = DB::table('controller_log')
            ->where('cid', $this->id)
            ->whereRaw("date_format(STR_TO_DATE(`date`, '%m/%d/%Y'), '%m/%Y') = date_format(now(), '%m/%Y')")
            ->sum('duration');
        
        if(!$duration == 0) {
            $hours = $duration / 3600;
            return number_format($hours, 2);
        } else {
            return '--';
        }
    }

    public function getStaffLongAttribute()
    {
        switch($this->staff_role)
        {
            case 'ATM': return "Air Traffic Manager";
            case 'DATM': return "Deputy Air Traffic Manager";
            case 'TA': return "Training Administrator";
            case 'WM': return "Webmaster";
            case 'FE': return "Facility Engineer";
            case 'EC': return "Events Coordinator";
            case 'ATA': return "Assistant Training Administrator";
            case 'AEC': return "Assistant Events Coordinator";
            case 'AWM': return "Assistant Webmaster";

        }
    }

    public function getDelCertAttribute()
    {
        switch($this->del)
        {
            case 0: return "No Certification";
            case 1: return "Minor Training";
            case 2: return "Minor Certified";
            case 3: return "Major Training";
            case 4: return "Major Certified";

        }
    }

    public function getGndCertAttribute()
    {
        switch($this->gnd)
        {
            case 0: return "No Certification";
            case 1: return "Minor Training";
            case 2: return "Minor Certified";
            case 3: return "Major Training";
            case 4: return "Major Certified";

        }
    }

    public function getTwrCertAttribute()
    {
        switch($this->twr)
        {
            case 0: return "No Certification";
            case 1: return "Minor Training";
            case 2: return "Minor Certified";
            case 3: return "Major Training";
            case 4: return "Major Certified";

        }
    }

    public function getAppCertAttribute()
    {
        switch($this->app)
        {
            case 0: return "No Certification";
            case 1: return "Minor Training";
            case 2: return "Minor Certified";
            case 3: return "Major Training";
            case 4: return "Major Certified";

        }
    }

    public function getCtrCertAttribute()
    {
        switch($this->ctr)
        {
            case 0: return "No Certification";
            case 1: return "Training";
            case 2: return "Certified";

        }
    }

    public function createSMFMember()
    {
        require_once(Config::get('services.smf.path') . "/smf_2_api.php");

        $registration_options = [
            'member_name' => $this->id,
            'email' => $this->email,
            'real_name' => $this->full_name,
            'password' => uniqid(),
            'require' => 'nothing', // No known password is required
            'id_group' => $this->visitor === 1 ? '20' : '19',
        ];

        $result = smfapi_registerMember($registration_options);

        if (is_array($result))
            throw new \Exception("Error attempting to register smf member: " . var_export($result, true));
    }

    /*
     * CAUTION:
     * Only call this method when the user has been properly authenticated.
     * This will log them into an smf session regardless of currently laravel session.
     */
    public function loginToSMF()
    {
        require_once("/home/ztl/www/public/forum/smf_2_api.php");

        smfapi_login($this->id);
    }

    /*
     * Only call this method when the user has been properly authenticated.
     * This will log them into an smf session regardless of currently laravel session.
     */
    public function logoutOfSMF()
    {
        require_once("/home/ztl/www/public/forum/smf_2_api.php");
        // We don't care if the logout failed
        smfapi_logout($this->id);
    }

    public function sendVReqDeclineEmail() {
        return Mail::send('emails.visitdeny', ['session' => $this], function($message){
            $message->to($this->visitr->email);
            $message->subject('vZHU - Visiting Application Desied');
        });
    }

    public function sendVReqUpdateEmail() {
        return Mail::send('emails.2weekvisitr', ['session' => $this], function($message){
            $message->to($this->visitr->email);
            $message->subject('vZHU - Visiting Application Update');
        });
    }

    public function hasStaff()
    {
        if($this->hasRole('ATM') || $this->hasRole('DATM') || $this->hasRole('TA') || $this->hasRole('WM') || $this->hasRole('ATA') || $this->hasRole('AEC') || $this->hasRole('EC') || $this->hasRole('FE') || $this->hasRole('AWM')) {
            return true;
        } else {
            return false;
        }
    }

    public function hasTrainingStaff()
    {
        if($this->hasRole('INS') || $this->hasRole('MTR')) {
            return true;
        } else {
            return false;
        }
    }

    public function userFirstStaff()
    {
        $assignedrole = DB::table(Config::get('entrust::assigned_roles_table'))->where('user_id', $this->id)->first();
        $role = DB::table(Config::get('entrust::roles_table'))->where('id', $assignedrole->role_id)->first();
        return $role->name;
    }

    public function siteActivity()
    {
    	return $this->hasMany('ActivityLog', 'user_id', 'id')->orderBy('id', 'DESC')->first();
    }

    public function controlActivity()
    {
    	return $this->hasMany('ControllerLog', 'cid', 'id')->orderBy('id', 'DESC')->first();
    }

    public function trainingHistory()
    {
        return $this->hasMany('TrainingNote', 'controller_id', 'id')->orderBy('id', 'DESC')->first();
    }
}
