<div>
    <x-notifications />
    <form class="p-8 bg-gray-100 rounded-md w-1/2 mx-auto max-w-xl flex flex-col gap-4">
        <h1 class="text-3xl">Buscador de cep!</h1>
        <div class="flex flex-col">
            <label class="text-base" for="zipcode">CEP</label>
            <input class="border rounded-md" type="text" id="zipcode" wire:model.lazy="data.zipcode" />
            @error('data.zipcode')
                <span class="text-red-500">{{ $message }}</span>
            @enderror()
        </div>
        <div class="flex flex-col">
            <label for="street">Rua</label>
            <input class="border rounded-md" type="text" id="street" wire:model="data.street" />
            @error('data.street')
                <span class="text-red-500">{{ $message }}</span>
            @enderror()
        </div>
        <div class="flex flex-col">
            <label for="neighborhood">Bairro</label>
            <input class="border rounded-md" type="text" id="neighborhood" wire:model="data.neighborhood" />
            @error('data.neighborhood')
                <span class="text-red-500">{{ $message }}</span>
            @enderror()
        </div>
        <div class="flex flex-col">
            <label for="city">Cidade</label>
            <input class="border rounded-md" type="text" id="city" wire:model="data.city" />
            @error('data.city')
                <span class="text-red-500">{{ $message }}</span>
            @enderror()
        </div>
        <div class="flex flex-col">
            <label for="state">Estado</label>
            <input class="border rounded-md" type="text" id="state" wire:model="data.state" />
            @error('data.state')
                <span class="text-red-500">{{ $message }}</span>
            @enderror()
        </div>
        <div class="flex justify-center">
            <button 
                class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" 
                type="button" 
                wire:click="save"
            >
                Salvar
            </button>
        </div>
    </form>
    <table class="p-8 bg-gray-200 rounded-md w-1/2 mx-auto max-w-3xl mt-3">
        <thead>
            <tr>
                <th class="text-start p-1">CEP</th>
                <th class="text-start p-1">Rua</th>
                <th class="text-start p-1">Bairro</th>
                <th class="text-start p-1">Cidade</th>
                <th class="text-start p-1">Estado</th>
                <th class="text-start p-1">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($addresses as $address)
                <tr>
                    <th class="text-start p-1">{{ $address['zipcode'] }}</th>
                    <td class="text-start p-1">{{ $address['street'] }}</td>
                    <td class="text-start p-1">{{ $address['neighborhood'] }}</td>
                    <td class="text-start p-1">{{ $address['city'] }}</td>
                    <td class="text-start p-1">{{ $address['state'] }}</td>
                    <td class="text-start p-1">
                        <button wire:click="remove({{ $address['id'] }})" type="button" class="text-red-500 cursor-pointer">Excluir</button>
                        <button wire:click="edit({{ $address['id'] }})" type="button" class="text-blue-500">Editar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
