<?php

namespace Webkul\Attribute\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeTranslation extends Model
{
    public $timestamps = true;

    protected $fillable = ['name'];
} 