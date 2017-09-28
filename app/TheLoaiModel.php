<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoaiModel extends Model {
	protected $table = 'TheLoai';
	public function LoaiTin(){
	    return $this->hasMany('App\LoaiTinModel', 'idTheLoai', 'id');
    }
    public function TinTuc(){
        return $this->hasManyThrough(
            'App\TinTucModel',
            'App\LoaiTinModel',
            'idTheLoai', // Foreign key on users table...
            'idLoaiTin', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
}
