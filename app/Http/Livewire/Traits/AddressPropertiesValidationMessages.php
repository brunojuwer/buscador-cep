<?php

declare(strict_types = 1);

namespace App\Http\Livewire\Traits;

trait AddressPropertiesValidationMessages 
{
    protected array $messages = [
      'data.zipcode.required' => 'O campo CEP é obrigatório.',
      'data.zipcode.max:9' => 'O CEP deve conter no máximo 8 caracteres.',
      'data.zipcode.min:8' => 'O CEP deve conter no mínimo 8 caracteres',
      'data.street.required' => 'O campo RUA é obrigatório.',
      'data.neighborhood.required' => 'O campo BAIRRO é obrigatório.',
      'data.city.required' => 'O campo CIDADE é obrigatório.',
      'data.state.required' => 'O campo ESTADO é obrigatório.',
      'data.state.max:2' => 'O campo ESTADO deve ter no máximo 2 caracteres',
    ];
}