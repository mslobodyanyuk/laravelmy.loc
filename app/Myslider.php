<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Myslider extends Model {

    protected $table = 'myslides';

    public function getActive()
    {
        return $this->orderBy('weight')
            ->published()
            ->get();
    }
    public function scopePublished($query)
    {
        $query->where(['active'=>1]);
    }

}
