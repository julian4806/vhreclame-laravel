<x-layout>
    {{-- header --}}
    <div class="flex bg-slate-700 relative">
        <img src="{{ asset('assets/img/home/' . $data[0]->image) }}" class="background-image">
        <div class="z-10 w-full">
            <div class="container mx-auto">
                <div class="p-12 md:w-3/4 mx-auto text-center text-white">
                    <h2 class="font-bold text-5xl">{{ $data[0]->header }}</h2>
                    <p class="text-sm mt-3 mb-6">{{ $data[0]->body }}</p>
                    <a href="/over-ons" class="button">lees meer</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Kenmerken van het bedrijf --}}
    <div class="container mx-auto">
        <div class="p-6 md:w-3/4 mx-auto text-center">
            <h2 class="font-bold text-2xl">{{ $data[1]->header }}</h2>
            <p class="mt-6 mb-6">{{ $data[1]->body }}</p>
            <a href="/over-ons" class="button">lees meer</a>
        </div>
    </div>

    {{-- recent projects --}}
    <x-recent-projects-slider :slider="$slider"></x-recent-projects-slider>
</x-layout>
