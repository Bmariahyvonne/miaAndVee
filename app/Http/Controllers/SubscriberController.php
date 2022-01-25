<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('subscriber',['subscribers'=>$subscribers,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscribers = Subscriber::all();
        return view('subscriber',['subscribers'=>$subscribers,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscriber = new Subscriber();
        $subscriber->name = $request->input('name');
        $subscriber->location = $request->input('location');
        $subscriber->email = $request->input('email');
        $subscriber->episode = $request->input('episode');
        $subscriber->comment = $request->input('comment');
        $subscriber->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscriber = Subscriber::find($id);
        $subscribers = Subscriber::all();
        return view('subscriber',['subscribers'=>$subscribers,'subscriber'=>$subscriber,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscriber = Subscriber::find($id);
        $subscribers = Subscriber::all(); 
        return view('subscriber',['subscribers'=>$subscribers,'subscriber'=>$subscriber,'layout'=>'edit']);

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
        $subscriber = Subscriber::find($id);
        $subscriber->name = $request->input('name');
        $subscriber->location = $request->input('location');
        $subscriber->email = $request->input('email');
        $subscriber->episode = $request->input('episode');
        $subscriber->comment = $request->input('comment');
        $subscriber->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->delete();
        return redirect('/');
    }
}
