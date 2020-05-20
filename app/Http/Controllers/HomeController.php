<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     *
     * @throws \Exception
     */
    public function jsonProcessing (Request $request)
    {
        //$request = \Illuminate\Support\Facades\Request::all();

        $data[1]['date']  = $request['date'];
        $data[1]['level'] = $request['level'];
        $data[1]['text']  = $request['text'];
        $data[1]['value'] = $request['value'];

        $oldFile = json_decode(file_get_contents('./data.json'),true);
        $newFile = array_merge($oldFile,$data);
        file_put_contents('./data.json',json_encode($newFile));

        $test = json_decode(file_get_contents('./data.json'),true);

        //dd($test);
        return view('welcome',['data'=>$data]);

    }

    public function show ()
    {
        $test = json_decode(file_get_contents('./data.json'),true);

        return view('table',['arr' => $test]);
    }
}
