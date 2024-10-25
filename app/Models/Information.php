<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string|null $logo_link
 * @property string|null $site_name
 * @property string|null $email
 * @property string|null $address
 * @property string|null $phone_number
 * @property string|null $phone_number_2
 * @property string|null $zalo_number
 * @property string|null $whatsapp_number
 * @property string|null $hotline_number
 * @property string|null $introduce
 * @property string|null $google_map_link
 * @property string|null $seo_thumb
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $tour_include_exclude
 * @property string|null $tour_policy
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Information newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Information newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Information query()
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereGoogleMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereHotlineNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereIntroduce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereLogoLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information wherePhoneNumber2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereSeoThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereSiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereTourIncludeExclude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereTourPolicy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereWhatsappNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Information whereZaloNumber($value)
 * @mixin Eloquent
 */
class Information extends Model
{
    protected $table = "information";
}
