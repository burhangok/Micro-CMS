<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\References;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class ReferencesController extends Controller
{
   
 public function __construct()
    {
        $this->middleware('auth');
    }


   public function index () {
      
      $references = References::all();
      return view('admin.reference_list', ['references' => $references]);

   }


      public function newReference(Request $request) 

   {

		    $imageName = "Image_".$this->replace_tr($request->input('title')).time();
      	    $filExt =  $request->file('thumbnailFile')->getClientOriginalExtension();

	      	$request->file('thumbnailFile')->move(base_path() . '/public/images/references/thumbnails/', $imageName.".".$filExt);

		 	$newReference = new References;
         	$newReference->title = $request->input('title');
	   		$newReference->content =$request->input('content');
	   		$newReference->meta_desc = $request->input('meta_desc');
	   		$newReference->meta_keywords = $request->input('meta_key');
	   		$newReference->thumbnail = "/public/images/references/thumbnails/".$imageName. ".".$filExt;
			       
			        if ($newReference->save()) {

			        	return redirect('/admin/references')->with('message', 'Yeni Referans Eklendi.');
			        }
			        else {

			          return view('admin.create_page');
			        }

   }





	   public function deleteReference($id) {

	      $page = References::where('reference_id','=',$id)->delete();    
	 
	   

	      return redirect('/admin/references')->with('message', 'Referans Silindi.');


	   }


     public function editReference($id) {


        
       $editReference =  References::where('reference_id','=',$id)->get();
      
      return view('admin.edit_reference', ['editReference' => $editReference]);
   
   }




   public function updateReference (Request $request,$id) {

   	if(empty($request->file('thumbnailFile'))) 
      {

      $temp['title'] = $request->input('title');
      $temp['content'] =$request->input('content');
      $temp['meta_keywords'] = $request->input('meta_key');
      $temp['meta_desc'] = $request->input('meta_desc');
     
     
     
     if($updateReference = References::where('reference_id','=',$id)->update($temp)) {

        return redirect('/admin/references')->with('message', 'Referans Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput();


    }

      }

      else {

      $imageName = "Image_".$this->replace_tr($request->input('name')).time();
      $filExt =  $request->file('thumbnailFile')->getClientOriginalExtension();
      $request->file('thumbnailFile')->move(base_path() . '/public/images/contact/thumbnails/', $imageName.".".$filExt);

     	$temp['title'] = $request->input('title');
      $temp['content'] =$request->input('content');
      $temp['meta_keywords'] = $request->input('meta_key');
      $temp['meta_desc'] = $request->input('meta_desc');
      $temp['thumbnail'] = "/public/images/contact/thumbnails/".$imageName. ".".$filExt;
      
     
     if($updateReference = References::where('reference_id','=',$id)->update($temp)) {

        return redirect('/admin/references')->with('message', 'Referans Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput(); }}

}













}
