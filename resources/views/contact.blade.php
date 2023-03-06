<x-layout>
    <x-slot:title>VH - Contact</x-slot>
    {{-- header --}}
    <x-hero>Contact</x-hero>

    <div class="h-60 flex bg-slate-700">
        <div class="w-full p-6 flex justify-center">
            <div class="bg-slate-50 h-full max-w-md w-full p-2 rounded-md">Lorem ipsum dolor sit, amet consectetur
                adipisicing elit. Minima voluptates debitis soluta dolorem, eos iusto nam voluptate autem nemo nobis.
            </div>
        </div>
        <div class="w-full">s</div>
    </div>

    {{-- recent projects --}}
    <div class="h-80 flex items-center justify-center p-6">
        <div class="w-full h-full p-2 bg-slate-400 flex flex-col items-center gap-4">
            <div class="text-center">Recente Projecten</div>
            <div>
                <button class="button">sss</button>
                <button class="button">sss</button>
                <button class="button">sss</button>
                <button class="button">sss</button>
            </div>
            <div class="h-20 flex gap-2">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
            </div>
            <div class="bg-slate-200 p-2">
                <button class="p-2 bg-slate-50">terug</button>
                <button>pagina 2</button>
                <button class="p-2 bg-slate-50">verder</button>
            </div>
        </div>
    </div>

    {{-- Kenmerken van het bedrijf --}}
    <div class="p-6">
        <h2 class="font-bold text-2xl">hallo</h2>
        <p class="mt-6 mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde qui odio veritatis accusamus
            ea officia
            beatae, dolores sapiente suscipit ipsa autem aut tempore ab laborum perferendis amet! Nam, qui repellat, vel
            molestias adipisci ab nisi minima beatae quidem, officiis rerum.ab nisi minima beatae quidem, officiis
            rerum.ab nisi minima beatae quidem, officiis rerum.ab nisi minima beatae quidem, officiis rerum.ab nisi
            minima beatae quidem, officiis rerum.</p>
        <button class="button">Lees meer</button>
    </div>

    {{-- recent projects --}}
    <div class="flex items-center justify-center p-6">
        <div class="w-full h-full p-6 bg-slate-400 flex flex-col items-center gap-4">
            <div class="text-center">Recente Projecten</div>
            <div class="h-20 flex gap-2">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
            </div>
        </div>
    </div>
</x-layout>
