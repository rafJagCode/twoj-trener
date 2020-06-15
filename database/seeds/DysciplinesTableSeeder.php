<?php

use App\Models\Dysciplines;
use Illuminate\Database\Seeder;

class DysciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Split';
        $dyscyplines->description = 'Split to inaczej trening dzielony. Polega na ćwiczeniu każdej partii mięśni oddzielnie, a nie – tak jak w przypadku Full Body Workout – całego ciała podczas jednego treningu. Taki schemat ćwiczeń to najskuteczniejszy sposób na zbudowanie masy mięśniowej i wyrzeźbienie sylwetki.';
        $dyscyplines->save();

        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'FBW';
        $dyscyplines->description = 'FBW, czyli full body workout, to trening całego ciała, jest to jedna z metod, w której możemy wykonać na jednej sesji ćwiczenia na wszystkie grupy mięśniowe. Dzięki temu możemy zaoszczędzić dużo czasu, a przy tym budować masę mięśniową oraz ograniczyć monotonię dzięki ciągłym zmianom ćwiczeń.';
        $dyscyplines->save();

        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Interwałowy';
        $dyscyplines->description = 'Trening interwałowy to rodzaj ćwiczeń fizycznych przeznaczony dla osób, które chcą pozbyć się zbędnej tkanki tłuszczowej oraz poprawić kondycję. Są to dość intensywne ćwiczenia, które wykonuje się w rundach, tak zwanych interwałach, pomiędzy którymi wprowadzane są lżejsze ćwiczenia, na przykład marsz albo trucht';
        $dyscyplines->save();

        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Kalisteniczny';
        $dyscyplines->description = 'Kalistenika  – aktywność fizyczna polegająca na treningu siłowym opartym na ćwiczeniach z wykorzystaniem własnej masy ciała, takie jak np. „pompki”, „mostki”, „brzuszki” i „dipy”. Jest często łączona ze stretchingiem.';
        $dyscyplines->save();

        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Siłowy';
        $dyscyplines->description = 'Trening siłowy to rodzaj wysiłku, dzięki któremu możesz wzmocnić i wyrzeźbić całe swoje ciało. Wykonując go regularnie wymodelujesz sylwetkę, pozbędziesz się nadmiaru kilogramów, a przy tym znacząco poprawisz stan swojego zdrowia.';
        $dyscyplines->save();

        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Kardio';
        $dyscyplines->description = 'Inaczej trening wytrzymałościowy to ćwiczenia dotleniające organizm, poprawiające pracę układu krążenia oraz kondycję organizmu. Trening cardio nazywany jest też treningiem tlenowym. Zwiększa ilość oddechów na minutę oraz przyspiesza tętno, co sprawia, że komórki i tkanki mięśniowe są lepiej dotlenione. Pozwala również dość szybko pozbyć się zbędnych kilogramów.';
        $dyscyplines->save();


        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Kettlebar';
        $dyscyplines->description = 'Kettlebells to rodzaj odważników, które wyglądem przypominają kulę armatnią z uchwytem. Trening z kettlebells nie tylko zwiększa siłę mięśni, ale także poprawia gibkość, koordynację i dobrze wpływa na wydolność sercowo-naczyniową. Poznaj inne zalety kettlebells i zasady treningu z odważnikami.';
        $dyscyplines->save();

        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Crossfit';
        $dyscyplines->description = 'Crossfit to plan treningowy będący alternatywą dla monotonnych ćwiczeń na siłowni. Wykonywane ćwiczenia angażują całe ciało, ze szczególnym zaakcentowaniem pośladków, ud, mięśni brzucha. Crossfit daje szybkie efekty w postaci wymarzonej sylwetki, lecz wymaga od trenującego nie lada determinacji w dążeniu do tego celu. Sprawdź, na czym polega crossfit i czy jest to trening przeznaczony dla każdego.';
        $dyscyplines->save();

        $dyscyplines = new Dysciplines();
        $dyscyplines->name = 'Streetching';
        $dyscyplines->description = 'Stretching, czyli ćwiczenia rozciągające to rodzaj zajęć polecanych osobom, które godzinami pozostają w tej samej pozycji - na przykład osobom pracującym przy komputerze. Na czym dokładnie polega stretching? Przeciągnij się jak kot. Leniwie, powoli. Zrób kilka głębokich wdechów i wydechów. Czujesz się jak nowo narodzony? Właśnie poznałeś jedne z podstawowych ćwiczeń wykorzystywanych w stretchingu.';
        $dyscyplines->save();
    }
}
