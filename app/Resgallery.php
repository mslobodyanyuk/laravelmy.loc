<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Resgallery extends Model {

	protected  $table = 'resgalleries';

    public function resume()
    {
        return $this->belongsTo('App\Resume');
    }

}
