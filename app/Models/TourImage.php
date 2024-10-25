<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property int $id
 * @property string $link
 * @property int $tour_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TourImage extends Model
{
    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }
}
