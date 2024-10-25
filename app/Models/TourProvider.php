<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $thumb
 * @property string|null $phone_number
 * @property string|null $email
 * @property string|null $address
 * @property string|null $hotline
 * @property string|null $facebook
 * @property string|null $zalo
 * @property string|null $website
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereHotline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourProvider whereZalo($value)
 * @mixin \Eloquent
 */
class TourProvider extends Model
{
    use HasFactory;
}
