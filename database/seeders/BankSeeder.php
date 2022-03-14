<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'Banco Pichincha C.A',
            'address' => 'Avenida Amazonas',
            'swift_code' => '11112233444'
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco de Guayaquil',
            'address' => 'Avenida Amazonas',
            'swift_code' => '22225533444'
        ]);
    }
}
