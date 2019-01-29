<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Message;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response


     */


   
  
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required'

      ]);
        $message= new Message;
      $message->name=$request->input('name');
      $message->email=$request->input('email');
      $message->message=$request->input('message');
      //Save Message
      $message->save();
        //Redirect
        return redirect('/')->with('success', 'Message Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

         $messages=Message::all();
      return view('messages')->with('messages',$messages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $message=Message::findOrFail($id);
        return view('show',compact('message')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       $message=Message::findOrFail($id);
       $message->update($request->all());
       return redirect('/todo/messages');
       //return redirect('/messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         $message=Message::whereId($id)->delete();
             return redirect('/todo/messages');

    }
}
