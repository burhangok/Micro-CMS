<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Team;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class TeamController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {

    	$team = Team::all();
      return view('admin.team_list', ['team' => $team]);

       }



      public function newTeam(Request $request) 

   {

		    $imageName = "Image_".$this->replace_tr($request->input('name')).time();
      	    $filExt =  $request->file('thumbnailFile')->getClientOriginalExtension();

	      	$request->file('thumbnailFile')->move(base_path() . '/public/images/team/thumbnails/', $imageName.".".$filExt);

		 	$newTeam = new Team;
         	$newTeam->name = $request->input('name');
         	$newTeam->surname = $request->input('surname');
         	$newTeam->position = $request->input('position');
         	$newTeam->email = $request->input('email');
         	$newTeam->telephone = $request->input('telephone');
	   		$newTeam->content =$request->input('content');
	   		$newTeam->meta_desc = $request->input('meta_desc');
	   		$newTeam->meta_keywords = $request->input('meta_key');
	   		$newTeam->thumbnail = "/public/images/team/thumbnails/".$imageName. ".".$filExt;
			       
			        if ($newTeam->save()) {

			        	return redirect('/admin/team')->with('message', 'Takım Sayfasına Yeni Kişi Eklendi.');
			        }
			        else {

			          return view('admin.create_team');
			        }

   }


    public function editTeam($id) {


        
       $editTeam =  Team::where('team_İd','=',$id)->get();
      
      return view('admin.edit_team', ['editTeam' => $editTeam]);
   
   }




   public function updateTeam (Request $request,$id) {

   	if(empty($request->file('thumbnailFile'))) 
      {

	 $temp['name'] = $request->input('name');
           $temp['surname'] = $request->input('surname');
                $temp['position'] = $request->input('position');
                     $temp['email'] = $request->input('email');
                          $temp['telephone'] = $request->input('telephone');
      								$temp['content'] =$request->input('content');
      									$temp['meta_keywords'] = $request->input('meta_key');
      											$temp['meta_desc'] = $request->input('meta_desc');
     
     
     
     if($updateTeam = Team::where('team_id','=',$id)->update($temp)) {

        return redirect('/admin/team')->with('message', 'Kişi Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput();


    }

      }

      else {

      $imageName = "Image_".$request->input('name').time();
      $filExt =  $request->file('thumbnailFile')->getClientOriginalExtension();
$request->file('thumbnailFile')->move(base_path() . '/public/images/team/thumbnails/', $imageName.".".$filExt);

     	 $temp['name'] = $request->input('name');
           $temp['surname'] = $request->input('surname');
                $temp['position'] = $request->input('position');
                     $temp['email'] = $request->input('email');
                          $temp['telephone'] = $request->input('telephone');
      								$temp['content'] =$request->input('content');
      									$temp['meta_keywords'] = $request->input('meta_key');
      											$temp['meta_desc'] = $request->input('meta_desc');
      $temp['thumbnail'] = "/public/images/team/thumbnails/".$imageName. ".".$filExt;
      
     
     if($updateTeam = Team::where('team_id','=',$id)->update($temp)) {

        return redirect('/admin/team')->with('message', 'Kişi Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput(); }}

}

public function deleteTeam($id) {

	      $page = Team::where('team_id','=',$id)->delete();    
	 
	   

	      return redirect('/admin/team')->with('message', 'Kişi Silindi.');


	   }











}
