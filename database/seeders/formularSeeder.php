<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class formularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('formulars')->delete();
        \DB::table('formulars')->insert(array(
          'username' => "Fermain",
          'email' => "fermainpariz@gmx.de"
        ));
    }
}
