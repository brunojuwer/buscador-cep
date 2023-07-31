<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchZipcode extends Component
{


    public string $zipcode = '';
    public string $street= '';
    public string $neighborhood = '';
    public string $city = '';
    public string $state = '';

    public function updatedZipcode(string $value): void 
    {
        dd($value);
    }

    public function render()
    {
        return view('livewire.search-zipcode');
    }
}
 