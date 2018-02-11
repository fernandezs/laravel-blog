<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();
        User::create([
          'name'      => 'Sergio Fernandez',
          'email'     => 'sergofernandez.sdf@gmail.com',
          'password'  => bcrypt('admin')
        ]);
    }
}
