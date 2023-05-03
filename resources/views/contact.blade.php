<x-layout>
    <x-slot:title>VH - Contact</x-slot>
        {{-- header --}}
        <x-hero :image="'contact/' . $data[0]->image">Contact</x-hero>

        {{-- hero with credentials --}}
        <div class="p-6">
            <div class="flex flex-col md:flex-row container mx-auto">
                <div class="w-full py-6 md:p-6 flex justify-center sm:justify-start md:justify-center items-center">
                    <span class="text-4xl text-block">
                        {!! nl2br(e($data[1]->body)) !!}
                    </span>
                </div>
                <div class="w-full flex-center-all">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="text-block">
                            <span class="font-bold">
                                {{ $data[2]->header }}
                            </span><br>
                            <span class="font-thin">
                                {{ $data[2]->body }}
                            </span>
                        </div>
                        <div class="text-block">
                            <span class="font-bold">
                                {{ $data[3]->header }}
                            </span><br>
                            <span class="font-thin">
                                {{ $data[3]->body }}
                            </span>
                        </div>
                        <div class="text-block">
                            <span class="font-bold">
                                {{ $data[4]->header }}
                            </span><br>
                            <span class="font-thin">
                                {{ $data[4]->body }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact Form / Google Maps --}}
        <div class="bg-slate-200">
            <div class="p-6 gap-6 flex container mx-auto">
                <div class="w-full p-6 flex flex-col gap-4">
                    <input type="text" class="p-2 rounded-md" placeholder="Uw naam">
                    <input type="text" class="p-2 rounded-md" placeholder="Uw emailadres">
                    <input type="text" class="p-2 rounded-md" placeholder="Uw telefoonnummer">
                    <input type="text" class="p-2 rounded-md" placeholder="Het onderwerp">
                    <textarea name="" id="" cols="30" rows="10" class="p-2 rounded-md" placeholder="Uw bericht"></textarea>
                    <button class="button bg-custom-blue">Verstuur bericht</button>
                </div>
                <div class="hidden md:block w-full bg-slate-200 p-6">
                    <div class="bg-black h-full w-full rounded-md"></div>
                </div>
            </div>
        </div>
</x-layout>
