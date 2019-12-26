<?php

use Illuminate\Database\Seeder;
use App\Entities\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf' => '05521587802',
            'name' => 'Francisco',
            'phone' => '11 97979797 ',
            'birth' => '1966-10-14',
            'gender' => 'M',
            'notes' => '',
            'email' => 'francisco@teste.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
