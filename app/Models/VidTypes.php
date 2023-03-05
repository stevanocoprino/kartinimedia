<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class VidTypes extends Model
{
    // use SoftDeletes;

    protected $table = 'vid_types';

    protected $fillable = [
        'vid_type', 
        'icon', 
        'seo_title', 
        'seo_description', 
        'slug',
        'aktif',
        'urutan'
    ];

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


    public function vid()
    {
        return $this->hasMany(Vid::class,'vid_type','vid_type_id');
    }

    
    public function vidSubTypes()
    {
        return $this->hasMany(VidSubTypes::class,'id_vid_types','vid_type_id')->orderBy("sort","asc");
    }
    
    

    public function vidLimit()
    {
        return $this->hasMany(Vid::class,'vid_type','vid_type_id')
        ->whereRaw("publish_on<='".date('Y-m-d H:i:s')."'")
        // ->where('publish_on','<=',date('Y-m-d H:i:s'))
        ->where('is_publish','1')->orderBy('publish_on','DESC');
    }

   
}
