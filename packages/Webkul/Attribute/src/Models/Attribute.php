<?php

namespace Webkul\Attribute\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Attribute\Contracts\Attribute as AttributeContract;

class Attribute extends Model implements AttributeContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'type',
        'name',
        'lookup_type',
        'entity_type',
        'sort_order',
        'validation',
        'is_required',
        'is_unique',
        'quick_add',
        'is_user_defined',
    ];

    /**
     * Get the translated name based on locale
     */
    public function getTranslatedName($locale = null)
    {
        if (!$locale) {
            $locale = app()->getLocale();
        }

        $translation = $this->translations()->where('locale', $locale)->first();

        return $translation ? $translation->name : $this->name;
    }

    /**
     * Get the translations for this attribute
     */
    public function translations()
    {
        return $this->hasMany(AttributeTranslation::class);
    }

    /**
     * Get the options.
     */
    public function options()
    {
        return $this->hasMany(AttributeOptionProxy::modelClass());
    }
}
