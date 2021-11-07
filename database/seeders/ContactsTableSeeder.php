<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contacts;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacts::factory()->count(35)->create();
    }
}
