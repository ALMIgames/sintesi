<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail;
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

class Correus extends Controller
{

    /*
    |--------------------------------------------------------------------------
	| Correus Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
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
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function enviarcorreu()
    {
        $data = Input::all();

        $rules = array(
            'mail_to' => 'required',
            'subject' => 'required',
            'message' => 'required',
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            return Redirect::to('enviarcorreu')
                ->withInput()->withFlashMessage('Error al enviar el correu.');

        } else {

            $mail = new Mail();

            $mail->mail_to = Input::get('mail_to');
            $mail->subject = Input::get('subject');
            $mail->message = Input::get('message');
            $mail->mail_from = Auth::user()->email;

            $mail->save();

            $id = $mail->id;
            $mail = Mail::find($id);

            $mail->update(array("thread" => $id));

            return Redirect::to('enviarcorreu');

        }
    }

    public function mostrarcorreu($id)
    {
        $mail = new Mail();

        $mail = Mail::find($id);
        $mail->new = '1';
        if ($mail->mail_to == Auth::user()->email) {
            $mail->save();
        }

        $data['correu'] = Mail::find($id);

        return View::make('correus.mostrarcorreu', $data);
    }

    public function llistarcorreu()
    {
        $data['correus'] = Mail::where('mail_from', Auth::user()->email)->orWhere('mail_to', Auth::user()->email)->get();
        $data['usermail'] = Auth::user()->email;

        return View::make('correus.llistarcorreu', $data);

    }
}
