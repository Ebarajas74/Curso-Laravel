<?php

use Illuminate\Database\Seeder;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = time();
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => date('d-m-Y H:i:s', $time),
            ]);
        }
    }
}
