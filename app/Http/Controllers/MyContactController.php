<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\MyContactM;
use Illuminate\Http\Request;

class MyContactController extends Controller
{

    // public function view_contact(){
    //     $new_contact = Member::all();
    //     return view('myContacts.newChat')->with('new_contact', $new_contact);
    // }

    // public function one_contact(string $id){
    //     $contact_on = Member::find($id);
    //     return view('myContacts.oneContact')->with('contact_on', $contact_on);
    // }

    public function index()
    {
        $myContact = MyContactM::all();
        return view('myContacts.index')->with('myContact', $myContact);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = VideoM::find($id);
        $video->delete();
        return back();
    }
}
