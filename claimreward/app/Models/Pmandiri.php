<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Pmandiri extends Model
{
    use HasFactory;
    protected $table = "formulir";
    protected $primaryKey = "id";
    protected $fillable = [
        'npm','nm_mhsw','nm_kompetisi','nm_penyelenggara','bidang','capaian','tingkat','url','tgl','sertifikat','foto','buku_tabungan'];

        public $incrementing = false;
        protected $keyType = 'string';

        public static function boot()
        {
            parent::boot();
            self::creating(function ($model) {
                $model->id= IdGenerator::generate(['table' =>'formulir','length'=> 6,'prefix'=>'P']);
            });
        }
}
