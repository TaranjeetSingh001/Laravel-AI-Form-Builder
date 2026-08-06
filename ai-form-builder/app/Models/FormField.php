<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $fillable = [
    'form_id',
    'label',
    'name',
    'type',
    'placeholder',
    'default_value',
    'help_text',
    'is_required',
    'validation_rules',
    'sort_order'
];

protected function casts(): array
{
    return [
        'is_required' => 'boolean',
    ];
}

public function form()
{
    return $this->belongsTo(Form::class);
}

public function options()
{
    return $this->hasMany(FieldOption::class, 'field_id');
}

public function answers()
{
    return $this->hasMany(ResponseAnswer::class, 'field_id');
}
}
