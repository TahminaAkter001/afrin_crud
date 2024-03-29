<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizer;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{
    public function list()
    {
        $organizers = Organizer::all();
        return view('admin.pages.organizer.list', compact('organizers'));
    }

    Public function view($id){
        $organizers=Organizer::find($id);
        return view('admin.pages.organizer.view',compact('organizers'));
    }
    public function delete($id)
    {
      $organizers=Organizer::find($id);
      if($organizers)
      {
        $organizers->delete();
      }

      notify()->success('Deleted Successfully.');
      return redirect()->back();
    }

        public function edit($id){

        $organizers=Organizer::find($id);

        return view('admin.pages.organizer.edit',compact('organizers'));
        return redirect()->back();
}

    public function update(Request $request,$id){

        $organizers=Organizer::find($id);
        if( $organizers){


            $organizers->update(
                [
                    'organizer_name'=>$request->name,
                    'contact_info'=>$request->content
                   
                ]
                );
                notify()->success('your data has been Updated!');
                return redirect()->back();
        
            
        }
        
 }
public function form()

    {
        $organizers =Organizer::all();
        return view('admin.pages.organizer.form');
    }
    public function store(Request $request)
    {
        Organizer::create([
           
            'organizer_name'=>$request->name,
            'contact_info'=>$request->content,
            ]);
        
        return redirect()->back();
        
    }

}
