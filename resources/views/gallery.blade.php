<x-layout>
    <x-slot:title>VH - Gallerij</x-slot>
        {{-- header --}}
        <x-hero :image="'gallery/' . $data[0]->image">Gallerij</x-hero>


        {{-- recent projects --}}
        <div class="flex items-center justify-center p-6 container mx-auto">
            {{-- container --}}
            <div class="w-full h-full p-2 bg-slate-200 flex flex-col items-center gap-4 rounded-md">
                {{-- header --}}
                <div class="flex justify-between w-full bg-slate-400 items-center p-2 rounded-xl">
                    <div class="flex-1">
                        <form action="/fetch_images" method="GET">
                            @csrf
                            <select name="selected_category" class="rounded-md" onchange="this.form.submit()">

                                @foreach ($categories as $cat)
                                    @if ($cat === $selected_category)
                                        <option value="{{ $selected_category }}" selected>{{ $selected_category }}
                                        </option>
                                    @else
                                        <option value="{{ $cat }}">{{ $cat }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <h2 class="text-xl p-2 bg-white rounded-2xl font-bold">{{ $selected_category }}</h2>
                    <div class="flex-1"></div>
                </div>
                <div id="mygallery">

                    @foreach ($images as $image)
                        <a
                            href="{{ asset('assets/img/foto_gallerij/' . $selected_category . '/' . basename($image)) }}">
                            <img alt="{{ pathinfo($image, PATHINFO_FILENAME) }}"
                                src="{{ asset('assets/img/foto_gallerij/' . $selected_category . '/' . basename($image)) }}"
                                class="rounded-md" />
                        </a>
                    @endforeach
                    <!-- other images... -->
                </div>
            </div>
        </div>


</x-layout>
