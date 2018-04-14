<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';
    public function location()
    {
        return $this->belongsTo('App\Location','location_id','id')->select(array('locations.id','locations.address'));
    }
    public function client()
    {
        return $this->belongsTo('App\Client','client_id','id')->select(array('clients.id','clients.fullname'));
    }
}
