<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Cache;

class deal extends Model
{
     public $table = 'deal';

     public static function boot()
     {
          parent::boot();

          static::created(function ($instance) {
               // update cache content
               Cache::forget('deals');
               Cache::forever('deals',$instance->get());
               Cache::forget('count_pd_'.$instance->product_id);
               Cache::forget('view-homes');
          });

          static::updated(function ($instance) {
               // update cache content
               Cache::forget('deals');
               Cache::forever('deals',$instance->get());
               Cache::forget('deal_details'.$instance->product_id);
               Cache::forget('count_pd_'.$instance->product_id);
               Cache::forever('deal_details'.$instance->product_id,$instance);

               Cache::forget('view-homes');
          });

          static::deleted(function ($instance) {
               Cache::forget('deals');
               Cache::forever('deals',$instance->get());
               Cache::forget('deal_details'.$instance->product_id);
               Cache::forget('count_pd_'.$instance->product_id);
               Cache::forever('deal_details'.$instance->product_id,$instance);
               Cache::forget('view-homes');
          });
    }
}
