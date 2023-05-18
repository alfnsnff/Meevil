<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'asep',
            'handle' => 'asepIndah',
            'avatar' => '../imgs/ava1.jpg',
            'pops' => 5,
            'email' => 'alfnsnff@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'ucupp',
            'handle' => 'ucupMaklimah',
            'avatar' => '../imgs/ava1.jpg',
            'pops' => 5,
            'email' => 'alfan.s.nufi@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\Pops::create([
            'user_id' => 1,
            'tweet' => 'Hallu Guys, Cute ah',
            'file' => '../imgs/meme1.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 1,
            'tweet' => 'MIkirrrr',
            'file' => '../imgs/meme2.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 2,
            'tweet' => 'Banggg.. udah.. bang',
            'file' => '../imgs/meme3.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 2,
            'tweet' => 'Mama, aku masuk tv!!!',
            'file' => '../imgs/meme4.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 2,
            'tweet' => 'Aku? jadi duta shampo lain',
            'file' => '../imgs/meme5.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 2,
            'tweet' => 'Eaaaaaaa',
            'file' => '../imgs/meme6.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 1,
            'tweet' => 'Go Go Go Go Power Rangerrss!!!',
            'file' => '../imgs/meme7.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 1,
            'tweet' => 'wah wah wah!!!',
            'file' => '../imgs/meme8.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 2,
            'file' => '../imgs/meme9.jpeg' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 1,
            'tweet' => 'Ngakak ahahaha!!!',
            'file' => '../vids/meme10.mp4' ,
        ]);
        \App\Models\Pops::create([
            'user_id' => 2,
            'tweet' => 'Maklimah biadab sangat',
            'file' => '../vids/meme11.mp4' ,
        ]);
    }
}
