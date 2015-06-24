<?php namespace Course;


use Illuminate\Database\Eloquent\Model;


class Tesina extends Model {

    protected $table = 'tesinas';

	public function referentes()
    {
        return $this->belongsToMany('\Course\Referente');
    }

}
