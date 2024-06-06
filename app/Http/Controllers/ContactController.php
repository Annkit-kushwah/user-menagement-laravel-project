<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ContactValidate;
use App\models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contacts = Contact::where('user_id',Auth::id())->paginate(5);
        $search = $request->input('search', null);
        if($search){
            $contacts = Contact::where('first_name','LIKE','%' . $search.'%')
            ->orwhere('last_name','LIKE','%'. $search.'%')
            ->orwhere('mo_no','LIKE','%'. $search.'%')
            ->where('user_id',Auth::id())
            ->paginate(1);
        }
       return View('contacts.list',compact('contacts','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactValidate $request)
    {
        $contact = new contact();
        $contact->user_id = Auth::id();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->mo_no = $request->mo_no;
        $contact->save();

        return redirect('contact/list')->with('success', 'Contact created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::find($id);
        return view('contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactValidate $request)
    {
        $contact =  contact::find($request->id);
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->mo_no = $request->mo_no;
        $contact->save();

        return redirect('contact/list')->with('success', 'Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $contact = Contact::find($id);
       $contact->delete();
       return redirect('contact/list')->with('success', 'contact deleted successfully');
    }
}
