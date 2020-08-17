<?php

use Illuminate\Database\Seeder;
use App\Models\Ratings;
use App\Models\User;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rating= new Ratings();
        $rating->stars=5;
        $rating->note='Pełen profesjonalizm';
        $rating->save();

        $rating= new Ratings();
        $rating->stars=5;
        $rating->note='Trenuje z Mateuszem jakieś 6 miesięcy. Zawsze profesjonalny,
        uśmiechnięty i na 200% zaangażowany. Efekty w postaci zmiany sylwetki i nawyków
        żywieniowych cieszą i dopingują do dalszych treningów. Dziękuję!!!';
        $rating->save();

        $rating= new Ratings();
        $rating->stars=4;
        $rating->note='Jeżeli szukasz kogoś, kto Cię zmotywuje do ćwiczeń a nawet do
        wyrwania z fotela i jeszcze do tego doda uśmiech który jest zarażliwy oraz
        okrasi to niewyszukanym komentarzem  to znaczy że powinieneś trafić tego człowieka :).';
        $rating->save();

        $rating= new Ratings();
        $rating->stars=4;
        $rating->note='Jeżeli szukasz kogoś, kto Cię zmotywuje do ćwiczeń a nawet do
        wyrwania z fotela i jeszcze do tego doda uśmiech który jest zarażliwy oraz
        okrasi to niewyszukanym komentarzem  to znaczy że powinieneś trafić tego człowieka :).';
        $rating->save();

        $rating= new Ratings();
        $rating->stars=3;
        $rating->note='W porządku trener.';
        $rating->save();

        $rating= new Ratings();
        $rating->stars=5;
        $rating->note='Godny zaufania, znający się na pracy.';
        $rating->save();

        $rating= new Ratings();
        $rating->stars=2;
        $rating->note='Ciężko z kontaktem.';
        $rating->save();
    }
}
