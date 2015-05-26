<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Task;
use App\User;
use App\Client;
use App\Worker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Hash;
use View;
use Session;

class Tasques extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Tascas
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

    public function creartasca()
    {

        $data = Input::all();

        $rules = array(
            'resum' => 'required',
            'task' => 'required',
            'id_client' => '',
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            return Redirect::to('creartasca')
                ->withInput()->withFlashMessage('Error al crear la tasca.');

        } else {

            $tasca = new Task();

            $tasca->resum = Input::get('resum');
            $tasca->task = Input::get('task');
            $tasca->id_client = Auth::user()->id;

            $tasca->save();
            return Redirect::to('llistartasca');

        }
    }

    public function llistartasca()
    {

        $data['tasca'] = Task::all();

        return View::make('tasques.llistartasca', $data);
    }

    public function esborrartasca($id)
    {
        Task::destroy($id);
        return Redirect::to('llistartasca');
    }

    public function veuretasca($id)
    {
        $data['tasca'] = Task::find($id);

        $data['client'] = Client::where('id', $data['tasca']->id_client)->get();

        $data['treballador'] = Worker::where('id', $data['tasca']->id_worker)->get();

        return View::make('tasques.veuretasca', $data);
    }
}