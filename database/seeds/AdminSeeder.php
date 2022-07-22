<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::where('email', 'superadmin@gmail.com')->first();
        if (is_null($user)) {
            $user = new Admin();
            $user->name = "Super Admin";
            $user->email = "superadmin@gmail.com";
            $user->username = "superadmin";
            $user->password = Hash::make('11111111');
            $user->save();
        }
    }
}
