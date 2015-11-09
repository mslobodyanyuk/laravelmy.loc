<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

    protected $table = 'tests';

    public function testgalleries()
    {
        return $this->hasMany('App\Testgallery');
    }

    public function  getActive()
    {
        return $this->published()
            ->get();
    }

    public function getBySlug($slug)
    {
        return $this->published()
            ->slug($slug)
            ->firstOrFail();
    }

    public function scopePublished($query){
        $query->where(['active' =>'1']);
    }

    public function scopeSlug($query, $slug)
    {
        $query->where(['slug'=>$slug]);
    }

}
