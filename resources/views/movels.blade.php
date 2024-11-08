<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Móveis') }}
        </h2>
    </x-slot>
<a href="{{ route('movels.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Adicionar</a>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-28">
        

        <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                @foreach ($movels as $movel)
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID do Móvel
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Nome

                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Categoria

                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Preço

                        </div>
                    </th>
                    <th scope="col" class="px-4 py-3">
                        <div class="flex items-center">
                            Quantidade

                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $movel->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $movel->nome }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $movel->categoria }}
                    </td>
                    <td class="px-6 py-4">
                        R$ {{ number_format($movel->preco, 2, ',', '.') }}
                    </td>
                    <td class="px-4 py-4">
                        {{ $movel->estoque }}
                    </td>
                    <td class="px-4 py-4 text-center">
                        <div class="flex space-x-4 justify-center">
                            <a href="{{ route('movels.edit', ['movel' => $movel->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>

                            <form action="{{ route('movels.destroy', parameters: [$movel->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Deletar</button>
                            </form>
                        </div>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</x-app-layout>