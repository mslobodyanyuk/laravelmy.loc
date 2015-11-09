<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model {

	protected $table = 'resumes';

    public function resgalleries()
    {
        return $this->hasMany('App\Resgallery');
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
