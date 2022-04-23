<?php

namespace App\Http\Controllers;

use App\Models\Pcandidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class userhomecontroller extends Controller
{
   public function ShowUser(){

    $users=User::find(Auth::user());
    $voterData = $users->where(["vote_status" => 0])->get();
    if(count($voterData) <= 0){
      return redirect()->back();
    }

    $user = new user;
    $user->where(["vote_status" => 0])->update([
      "vote_status" => "1"
    ]);

    return redirect()->back();
    return view('user.Ballot',compact("users"));
   }
    


    public function Get_Ballot(){

      $data=Pcandidate::all();
      $users=User::find(Auth::user());
      
      //return view('admin.voters',compact("data"));
      //DB::table('users')->increment('votes');
      return view('user.Ballot',compact('data','users'));

    }

    public function Add_Vote(Request $request){

      //$voterID = Auth::user()->get('id');
      //$voterName = Auth::get('name');


     

      
      $data=new Pcandidate();
      //$data=DB::table('pcandidates');

      $user=new User();
      $vote_status=$request->vote_status;

       

        $id=$request->total_votes;
        $presidentlist = $data->where('id',$id)->get();
        
        if(count($presidentlist) <= 0){
          return redirect()->back();
        }
  
        if(count($presidentlist) > 0){
  
          foreach($presidentlist as $data){
            $presidentTotalvote = $data->total_votes;
          }
  
        $data->where('id',$id )->update([
          "total_votes" => ( $presidentTotalvote + 1 )
        ]);
  
      
  
      //  $data=DB::table('Pcandidate')->increment('total_votes');
       // $data->save();
        return redirect()->back();
      }

  

     

  




      
        

    
   
  }

  public function Get_Home(){

   
   

   

    $users=User::find(Auth::user());
   
   
    return view('user.userhome',compact('users'));
  }


  public function give_status($id){

    $data=user::find($id);
    $data->vote_status='Voted';
    $data->save();
    return redirect()->back();

  }

}
