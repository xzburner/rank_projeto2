<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{


    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['titulo', 'texto'];

    /**
     * get Created_at para formatar na data brasileira
     *
     */
    public function getCreatedAtAttribute($value)
    {
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }


}
