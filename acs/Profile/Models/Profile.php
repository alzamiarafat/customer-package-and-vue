<?php

namespace Acs\Profile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',"full_name",'father_name','mother_name','spouse_name','gender','date_of_birth','marital_status','religion','nationality','present_address','permanent_address','blood_group'
    ];
}
