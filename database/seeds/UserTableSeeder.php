<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertDefaultAdmin();
    }

    private function insertDefaultAdmin() {
        $userExists = DB::table('users')->where('first_name','=','admin')->exists();

        if(!$userExists) {
            //if admin does't exists on users table
            DB::table('users')->insert([
                'first_name' => 'محمدرضا',
                'last_name'  => 'بهمنی',
                'is_admin' => true,
                'email' => 'bahmani@gmail.com',
                'email_verified_at' => Carbon::now(),
                'phone_number'  => '025-37832834',
                'password' => Hash::make('admin@123'),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
