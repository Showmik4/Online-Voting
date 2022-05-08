<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Candidates;
use App\Models\Party;
use App\Models\Pcandidate;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   //

   public function index()
   {

      // $users=User::find(Auth::user());
      return view('admin.welcome_page');
   }


   public function redirect()
   {

      if (Auth::id()) {

         

         if (Auth::user()->usertype == '0') {

            //$users=User::find(Auth::user());
            return view('admin.adminhome');
         } 
         
         elseif(Auth::user()->usertype == '2'){

            return view('Candidate.candidatehome');

         }
         
         
         
         else {

          
          
            return view('user.userhome');
         }
      }
   }

  

   public function viewpcandidate()
   {
      $data = Pcandidate::all();
      return view('admin.president_candidates', compact("data"));
   }
   public function uploadpresident(Request $request)
   {
      $validate=$request->validate([
         'name' => 'required',
         'position' => 'required',
         'image' => 'required',
      
        
        
     ]);
    
if($validate){
      $data = new Pcandidate();
      $image = $request->image;
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      $request->image->move('presidentimage', $imagename);
      $data->image = $imagename;
      $data->name = $request->name;
      $data->position = $request->position;
      $data->total_votes = $request->total_votes;
      $data->save();
      return redirect()->back()->with('message', 'President Added successfully');
}
else{
   return $request->input();
}
   }

   public function update_president($id)
   {

      $data = Pcandidate::find($id);
      return view('admin.Update_President', compact('data'));
   }

   public function Edit_President(Request $request, $id)
   {
      $data = Pcandidate::find($id);


      $data->name = $request->name;
      $data->position = $request->position;

      $image = $request->image;
      if ($image) {

         $imagename = time() . '.' . $image->getClientoriginalExtension();

         $request->image->move('presidentimage', $imagename);
         $data->image = $imagename;
      }
      $data->save();

      return redirect()->back()->with('message', 'President Updated successfully');
   }

   public function Delete_President($id)
   {
      $data = Pcandidate::find($id);
      $data->delete();
      return redirect()->back()->with('message', 'President Deleted successfully');
   }

   public function voters()
   {


      $data = DB::table('users')
         ->where('usertype', '=', 1)
         ->get();

      return view('admin.voters', compact("data"));
   }



   public function uploadvoter(Request $request)
   {

      $validate=$request->validate([
         'name' => 'required',
         'email' => 'required',
         'phone' => 'required',
         'address' => 'required',
         'password' => 'required',
        
     ]);
    
if($validate){
      $data = new User();


      $data->name = $request->name;
      $data->email = $request->email;
      $data->password = bcrypt($request->password);
      $data->phone = $request->phone;
      $data->address = $request->address;
      $data->usertype = '1';
      $data->save();
      return redirect()->back()->with('message', 'Voters Added successfully');
}
else{
   return $request->input();
}
   }


   public function update_voters($id)
   {

      $data = user::find($id);
      return view('admin.Update_Voter', compact('data'));
   }

   public function edit_voters(Request $request, $id)
   {

      $data = user::find($id);


      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->address = $request->address;



      $data->save();

      return redirect()->back()->with('message', 'Voters Updated successfully');
   }


   public function delete_voters($id)
   {
      $data = user::find($id);
      $data->delete();
      return redirect()->back()->with('message', 'Voters Deleted successfully');
   }

//==============================Position=====================//
   public function Get_Position()
   {

      $data = Position::all();
      return view('admin.Get_Position', compact('data'));
   }

   public function Upload_Position(Request $request)
   {

      $validate=$request->validate([
         'description' => 'required',
         'max_votes' => 'required',
         'priority'=>'required'
     ]);

   
     if($validate){

    

      $data = new Position();


      $data->description = $request->description;
      $data->max_votes = $request->max_votes;
      $data->priority = $request->priority;

      $data->save();
      return redirect()->back()->with('message', 'Position Added successfully');
     }

     else{
        return $request->input();
     }
   
   }

   public function update_position($id)
   {

      $data = Position::find($id);
      return view('admin.Update_Position', compact('data'));
   }

   public function edit_position(Request $request, $id)
   {

      $data = Position::find($id);


      $data->description = $request->description;
      $data->max_votes = $request->max_votes;
      $data->priority = $request->priority;


      $data->save();

      return redirect()->back()->with('message', 'Position Updated successfully');
   }


   public function delete_position($id)
   {
      $data = Position::find($id);
      $data->delete();
      return redirect()->back()->with('message', 'Position Deleted successfully');
   }


//===============================================Candidate=======================//
   public function Get_Candidate()
   {

      return view('admin.Get_Candidates');
   }

   public function Upload_Candidate(Request $request)
   {

      
      $data = new Candidates();
      $image = $request->image;
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      $request->image->move('candidateimage', $imagename);
      $data->image = $imagename;
      $data->position_id = $request->position_id;
      $data->name = $request->name;
      $data->platform = $request->position;
      $data->total_votes = $request->total_votes;
      $data->save();
      return redirect()->back()->with('message', 'President Added successfully');
   }


   //=================================Applicant Crud========================//

   public function applicants()
   {


      $data = DB::table('users')
         ->where('usertype', '=', 2)
         ->get();

      return view('admin.applicant', compact("data"));
   }



   public function uploadapplicants(Request $request)
   {

      $validate=$request->validate([
         'name' => 'required',
         'email' => 'required',
      
         'phone' => 'required',
         'address' => 'required',
       
         'password' => 'required',
        
     ]);
if($validate){

      $data = new User();


      $data->name = $request->name;
      $data->email = $request->email;
      $data->password = bcrypt($request->password);
      $data->phone = $request->phone;
      $data->address = $request->address;
      $data->usertype = '2';
      $data->save();
      return redirect()->back()->with('message', 'Applicants Added successfully');

}

else{
   return $request->input();
}
   }


   public function update_applicants($id)
   {

      $data = user::find($id);
      return view('admin.Update_Voter', compact('data'));
   }

   public function edit_applicants(Request $request, $id)
   {

      $data = user::find($id);


      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->address = $request->address;



      $data->save();

      return redirect()->back()->with('message', 'Voters Updated successfully');
   }


   public function delete_applicants($id)
   {
      $data = user::find($id);
      $data->delete();
      return redirect()->back()->with('message', 'Voters Deleted successfully');
   }


   //==========================Party========================//
   public function Get_Party()
   {

      $data = Party::all();
      return view('admin.Get_Party', compact('data'));
   }

   public function Upload_Party(Request $request)
   {

      $validate=$request->validate([
         'party_name' => 'required',
        
     ]);

     if($validate){

      $data = new Party();


      $data->party_name = $request->party_name;
    
      $data->save();
      return redirect()->back()->with('message', 'Party Added successfully');
     }

     else{

      return $request->input();
     }
     
   }


   public function update_party($id)
   {

      $data = Party::find($id);
      return view('admin.Update_Party', compact('data'));
   }

   public function edit_party(Request $request, $id)
   {

      $data = Party::find($id);


      $data->name = $request->name;
     


      $data->save();

      return redirect()->back()->with('message', 'Party Updated successfully');
   }


   public function delete_party($id)
   {
      $data = Party::find($id);
      $data->delete();
      return redirect()->back()->with('message', 'Party Deleted successfully');
   }

//=================================Application=====================//

public function Get_Application(){

   $data=DB::table('appliation')
   
   ->join('positions','appliation.po_id','positions.id')
   ->join('party','appliation.pa_id','party.id')
   ->select('appliation.*','positions.description','party.party_name')->get();
   
   return view('admin.GetApplication',compact('data'));



}
 
public function approve_application($id)
{
  
    $data=Application::find($id);
    $data->status='Approve';
    $data->save();
    return redirect()->back();


}

public function cancelled_application($id)
{
  
    $data=Application::find($id);
    $data->status='Cancelled';
    $data->save();
    return redirect()->back();


}


public function All_Application(){

   $data=DB::table('appliation')
   
   ->join('positions','appliation.po_id','positions.id')
   ->join('party','appliation.pa_id','party.id')
   ->select('appliation.*','positions.description','party.party_name')->get();
   
   return view('Candidate.AllApplication',compact('data'));



}

//=======================Result===================//

public function get_result(){

   $data = Pcandidate::all();
 
   return view('admin.result',compact('data'));
}

public function get_admin_home(){

  
 
   return view('admin.adminhome');
}

}
