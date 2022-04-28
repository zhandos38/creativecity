<?php

namespace App\Models;

use App\Traits\Multilingual;
use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

/**
 * Class Contact
 * @package App\Models
 *
 * @property int $id
 * @property string $contact
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @mixin Eloquent
 * @mixin Builder
 */

class Contact extends Model
{
    use HasFactory, Multilingual;

    const TYPE_PHONE = 'phone';
    const TYPE_EMAIL = 'email';
    const TYPE_ADDRESS = 'address';
    const TYPE_INSTAGRAM = 'instagram';
    const TYPE_FB = 'fb';
    const TYPE_VK = 'vk';
    const TYPE_WHATSAPP = 'whatsapp';
    const TYPE_CABINET = 'cabinet';
    const TYPE_TEXT = 'text';
    const TYPE_PRESENTATION = 'presentation';

    protected $fillable = ['content_ru', 'content_kz', 'content_en', 'type'];

    /**
     * @return mixed|null
     */
    public function getTypeTitleAttribute()
    {
        return array_key_exists($this->type, static::types())
            ? static::types()[$this->type]
            : null;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return isset(self::types()[$this->type]) ? self::types()[$this->type] : null;
    }

    /**
     * @param $type
     * @param $content
     * @return mixed
     */
    public static function exists($type, $content)
    {
        return self::where(['type' => $type, 'content' => $content])->exists();
    }

    /**
     * @return Collection
     */
    public static function getAllGroupByType(){
        return self::get()->groupBy('type');
    }

    /**
     * @return array
     */
    public static function types()
    {
        return [
            null => 'Выберите тип',
            static::TYPE_PHONE => 'Телефон',
            static::TYPE_EMAIL => 'Электронная почта',
            static::TYPE_ADDRESS => 'Адрес',
            static::TYPE_INSTAGRAM => 'Instagram',
            static::TYPE_FB => 'Facebook',
            static::TYPE_VK => 'Vk',
            static::TYPE_WHATSAPP => 'Whatsapp',
            static::TYPE_CABINET => 'Личный Кабинет',
            static::TYPE_TEXT => 'Бегущая строка',
            static::TYPE_PRESENTATION => 'Презентация',
        ];
    }

    /**
     * @return string
     */
    public static function getFile($url)
    {
        return app('filesystem')->url($url);
    }
}
