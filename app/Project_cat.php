<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_cat extends Model
{
    protected $table = 'project_cats';

    public function project()
    {
    	return $this->hasMany('App\projects');
    }
}
