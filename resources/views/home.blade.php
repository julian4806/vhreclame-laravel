<x-layout>
    {{-- header --}}
    <div class="flex bg-slate-700">
        <div class="w-full p-6 flex justify-center items-center">
            <div class="bg-slate-50 max-w-md w-full rounded-md flex flex-col gap-8 p-4">
                @foreach ($paragraphs as $paragraph)
                    @if ($loop->index == 0)
                        <h2 class="text-2xl text-block">{{ $paragraph->title }}</h2>
                        <p class="text-block">
                            {!! nl2br(e($paragraph->paragraph)) !!}
                        </p>
                        <div>
                            <button class="button">E-mail</button>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="w-full"></div>
    </div>

    {{-- Kenmerken van het bedrijf --}}
    <div class="p-6">
        <h2 class="font-bold text-2xl text-block">hallo</h2>
        <p class="mt-6 mb-6 text-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde qui odio veritatis accusamus
            ea officia
            beatae, dolores sapiente suscipit ipsa autem aut tempore ab laborum perferendis amet! Nam, qui repellat, vel
            molestias adipisci ab nisi minima beatae quidem, officiis rerum.ab nisi minima beatae quidem, officiis
            rerum.ab nisi minima beatae quidem, officiis rerum.ab nisi minima beatae quidem, officiis rerum.ab nisi
            minima beatae quidem, officiis rerum.</p>
        <button class="button">Lees meer</button>
    </div>

    {{-- recent projects --}}
    <x-recent-projects-slider></x-recent-projects-slider>
</x-layout>
