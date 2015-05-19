<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Worker;

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

    public function creartreballador(ContactFormRequest $request)
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

        if ($validator->passes()) {

            DB::insert('insert into workers (name, lastname, dni, birthdate, email, password)
              values ($name, $lastname, $dni, $birthdate, $email, $password)');


            return Redirect::route('home')
                ->with('message', 'Treballador creat correctament.');
        } else {

            return Redirect::route('home')
                ->with('error', 'Hi ha agut algun problema creant el treballador. Torna-ho a provar.');
        }
    }
}