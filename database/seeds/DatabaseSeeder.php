<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('InsertQuizSeeder');
        $this->call('InsertQuestionsSeeder');
        $this->call('InsertUsersSeeder');
    }
}
