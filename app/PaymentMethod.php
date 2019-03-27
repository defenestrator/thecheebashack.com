<?php

namespace Heisen;

use Illuminate\Database\Eloquent\Model;

/**
 * Heisen\PaymentMethod
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $active
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod whereName($value)
 * @mixin \Eloquent
 * @property string|null $uuid
 * @property string|null $notes
 * @property string|null $account
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Heisen\PaymentMethod whereUuid($value)
 */
class PaymentMethod extends Model
{
    protected $fillable = [
        'name',
        'account',
        'uuid',
        'notes',
        'active',
        'image'
    ];
}
