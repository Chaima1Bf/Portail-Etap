<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class ContactController extends Controller
{
    // index page
    public function allcontacts()
    {
        $allContacts = DB::table('contacts')->get();
        return view('livewire.billing',compact('allContacts'));
    }

    // add contact page
    public function addContact()
    {
        $data = DB::table('room_types')->get();
        $user = DB::table('users')->get();
        return view('contacts.addcontact',compact('user','data'));
    }

    // edit contact
    public function editContact($id)
    {
        $contactEdit = DB::table('contacts')->where('id',$id)->first();
        $data = DB::table('room_types')->get();
        $user = DB::table('users')->get();
        return view('contacts.editcontact',compact('user','data','contactEdit'));
    }

    // save record Contact
    public function saveRecordContact(Request $request)
    {
        $request->validate([
            'full_name'          => 'required|string|max:255',
            'position'          => 'required|string|max:255',
            'email'  => 'required|string|max:255',
            'fileupload'    => 'required|file',
        ]);

        DB::beginTransaction();
        try {

            $photo= $request->fileupload;
            $file_name = rand() . '.' .$photo->getClientOriginalName();
            $photo->move(public_path('/assets/upload/'), $file_name);
            $contact = new Contact;
            $contact->full_name         = $request->full_name;
            $contact->position    = $request->position;
            $contact->email    = $request->email;
            $contact->fileupload   = $file_name;
            $contact->save();

            DB::commit();
            Toastr::success('Create new contact successfully :)','Success');
            return redirect()->route('allcontacts/page');

        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add Contact fail :)','Error');
            return redirect()->back();
        }
    }

    // update record
    public function updateRecord(Request $request)
    {
        DB::beginTransaction();
        try {

            if (!empty($request->fileupload)) {
                $photo = $request->fileupload;
                $file_name = rand() . '.' . $photo->getClientOriginalExtension();
                $photo->move(public_path('/assets/upload/'), $file_name);
            } else {
                $file_name = $request->hidden_fileupload;
            }

            $update = [
                'id' => $request->id,
                'full_name'   => $request->full_name,
                'position'  => $request->position,
                'email'  => $request->email,
                'fileupload'=> $file_name,
            ];
            Room::where('id',$request->id)->update($update);

            DB::commit();
            Toastr::success('Updated contact successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Update contact fail :)','Error');
            return redirect()->back();
        }
    }

    // delete record
    public function deleteRecord(Request $request)
    {
        try {

            Room::destroy($request->id);
            unlink('assets/upload/'.$request->fileupload);
            Toastr::success('Contact deleted successfully :)','Success');
            return redirect()->back();

        } catch(\Exception $e) {

            DB::rollback();
            Toastr::error('Contact delete fail :)','Error');
            return redirect()->back();
        }
    }
}
