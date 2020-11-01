<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Shop extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'cous_id', 'shop_name', 'shop_address', 'shop_email', 'pick_address', 'pick_area_id', 'pick_phone', 'pick_type_id', 'deli_zone_id', 'ref_id', 'coup_code',
    ];

    protected function pickArea(){
        return $this->belongsTo('App\PickupArea','pick_area_id','id');
    }

    protected function pickProduct(){
        return $this->belongsTo('App\PickupProduct','pick_type_id','id');
    }

    protected function deliZone(){
        return $this->belongsTo('App\DeliveryZone','deli_zone_id','id');
    }
}
