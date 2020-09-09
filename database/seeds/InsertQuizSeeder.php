<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(
            "
                INSERT INTO quiz(title, category, description, lang)
                VALUES
                ('Educação Fiscal: Geral', 'Educação Fiscal', '10 perguntas sobre a Geral', 'pt-br'),
                ('Educação Fiscal: Aduana', 'Educação Fiscal', '10 perguntas sobre a Aduana', 'pt-br'),
                ('Educação Fiscal: Tributos', 'Educação Fiscal', '10 perguntas sobre a Tributos', 'pt-br')
            "
        );
    }
}
