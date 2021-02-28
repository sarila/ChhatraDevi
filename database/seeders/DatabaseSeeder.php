<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Theme;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        Role::insert([
            'name'=>'Super Admin',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        Role::insert([
            'name'=>'Admin',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Role::insert([
            'name'=>'Editor',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Admin::insert([
            'firstname' => 'Sarila',
            'lastname' => 'Ngakhusi',
            'email' => 'ngakhusisarila@gmail.com',
            'password' => bcrypt('password'), 
            'role_id' => 1, 
            'phone' => '9861210872', 
            'address' => 'Bhaktapur', 
            'created_at' => now(), 
            'updated_at' => now()
        ]);

        Theme::insert([
            'website_name' => 'ChattraDevi Foundation',
        ]);

        Setting::insert([
            'site_title' => 'ChhatraDevi Foundation',
            'contact_number' => 1234567890,
            'email' => 'ChhatraDevi@gmail.com',
            'address' => 'Kathmandu, Nepal',
            'about_title' => 'WE CANT HELP EVERYONE BUT EVERYONE CAN HELP SOME ONE.',
            'about_us' => 'Chhatra Devi Foundation Nepal',
            'excerpt' => 'Chhatra Devi Foundation Nepal',
            'about_image' => 'sampleimage.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
      
    }
}
