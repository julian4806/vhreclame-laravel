<x-layout>
    <x-slot:title>VH - Over Ons</x-slot>
        {{-- header --}}
        <x-hero>Over Ons</x-hero>

        {{-- hero --}}
        <div class="p-6 flex gap-6">
            <div class="w-[60%] flex flex-col gap-4">
                <h2>Een familiebedrijf uit Utrecht</h2>
                <div class="line"></div>
                <p>
                    Onze vader begon in april 1968 voor zichzelf met VH Reclame,
                    een reclamebedrijf. Op dat moment werd winkelcentrum Hoog Catharijne
                    opgeleverd en was hij dagelijks druk om de winkels daar te
                    voorzien van lichtreclames en andere gevelreclames. In april 2003 namen
                    wij als gebroeders van Husen het stokje over en zijn inmiddels alweer bijna 20
                    jaar druk met VH Reclame. Kortom, ervaring genoeg om u te kunnen helpen!
                </p>
                <div>
                    <button class="button">Email</button>
                </div>
            </div>
            <div class="w-[40%] flex justify-center p-2 ">
                <img src="{{ asset('assets\img\example.jpeg') }}" class="h-full">
            </div>
        </div>

        {{-- cards --}}
        <div class="flex flex-col">
            <div class="text-center">
                <h2>Waarom VH Reclame</h2>
            </div>
            <div>
                <div>
                    <div class="circle"></div>
                    <h2>Rume Ervaing</h2>
                    <p>
                        VH Reclame is ruim 52 jaar actief. Met
                        zoveel ervaring kunnen we voor u van
                        waarde zijn .
                    </p>
                </div>
                <div></div>
                <div></div>
            </div>

        </div>

        {{-- recent projects --}}
        <x-recent-projects-slider></x-recent-projects-slider>
</x-layout>
