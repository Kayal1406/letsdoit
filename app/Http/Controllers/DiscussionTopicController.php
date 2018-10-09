<?php

namespace App\Http\Controllers;
use App\Discussiontopic;

use Illuminate\Http\Request;

class DiscussionTopicController extends Controller
{
    public function add()
    {
        return view('add-topic');
    }

    public function store(Request $request)
    {
        // $imageName = time().'.'.$request->image_file->getClientOriginalExtension();
        // $request->image_file->move(public_path('images'), $imageName);        
        
        // $topics               =   new Discussiontopic();
        // $topics->user_id      =   $request->user_id;
        // $topics->title        =   $request->topic;
        // $topics->description  =   $request->description;
        // $topics->save();
        
        $discussiontopic = Discussiontopic::all();
        return view('home', compact('discussiontopic'));
    }

    public function show($id)
    {
        $discussiontopic = Discussiontopic::join('users', 'discussiontopic.user_id', 'users.id')
                            ->find($id);
        return view('discussion-detail', compact('id', 'discussiontopic'));
    }
}
