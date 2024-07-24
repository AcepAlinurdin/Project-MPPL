public function run()
{
    \App\Models\User::factory()->create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => bcrypt('password'),
        'role' => 'admin',
    ]);

    \App\Models\User::factory()->create([
        'name' => 'Regular User',
        'email' => 'user@example.com',
        'password' => bcrypt('password'),
        'role' => 'user',
    ]);
}
