<?php
use App\User;
use App\Worker;
use App\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder {
    /*
     * php artisan db:seed
     * php artisan migrate:refresh --seed
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
        $this->call('ClientTableSeeder');
        $this->command->info('Client table seeded!');
        $this->call('WorkerTableSeeder');
        $this->command->info('Worker table seeded!');

    }
}
class UserTableSeeder extends Seeder {
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'tipususuari' => 1,
            'id_persona' => 1,
        ]);
    }
}
class ClientTableSeeder extends Seeder {
    public function run()
    {
        Client::create([
            'name' => 'client',
            'lastname' => 'clientlastname',
            'dni' => 'clientdni',
            'birthdate' => '13/12/2010',
            'location' => 'clientlocation',
            'email' => 'client@client.com',
        ]);
        User::create([
            'name' => 'client',
            'email' => 'client@client.com',
            'password' => bcrypt('clientclient'),
            'tipususuari' => 3,
            'id_persona' => 1,
        ]);
    }
}
class WorkerTableSeeder extends Seeder {
    public function run()
    {
        Worker::create([
            'name' => 'treballador',
            'lastname' => 'treballadorlastname',
            'dni' => 'treballadordni',
            'birthdate' => '13/12/2010',
            'location' => 'treballadorlocation',
            'email' => 'treballador@treballador.com',
        ]);
        User::create([
            'name' => 'treballador',
            'email' => 'treballador@treballador.com',
            'password' => bcrypt('treballadortreballador'),
            'tipususuari' => 2,
            'id_persona' => 3,
        ]);
    }
}
