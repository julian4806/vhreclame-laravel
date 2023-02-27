<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParagraphsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createMultipleUsers = [
            [
                // home page
                'title' => '',
                'paragraph' => 'Reclame is uw visitekaartje. Hoe wilt u uw bedrijf presenteren? Of makkelijk vindbaar maken? Of het nu gaat om autobelettering, bewegwijzering, gevelreclame, full-color prints, lichtreclame en nog heel veel meer, met een expertise van ruim 50 jaar bent u bij ons aan het goede adres. Neem contact met ons op voor een vrijblijvend advies.',
                'page' => 'home'
            ], [
                // about page
                'title' => 'Een familiebedrijf uit Utrecht',
                'paragraph' => 'Onze vader begon in april 1968 voor zichzelf met VH Reclame, een reclamebedrijf. Op dat moment werd winkelcentrum Hoog Catharijne opgeleverd en was hij dagelijks druk om de winkels daar te voorzien van lichtreclames en andere gevelreclames. In april 2003 namen wij als gebroeders van Husen het stokje over en zijn inmiddels alweer bijna 20 jaar druk met VH Reclame. Kortom, ervaring genoeg om u te kunnen helpen!',
                'page' => 'about'
            ], [
                'title' => 'Ruime ervaring',
                'paragraph' => 'VH Reclame is ruim 52 jaar actief. Met zoveel ervaring kunnen we voor u van waarde zijn.',
                'page' => 'about'
            ], [
                'title' => 'Wij denken met u mee',
                'paragraph' => 'Vraag gerust geheel vrijblijvend om ons advies. We delen graag onze ervaring met u.',
                'page' => 'about'
            ], [
                'title' => 'Goede prijzen',
                'paragraph' => 'We zijn een familiebedrijf en werken met een klein team. Overheadkosten kennen wij niet.',
                'page' => 'about'
            ], [
                // cleaning
                'title' => 'Schoonmaak / Graffiti verwijderen',
                'paragraph' => 'In opdracht van gemeentes reinigen wij stadsmeubilair. Graffiti en wildgeplakte posters en stickers geven een slechte eerste indruk als je een gemeente binnenkomt. Wij verwijderen graffiti en verrichten schilderwerk aan gemeentelijke objecten zoals VRI kasten (Stoplichtkasten). Deze installaties moeten altijd toegankelijk zijn voor de wegbeheerders dus ook eventuele wildgeplakte affiches worden door ons weggehaald. VH Reclame reinigt ook andere gemeentelijke objecten zoals stoplichten, bewegwijzeringsborden, ANWB borden en masten, komborden, gedenktekens, speeltoestellen enz.',
                'page' => 'cleaning'
            ]
        ];
        DB::table('paragraphs')->insert($createMultipleUsers);
    }
}
