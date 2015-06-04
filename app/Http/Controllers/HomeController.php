<?php namespace App\Http\Controllers;
use View;
class HomeController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Home Controller
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
        $data = array();
        $data['treballadors'] = \App\Worker::all();
        $data['clients'] = \App\Client::all();
        $tasques = \App\Task::all();
        $data['tasques'] = \App\Task::all();
        $data['tasquescompletes'] = \App\Task::where('complete', 2)->count();

        $centpercent = $tasques->count();
        $tasquescompletes = $data['tasquescompletes'];
        $percent = $tasquescompletes / $centpercent;
        $data['percent'] = $percent*100;

        $data['centpercent'] = $centpercent;


        $tasquesrestants = $centpercent - $data['tasquescompletes'];
        $data['tasquesrestants'] = $tasquesrestants;
        $data['rank'] = \App\Worker::orderBy('tasquescompletes', 'desc')->get();
        $data['ranktasquesrecents'] = \App\Task::orderBy('created_at', 'desc')->get();
        $data['rank'] = \App\Worker::orderBy('tasquescompletes', 'desc')->get();
        $data['ranktasquescompletes'] = \App\Task::orderBy('created_at', 'desc')->where('complete', 2)->get();
        return View::make('pages.home', $data);
    }
}