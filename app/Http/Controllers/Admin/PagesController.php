<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Pages;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class PagesController extends Controller
{
   
   public function __construct()
    {
        $this->middleware('auth');
    }


   public function index () {
      
      $pages = Pages::all();
      return view('admin.page_list', ['pages' => $pages]);

   }




   public function newPage(Request $request) 

   {

      //The uploading process for thumbnail
		  $imageName = "Thumbnail_".$request->input('title').time();
      $filExt1 =  $request->file('thumbnailFile')->getClientOriginalExtension();
      $request->file('thumbnailFile')->move(base_path() . '/public/images/pages/thumbnails/', $imageName.".".$filExt1);

      //The uploading process for video
      $videoName = "Video_".$request->input('title').time();
      $filExt2 =  $request->file('videoFile')->getClientOriginalExtension();
      $request->file('videoFile')->move(base_path() . '/public/images/pages/movies/', $videoName.".".$filExt2);

      //The uploading process for image
      $photoName = "Image_".$request->input('title').time();
      $filExt3 =  $request->file('imageFile')->getClientOriginalExtension();
      $request->file('imageFile')->move(base_path() . '/public/images/pages/photos/', $photoName.".".$filExt3);

		  $newPage = new Pages;
      $newPage->title = $request->input('title');
   		$newPage->content =$request->input('content');
   		$newPage->meta_desc = $request->input('meta_desc');
   		$newPage->meta_keywords = $request->input('meta_key');
   		$newPage->thumbnail = "/public/images/pages/thumbnails/".$imageName. ".".$filExt1;
      $newPage->videoFile = "/public/images/pages/movies/".$videoName. ".".$filExt2;
      $newPage->imageFile = "/public/images/pages/photos/".$photoName. ".".$filExt3;
       
        if ($newPage->save()) {

        	return redirect('/admin/pages')->with('message', 'Yeni Sayfa Eklendi.');
        }
        else {

          return view('admin.create_page');
        }

   }

   public function deletePage($id) {

      $page = Pages::where('page_id','=',$id)->delete();    
 
   

      return redirect('/admin/pages')->with('message', 'Sayfa Silindi.');


   }

   public function editPage ($id) {


        
       $editPage =  Pages::where('page_id','=',$id)->get();
      
      return view('admin.edit_page', ['editPage' => $editPage]);
   
   }


   public function updatePage(Request $request ,$id) {

    if(empty($request->file('thumbnailFile'))) 
      {

      $temp['title'] = $request->input('title');
      $temp['content'] =$request->input('content');
      $temp['meta_keywords'] = $request->input('meta_key');
      $temp['meta_desc'] = $request->input('meta_desc');
     
     
     
     if($updatePage = Pages::where('page_id','=',$id)->update($temp)) {

        return redirect('/admin/pages')->with('message', 'Sayfa Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput();


    }

      }

      else {

      $imageName = "Image_".$request->input('name').time();
      $filExt =  $request->file('thumbnailFile')->getClientOriginalExtension();
      $request->file('thumbnailFile')->move(base_path() . '/public/images/pages/thumbnails/', $imageName.".".$filExt);

      $temp['title'] = $request->input('title');
      $temp['content'] =$request->input('content');
      $temp['meta_keywords'] = $request->input('meta_key');
      $temp['meta_desc'] = $request->input('meta_desc');
      $temp['thumbnail'] = "/public/images/pages/thumbnails/".$imageName. ".".$filExt;
      
     
     if($updatePage = Pages::where('page_id','=',$id)->update($temp)) {

        return redirect('/admin/pages')->with('message', 'Sayfa Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput();
    }

  }


  } 

  



}
