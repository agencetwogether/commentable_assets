<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $post = Post::create([
            'title' => 'First Post',
            'body' => 'Content ...',
        ]);

        $post->comments()->create([
            'body' => '<p>Hi</p>',
            'author_id' => $user->getKey(),
            'author_type' => $user->getMorphClass(),
        ]);

        DB::table('notifications')->insert([
            'id' => 'ae17375b-3e4e-4a6f-a613-8b8d1361148c',
            'type' => 'Filament\Notifications\DatabaseNotification',
            'notifiable_type' => 'App\Models\User',
            'notifiable_id' => 1,
            'data' => '{"actions":[],"body":null,"color":null,"duration":"persistent","icon":null,"iconColor":null,"iconSize":null,"status":null,"title":"Saved successfully","view":null,"viewData":[],"format":"filament"}',
            'read_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
