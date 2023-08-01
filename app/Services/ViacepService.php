<?php

declare(strict_types =  1);

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class ViacepService 
{
  public static function handle(string $zipcode) : array
  {
    $response = Http::get("https://viacep.com.br/ws/{$zipcode}/json");

    if($response->status() !== 200) {
      throw new Exception("CEP inexistente", 1);
    }

    $data = $response->json();
    return [
      'zipcode' => $data['cep'],
      'street' => $data['logradouro'],
      'neighborhood'=> $data['bairro'],
      'city' => $data['localidade'],
      'state' => $data['uf'],
    ];
  }
}