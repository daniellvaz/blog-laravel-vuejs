<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateFakeCompany extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'Fake company',
            'email' => 'fake@company.com.br',
            'registration' => '123.456.78/0001-10',
            'address' => 'Fake street, 1234',
            'phone' => '(41) 99999-9999',
        ]);
    }
}
