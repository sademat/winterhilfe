<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralForm extends Model
{
    use HasFactory;
    protected $table="generalforms";
    //protected $fillable = ['needed_support','form_key','nanme',"surname",''];
    protected $guarded = [];
}
