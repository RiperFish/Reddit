<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name' => 'Laravel']);
        Topic::create(['name' => 'React Js']);
        Topic::create(['name' => 'Vue Js']);
        Topic::create(['name' => 'Web Design']);
    }
}
