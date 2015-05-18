<?php namespace App\Http\Controllers;

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

    public function creartreballador(Request $request) {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'cognom' => 'required',
            'dni' => 'required',
            'datanaixement' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('treballadors/creartreballadors')
                ->withErrors($validator->errors()->all())
                ->withInput();
        }
    }
}
