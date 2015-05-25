<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Worker;
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
            'email' => 'required',
            'password' => 'required',
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {





            return Redirect::to('creartreballador')
                ->withInput()->withFlashMessage('Treballador creat incorrectament.');

        } else {
            $treballador = new Worker();

            $treballador->name = Input::get('name');
            $treballador->lastname = Input::get('lastname');
            $treballador->dni = Input::get('dni');
            $treballador->birthdate = Input::get('birthdate');
            $treballador->email = Input::get('email');
            $treballador->password = Hash::make(Input::get('password'));

            $treballador->save();
            return Redirect::to('llistartreballador');

        }
    }

    public function llistartreballador()
    {

        $data['treballador'] = Worker::all();

        return View::make('treballadors.llistartreballador', $data);
    }
}