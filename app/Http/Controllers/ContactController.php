<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
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
        return view('frontend.contact-us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$rules = [
    		'name'=> 'required | max:250',
    		'email' => 'required | email | max:250',
    		'subject' => 'required | max:250',
    		'message' => 'required',
    	];

    	$message = [
    		'name.required' => 'Name Is Required',
    		'name.max' => 'Name cannot be more than 255 chracters',
    		'email.required' => 'Email is required',
    		'email.max' => 'Email cannot be more than 255 chracters',
    		'email.email' => 'Email must be valid email',
    		'subject.required' => 'Subject is required',
    		'subject.max' => 'Subject cannot be more thata 255 characters',
    		'message.required' => 'Message is required ',
    	];
    	$this->validate($request, $rules, $message);
        $data = $request->all();
        $contact = new Contact($data);
        $contact->save();
        Session::flash('success_message', 'Your Message has been Sent');
        return redirect()->back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
