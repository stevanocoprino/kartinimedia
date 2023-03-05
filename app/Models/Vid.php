<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Vid extends Model
{
    // use SoftDeletes;

    protected $table = 'vid';

    protected $fillable = [
        'admin_id', 
        'title', 
        'slug', 
        'vid_type', 
        'description',
        'short_desc',
        'pic',
        'thumb1',
        'pic_title',
        'createdon',
        'updatedon',
        'publish_on',
        'is_publish',
        'vid_view',
        'vid_like',
        'seo_title',
        'seo_description',
        'seo_tags'
    ];

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


    public function vidTypes()
    {
        return $this->hasOne(VidTypes::class,'vid_type_id','vid_type');
    }

    public function vidSubTypes()
    {
        return $this->hasOne(VidSubTypes::class,'id_vid_sub_types','vid_sub_types');
    }

    public function vidSubSubTypes()
    {
        return $this->hasOne(VidSubSubTypes::class,'id_vid_sub_sub_types','vid_sub_sub_types');
    }
}
