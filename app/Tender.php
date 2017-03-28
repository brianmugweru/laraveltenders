<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
  /**
   * The Users that have bids to tenders
   */
    public function users()
    {
        return $this->belongsToMany('App\Tender');
    }
}
