<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Testgallery extends Model {

    protected  $table = 'testgalleries';

    public function test()
    {
        return $this->belongsTo('App\Test');
    }

}
