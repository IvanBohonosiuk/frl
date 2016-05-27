<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $table = 'project';

    public function categories()
    {
    	return $this->belongsTo('App\Project_cat');
    }

    public function getActive()
    {
    	return $this->published()->get();
    }

    public function scopePublished($query)
    {
    	$query->where(['active'=>1]);
    }

}
