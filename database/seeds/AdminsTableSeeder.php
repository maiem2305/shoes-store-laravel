<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Admin::class, 3)->create();

        App\Models\Admin::find(1)->update([
            'name' => 'Administrator',
            'email' => 'admin@shoesstore.com',
            'password' => 'secret',
        ]);
    }
}
