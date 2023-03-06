<x-layout>
    <x-slot:title>VH - Gallerij</x-slot>
    {{-- header --}}
    <x-hero>Gallerij</x-hero>

    {{-- recent projects --}}
    <div class="flex items-center justify-center p-6">
        <div class="w-full h-full p-2 bg-slate-400 flex flex-col items-center gap-4">
            <div class="flex w-full p-6">
                <div class="flex-1">
                    <select name="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="text-xl">Projecten</div>
                <div class="flex-1"></div>
            </div>
            <div class="grid grid-cols-4 px-6 gap-6">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
                <img src="{{ asset('assets/img/example.jpeg') }}" class="h-full">
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
</x-layout>
