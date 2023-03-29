<x-layout>
    <x-slot:title>VH - Over Ons</x-slot>
        {{-- header --}}
        <x-hero :image="'about/' . $data[0]->image">Over Ons</x-hero>

        {{-- hero --}}
        <div class="p-6 flex gap-6 bg-slate-300">
            <div class="w-[60%] flex flex-col gap-4">
                <h2 class="text-2xl text-block">
                    {{ $data[1]->header }}
                </h2>
                <div class="line"></div>
                <p class="text-block">
                    {{ $data[1]->body }}
                </p>
                <div>
                    <button class="button">Email</button>
                </div>
            </div>
            <div class="w-[40%] flex justify-center p-2 ">
                <img src="{{ asset('assets/img/about/' . $data[1]->image) }}" class="h-full">
            </div>
        </div>

        {{-- cards --}}
        <div class="flex flex-col">
            <div class="text-center mt-8">
                <h2 class="text-2xl">Waarom VH Reclame</h2>
            </div>
            <div class="flex justify-around px-6 gap-6 mt-8">
                <div class="py-10 px-4 bg-slate-500 rounded-md flex flex-col gap-2 relative">
                    <div class="circle"></div>
                    <h2 class="text-block text-xl">
                        {{ $data[2]->header }}
                    </h2>
                    <p class="text-block">
                        {{ $data[2]->body }}
                    </p>
                </div>
                <div class="py-10 px-4 bg-slate-500 rounded-md flex flex-col gap-2 relative">
                    <div class="circle"></div>
                    <h2 class="text-block text-xl">
                        {{ $data[3]->header }}
                    </h2>
                    <p class="text-block">
                        {{ $data[3]->body }}
                    </p>
                </div>
                <div class="py-10 px-4 bg-slate-500 rounded-md flex flex-col gap-2 relative">
                    <div class="circle"></div>
                    <h2 class="text-block text-xl">
                        {{ $data[4]->header }}
                    </h2>
                    <p class="text-block">
                        {{ $data[4]->body }}
                    </p>
                </div>
            </div>

        </div>

        {{-- recent projects --}}
        <x-recent-projects-slider></x-recent-projects-slider>
</x-layout>
