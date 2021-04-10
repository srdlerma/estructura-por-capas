<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usersmodel;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $full=Faker::create();

        for ($i=0;$i<=50;$i++)   {
            Usersmodel::create([
                'names'     =>$full->name,
                'last_names'=>$full->lastName,
                'email'     =>$full->email,
                'phone'     =>$full->phoneNumber
            ]);
        }
    }
}
