<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escola extends Model
{
    





    protected $fillable = ['link_site',       'username',       'link_página',       'google_code',       'rd_code',       'escola',       'estado',       'cidade',       'bairro',	'facebook_code'];



    use SoftDeletes;
    protected $dates = ['deleted_at'];


}
