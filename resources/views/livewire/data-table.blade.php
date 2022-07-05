<div>
    {{--@php
        dump($expenses);
    @endphp--}}
    <div class="mb-6 flex flex-row justify-center">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Importo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data
                    </th>
                    <th scope="col" class="px-6 py-3 text-right">
                        Azioni
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($expenses as $row)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        € {{$row->amount}}
                    </th>
                    <td class="px-6 py-4">
                        {{$row->category->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row->updated_at}}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <ion-icon name="create-outline" class="mr-2"></ion-icon>
                        <ion-icon name="close" class="text-red-700"></ion-icon>
                    </td>
                </tr>
                @empty
                    <p>Nessun risultato</p>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
