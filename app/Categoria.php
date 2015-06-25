<?php namespace Course;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	protected $table = 'categorias';

    public function referentes()
    {
        return $this->belongsToMany('\Course\Referente');
    }

}
