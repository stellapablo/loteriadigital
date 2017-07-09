<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['nombre'];

    public function documento() {
        return $this->belongsTo('App\SADocumento','tag_id');
    }

    public static function add($tags){

        foreach ($tags as $row) {

           $check = null;

           $check = Tag::where('nombre','like',$row)->count();

           if($check == null){
               Tag::create(['nombre'=>$row]);
           }
        }

    }


}
