<?php

class Exam extends Eloquent {

	public static $AssExam = [
        1 => 'Major Delivery',
        2 => 'Major Ground', 
        3 => 'Major Tower', 
        4 => 'Major Approach',
        ];

    protected $table = 'training_assigned_exams';

    protected $fillable = array('controller_id', 'exam_id', 'instructor_id', 'complete');


    public function controller() {
        return $this->hasOne('User', 'id', 'controller_id');
    }

    public function instructor() {
        return $this->hasOne('User', 'id', 'instructor_id');
    }

    public function getAssExamAttribute()
    {
        foreach (Exam::$AssExam as $id => $exam) {
            if ($this->exam_id == $id) {
                return $exam;
            }
        }

        return "";
    }

    public function getPassRateAttribute()
    {
        switch($this->passed)
        {
            case 0: return "Failed";
            case 1: return "Passed";
        }
    }

}
