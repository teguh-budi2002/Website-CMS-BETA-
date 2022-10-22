<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'TeguhSiAdminGuhCoding',
            'email' => 'saguplosantuy234@gmail.com',
            'password' => bcrypt('Teguhbudi1833'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
