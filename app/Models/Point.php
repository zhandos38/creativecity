<?php

namespace App\Models;

use App\Traits\Multilingual;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User
 *
 * @property int $id
 * @property int $direction
 * @property int $format
 * @property string $width
 * @property string $height
 * @mixin \Eloquent
 */
class Point extends Model
{
    use HasFactory, Multilingual;

    const DIRECTION_NORTH = 0;
    const DIRECTION_SOUTH = 1;
    const DIRECTION_WEST = 2;
    const DIRECTION_EAST = 3;
    const DIRECTION_NORTH_EAST = 4;
    const DIRECTION_NORTH_WEST = 5;
    const DIRECTION_SOUTH_EAST = 6;
    const DIRECTION_SOUTH_WEST = 7;

    const FORMAT_BILLBOARD = 0;
    const FORMAT_CITYBOARD = 1;
    const FORMAT_LED = 2;

    protected $guarded = ['id'];

    /**
     * @return string
     */
    public function getImage()
    {
        return app('filesystem')->url($this->image);
    }

    /**
     * @return mixed|null
     */
    public function getDirectionTitleAttribute()
    {
        return array_key_exists($this->direction, static::directions())
            ? static::directions()[$this->direction]
            : null;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return self::directions()[$this->direction] ?? null;
    }

    /**
     * @return array
     */
    public static function directions(): array
    {
        return [
            null => 'Выберите тип',
            static::DIRECTION_NORTH => 'Север',
            static::DIRECTION_SOUTH => 'Юг',
            static::DIRECTION_WEST => 'Запад',
            static::DIRECTION_EAST => 'Восток',
            static::DIRECTION_NORTH_EAST => 'Северо-восток',
            static::DIRECTION_NORTH_WEST => 'Северо-запад',
            static::DIRECTION_SOUTH_EAST => 'Юго-восток',
            static::DIRECTION_SOUTH_WEST => 'Юго-запад',
        ];
    }

    /**
     * @return mixed|null
     */
    public function getFormatTitleAttribute()
    {
        return array_key_exists($this->format, static::formats())
            ? static::formats()[$this->format]
            : null;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return self::formats()[$this->format] ?? null;
    }

    /**
     * @return array
     */
    public static function formats(): array
    {
        return [
            null => 'Выберите тип',
            static::FORMAT_BILLBOARD => 'Биллборд',
            static::FORMAT_CITYBOARD => 'Ситиборд',
            static::FORMAT_LED => 'LED',
        ];
    }
}
