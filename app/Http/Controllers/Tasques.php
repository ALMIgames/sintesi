<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Task;
use App\User;
use App\Client;
use App\Mail;
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
    | Tasques
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

            $tasca->id_client = Auth::user()->id_persona;

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

    public function asignartasca($id)
    {
        $tasca = Task::find($id);

        $treballador = Worker::where('id', Auth::user()->id_persona)->first();

        if ($tasca->id_worker == '0') {

            $tasca->id_worker = $treballador->id;

            $tasca->update();
        }


        return Redirect::to('llistartasca');
    }

    public function tascaproces($id)
    {
        $tasca = Task::find($id);

        $tasca->complete = '1';

        $tasca->update();


        $data['tasca'] = Task::find($id);

        $data['client'] = Client::where('id', $data['tasca']->id_client)->get();

        $data['treballador'] = Worker::where('id', $data['tasca']->id_worker)->get();

        $treballador = Worker::where('id', $data['tasca']->id_worker)->first();

        $treballador->tasquescompletes -= 1;

        $treballador->update();

        return Redirect::to('inici');
    }


    public function tascacompleta($id)
    {
        $tasca = Task::find($id);

        $tasca->complete = '2';

        $tasca->update();


        $data['tasca'] = Task::find($id);

        $data['client'] = Client::where('id', $data['tasca']->id_client)->first();

        $data['treballador'] = Worker::where('id', $data['tasca']->id_worker)->first();

        $treballador = Worker::where('id', $data['tasca']->id_worker)->first();

        $treballador->tasquescompletes += 1;

        $treballador->update();



        $mail = new Mail();

        $mail->mail_to = $data['client']->email;
        $mail->subject = 'Avis d\'actualització de la tasca #' . $data['tasca']->id;
        $mail->message = 'La tasca amb id #' . $data['tasca']->id . ' ha sigut marcada com a completada.';
        $mail->mail_from = $data['treballador']->email;

        $mail->save();

        $id = $mail->id;
        $mail = Mail::find($id);

        $mail->update(array("thread" => $id));



        return Redirect::to('inici');
    }
}