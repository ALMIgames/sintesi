<?php
use App\User;
use App\Worker;
use App\Client;
use App\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
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
        $this->call('TaskTableSeeder');
        $this->command->info('Task table seeded!');

    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'tipususuari' => 1,
            'id_persona' => 0,
        ]);
    }
}

class ClientTableSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'name' => 'client1',
            'lastname' => 'client1lastname',
            'dni' => 'client1dni',
            'birthdate' => '13/12/2010',
            'location' => 'client1location',
            'email' => 'client1@client.com',
        ]);
        User::create([
            'name' => 'client1',
            'email' => 'client1@client.com',
            'password' => bcrypt('password'),
            'tipususuari' => 3,
            'id_persona' => 1,
        ]);

        Client::create([
            'name' => 'client2',
            'lastname' => 'client2lastname',
            'dni' => 'client2dni',
            'birthdate' => '12/01/2000',
            'location' => 'client2location',
            'email' => 'client2@client.com',
        ]);
        User::create([
            'name' => 'client2',
            'email' => 'client2@client.com',
            'password' => bcrypt('password'),
            'tipususuari' => 3,
            'id_persona' => 2,
        ]);

        Client::create([
            'name' => 'client3',
            'lastname' => 'client3lastname',
            'dni' => 'client3dni',
            'birthdate' => '13/12/2010',
            'location' => 'client3location',
            'email' => 'client3@client.com',
        ]);
        User::create([
            'name' => 'client3',
            'email' => 'client3@client.com',
            'password' => bcrypt('password'),
            'tipususuari' => 3,
            'id_persona' => 3,
        ]);

        Client::create([
            'name' => 'client4',
            'lastname' => 'client4lastname',
            'dni' => 'client4dni',
            'birthdate' => '3/08/1993',
            'location' => 'client4location',
            'email' => 'client4@client.com',
        ]);
        User::create([
            'name' => 'client4',
            'email' => 'client4@client.com',
            'password' => bcrypt('password'),
            'tipususuari' => 3,
            'id_persona' => 4,
        ]);

        Client::create([
            'name' => 'client5',
            'lastname' => 'client5lastname',
            'dni' => 'client5dni',
            'birthdate' => '08/12/1994',
            'location' => 'client5location',
            'email' => 'client5@client.com',
        ]);
        User::create([
            'name' => 'client5',
            'email' => 'client5@client.com',
            'password' => bcrypt('password'),
            'tipususuari' => 3,
            'id_persona' => 5,
        ]);
    }
}

class WorkerTableSeeder extends Seeder
{
    public function run()
    {
        Worker::create([
            'name' => 'treballador1',
            'lastname' => 'treballador1lastname',
            'dni' => 'treballador1dni',
            'birthdate' => '03/08/1993',
            'location' => 'treballador1location',
            'email' => 'treballador1@treballador.com',
            'tasquescompletes' => '3',
        ]);
        User::create([
            'name' => 'treballador1',
            'email' => 'treballador1@treballador.com',
            'password' => bcrypt('password'),
            'tipususuari' => 2,
            'id_persona' => 1,
        ]);

        Worker::create([
            'name' => 'treballador2',
            'lastname' => 'treballador2lastname',
            'dni' => 'treballador2dni',
            'birthdate' => '04/01/1998',
            'location' => 'treballador2location',
            'email' => 'treballador2@treballador.com',
            'tasquescompletes' => '2',
        ]);
        User::create([
            'name' => 'treballador2',
            'email' => 'treballador2@treballador.com',
            'password' => bcrypt('password'),
            'tipususuari' => 2,
            'id_persona' => 2,
        ]);

        Worker::create([
            'name' => 'treballador3',
            'lastname' => 'treballador3lastname',
            'dni' => 'treballador3dni',
            'birthdate' => '25/12/2001',
            'location' => 'treballador3location',
            'email' => 'treballador3@treballador.com',
            'tasquescompletes' => '1',
        ]);
        User::create([
            'name' => 'treballador3',
            'email' => 'treballador3@treballador.com',
            'password' => bcrypt('password'),
            'tipususuari' => 2,
            'id_persona' => 3,
        ]);

        Worker::create([
            'name' => 'treballador4',
            'lastname' => 'treballador4lastname',
            'dni' => 'treballador4dni',
            'birthdate' => '30/08/1974',
            'location' => 'treballador4location',
            'email' => 'treballador4@treballador.com',
            'tasquescompletes' => '0',
        ]);
        User::create([
            'name' => 'treballador4',
            'email' => 'treballador4@treballador.com',
            'password' => bcrypt('password'),
            'tipususuari' => 2,
            'id_persona' => 4,
        ]);

        Worker::create([
            'name' => 'treballador5',
            'lastname' => 'treballador5lastname',
            'dni' => 'treballador5dni',
            'birthdate' => '23/07/1983',
            'location' => 'treballador5location',
            'email' => 'treballador5@treballador.com',
            'tasquescompletes' => '0',
        ]);
        User::create([
            'name' => 'treballador5',
            'email' => 'treballador5@treballador.com',
            'password' => bcrypt('password'),
            'tipususuari' => 2,
            'id_persona' => 5,
        ]);
    }
}

class TaskTableSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'resum' => 'Primera tasca resum',
            'task' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'id_client' => '1',
            'id_worker' => '1',
            'complete' => '2',
        ]);
        Task::create([
            'resum' => 'Seeder tasca incompleta',
            'task' => 'Consectetur adipiscing elit.',
            'id_client' => '3',
            'id_worker' => '0',
            'complete' => '0',
        ]);
        Task::create([
            'resum' => 'Seeder tasca incompleta 2',
            'task' => 'Nam vitae justo nunc. Donec ullamcorper efficitur odio, quis porttitor lectus sollicitudin sit amet.',
            'id_client' => '3',
            'id_worker' => '5',
            'complete' => '0',
        ]);
        Task::create([
            'resum' => 'Segona tasca resum',
            'task' => 'ivamus sem turpis, molestie at urna commodo, imperdiet pharetra leo.',
            'id_client' => '1',
            'id_worker' => '1',
            'complete' => '2',
        ]);
        Task::create([
            'resum' => 'Tercera tasca resum',
            'task' => 'Etiam lectus odio, porta quis semper vel, aliquam id tellus. Aliquam quis ultrices ipsum. Suspendisse magna massa, mollis sit amet sapien eget, tempus venenatis tellus.',
            'id_client' => '2',
            'id_worker' => '1',
            'complete' => '2',
        ]);
        Task::create([
            'resum' => 'Seeder tasca en proces',
            'task' => 'Ut eleifend fringilla libero, at elementum quam pulvinar bibendum.',
            'id_client' => '2',
            'id_worker' => '3',
            'complete' => '1',
        ]);
        Task::create([
            'resum' => 'Quarta tasca resum',
            'task' => 'Sed vel laoreet erat, in feugiat augue. ',
            'id_client' => '4',
            'id_worker' => '2',
            'complete' => '2',
        ]);
        Task::create([
            'resum' => 'Quinta tasca resum',
            'task' => 'Donec maximus a dui non eleifend. Aliquam in mattis quam. ',
            'id_client' => '4',
            'id_worker' => '2',
            'complete' => '2',
        ]);
        Task::create([
            'resum' => 'Sexta tasca resum',
            'task' => 'n vitae semper metus. In hac habitasse platea dictumst. Nullam ligula urna, aliquam ac facilisis eget, maximus eget eros. Aliquam pretium mauris non lacus rhoncus, eget vehicula nunc blandit. Donec ac lacus commodo, sollicitudin est tempus, congue eros. Cras purus mi, scelerisque a erat non, scelerisque congue enim. Aenean arcu nibh, porttitor vitae condimentum ac, lacinia eu dui.',
            'id_client' => '5',
            'id_worker' => '3',
            'complete' => '2',
        ]);
    }
}
