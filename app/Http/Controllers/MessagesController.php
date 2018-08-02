<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class MessagesController extends Controller
{
    //To Get Input and Save into Database
    public function submit(Request $request){
        $this-> validate($request , [
            'title' => 'required',
            'description' => 'required'
        ]);
       $message = new Article;
       $message->title = $request->input('title');
       $message->description = $request->input('description');

       $message -> save();

       //To Redirect
       return redirect('/')-> with('success', 'Article has been sent');
    }
//To retrieve articles
    public function getArticle(){
        $messages = Article::all();
        return view('home')-> with('messages', $messages);
    }

    public function update($id){
        $messages = Article::find($id);
        return view('update')-> with('messages', $messages);
    }
}
