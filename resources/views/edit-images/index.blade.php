<x-app-layout>
    <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8 w-3/4 mx-auto"> {{-- Gallerij --}}
        <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8">
            <table class="w-full text-sm text-left text-gray-400">
                <div class="flex items-center">
                    <form action="/edit-images/fetch_images" method="GET"> @csrf <label for="">Verander hier de
                            folder:&nbsp;&nbsp;</label> <select name="change_folder" onchange="this.form.submit()">
                            @foreach ($allFolders as $folder)
                                @if ($folder === $selectedFolder)
                                    <option value="{{ $selectedFolder }}" selected>/{{ $selectedFolder }}</option>
                                @else
                                    <option value="{{ $folder }}">/{{ $folder }}</option>
                                @endif
                            @endforeach
                        </select> </form>
                    <form action="/edit-images/add_folder" class="ml-4 flex items-center"> <label for="">voeg
                            hier een nieuwe folder toe:</label> <input type="text" name="folderToAdd" required>
                        <button class="bg-red-500 text-white px-2">voeg folder toe</button>
                    </form>
                    <form action="/edit-images/delete_folder" class="ml-4 flex items-center"> <input type="text"
                            name="folderToDelete" value="{{ $selectedFolder }}" class="hidden"> <button
                            class="bg-red-500 text-white px-2 ml-4">verwijder folder <span
                                class="font-bold italic text-blue-200">({{ $selectedFolder }})</span> </button> </form>
                </div>
                {{-- upload images --}}
                <form method="POST" action="/edit-images/upload_images" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Upload foto's naar de geselecteerde folder: </label>
                        <input type="file" name="images[]" multiple>
                        <input type="text" name="selectedFolder" value="{{ $selectedFolder }}" readonly hidden>
                        <button
                            class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer hover:bg-red-700 active:bg-red-900 font-bold uppercase "
                            type="submit">upload</button>
                    </div>
                </form>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3"> Text </th>
                        <th scope="col" class="px-6 py-3"> Foto-naam <i>(vul geen bestands-extentie in)</i> </th>
                        <th scope="col" class="px-6 py-3"> Laat bij "Recente Projecten" zien? </th>
                        <th scope="col" class="px-6 py-3"> Verwijder </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $imageFull)
                        @php
                            $imgName = pathinfo($imageFull, PATHINFO_FILENAME);
                            $imgExt = '.' . pathinfo($imageFull, PATHINFO_EXTENSION);
                        @endphp <tr class="border-b bg-gray-800">
                            <th scope="row" class="px-6 py-4 h-60 text-gray-900 whitespace-nowrap"> <img
                                    src="{{ asset('assets/img/foto_gallerij/' . $selectedFolder . '/' . $imgName . $imgExt) }}"
                                    class="h-full object-contain" alt=""> </th>
                            <td class="px-6 py-4 font-medium text-gray-900">
                                <form action="/edit-images/change_image_name" method="POST">
                                    @csrf

                                    {{-- folder image is in --}}
                                    <input type="text" name="selectedFolder" value="{{ $selectedFolder }}" readonly
                                        hidden>
                                    {{-- old image name --}}
                                    <input type="text" name="oldImageName" value="{{ $imgName }}" readonly
                                        hidden>
                                    {{-- get the extension --}}
                                    <input type="text" name="imageExt" value="{{ $imgExt }}" readonly hidden>

                                    <input class="p-2 mb-1" placeholder="{{ $imgName }}" name="newImageName">
                                    <button
                                        class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer hover:bg-red-700 active:bg-red-900 font-bold uppercase ">verander</button>
                                </form>
                            </td> {{-- <td class="px-6 py-4 font-medium text-gray-900"> <select name=""  class="p-2 mb-1"> <option value="">/banners vlaggen</option> <option value="">/andere folder</option> </select><br> <button class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer hover:bg-red-700 active:bg-red-900 font-bold uppercase ">verplaats</button> </td> --}} <td class="px-6 py-4">
                                {{-- SLIDER --}}
                                @php
                                    $fullPath = '/' . $selectedFolder . '/' . $imgName . $imgExt;
                                @endphp
                                @if (!in_array($fullPath, $sliderArray))
                                    <form action="/edit-images/add_to_slider" method="GET">
                                        {{-- folder image is in --}}
                                        <input type="text" name="selectedFolder" value="{{ $selectedFolder }}"
                                            readonly hidden>
                                        {{-- old image name with extension --}}
                                        <input type="text" name="image" value="{{ $imgName . $imgExt }}" readonly
                                            hidden>

                                        <button
                                            class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer hover:bg-red-700 active:bg-red-900 font-bold uppercase ">
                                            voeg toe aan recente projecten slider </button>
                                    </form>
                                @else
                                    <div
                                        class="bg-red-500 text-white text-center p-1 mb-6 select-none hover:bg-red-700 active:bg-red-900 font-bold uppercase ">
                                        FOTO IS AL TOEGEVOEGD AAN SLIDER </div>
                                @endif
                            </td>
                            <td>

                                <form action="/edit-images/delete_image" method="POST">
                                    @csrf

                                    {{-- folder image is in --}}
                                    <input type="text" name="selectedFolder" value="{{ $selectedFolder }}" readonly
                                        hidden>
                                    {{-- old image name with extension --}}
                                    <input type="text" name="image" value="{{ $imgName . $imgExt }}" readonly
                                        hidden>

                                    <button
                                        class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer hover:bg-red-700 active:bg-red-900 font-bold uppercase ">
                                        verwijder </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- recent projects slider --}}
        <form class="bg-slate-300 my-8 p-6" action="/edit-images/remove_from_slider">
            @if ($sliderArray)
                <div class="bg-black text-white text-center p-1 mb-6 select-none font-bold uppercase">Foto's die
                    nu in
                    "Recente Projecten" te zien zijn</div>
                <div class="overflow-x-auto py-3 gap-4 flex ">
                    @foreach ($sliderArray as $photo)
                        <div class="relative">
                            <img src="{{ asset('assets/img/foto_gallerij' . $photo) }}" class="h-20" alt="">
                            <input type="checkbox" class="absolute top-0 right-0 translate-x-1/2 translate-y-[-50%]"
                                name="deleteFromSlider[]" value="{{ $photo }}">
                        </div>
                    @endforeach
                </div>

                {{-- meesturen zodat PHP 'm kan lezen --}}
                <input type="text" name="selectedFolder" value="{{ $selectedFolder }}" readonly hidden>

                <button
                    class="bg-red-500 text-white text-center p-1 mb-6 select-none cursor-pointer hover:bg-red-700 active:bg-red-900 font-bold uppercase">verwijder
                    uit "Recente Projecten"
                </button>
            @endif
        </form>
    </div>
</x-app-layout>
