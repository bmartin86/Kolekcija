<?php

use Illuminate\Database\Seeder;

class FilmoviSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $film = array(
        array(
        "film_id" => 1,
        "naslov" => "Antitrust",
        "zanr_id" => 3,
        "godina" => 2001,
        "trajanje" => 108,
        "slika" =>,
        ),
        array(
        "film_id" => 2,
        "naslov" => "Firewall",
        "zanr_id" => 1,
        "godina" => 2006,
        "trajanje" => 105,
        "slika" =>,
        ),
        array(
        "film_id" => 3,
        "naslov" => "Hackers",
        "zanr_id" => 3,
        "godina" => 1995,
        "trajanje" => 105,
        "slika" =>,
        ),
        array(
        "film_id" => 4,
        "naslov" => "Operation Swordfish",
        "zanr_id" => 2,
        "godina" => 2001,
        "trajanje" => 99,
        "slika" =>,
        ),
        array(
        "film_id" => 5,
        "naslov" => "Operation Takedown",
        "zanr_id" => 7,
        "godina" => 2000,
        "trajanje" => 96,
        "slika" =>,
        ),
        array(
        "film_id" => 6,
        "naslov" => "Pirates Of Sillicone Valley",
        "zanr_id" => 7,
        "godina" => 1999,
        "trajanje" => 95,
        "slika" =>,
        ),
        array(
        "film_id" => 7,
        "naslov" => "The Social Network",
        "zanr_id" => 7,
        "godina" => 2010,
        "trajanje" => 120,
        "slika" =>,
        ),
        array(
        "film_id" => 8,
        "naslov" => "TRON",
        "zanr_id" => 5,
        "godina" => 1982,
        "trajanje" => 96,
        "slika" =>,
        ),
        array(
        "film_id" => 9,
        "naslov" => "TRON: Legacy",
        "zanr_id" => 5,
        "godina" => 2010,
        "trajanje" => 125,
        "slika" =>,
        ),
        array(
        "film_id" => 10,
        "naslov" => "War Games",
        "zanr_id" => 11,
        "godina" => 1983,
        "trajanje" => 114,
        "slika" =>,
        )
        );
        DB::table('filmovis')->delete();
        DB::table('filmovis')->insert($film);
    }

}
