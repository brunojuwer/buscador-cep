<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use App\Actions\AddressFindPropertiesAction;
use App\Actions\AddressStoreAction;
use App\Http\Livewire\Traits\AddressPropertiesValidationMessages;
use App\Http\Livewire\Traits\AddressPropertiesValidationRules;
use App\Models\Address;
use App\Services\ViacepService;
use Exception;
use Livewire\Component;
use WireUi\Traits\Actions;

class SearchZipcode extends Component
{

    use Actions;
    use AddressPropertiesValidationMessages;
    use AddressPropertiesValidationRules;

    public array $data = [];

    public array $addresses = [];

    public function updated(string $key, string $value): void 
    {
        $this->validateOnly('data.zipcode');
        if($key === 'data.zipcode') {
            try {
                $this->data = ViacepService::handle($value);
            } catch(Exception $ex) {
                $this->showNotification("Erro", $ex->getMessage(), true);
            }
        }
    }

    public function save() :void
    {
        $this->validate();
        AddressStoreAction::save($this->data);
        $this->resetExcept('addresses');
        $this->showNotification("Salvamento", "Endereço foi salvo com sucesso!", false);
    }
 
    public function edit(string $id): void
    {
        $this->data = AddressFindPropertiesAction::find($id);
    }

    public function remove(string $id): void 
    {
        $address = Address::find($id);
        $address?->delete();
        $this->showNotification("Remoção", "Endereço foi removido com sucesso!", false);
    }

    private function showNotification(string $title, string $message, bool $isError): void
    {
        if($isError) {
            $this->notification()->error($title, $message);
            return;
        }
        $this->render();
        $this->notification()->success($title, $message);
    }

    public function mount(): void
    {
        $this->data = [
            'zipcode' => '',
            'street' => '',
            'neighborhood' => '',
            'city' => '',
            'state' => '',
        ];
    }

    public function render()
    {
        $this->addresses = Address::all()->toArray();
        return view('livewire.search-zipcode');
    }
} 