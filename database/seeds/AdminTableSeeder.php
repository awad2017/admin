<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new Admin;
      $admin->name = 'Super Admin';
      $admin->email = 'super_admin@app.com';
      $admin->password = bcrypt('123456789');
      $admin->save();
    }
}
