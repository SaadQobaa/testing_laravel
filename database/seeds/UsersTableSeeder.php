<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->delete();
    User::create(array(
        'name'     => 'Saad Qobaa',
        'username' => 'Saad',
        'email'    => 'admin@admin.io',
        'password' => Hash::make('admin'),
    ));
    }
}
