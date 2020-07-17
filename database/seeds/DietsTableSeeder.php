<?php

use App\Models\Diets;
use Illuminate\Database\Seeder;

class DietsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diets = new Diets();
        $diets->name = 'Standardowa';
        $diets->description = 'dieta standardowa nie wu=ykluczająca żadnych produktów spożywczych';
        $diets->save();

        $diets = new Diets();
        $diets->name = 'Wegetariańska';
        $diets->description = 'Wegetarianie nie jedzą mięsa, ryb oraz owoców morza. Dieta wegetariańska ma często podłoże ideologiczne, ale może mieć także prozdrowotne. Wykluczenie mięsa z diety ma działanie antyrakowe oraz odkwaszające organizm.';
        $diets->save();

        $diets = new Diets();
        $diets->name = 'Wegańska';
        $diets->description = 'To bardziej radykalna forma wegetarianizmu. Weganie nie jedzą mięsa, ryb, owoców morza oraz produktów odzwierzęcych. Oznacza to wykluczenie z menu nabiału, jajek oraz miodu. Nie jedzą niczego, co wyprodukowały zwierzęta. Ta w 100% roślinna dieta często oparta jest na sezonowych warzywach i owocach. Je się także dużo warzyw strączkowych, orzechów oraz nasion.';
        $diets->save();

        $diets = new Diets();
        $diets->name = 'Ketogeniczna';
        $diets->description = 'dieta zakładająca znaczne ograniczenie spożycia węglowodanów, z reguły do maksymalnie 130 g na dobę. Produkty spożywcze bogate w węglowodany (głównie pieczywo, makarony, ziemniaki, inne produkty zbożowe) zastępowane są produktami bogatymi w tłuszcz lub białko (m.in. mięso, ryby, jaja, sery). Dieta niskowęglowodanowa zaleca też spożywanie warzyw i owoców z niską zawartością węglowodanów (np. sałaty, brokuły, ogórki, szpinak, maliny, orzechy).';
        $diets->save();

        $diets = new Diets();
        $diets->name = 'Bezglutenowa';
        $diets->description = ' dieta, będąca wariantem diety podstawowej, z której wyeliminowano produkty zawierające gluten, czyli wykluczono produkty spożywcze z dodatkiem naturalnych bądź przetworzonych zbóż[1]: pszenicy żyta    jęczmienia';
        $diets->save();

        $diets = new Diets();
        $diets->name = 'Paleo';
        $diets->description = 'Dieta paleo, inaczej nazywana dietą paleolityczną lub dietą człowieka epoki kamiennej, jest – zgodnie z nazwą – dietą, czy raczej sposobem żywienia, bazującą na naturalnych produktach i nieprzetworzonej żywności';
        $diets->save();
    }
}
