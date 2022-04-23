<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Party;
use App\Models\Position;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function View_Position(){

        $data=Position::all();
        return view('Candidate.View_Position',compact('data'));
    }


    //====================Application=========================//

    public function Apply()
    {
 
 
       $data = Application::all();
         
 
       return view('Candidate.application', compact("data"));
    }
 
 
 
    public function uploadapplication(Request $request)
    {
 
       

       $data = new Application();
 
 
       $data->name = $request->name;
       $data->email = $request->email;
      
       $data->phone = $request->phone;
       $data->address = $request->address;
       $data->age = $request->age;
       $data->po_id = $request->po_id;
       $data->pa_id = $request->pa_id;
      
       $data->save();
       return redirect()->back()->with('message', 'Application Added successfully');
    }
 
 
   
 
 
    public function delete_application($id)
    {
       $data = Application::find($id);
       $data->delete();
       return redirect()->back()->with('message', 'Voters Deleted successfully');
    }

    public function View_Party()
    {
 
 
       $data = Party::all();
         
 
       return view('Candidate.View_Party', compact("data"));
    }
}
