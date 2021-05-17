<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * seeders plant data in the tables.
 * normally you would different files for the seeders, but for simplicity all tables are filled in this one file.
 * 
 * running all migrations and seeders needs the following steps:
 * open commmand prompt (in visual studio code: ctrl + ~)
 * make sure the CD is in the 'MPA' file
 * type: php artisan migrate:fresh --seed
 * hit enter to run
 */

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            [
                'product_id' => 1,
                'category_id' => 4
            ],[
                'product_id' => 1,
                'category_id' => 6
            ],[
                'product_id' => 1,
                'category_id' => 7
            ],[
                'product_id' => 2,
                'category_id' => 4
            ],[
                'product_id' => 2,
                'category_id' => 6
            ],[
                'product_id' => 2,
                'category_id' => 8
            ],[
                'product_id' => 3,
                'category_id' => 1
            ],[
                'product_id' => 3,
                'category_id' => 3
            ],[
                'product_id' => 3,
                'category_id' => 13
            ],[
                'product_id' => 4,
                'category_id' => 4
            ],[
                'product_id' => 4,
                'category_id' => 6
            ],[
                'product_id' => 4,
                'category_id' => 7
            ],[
                'product_id' => 5,
                'category_id' => 1
            ],[
                'product_id' => 5,
                'category_id' => 2
            ],[
                'product_id' => 5,
                'category_id' => 9
            ],[
                'product_id' => 6,
                'category_id' => 1
            ],[
                'product_id' => 6,
                'category_id' => 3
            ],[
                'product_id' => 6,
                'category_id' => 8
            ],[
                'product_id' => 7,
                'category_id' => 4
            ],[
                'product_id' => 7,
                'category_id' => 6
            ],[
                'product_id' => 7,
                'category_id' => 7
            ],[
                'product_id' => 7,
                'category_id' => 9
            ],[
                'product_id' => 8,
                'category_id' => 4
            ],[
                'product_id' => 8,
                'category_id' => 6
            ],[
                'product_id' => 8,
                'category_id' => 7
            ],[
                'product_id' => 9,
                'category_id' => 4
            ],[
                'product_id' => 9,
                'category_id' => 6
            ],[
                'product_id' => 9,
                'category_id' => 7
            ],[
                'product_id' => 10,
                'category_id' => 4
            ],[
                'product_id' => 10,
                'category_id' => 6
            ],[
                'product_id' => 10,
                'category_id' => 7
            ],[
                'product_id' => 10,
                'category_id' => 11
            ],[
                'product_id' => 11,
                'category_id' => 5
            ],[
                'product_id' => 11,
                'category_id' => 6
            ],[
                'product_id' => 11,
                'category_id' => 7
            ],[
                'product_id' => 11,
                'category_id' => 9
            ],[
                'product_id' => 12,
                'category_id' => 9
            ],[
                'product_id' => 12,
                'category_id' => 10
            ],[
                'product_id' => 13,
                'category_id' => 9
            ],[
                'product_id' => 13,
                'category_id' => 10
            ],[
                'product_id' => 14,
                'category_id' => 4
            ],[
                'product_id' => 14,
                'category_id' => 6
            ],[
                'product_id' => 14,
                'category_id' => 7
            ],[
                'product_id' => 14,
                'category_id' => 8
            ],[
                'product_id' => 14,
                'category_id' => 11
            ],[
                'product_id' => 15,
                'category_id' => 4
            ],[
                'product_id' => 15,
                'category_id' => 6
            ],[
                'product_id' => 15,
                'category_id' => 7
            ],[
                'product_id' => 15,
                'category_id' => 8
            ],[
                'product_id' => 15,
                'category_id' => 11
            ],[
                'product_id' => 15,
                'category_id' => 9
            ],[
                'product_id' => 16,
                'category_id' => 1
            ],[
                'product_id' => 16,
                'category_id' => 3
            ],[
                'product_id' => 16,
                'category_id' => 11
            ],[
                'product_id' => 17,
                'category_id' => 4
            ],[
                'product_id' => 17,
                'category_id' => 6
            ],[
                'product_id' => 17,
                'category_id' => 8
            ],[
                'product_id' => 18,
                'category_id' => 1
            ],[
                'product_id' => 18,
                'category_id' => 3
            ],[
                'product_id' => 18,
                'category_id' => 9
            ],[
                'product_id' => 19,
                'category_id' => 5
            ],[
                'product_id' => 19,
                'category_id' => 6
            ],[
                'product_id' => 19,
                'category_id' => 7
            ],[
                'product_id' => 19,
                'category_id' => 11
            ],[
                'product_id' => 20,
                'category_id' => 9
            ],[
                'product_id' => 20,
                'category_id' => 10
            ]
        ]);




        DB::table('categories')->insert([
            [
                'name' => 'locomotive',
                'description' => 'Locomotieven zijn de ruggengraat van het Nederlandse Spoor. Overal inzetbaar en trekken alles!'
            ],[
                'name' => 'diesel locomotive',
                'description' => 'Locomotieven met Diesel aandrijving, deze machine\'s kunnen ook zonder waslijn rijden!'
            ],[
                'name' => 'electric locomotive',
                'description' => 'Locomotieven met Elektrissche aandrijving. Goedkoper en zuiniger dan diesel, en met hogere prestaties!'
            ],[
                'name' => 'electric multiple unit',
                'description' => 'Elektrische reizigerstreinen die uit meerdere delen bestaan.'
            ],[
                'name' => 'diesel multiple unit',
                'description' => 'Reizigerstreinen op diesel, Deze kunnen ook zonder waslijn rijden.'
            ],[
                'name' => 'multiple unit',
                'description' => 'Reizigerstreinen die uit meerdere delen bestaan. Geen locomotief meer nodig.'
            ],[
                'name' => 'sprinter',
                'description' => 'Lichte treinen voor een snel optrekkingsvermogen, en gemaakt om snel en comfortabel in/uit te stappen.'
            ],[
                'name' => 'intercity',
                'description' => 'Zwaardere treinen met hogere topsnelheden, ideaal voor lange afstands reizen.'
            ],[
                'name' => 'international',
                'description' => 'Treinen die dankzij meerdere systemen ook in het buitenland kunnen rijden'
            ],[
                'name' => 'coaches',
                'description' => 'Losse rijtuigen, variabele opstellening zonder kwaliteitsverlies'
            ],[
                'name' => 'oldschool',
                'description' => 'Deze makkers gaan al lang mee en zijn niet kapot te krijgen. De eyecatchers van het nederlandse spoor!'
            ]
        ]);




        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'SGM',
                'variant' => 'Stads Gewestelijk Materieel 1+2',
                'topspeed' => 125,
                'weight' => 106,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG',
                'length' => 52,
                'coaches' => 2,
                'price' => '99.99',
                'description' => 'Deze trein moet je gewoon niet willen: Oud, lelijk en oncomfortabel. We doen ze weg voor een prikje, dat is de enige reden om zoiets afschuwelijks als dit te kopen.',
                'seats' => 142,
                'manufacturer' => '',
                'fullname' => 'Stads Gewestelijk Materieel',
                'coupling' => 'scharfenbergkoppeling'
            ],[
                'id' => 2,
                'name' => 'VIRM',
                'variant' => 'VIRM4 2/3',
                'topspeed' => 140,
                'weight' => 234,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG',
                'length' => 109,
                'coaches' => 4,
                'price' => '199.99',
                'description' => 'Deze trein weet alles van reizigerscapaciteit. Dat in combinatie met hoge selheden en ongekend comfort. Deze treinserie is een must have voor iedere verzamelaar!',
                'seats' => 387,
                'manufacturer' => 'Talboth/Bombardier',
                'fullname' => 'Verlengd Interregio Materieel',
                'coupling' => 'scharfenbergkoppeling'
            ],[
                'id' => 3,
                'name' => 'NS 1700',
                'variant' => 'NS E-loc 1700',
                'topspeed' => 180,
                'weight' => 86,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG + ATB-Vv',
                'length' => 18,
                'coaches' => 0,
                'price' => '299.99',
                'description' => 'Deze locomotieven komen al op leeftijd, maar dat zegt niks over hun prestaties. Deze werkpaarden maken al jaren het beeld uit van het nederlandse spoornetwerk, en zullen dat nog lang blijven doen. Geschikt voor reizigers, en goederen vervoer. Er is niks wat er niet kan met de 1700 serie.',
                'seats' => 0,
                'manufacturer' => 'Jeumont/Schneider',
                'fullname' => 'NS 1700',
                'coupling' => 'schroefkoppeling'
            ],[
                'id' => 4,
                'name' => 'ICM',
                'variant' => 'NS InterCityMaterieel 4',
                'topspeed' => 160,
                'weight' => 192,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG',
                'length' => 107,
                'coaches' => 4,
                'price' => '399.99',
                'description' => 'Snelheid en comfort is waar deze treinen voor staan. Met snelheden tot wel 160 kmp/h kan deze trein je overal in nederland brengen. Daarnaast hebben ze een unieke vormgeving, die je op geen een andere trein zult vinden.',
                'seats' => 300,
                'manufacturer' => 'Talbot/CEM Oerlikon/Holec',
                'fullname' => 'InterCityMaterieel',
                'coupling' => 'scharfenbergkoppeling'
            ],[
                'id' => 5,
                'name' => 'Railion 6400',
                'variant' => 'MaK DE 6400',
                'topspeed' => 120,
                'weight' => 83,
                'voltage' => '',
                'traction' => 'diesel-electric',
                'system' => 'ATB + PZB + Memor + ERTMS',
                'length' => 14,
                'coaches' => 0,
                'price' => '499.99',
                'description' => 'Als je zoekt voor een diesel locomotief die alles kan, hoeft u niet verder te zoeken. De Railion 6400 mag dan wel niet de hoogste topsnelheid hebben, maar hij trekt alles wat u erachter hangt. Door het feit dat  de locomotief op diesel werkt, is er ook geen bovenleiding nodig om deze trein te operaten.',
                'seats' => 0,
                'manufacturer' => 'MaK/Vossloh',
                'fullname' => 'MaK DE 6400',
                'coupling' => 'schroefkoppeling'
            ],[
                'id' => 6,
                'name' => 'NS TRAXX',
                'variant' => 'NS TRAXX br 186 es 64F',
                'topspeed' => 160,
                'weight' => 84,
                'voltage' => '1.5kV, 3kV, 15kV, 25kV',
                'traction' => 'electric',
                'system' => 'ETCS-L0,1&2 + ATB-EG + ERTMS PZB + MEMOR',
                'length' => 19,
                'coaches' => 0,
                'price' => '599.99',
                'description' => 'De NS TRAXX is een van de nieuwste speeltjes op het Nederlandse spoor. Maar niet alleen in Nederland, deze trein is toegelaten in vrijwel alle landen in europa. Voor grensoverschreidend vervoer is geen gebruik van een tweede locomotief meer nodig. ',
                'seats' => 0,
                'manufacturer' => 'bombardier',
                'fullname' => 'NS TRAXX',
                'coupling' => 'schroefkoppeling'
            ],[
                'id' => 7,
                'name' => 'NS Flirt',
                'variant' => 'Flinker Leichter Innovativer Regionaltriebzug',
                'topspeed' => 160,
                'weight' => 138,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG',
                'length' => 63,
                'coaches' => 3,
                'price' => '699.99',
                'description' => 'Deze treinstellen verschenen onverwachts op het Nederlandse spoor, maar ze hadden hun waarde al bewezen in het buitenland. Deze treinen zijn overal in Nederland toegelaten, en ook in sommige delen van Duitsland. Lichte treinen, met extreem hoog comfort en goede snelheden. Alles wat u zoekt in een sprinter.',
                'seats' => 158,
                'manufacturer' => 'Stadler Rail',
                'fullname' => 'NS FLIRT',
                'coupling' => 'Scharfenbergloppeling'
            ],[
                'id' => 8,
                'name' => 'SLT',
                'variant' => 'Sprinter Light Train 4',
                'topspeed' => 160,
                'weight' => 129,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG + ERTMS L1/2',
                'length' => 69,
                'coaches' => 4,
                'price' => '799.99',
                'description' => 'Deze treinstellen zijn zeer licht, wat ze een goede acceleratie geeft. Als een van de weinige treinen is deze niet alleen uitgerust met ATB, maar ook met ERTMS. Dit maakt ze geschikt voor meerdere soorten spoor.',
                'seats' => 216,
                'manufacturer' => 'Bombardier',
                'fullname' => 'Sprinter Light Train',
                'coupling' => 'Scharfenbergkoppeling'
            ],[
                'id' => 9,
                'name' => 'SNG',
                'variant' => 'Sprinter Nieuwe Generatie 4',
                'topspeed' => 160,
                'weight' => 138,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG + ERTMS',
                'length' => 76,
                'coaches' => 4,
                'price' => '899.99',
                'description' => 'Dit zijn de nieuwste sprinters. Deze treinstellen hebben alles wat u nodig heeft: goed comfort, toiletten, acceleratie, topsnelheid en het gebruik van meerdere beveiligingssystemen.',
                'seats' => 160,
                'manufacturer' => 'CAF',
                'fullname' => 'Sprinter Nieuwe Generatie',
                'coupling' => 'Scharfenbergkoppeling'
            ],[
                'id' => 10,
                'name' => 'mat \'64',
                'variant' => 'Materieel 1964, plan V V13',
                'topspeed' => 140,
                'weight' => 86,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG',
                'length' => 82,
                'coaches' => 2,
                'price' => '999.99',
                'description' => 'De favoriet van iedere treinliefhebber. Deze treinen mogen al even uit dienst zijn, maar dat maakt ze zeker niet overbodig. Deze klassiekers zijn niet kapot te krijgen, en zullen nog vele jaren het spoor onveilig maken.',
                'seats' => 153,
                'manufacturer' => 'Talbot',
                'fullname' => 'Mat \'64 plan V',
                'coupling' => 'Scharfenbergkoppeling'
            ],[
                'id' => 11,
                'name' => 'dm \'90',
                'variant' => 'NS Dieselmaterieel 1990',
                'topspeed' => 140,
                'weight' => 95,
                'voltage' => '',
                'traction' => 'diesel',
                'system' => 'ATB-NG + PZB',
                'length' => 52,
                'coaches' => 2,
                'price' => '1099.99',
                'description' => 'DM \'90 is een van de weinige opties als u een sprinter wilt op diesel. Deze treinen mogen dan wel geen hoge topsnelheden hebben, mnaar ze doen alles goed waar ze voor gemaakt zijn. Daarnaast zijn ze uitgerust met PZB, wat ze toelaat op het duitse spoornetwerk.',
                'seats' => 153,
                'manufacturer' => 'Talbot',
                'fullname' => 'Dieselmaterieel 90',
                'coupling' => 'Scharfenbergkoppeling'
            ],[
                'id' => 12,
                'name' => 'ICR(m)',
                'variant' => 'Intercityrijtuig gemoderniseerd',
                'topspeed' => 160,
                'weight' => 41,
                'voltage' => '1.5kV, 3kV, 15kV, 25kV',
                'traction' => '',
                'system' => '',
                'length' => 26,
                'coaches' => 1,
                'price' => '1199.99',
                'description' => 'Deze rijtuigen zorgen voor een flexibele opstelling van uw trein. Ze zijn compitabel met de ns 1700, ns 6400 en de TRAXX. Omdat deze rijtuigen overal op het nederlandse spoor, EN op buitlenlandse netwerken zijn toegestaan, zijn dit de ideale rijtuigen voor uw trein.',
                'seats' => 80,
                'manufacturer' => 'Talbot',
                'fullname' => 'Intercityrijtuig',
                'coupling' => 'schoefkoppeling'
            ],[
                'id' => 13,
                'name' => 'ICRm Stuurstand',
                'variant' => 'Intercityrijtuig gemoderniseerd stuurstandrijtuig',
                'topspeed' => 160,
                'weight' => 41,
                'voltage' => '1.5kV, 3kV, 15kV, 25kV',
                'traction' => '',
                'system' => '',
                'length' => 26,
                'coaches' => 1,
                'price' => '1299.99',
                'description' => 'Een aantal ICR-binnenland-rijtuigen is verbouwd tot stuurstandrijtuig, ofwel een rijtuig met een cabine voor de machinist. Deze nieuwe stuurstandrijtuigen zijn uiterlijk grotendeels gelijk aan de Benelux-stuurstandrijtuigen, maar er zijn enkele belangrijke technische verschillen. Deze stuurstanden zijn bijvoorbeeld geschikt gemaakt voor inzet in combinatie met 1700-locomotieven. Voorts zit de machinist niet links, maar in het midden, en de stuurstand is daarom te herkennen aan het ontbreken van een middenstijl in de voorruit.',
                'seats' => 80,
                'manufacturer' => 'Talbot',
                'fullname' => 'Intercity stuurstandrijtuig',
                'coupling' => 'schoefkoppeling'
            ],[
                'id' => 14,
                'name' => 'mat \'54',
                'variant' => 'Materieel 1954 Eid-4 Plan P',
                'topspeed' => 140,
                'weight' => 210,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG',
                'length' => 99,
                'coaches' => 4,
                'price' => '1399.99',
                'description' => 'Materieel \'54 (Mat \'54) was een serie twee- en vierdelige elektrische treinstellen van de Nederlandse Spoorwegen, vernoemd naar het jaar waarin de eerste bestelling is geplaatst. Vanwege de kenmerkende vorm van de neus werden ze (hoewel niet officieel) vaak aangeduid als Hondekop.',
                'seats' => 280,
                'manufacturer' => 'Allan, Beijnes, Werkspoor',
                'fullname' => 'Materieel \'54',
                'coupling' => 'scharfenbergkoppeling (laag)'
            ],[
                'id' => 15,
                'name' => 'mat \'57',
                'variant' => 'Materieel 1957 Benelux',
                'topspeed' => 140,
                'weight' => 115,
                'voltage' => '1.5kV, 3kV',
                'traction' => 'electric',
                'system' => 'ATB-EG, MEMOR',
                'length' => 50,
                'coaches' => 2,
                'price' => '1499.99',
                'description' => 'De bouwserie Materieel \'57 (Mat \'57) zijn tweedelige treinstellen (ElD2) van het type materieel \'54, Plan Q. Hiervan werden 12 stuks besteld welke werden verdeeld over de NS en de NMBS. De NS kreeg 8 treinstellen en de NMBS 4.',
                'seats' => 119,
                'manufacturer' => 'Allan, Beijnes, Werkspoor',
                'fullname' => 'Materieel \'57',
                'coupling' => 'scharfenbergkoppeling (laag)'
            ],[
                'id' => 16,
                'name' => 'NS 1200',
                'variant' => 'NS E-loc 1200',
                'topspeed' => 150,
                'weight' => 108,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB',
                'length' => 18,
                'coaches' => 0,
                'price' => '1599.99',
                'description' => 'De NS-locserie 1200 is een elektrische locomotief die tussen 1952 en 1998 werd ingezet door de Nederlandse Spoorwegen, van 1999 tot 2009 werd gebruikt door ACTS Nederland BV en van 2010 tot 2015 bij EETC.',
                'seats' => 119,
                'manufacturer' => 'Werkspoor',
                'fullname' => 'NS 1200',
                'coupling' => 'shroefkoppeling'
            ],[
                'id' => 17,
                'name' => 'DDZ',
                'variant' => 'Dubbeldekker Zonering 6',
                'topspeed' => 140,
                'weight' => 319,
                'voltage' => '1.5kV',
                'traction' => 'electric',
                'system' => 'ATB-EG',
                'length' => 153,
                'coaches' => 6,
                'price' => '1699.99',
                'description' => 'De DDZ is een serie dubbeldeksmaterieel van de Nederlandse Spoorwegen voor gebruik in intercitydiensten. Ze bestaan uit de stoptreinstellen DD-AR uit de jaren negentig die tussen 2009 en 2014 door NedTrain verbouwd zijn. De projectnaam van deze revisie was DDZ (Dubbeldekker Zonering) waarna de treinen de naam NID (Nieuwe Intercity Dubbeldekker) zouden krijgen. De term DDZ is echter blijven hangen en is nu de gebruikelijke aanduiding voor dit materieel.',
                'seats' => 119,
                'manufacturer' => 'NedTrain',
                'fullname' => 'NS Dubbeldekker Zonering ',
                'coupling' => 'scharfenbergkoppeling'
            ],[
                'id' => 18,
                'name' => 'Vectron',
                'variant' => 'Siemens Vectron AC/DC',
                'topspeed' => 200,
                'weight' => 85,
                'voltage' => '1.5kV, 3kV, 15kV, 25kV',
                'traction' => 'electric',
                'system' => 'ATB-EG + ERTMS + ECTS + MEMOR',
                'length' => 19,
                'coaches' => 0,
                'price' => '1799.99',
                'description' => 'De Siemens Vectron is een locomotiefplatform gebouwd door Siemens. Het moet de voorgaande locomotieffamilies EuroSprinter en de daarvan afgeleide ES 2007 gaan vervangen. Er bestaan verschillende elektrische aangedreven varianten, een diesel- en een dual-mode versie. De naam Smartron wordt gebruikt voor een uitgeklede elektrische uitvoering.',
                'seats' => 119,
                'manufacturer' => 'Siemens',
                'fullname' => 'Siemens Vectron',
                'coupling' => 'schroefkoppeling + C-AKv'
            ],[
                'id' => 19,
                'name' => 'DE3',
                'variant' => 'Plan U DE3',
                'topspeed' => 125,
                'weight' => 136,
                'voltage' => '',
                'traction' => 'diesel-electric',
                'system' => 'ATB-EG + ATB-NG',
                'length' => 74,
                'coaches' => 3,
                'price' => '1899.99',
                'description' => 'Plan U was een type driedelig dieselelektrisch treinstel (officiële aanduiding: DE3) van de Nederlandse Spoorwegen.',
                'seats' => 119,
                'manufacturer' => 'Werkspoor',
                'fullname' => 'Plan U',
                'coupling' => 'scharfenbergkoppeling'
            ],[
                'id' => 20,
                'name' => 'Apmz',
                'variant' => 'Intercityrijtuig Apmz',
                'topspeed' => 200,
                'weight' => 41,
                'voltage' => '1.5kV, 3kV, 15kV, 25kV',
                'traction' => '',
                'system' => '',
                'length' => 26,
                'coaches' => 1,
                'price' => '1999.99',
                'description' => 'Supply Description',
                'seats' => 80,
                'manufacturer' => 'Talbot',
                'fullname' => 'Intercityrijtuig Apmz',
                'coupling' => 'schoefkoppeling'
            ]
            ]);
            DB::table('users')->insert([
                ['email' => 'admin@admin', 'name' => 'admin', 'password' => bcrypt('admin')]
            ]);
    }
}