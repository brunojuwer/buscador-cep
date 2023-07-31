<div>
    <form class="p-8 bg-gray-100 rounded-md w-1/2 mx-auto max-w-xl flex flex-col gap-4">
        <h1 class="text-3xl">Buscador de cep!</h1>
        <div class="flex flex-col">
            <label class="text-base" for="zipcode">CEP</label>
            <input class="border" type="text" id="zipcode" wire:model.lazy="zipcode" />
        </div>
        <div class="flex flex-col">
            <label for="street">Rua</label>
            <input class="border" type="text" id="street" wire:model="street" />
        </div>
        <div class="flex flex-col">
            <label for="neighborhood">Bairro</label>
            <input class="border" type="text" id="neighborhood" wire:model="neighborhood" />
        </div>
        <div class="flex flex-col">
            <label for="city">Cidade</label>
            <input class="border" type="text" id="city" wire:model="city" />
        </div>
        <div class="flex flex-col">
            <label for="state">Estado</label>
            <input class="border" type="text" id="state" wire:model="state" />
        </div>
        <div class="flex justify-center">
            <button 
                class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" 
                type="button" 
                wire:click="search"
            >Buscar</button>
        </div>
    </form>
</div>
