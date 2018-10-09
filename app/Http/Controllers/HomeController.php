<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussiontopic;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussiontopic = Discussiontopic::all();
        return view('home', compact('discussiontopic'));
    }

    public function getRelatedTopics()
    {
        $discussion_topics = Discussiontopic::pluck('title');
        $topArray = array();
        $tVal = '';
        foreach ($discussion_topics as $key => $value) {
            $tVal .= $value.",";
        }
        $tValArr = explode(",", $tVal);
        array_pop($tValArr); 
        return $discussion_topics;
    }
}