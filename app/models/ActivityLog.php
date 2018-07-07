<?php 

class ActivityLog extends Eloquent {

    protected $table = "activity_log";

    protected $fillable = array('note', 'user_id', 'log_state', 'log_type');

    public static $LogState = [
        1 => 'Created',
        2 => 'Modified',
        3 => 'Removed'
    ];

    public static $LogType = [
        1  => 'Announcement',
        2  => 'Broadcast',
        3  => 'Document',
        4  => 'Events',
        5  => 'Feedback',
        6  => 'MentorAvail',
        8  => 'TrainingNote',
        9  => 'User',
        10 => 'Visit'
    ];

    
    public function getStateLongAttribute()
    {
        foreach (ActivityLog::$LogState as $id => $long) {
            if ($this->log_state == $id) {
                return $long;
            }
        }

        return "";
    }

    public function getTypeLongAttribute()
    {
        foreach (ActivityLog::$LogType as $id => $long) {
            if ($this->log_type == $id) {
                return $long;
            }
        }

        return "";
    }


    public function User()
    {
        return $this->belongsTo('User', 'user_id', 'id');
    }

}
