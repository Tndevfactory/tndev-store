<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Paiment
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PaimentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Paiment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paiment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paiment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Paiment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paiment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paiment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Paiment extends Model
{
    use HasFactory;
}
