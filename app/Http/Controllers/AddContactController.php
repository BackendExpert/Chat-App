<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\MyContactM;
use Illuminate\Http\Request;

class AddContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $new_contact = Member::all();
        return view('addContact.index')->with('new_contact', $new_contact);
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
        $this->validate($request, [
            'owner' => 'required',
            'contact_name' => 'required',
            'short_note' => 'required|string|max:50',
        ]);

        $new_contact = new MyContactM;
        $new_contact->owner = $request->owner;
        $new_contact->contact_name = $request->contact_name;
        $new_contact->short_note = $request->short_note;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $one_contact = Member::find($id);
        return view('addContact.show')->with('one_contact', $one_contact);
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
        //
    }
}
