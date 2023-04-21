<x-layout>
    {{-- header --}}
    <div class="flex bg-slate-700 relative">
        <img src="{{ asset('assets/img/home/' . $data[0]->image) }}" class="background-image">
        <div class="w-full p-6 flex justify-center items-center z-10">
            <div class="bg-slate-50 max-w-md w-full rounded-md flex flex-col gap-8 p-4">
                <h2 class="text-2xl text-block">{{ $data[0]->header }}</h2>
                <p class="text-block">
                    {!! nl2br(e($data[0]->body)) !!}
                </p>
                <div>
                    <button class="button">E-mail</button>
                </div>
            </div>
        </div>
        <div class="w-full hidden md:block"></div>
    </div>

    {{-- Kenmerken van het bedrijf --}}
    <div class="p-6 md:w-3/4">
        <h2 class="font-bold text-2xl text-block">{{ $data[1]->header }}</h2>
        <p class="mt-6 mb-6 text-block">{{ $data[1]->body }}</p>
        <a href="/over-ons" class="button">lees meer</a>
    </div>

    {{-- recent projects --}}
    <x-recent-projects-slider :slider="$slider"></x-recent-projects-slider>
</x-layout>
