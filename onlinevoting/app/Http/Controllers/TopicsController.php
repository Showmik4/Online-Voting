<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class TopicsController extends Controller
{
    
    public function get_topics(){

        $votersData=User::find(Auth::user());
        $topic = new Topics();
        $topicsList = $topic->get();
      
        return view('user.Topics',compact('votersData','topicsList'));
    }

    public function vote(Request $request){
        $request->validate([
          "VoteTopic" =>  "required"
        ]);
  
       // $loggedUser=Auth::User()->id;
      //  $voterID = User::where('id', $loggedUser) -> get();
       // $voterName = User::where('id', $loggedUser) -> get();
       // $voterID = Auth::User('id');

       $voterID=$request->session()->get('id');
       $voterName=$request->session()->get('name');
       // $voterName =Auth::User('name');
  
        $VoteTopicId = $request->id;
  
        $user = new User();
        $votersData = $user->where(["id"=>$voterID,"name"=>$voterName,"status" => 0])->get();
  
        if(count($votersData) <= 0){
          return redirect()->back();
        }
  
        $topic = new Topics();
        $topicsList = $topic->where('id',$VoteTopicId)->get();
  
        if(count($topicsList) <= 0){
          return redirect()->back();
        }
  
        if(count($votersData) > 0 && count($topicsList) > 0){
  
          foreach($topicsList as $topic){
            $topicTotalvote = $topic->Total_votes;
          }
          $topic = new Topics();
          $topic->where('id',$VoteTopicId)->update([ 
            "Total_votes" => ( $topicTotalvote + 1 )
          ]);
  
          $voter = new User;
          $voter->where(["id"=>$voterID,"name"=>$voterName,"status" => 0])->update([
            "status" => "1"
          ]);
  
          return redirect()->back();
  
  
        }
  
  
      }
  
  
     /* public function certificate(){
        $voterID = Session::get('voterID');
        $voterName = Session::get('voterName');
  
        $voter = new voter;
        $voterData = $voter->where(["VoterID"=>$voterID,"name"=>$voterName,"vote_status" => 1])->get();
  
        if(count($voterData) <= 0){
          return redirect('/dashboard');
        }
  
        $voter = new voter;
        $voterData = $voter->where(["VoterID"=>$voterID,"name"=>$voterName])->get();
        $output = "";
        $password = "";
        foreach ($voterData as $data) {
          $password = strtoupper(substr($data->Name,0,4)).date('Ymd',strtotime($data->DOB));
  
          $output .=
            "
            <title>".$data->Name." - ".$data->VoterID."</title>
            <style>body{border:2px solid black;border-radius:10px;padding: 10px 40px;}</style>
              <div style='font-family:sans-serif;font-weight:lighter;'>
                <center >
                <h2>Online Voting Program</h2>
                <h4>West Bengal,India</h4>
  
                </center>
                <p style='text-align:left;'>
                  <b>Certificate No. : </b> CERT".strtoupper(crc32(substr($data->VoterID,5)))."<br />
  
                </p>
              </div>
            <br>
            <h1 style='font-family:sans-serif;font-weight:lighter;'>
              <center>
                <i style='font-family:cursive;text-decoration:underline;'>Certificate of Participate</i>
              </center>
            </h1>
            <br>
  
            <h4 style='font-family:sans-serif;font-weight:lighter;'><i>
  
                      Certify that Mr./ Miss  <b>".$data->Name."</b>
  
                      <br><br>
  
                       S/D/W of <b>".$data->fatherName."</b>
  
                      <br><br>
  
                    Whose Voter Id <b>".$data->VoterID."</b>
  
                    <br><br>
  
                    and Date of Birth : <b>".date('jS - M - Y',strtotime($data->DOB))."</b>
  
                    <br><br>
  
                     has succesfully completed our <b>Online Voting Program ".date('Y')."</b> on <b>".date('jS - M - Y',strtotime($data->updated_at))."</b> through Online Method.
  
  
  
  
                       We are thankful to voter for participate our Online Voting Program.
  
  
                       </i>
            </h4>
  
  
  
            <div style='font-family:sans-serif;font-weight:lighter;'>
  
            <p style='text-align:center;'>
  
              <i>Laravel Department</i>
  
              <b style='text-decoration:overline;'>
                <pre> Athority of Voting Department <pre>
              </b>
  
            </p>
            <p style='text-align:right;'><b>Date : </b> ".date('jS - M - Y',strtotime($data->updated_at))."</p>
            </div>
  
  
  
  
            ";
        }
  
  
      $pdf = \App::make('dompdf.wrapper');
  
  
      $pdf->setPaper('A4','landscape');
      $pdf->loadHTML($output);
      return $pdf->stream('Certificate @'.$voterID.".pdf");
      }*/
}
