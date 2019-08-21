<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = ['id'];
    protected $appends = ['full'];

    public function getFullAttribute()
    {
        return collect([$this->city, $this->area, $this->street, $this->house])
            ->filter()
            ->toArray();
    }
}
