<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CallRequest
 *
 * @property int $id
 * @property string|null $name
 * @property string $phone
 * @property string|null $email
 * @property int $status_id
 * @property string|null $form
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|CallRequest whereForm($value)
 */
class CallRequest extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_NEW = 1;
    const STATUS_CALL = 2;
    const STATUS_MEETING = 3;
    const STATUS_IN_PAYMENT = 4;
    const STATUS_IN_WORK = 5;
    const STATUS_IN_CLOSED = 6;
    const STATUS_IN_SUCCESS = 7;

    /**
     * @return string[]
     */
    public static function statuses()
    {
        $data = [
            self::STATUS_NEW => 'Новый',
            self::STATUS_CALL => 'Звонок',
            self::STATUS_MEETING => 'Встреча',
            self::STATUS_IN_PAYMENT => 'Оплата',
            self::STATUS_IN_WORK => 'В работе',
            self::STATUS_IN_CLOSED => 'Закрыт и не реализован',
            self::STATUS_IN_SUCCESS => 'Успешно реализован',
        ];

        return $data;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return self::statuses()[$this->status_id];
    }

    public function point(){
        return $this->belongsTo(Point::class);
    }
}
