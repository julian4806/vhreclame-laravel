<x-app-layout>
    @include('layouts.navigation-pages')
    <div class="relative overflow-x-auto p-6 flex flex-col gap-4 bg-slate-200 my-8 w-4/5 mx-auto">
        <table class="w-full text-sm text-left text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Header
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Body
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        section
                    </th>
                    <th scope="col" class="px-6 py-3">
                        save
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- foreach --}}
                @foreach ($data as $record)
                    <form method="POST" action="{{ route('edit-gallery.update', $record->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <tr class="border-b text-black bg-gray-800">
                            <td class="px-6 py-4">
                                @if ($record->header)
                                    <input type="text" name="header" value="{{ old('header', $record->header) }}"
                                        required>
                                @else
                                    @include('components.not-available', ['type' => 'header'])
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($record->body)
                                    <textarea class="p-2" class="w-full" name="body" cols="60" rows="5" required>{{ old('body', $record->body) }}</textarea>
                                @else
                                    @include('components.not-available', ['type' => 'body'])
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($record->image)
                                    <div class="flex items-center relative">
                                        <div class="flex flex-col bg-white p-2">
                                            <input type="file" name="image" id="">
                                            <span class="text-red-500">.jpg | files only!</span>
                                        </div>
                                        <img src="{{ asset('assets/img/gallery/' . $record->image) }}"
                                            class="h-20 absolute right-2" alt="">
                                    </div>
                                @else
                                    @include('components.not-available', ['type' => 'image'])
                                @endif
                            </td>
                            <td>
                                <input type="text" name="section" value="{{ $record->section }}" readonly>
                            </td>
                            <td>
                                <button
                                    class="bg-red-500 text-white text-center p-2 mb-6 select-none cursor-pointer  
                                hover:bg-red-700 
                                active:bg-red-900
                                font-bold
                                uppercase
                                ">Sla
                                    op</button>
                            </td>
                        </tr>
                    </form>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('components.insert-alert')
</x-app-layout>
