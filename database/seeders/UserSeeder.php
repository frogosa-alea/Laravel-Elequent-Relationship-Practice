<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Contact,
    Contactinformation
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('password')
        ]);

        Contact::create([
            'user_id'=>1,
            'phone_no'=>'09478481554',
            'address'=>'Address Test'
        ]);

        Contactinformation::create([
            'contact_id'=>1,
            'pincode'=>'44333',
            'near_by'=>'xyz place',
            'extra_detail'=>'more information about the address'
        ]);
    }
}
