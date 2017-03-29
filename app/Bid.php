<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
  //
    public function tender()
        {
            return $this->belongsTo('App\Tender', 'tender_id');
        }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
