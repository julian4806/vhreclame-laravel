<x-layout>
    <x-slot:title>VH - Contact</x-slot>
        {{-- header --}}
        <x-hero>Contact</x-hero>

        <div class="h-60 flex bg-slate-50">
            <div class="w-full p-6 flex-center-all">
                <span class="text-4xl text-block">
                    VH Reclame
                    <br>Sinds 1968
                </span>
            </div>
            <div class="w-full flex-center-all">
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-block">
                        <span class="font-bold">Email</span><br>
                        <span class="font-thin">info@vhreclame.nl</span>
                    </div>
                    <div class="text-block">
                        <span class="font-bold">Bezoekadres</span><br>
                        <span class="font-thin">Stationserf 50, 3991 KZ Houten</span>
                    </div>
                    <div class="text-block">
                        <span class="font-bold">Telefoon</span><br>
                        <span class="font-thin">030 261 262 9 / 06 200 60 600</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact Form / Google Maps --}}
        <div class="p-6 gap-6 flex">
            <div class="w-full bg-slate-200 p-6 flex flex-col gap-4">
                <input type="text" class="p-2 rounded-md" placeholder="Uw naam">
                <input type="text" class="p-2 rounded-md" placeholder="Uw emailadres">
                <input type="text" class="p-2 rounded-md" placeholder="Uw telefoonnummer">
                <input type="text" class="p-2 rounded-md" placeholder="Het onderwerp">
                <textarea name="" id="" cols="30" rows="10" class="p-2 rounded-md" placeholder="Uw bericht"></textarea>
            </div>
            <div class="w-full bg-slate-200 p-6">
                <div class="bg-black h-full w-full rounded-md"></div>
            </div>
        </div>
</x-layout>
