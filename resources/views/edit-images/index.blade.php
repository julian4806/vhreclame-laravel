<x-app-layout>
    <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8 w-3/4 mx-auto">
        {{-- Gallerij --}}
        <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8">
            <table class="w-full text-sm text-left text-gray-400">
                <div class="flex items-center">
                    <label for="">Verander hier de folder:&nbsp;&nbsp;</label>
                    <select name="" id="">
                        <option value="">/banners vlaggen</option>
                        <option value="">/andere folder</option>
                    </select>
                    <div class="flex gap-4">
                        <button class="bg-red-500 text-white px-2">selecter folder</button>
                        <div class="flex">
                            <input type="text" name="" id="">
                            <button class="bg-red-500 text-white px-2">voeg nieuwe folder toe</button>
                        </div>
                        <button class="bg-red-500 text-white px-2">verwijder folder <span
                                class="font-bold italic text-blue-200">(banners vlaggen)</span></button>
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
                                wanneer er een folder naam wordt ingevuld die nog niet bestaat wordt deze
                                automatisch
                                aangemaakt, wanneer een folder leeg is wordt deze automatisch verwijderd
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Laat bij "Recente Projecten" zien?
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
                            <input type="checkbox" name="" id="">
                            <button
                                class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer  
                    hover:bg-red-700 
                    active:bg-red-900
                    font-bold
                    uppercase
                    ">pas
                                toe</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-slate-300 my-8 p-6">
            <div class="bg-black text-white text-center p-1 mb-6 select-none font-bold uppercase">Foto's die nu in
                "Recente Projecten" te zien zijn</div>
            <div class="overflow-x-auto py-3 gap-4 flex ">
                <div class="relative">
                    <img src="{{ asset('assets/img/1.jpg') }}" class="h-20" alt="">
                    <input type="checkbox" class="absolute top-0 right-0 translate-x-1/2 translate-y-[-50%]">
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/img/1.jpg') }}" class="h-20" alt="">
                    <input type="checkbox" class="absolute top-0 right-0 translate-x-1/2 translate-y-[-50%]">
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/img/1.jpg') }}" class="h-20" alt="">
                    <input type="checkbox" class="absolute top-0 right-0 translate-x-1/2 translate-y-[-50%]">
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/img/1.jpg') }}" class="h-20" alt="">
                    <input type="checkbox" class="absolute top-0 right-0 translate-x-1/2 translate-y-[-50%]">
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/img/1.jpg') }}" class="h-20" alt="">
                    <input type="checkbox" class="absolute top-0 right-0 translate-x-1/2 translate-y-[-50%]">
                </div>
            </div>
            <button
                class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer hover:bg-red-700 active:bg-red-900 font-bold uppercase">verwijder
                uit "Recente Projecten"</button>
        </div>
    </div>
</x-app-layout>
