<?php

namespace App\Models;

use App\Traits\Multilingual;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory, Multilingual;

    protected $guarded = ['id'];

    /**
     * @return string
     */
    public function getFile()
    {
        return app('filesystem')->url($this->file);
    }
}
