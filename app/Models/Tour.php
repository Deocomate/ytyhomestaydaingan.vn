<?php

namespace App\Models;

use App\Http\Controllers\Admin\TourImageController;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $duration
 * @property string|null $overview
 * @property string|null $itinerary
 * @property string|null $thumb
 * @property int|null $priority
 * @property float|null $dealer_price
 * @property float|null $retail_price
 * @property string|null $slug
 * @property int $tour_provider_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tour query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereDealerPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereItinerary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereOverview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereRetailPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereTourProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereUpdatedAt($value)
 * @property-read TourProvider $tourProvider
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\District> $districts
 * @property-read int|null $districts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourImage> $tourImages
 * @property-read int|null $tour_images_count
 * @mixin Eloquent
 */
class Tour extends Model
{
    public function tourProvider(): BelongsTo
    {
        return $this->belongsTo(TourProvider::class);
    }

    public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class, 'tour_locations', 'tour_id', 'district_id');
    }

    public function tourImages(): HasMany
    {
        return $this->hasMany(TourImage::class);
    }
}
