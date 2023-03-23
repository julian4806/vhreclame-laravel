<x-layout class="">

    <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8">
        <table class="w-full text-sm text-left text-gray-400">
            <div class="flex gap-4">
                <button class="bg-gray-800 text-gray-400 p-2">Home</button>
                <button class="bg-gray-800 text-white p-2">Over</button>
                <button class="bg-gray-800 text-gray-400 p-2">Contact</button>
            </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
    </div>

    {{-- Gallerij --}}
    <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8">
        <table class="w-full text-sm text-left text-gray-400">
            <div class="bg-gray-800 text-white text-center p-2">Gallerij Foto's</div>
            <div class="flex">
                <label for="">Verander hier de folder: </label>
                <select name="" id="">
                    <option value="">/banners vlaggen</option>
                    <option value="">/andere folder</option>
                </select>
                <div class="flex gap-4">
                    <button class="bg-red-500 text-white px-1">verwijder folder</button>
                    <div class="flex">
                        <input type="text" name="" id="">
                        <button class="bg-red-500 text-white px-1">voeg nieuwe folder toe</button>
                    </div>
                </div>
            </div>
            <div>
                <label for="">Upload foto's naar de geselecteerde folder: </label>
                <input type="file" name="" id="">
            </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Text
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Foto-naam
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Folder-naam
                        <br>
                        <div class="font-light text-[10px] italic w-80">
                            wanneer er een folder naam wordt ingevuld die nog niet bestaat wordt deze automatisch
                            aangemaakt, wanneer een folder leeg is wordt deze automatisch verwijderd
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Onderdeel
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b bg-gray-800">
                    <th scope="row" class="px-6 py-4 h-60 text-gray-900 whitespace-nowrap">
                        <img src="{{ asset('assets/img/1.jpg') }}" class="h-full" alt="">
                    </th>
                    <td class="px-6 py-4 font-medium text-gray-900">
                        <input class="p-2 mb-1" placeholder="foto-naam.jpg"><br>
                        <button
                            class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer  
                hover:bg-red-700 
                active:bg-red-900
                font-bold
                uppercase
                ">verander</button>
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900">
                        <select name="" id="" class="p-2 mb-1">
                            <option value="">/banners vlaggen</option>
                            <option value="">/andere folder</option>
                        </select><br>
                        <button
                            class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer  
                    hover:bg-red-700 
                    active:bg-red-900
                    font-bold
                    uppercase
                    ">verplaats</button>
                    </td>
                    <td class="px-6 py-4">
                        <button class="button"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-layout>
