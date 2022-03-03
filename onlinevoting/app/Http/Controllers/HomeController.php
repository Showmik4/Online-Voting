<?php

namespace App\Http\Controllers;

use App\Models\Pcandidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    //
 public function redirect(){

   if(Auth::id())
   {
     
      if(Auth::user()->usertype=='0')
      {
         return view('admin.adminhome');
      }

      else{
         return view('user.userhome');
      }
   }

    
 }

 public function viewpcandidate(){
   $data=Pcandidate::all();
   return view('admin.president_candidates',compact("data"));

 }
 public function uploadpresident(Request $request){

   $data=new Pcandidate();
   $image=$request->image;
   $imagename=time().'.'.$image->getClientOriginalExtension();
   $request->image->move('presidentimage',$imagename);
   $data->image=$imagename;
   $data->name=$request->name;
   $data->position=$request->position;
   $data->total_votes=$request->total_votes;
   $data->save();
   return redirect()->back()->with('message','President Added successfully');
 }

 public function update_president($id){
       
   $data=Pcandidate::find($id);
   return view('admin.Update_President',compact('data'));

}

public function Edit_President(Request $request,$id){
   $data=Pcandidate::find($id);
     
     
      $data->name=$request->name;
      $data->position=$request->position;
  
      $image=$request->image;
      if($image){
   
      $imagename=time().'.'.$image->getClientoriginalExtension();
     
      $request->image->move('chefimage',$imagename);
      $data->image=$imagename;
      }
      $data->save();

      return redirect()->back()->with('message','President Updated successfully');

  }

  public function Delete_President($id){
   $data=Pcandidate::find($id);
   $data->delete();
   return redirect()->back()->with('message','President Deleted successfully');
}

public function voters(){
   
   
   $data=user::all();

   return view('admin.voters',compact("data"));
}



public function uploadvoter(Request $request){

   $data=new User();
 
  
   $data->name=$request->name;
   $data->email=$request->email;
   $data->password=bcrypt($request->password);
   $data->phone=$request->phone;
   $data->address=$request->address;
   $data->usertype='1';
   $data->save();
   return redirect()->back()->with('message','Voters Added successfully');
 }


public function update_voters($id){

   $data=user::find($id);
   return view('admin.Update_Voter',compact('data'));
}

public function edit_voters(Request $request,$id){

   $data=user::find($id);
          
          
   $data->name=$request->name;
   $data->email=$request->email;
   $data->phone=$request->phone;
   $data->address=$request->address;
   


   $data->save();

   return redirect()->back()->with('message','Voters Updated successfully');
}


public function delete_voters($id){
   $data=user::find($id);
   $data->delete();
   return redirect()->back()->with('message','Voters Deleted successfully');
}

}
