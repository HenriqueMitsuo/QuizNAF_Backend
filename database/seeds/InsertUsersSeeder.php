<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsertUsersSeeder extends Seeder
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
                INSERT INTO users(name, email, password, country, city, educationType, educationInstitute, educationCourse, role)
                VALUES
                ('admin', 'admin@email.com', '".Hash::make('admin123')."', 'Brasil', 'Registro', 'Superior', 'Univr', 'ADS', 2),
                ('professor', 'professor@email.com', '".Hash::make('professor123')."', 'Brasil', 'Registro', 'Superior', 'Univr', 'ADS', 1),
                ('Usuário', 'user@email.com', '".Hash::make('user123')."', 'Brasil', 'Registro', 'Superior', 'Univr', 'ADS', 0)
            "
        );
    }
}
