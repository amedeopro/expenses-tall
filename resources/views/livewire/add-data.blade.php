<div>
    <form wire:submit.prevent="submit">
        <div class="mb-6 flex flex-row justify-center">
            <div class="basis-1/4">
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Importo</label>
                <input wire:model="amount" type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('amount') <span class="error text-white">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-6 flex flex-row justify-center">
            <div class="basis-1/4">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Categoria</label>
                <select wire:model="categoryid" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value=""></option>
                    @forelse($categories as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @empty
                        <option>Non ci sono categorie</option>
                    @endforelse
                </select>
                @error('categoryid') <span class="error text-white">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mb-6 flex flex-row justify-center">
            <div class="basis-1/4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Note</label>
                <textarea wire:model="note" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aggiungi una nota..."></textarea>
                @error('note') <span class="error text-white">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-6 flex flex-row justify-center">
            <div class="basis-1/4 flex justify-center">
                <button type="submit" style="width: 100%;" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Aggiungi</button>
            </div>
        </div>
    </form>

</div>
