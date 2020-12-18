<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articleModel extends Model
{
    use HasFactory;
    public $table="article";
    protected $fillable=[
        'title','content','checkByWho','createByWho','teacherComments','scores','status'
    ];
}
