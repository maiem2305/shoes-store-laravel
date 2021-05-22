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
        factory(App\Models\Admin::class, 2)->create();

        App\Models\Admin::find(1)->update([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '23051998',
        ]);
    }
}
