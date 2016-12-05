<?php

use Illuminate\Database\Seeder;
use App\Library;

class LibraryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Library::class, 50)->create();
    }
}
