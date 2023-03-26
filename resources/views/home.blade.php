<x-layout>
    {{-- header --}}
    <div class="flex bg-slate-700">
        <div class="w-full p-6 flex justify-center items-center">
            <div class="bg-slate-50 max-w-md w-full rounded-md flex flex-col gap-8 p-4">
                <h2 class="text-2xl text-block">{{ $pars[0]->title }}</h2>
                <p class="text-block">
                    {!! nl2br(e($pars[0]->paragraph)) !!}
                </p>
                <div>
                    <button class="button">E-mail</button>
                </div>
            </div>
        </div>
        <div class="w-full"></div>
    </div>

    {{-- Kenmerken van het bedrijf --}}
    <div class="p-6 w-3/4 mx-auto">
        <h2 class="font-bold text-2xl text-block">{{ $pars[1]->title }}</h2>
        <p class="mt-6 mb-6 text-block">{{ $pars[1]->paragraph }}</p>
        <a href="/over-ons" class="button">lees meer</a>
    </div>

    {{-- recent projects --}}
    <x-recent-projects-slider></x-recent-projects-slider>
</x-layout>
