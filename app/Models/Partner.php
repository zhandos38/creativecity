<?php

namespace App\Models;

use App\Traits\Multilingual;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory, Multilingual;

    protected $guarded = ['id'];

    /**
     * @return string
     */
    public function getImage()
    {
        return app('filesystem')->url($this->image);
    }
}
