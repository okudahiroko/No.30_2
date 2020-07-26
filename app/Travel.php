<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travels';
    protected $guarded = array('id');
    
    public static $rules = array(
        'check_in_date' => 'required',
        'check_out_date' => 'required',
        'members' => 'required',
        'name' => 'required',
        'phone_number' => 'required',
    );
}
