<?php namespace Course;


use Illuminate\Database\Eloquent\Model;

class Referente extends Model  {

    protected $table = 'referentes';

	public function tesinas()
    {
        return $this->belongsToMany('\Course\Tesina');
    }

}
