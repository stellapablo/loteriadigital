<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['nombre'];


    public static function add($tags,$doc){

            foreach ($tags as $row) {

                $check = null;
                $check = Tag::where('nombre','like',$row)->count();

                if($check == null){
                    $tag = Tag::create(['nombre'=>$row]);

                    $doc = Documento::find($doc);
                    $doc->tags()->attach($tag);
                }
            }
    }

    public function documentos(){
        return $this->belongsToMany(Documento::class);
    }



}
