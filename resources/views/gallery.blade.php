<x-layout>
    <x-slot:title>VH - Gallerij</x-slot>
        {{-- header --}}
        <x-hero>Gallerij</x-hero>

        {{-- recent projects --}}
        <div class="flex items-center justify-center p-6">
            {{-- container --}}
            <div class="w-full h-full p-2 bg-slate-200 flex flex-col items-center gap-4 rounded-md">
                {{-- header --}}
                <div class="flex justify-between w-full bg-slate-400 items-center p-2 rounded-xl">
                    <div class="flex-1">
                        <select class="rounded-md">
                            <option value="">Banners Vlaggen</option>
                            <option value="">Vlaggen</option>
                            <option value="">Freesletters</option>
                            <option value="">Lijsten</option>
                        </select>
                    </div>
                    <h2 class="text-xl p-2 bg-white rounded-2xl">Banners Vlaggen</h2>
                    <div class="flex-1"></div>
                </div>
                <div id="mygallery">
                    <a href="{{ asset('assets/img/1.jpg') }}">
                        <img alt="Title 1" src="{{ asset('assets/img/1.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/2.jpg') }}">
                        <img alt="Title 2" src="{{ asset('assets/img/2.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/3.jpg') }}">
                        <img alt="Title 3" src="{{ asset('assets/img/3.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/4.jpg') }}">
                        <img alt="Title 4" src="{{ asset('assets/img/4.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/6.jpg') }}">
                        <img alt="Title 6" src="{{ asset('assets/img/6.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/5.jpg') }}">
                        <img alt="Title 5" src="{{ asset('assets/img/5.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/6.jpg') }}">
                        <img alt="Title 6" src="{{ asset('assets/img/6.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/1.jpg') }}">
                        <img alt="Title 1" src="{{ asset('assets/img/1.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/1.jpg') }}">
                        <img alt="Title 1" src="{{ asset('assets/img/1.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/2.jpg') }}">
                        <img alt="Title 2" src="{{ asset('assets/img/2.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/3.jpg') }}">
                        <img alt="Title 3" src="{{ asset('assets/img/3.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/4.jpg') }}">
                        <img alt="Title 4" src="{{ asset('assets/img/4.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/5.jpg') }}">
                        <img alt="Title 5" src="{{ asset('assets/img/5.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/6.jpg') }}">
                        <img alt="Title 6" src="{{ asset('assets/img/6.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/1.jpg') }}">
                        <img alt="Title 1" src="{{ asset('assets/img/1.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/2.jpg') }}">
                        <img alt="Title 2" src="{{ asset('assets/img/2.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/3.jpg') }}">
                        <img alt="Title 3" src="{{ asset('assets/img/3.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/4.jpg') }}">
                        <img alt="Title 4" src="{{ asset('assets/img/4.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/5.jpg') }}">
                        <img alt="Title 5" src="{{ asset('assets/img/5.jpg') }}" class="rounded-md" />
                    </a>
                    <a href="{{ asset('assets/img/6.jpg') }}">
                        <img alt="Title 6" src="{{ asset('assets/img/6.jpg') }}" class="rounded-md" />
                    </a>
                    <!-- other images... -->
                </div>
            </div>
        </div>


</x-layout>
