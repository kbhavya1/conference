<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Registration;
use Illuminate\Support\Facades\Redirect;

class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $store = new Registration();
        $store->name = $request->get('fname');
        $store->email = $request->get('femail');
        $store->contact = $request->get('fcontact');
        $store->cat_id = $request->get('cat_id');
        $store->save();

       // Redirect::away('/payment');

        return view('frontend.payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $name = $request->name;
        $email =$request->email;
        $contact = $request->contact;
        $amount = $request->amount;

        $details = array($name,$email,$contact,$amount);

        //dd($details);

        return view('frontend.finalform',["info"=>$details]);
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
