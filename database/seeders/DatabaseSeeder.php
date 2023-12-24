<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Answer;
use App\Models\Comment;
use App\Models\Question;
use App\Models\Report;
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
        // User::factory()->create([
        //     'role' => 'admin',
        //     'email' => 'admin@admin',
        //     'password' => bcrypt('12345'),
        //     'fullname' => 'Admin',
        //     'asal_kota' => 'BojongSoang',
        //     'deskripsi' => 'null',
        //     'photo_profile' => 'User.svg',
        //     'phone_number' => '555-0106',
        // ]);

        User::factory(20)->create();
        Question::factory(15)->create();
        Answer::factory(15)->create();
        Comment::factory(10)->create();
        Report::factory(5)->create();
    }
}
