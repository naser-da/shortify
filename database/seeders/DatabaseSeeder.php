<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Link;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        foreach ($users as $user) {
            Link::factory(5)->create([
                'user_id' => $user->id,
            ]);
        }

        $users = User::factory(20)->create();

        foreach ($users as $user) {
            Link::factory(2)->create([
                'user_id' => $user->id,
            ]);
        }

        $users = User::factory(30)->create();

        foreach ($users as $user) {
            Link::factory(1)->create([
                'user_id' => $user->id,
            ]);
        }

        $users = User::factory(5)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
