<?php

namespace Modules\Form\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(\Modules\Form\Entities\Client::class, 5)->states(\Modules\Form\Entities\Client::TYPE_INDIVIDUAL)->create();
        factory(\Modules\Form\Entities\Client::class, 5)->states(\Modules\Form\Entities\Client::TYPE_LEGAL)->create();
    }
}
