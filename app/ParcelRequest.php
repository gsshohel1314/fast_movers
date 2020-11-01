<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ParcelRequest extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'track_id', 'shop_id','cous_name', 'cous_phone', 'cous_address', 'invoice_id', 'parcel_weight', 'collect_amount', 'pro_sell_price', 'instruction',
    ];

    protected function location(){
        return $this->belongsTo('App\ParcelLocation','location_id','id');
    }

    protected function shop(){
        return $this->belongsTo('App\Shop','shop_id','id');
    }
}
