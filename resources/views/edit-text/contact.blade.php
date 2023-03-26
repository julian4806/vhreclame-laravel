<x-app-layout>
    @include('layouts.navigation-pages')
    <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8 w-4/5 mx-auto">
        <table class="w-full text-sm text-left text-gray-400">
            <div class="flex gap-4">
                <button class="bg-gray-800 text-gray-400 p-2">Home</button>
                <button class="bg-gray-800 text-gray-400 p-2">Over</button>
                <button class="bg-gray-800 text-white p-2">Contact</button>
            </div>
            {{-- <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Text
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Onderdeel
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <textarea class="p-2" class="w-full" cols="60" rows="5"></textarea>
                    </th>
                    <td class="px-6 py-4">
                        Card
                    </td>
                    <td class="px-6 py-4">
                        Header
                    </td>
                </tr>
            </tbody>
        </table>
        <button
            class="bg-red-500 text-white text-center p-2 mb-6 select-none cursor-pointer  
        hover:bg-red-700 
        active:bg-red-900
        font-bold
        uppercase
        w-1/3
        ">Sla
            aangepaste teksten op</button>
    </div> --}}
</x-app-layout>
