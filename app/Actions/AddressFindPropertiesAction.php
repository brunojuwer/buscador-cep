<?php

declare(strict_types = 1);

namespace App\Actions;

use App\Models\Address;

class AddressFindPropertiesAction
{


  public static function find(string|int $id): array
  {
    return Address::find($id)->toArray();
  }
}