<?php

declare(strict_types = 1);

namespace App\Http\Livewire\Traits;

trait AddressPropertiesValidationRules 
{
  protected array $rules = [
    'data.zipcode' => ['required', 'min:8', 'max:9'],
    'data.street' => ['required'],
    'data.neighborhood' => ['required'],
    'data.city' => ['required'],
    'data.state' => ['required', 'max:2'],
];
}