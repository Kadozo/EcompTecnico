<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Federation;

class FederationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Federation::create([
            'name'      => 'UniJR-BA',
            'state'     => 'Bahia',
        ]);
        Federation::create([
            'name'      => 'FEJERO',
            'state'     => 'Rondônia',
        ]);
        Federation::create([
            'name'      => 'SERJÚNIOR',
            'state'     => 'Sergipe',
        ]);
        Federation::create([
            'name'      => 'Pará Junior',
            'state'     => 'Pará',
        ]);
        Federation::create([
            'name'      => 'Piauí Júnior',
            'state'     => 'Piauí',
        ]);
        Federation::create([
            'name'      => 'FEJECE',
            'state'     => 'Ceará',
        ]);
        Federation::create([
            'name'      => 'FEMTEJ',
            'state'     => 'Mato Grosso',
        ]);
        Federation::create([
            'name'      => 'Roraima Júnior',
            'state'     => 'Roraima',
        ]);
        Federation::create([
            'name'      => 'Maranhão Júnior',
            'state'     => 'Maranhão',
        ]);
        Federation::create([
            'name'      => 'FEJESC',
            'state'     => 'Santa Catarina',
        ]);
        Federation::create([
            'name'      => 'Concentro',
            'state'     => 'Distrito Federal',
        ]);
        Federation::create([
            'name'      => 'Acre Júnior',
            'state'     => 'Acre',
        ]);
        Federation::create([
            'name'      => 'PB Júnior',
            'state'     => 'Paraíba',
        ]);
        Federation::create([
            'name'      => 'TO Júnior',
            'state'     => 'Tocantins',
        ]);
        Federation::create([
            'name'      => 'FEJEA',
            'state'     => 'Alagoas',
        ]);
        Federation::create([
            'name'      => 'RN Júnior',
            'state'     => 'Rio Grande do Norte',
        ]);
        Federation::create([
            'name'      => 'FEJEAP',
            'state'     => 'Amapá',
        ]);
        Federation::create([
            'name'      => 'FEJERS',
            'state'     => 'Rio Grande do Sul',
        ]);
        Federation::create([
            'name'      => 'FEJEMG',
            'state'     => 'Minas Gerais',
        ]);
        Federation::create([
            'name'      => 'Goiás Júnior',
            'state'     => 'Goiás',
        ]);
        Federation::create([
            'name'      => 'FEJEPAR',
            'state'     => 'Paraná',
        ]);
        Federation::create([
            'name'      => 'FEJESP',
            'state'     => 'São Paulo',
        ]);
        Federation::create([
            'name'      => 'FEJEPE',
            'state'     => 'Pernambuco',
        ]);
        Federation::create([
            'name'      => 'FEJEMS',
            'state'     => 'Mato Grosso do Sul',
        ]);
        Federation::create([
            'name'      => 'RioJunior',
            'state'     => 'Rio de Janeiro',
        ]);
        Federation::create([
            'name'      => 'Juniores',
            'state'     => 'Espírito Santo',
        ]);
        Federation::create([
            'name'      => 'Baré Júnior',
            'state'     => 'Amazonas',
        ]);
    }
}
