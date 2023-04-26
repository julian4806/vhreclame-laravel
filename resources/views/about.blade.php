<x-layout>
    <x-slot:title>VH - Over Ons</x-slot>
        {{-- header --}}
        <x-hero :image="'about/' . $data[0]->image">Over Ons</x-hero>

        {{-- hero --}}
        <div class="container mx-auto p-6 md:flex gap-6">
            <div class="w-full md:w-[60%] flex flex-col gap-4 p-8">
                <h2 class="text-2xl font-bold">
                    {{ $data[1]->header }}
                </h2>
                <div class="line"></div>
                <p class="">
                    {{ $data[1]->body }}
                </p>
                <div>
                    <button class="button">Email</button>
                </div>
            </div>
            <div class="w-full md:w-[40%] flex justify-center py-2 md:p-2">
                <img src="{{ asset('assets/img/about/' . $data[1]->image) }}" class="h-full rounded-md">
            </div>
        </div>

        {{-- cards --}}
        <div class="flex flex-col bg-slate-200 py-12 gap-8">
            <div class="text-center">
                <h2 class="text-2xl font-bold">Waarom VH Reclame</h2>
            </div>
            <div
                class="flex flex-col md:flex-row justify-around px-6 gap-10 md:gap-6 mt-8 container mx-auto text-center">
                {{-- card --}}
                <div class="py-10 px-4 bg-slate-50 rounded-md flex flex-col gap-2 relative w-full">
                    <div class="circle"></div>
                    <h2 class="text-xl font-bold">
                        {{ $data[2]->header }}
                    </h2>
                    <p class="">
                        {{ $data[2]->body }}
                    </p>
                </div>
                {{-- card --}}
                <div class="py-10 px-4 bg-slate-50 rounded-md flex flex-col gap-2 relative w-full">
                    <div class="circle"></div>
                    <h2 class="text-xl font-bold">
                        {{ $data[3]->header }}
                    </h2>
                    <p class="">
                        {{ $data[3]->body }}
                    </p>
                </div>
                {{-- card --}}
                <div class="py-10 px-4 bg-slate-50 rounded-md flex flex-col gap-2 relative w-full">
                    <div class="circle"></div>
                    <h2 class="text-xl font-bold">
                        {{ $data[4]->header }}
                    </h2>
                    <p class="">
                        {{ $data[4]->body }}
                    </p>
                </div>
            </div>

        </div>

        {{-- recent projects --}}
        <x-recent-projects-slider :slider="$slider"></x-recent-projects-slider>
</x-layout>
