<?php

use Illuminate\Database\Seeder;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zanr = array(
            array(
                "zanr_id" => 1,
                "naziv" => "Akcija"
            ),
            array(
                "zanr_id" => 2,
                "naziv" => "Triler"
            ),
            array(
                "zanr_id" => 3,
                "naziv" => "Kriminalistički"
            ),
            array(
                "zanr_id" => 4,
                "naziv" => "Dokumentarni"
            ),
            array(
                "zanr_id" => 5,
                "naziv" => "Sci-Fi"
            ),
            array(
                "zanr_id" => 6,
                "naziv" => "Horor"
            ),
            array(
                "zanr_id" => 7,
                "naziv" => "Drama"
            ),
            array(
                "zanr_id" => 8,
                "naziv" => "Mjuzikl"
            ),
            array(
                "zanr_id" => 9,
                "naziv" => "Komedija"
            ),
            array(
                "zanr_id" => 10,
                "naziv" => "Ljubavni"
            ),
            array(
                "zanr_id" => 11,
                "naziv" => "Avanturistički"
            )
        );    
        DB::table('zanrs')->delete();
        DB::table('zanrs')->insert($zanr);
    }
}
