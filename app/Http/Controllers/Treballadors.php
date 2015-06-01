<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Worker;
use App\User;
use App\Task;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Hash;
use View;

class Treballadors extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Treballadors
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

    public function creartreballador()
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

            return Redirect::to('creartreballador')
                ->withInput()->withFlashMessage('Error al crear el treballador.');

        } else {
            $treballador = new Worker();

            $treballador->name = Input::get('name');
            $treballador->lastname = Input::get('lastname');
            $treballador->dni = Input::get('dni');
            $treballador->birthdate = Input::get('birthdate');
            $treballador->email = Input::get('email');
            $treballador->location = Input::get('location');

            $treballador->save();

            $usu = new User();

            $usu->name = Input::get('name');
            $usu->email = Input::get('email');
            $usu->password = bcrypt(Input::get('password'));
            $usu->id_persona = $treballador->id;
            $usu->tipususuari = '2';

            $usu->save();

            return Redirect::to('llistartreballador');

        }
    }

    public function llistartreballador()
    {

        $data['treballador'] = Worker::all();

        return View::make('treballadors.llistartreballador', $data);
    }

    public function esborrartreballador($id)
    {
        Worker::destroy($id);
        return Redirect::to('llistartreballador');
    }

    public function veuretreballador($id)
    {
        $data['treballador'] = Worker::find($id);
        $tasques = Task::where('id_worker', $data['treballador']->id);
        $data['tasques'] = $tasques->get();
        $data['tasquesincompletes'] = $tasques->where('complete', '!=', 2)->count();

        return View::make('treballadors.veuretreballador', $data);
    }
}