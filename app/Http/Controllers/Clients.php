<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Client;
use App\User;
use App\Task;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Hash;
use View;


class Clients extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Clients
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function crearclient()
    {

        $data = Input::all();

        $rules = array(
            'name' => 'required',
            'lastname' => 'required',
            'dni' => 'required',
            'birthdate' => 'required',
            'email' => 'required|email|unique:worker',
            'password' => 'required|min:5',
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            return Redirect::to('crearclient')
                ->withInput()->withFlashMessage('Error al crear el client.');

        } else {
            $client = new Client();

            $client->name = Input::get('name');
            $client->lastname = Input::get('lastname');
            $client->dni = Input::get('dni');
            $client->birthdate = Input::get('birthdate');
            $client->email = Input::get('email');
            $client->location = Input::get('location');

            $client->save();

            $usu = new User();

            $usu->name = Input::get('name');
            $usu->email = Input::get('email');
            $usu->password = bcrypt(Input::get('password'));
			$usu->id_persona = $client->id;
            $usu->tipususuari = '3';

            $usu->save();


            return Redirect::to('llistarclient');

        }
    }

    public function llistarclient()
    {

        $data['client'] = Client::all();

        return View::make('clients.llistarclient', $data);
    }

    public function clientprivat($id)
    {
        $client = Client::find($id);

        $client->privat = 1;

        $client->update();

        return Redirect::to('veureclient/'.$id);
    }

    public function clientpublic($id)
    {
        $client = Client::find($id);

        $client->privat = 0;

        $client->update();

        return Redirect::to('veureclient/'.$id);
    }

    public function esborrarclient($id)
    {
        $usu = User::where('id_persona', $id)->first();
        $usu->delete();

        Client::destroy($id);
        return Redirect::to('llistarclient');
    }

    public function veureclient($id)
    {
        $data['client'] = Client::find($id);
        $tasques = Task::where('id_client', $data['client']->id);
        $data['tasques'] = $tasques->get();
        $data['tasquescompletes'] = $tasques->where('complete', '!=', 2)->count();

        return View::make('clients.veureclient', $data);
    }
}