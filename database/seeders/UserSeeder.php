<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user ->name = "Adittya Ardana";
        $user -> email = "adittyaardana12@gmail.com";
        $user -> password = bcrypt("1234");
        $user ->phone = "123456789";
        $user ->alamat = "Yogyakarata";
        $user ->role = "admin";
        $user->save();
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
