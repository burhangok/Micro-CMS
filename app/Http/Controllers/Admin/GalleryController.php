<?php

namespace App\Http\Controllers\Admin;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;
use App\Gallery;
use App\Images;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index () {

    	$gallery = Gallery::all();
      		return view('admin.gallery_list', ['gallery' => $gallery]);
										
		 }

	

	 public function newGallery(Request $request) {
			
			$newGallery= new Gallery;
         	$newGallery->name = $request->input('name');
	   		$newGallery->content =$request->input('content');
	   		$newGallery->meta_desc = $request->input('meta_desc');
	   		$newGallery->meta_keywords = $request->input('meta_key');
	   		
				
				 if ($newGallery->save()) {

				 	$new_album_id = $newGallery->id;


			 
			    $images = $request->file('images');
			    $image_count = count($images);
			    
			   
				

				 	for($i = 0;$i<$image_count;$i++){

				 		

				 		move_uploaded_file($_FILES['images']['tmp_name'][$i], "images/gallery/".$this->replace_tr($request->input('name')).$i.".".pathinfo($_FILES['images']['name'][$i],PATHINFO_EXTENSION));
				 		$imagesName ="/public/images/gallery/".$this->replace_tr($request->input('name')).$i.".".pathinfo($_FILES['images']['name'][$i],PATHINFO_EXTENSION);
				 		$newImage = new Images;
					 	$newImage->album_id = $new_album_id;
			   			$newImage->subtext =$request->input('subtext');
			   			$newImage->image=$imagesName;
			   			$newImage->save();
				 	
				 	}
						 
					/*
						$imgFirst = "images/gallery/".$request->input('name')."0".".".pathinfo($_FILES['images']['name'][0],PATHINFO_EXTENSION);
				 		$imgThumnbail= Image::make($imgFirst)->resize('200','200');
						
					$imgFirst = "images/gallery/".$request->input('name')."0".".".pathinfo($_FILES['images']['name'][0],PATHINFO_EXTENSION);
					$img =Image::make($imgFirst)->resize(300, 200);
					$img->move(base_path() , $img);
					return $img;*/

							        return redirect('/admin/gallery')->with('message', 'Galeri Sayfasına Yeni Albüm Eklendi.');
							        }
							        else {

							         return view('admin.create_gallery');
							        }






	 }



	
	  
	  public function editGallery($id) {

       $editAlbum =  Gallery::where('album_id','=',$id)->get();
       $deleteImage =  Images::where('album_id','=',$id)->get();
   
     
      		return view('admin.edit_gallery',
      			['deleteImage' => $deleteImage],
				    [ 'editAlbum' => $editAlbum]);
   
   }	

   		public function updateGallery($id,Request $request) {

   			if(empty($request->file('newImages'))) 
     			 {
      					$tempAlbum['name'] = $request->input('name');
	      								$tempAlbum['content'] =$request->input('content');
	      									$tempAlbum['meta_keywords'] = $request->input('meta_key');
	      											$tempAlbum['meta_desc'] = $request->input('meta_desc');
     
     
						     
											     if($updateAlbum = Gallery::where('album_id','=',$id)->update($tempAlbum)) {

											        return redirect('/admin/gallery')->with('message', 'Albüm Bilgileri Güncellendi.');

											     }
											    
											    else {

											         return back()->withInput();


											    }

						      }

      else {

      	$tempAlbum['name'] = $request->input('name');
	      								$tempAlbum['content'] =$request->input('content');
	      									$tempAlbum['meta_keywords'] = $request->input('meta_key');
	      											$tempAlbum['meta_desc'] = $request->input('meta_desc');

				
				  $updateAlbum = Gallery::where('album_id','=',$id)->update($tempAlbum);
      			  $images = $request->file('newImages');

			    $image_count = count($images);

			    for($i = 0;$i<$image_count;$i++){
					
					move_uploaded_file($_FILES['newImages']['tmp_name'][$i], "images/gallery/".$request->input('name').$i.".".pathinfo($_FILES['newImages']['name'][$i],PATHINFO_EXTENSION));
				 		$imagesName ="/public/images/gallery/".$this->replace_tr($request->input('name')).$i.".".pathinfo($_FILES['newImages']['name'][$i],PATHINFO_EXTENSION);
				 		$newImage = new Images;
					 	$newImage->album_id = $id;
			   			$newImage->subtext =$request->input('subtext');
			   			$newImage->image=$imagesName;
			   			$newImage->save();
				 	
				 	}

				 	return redirect('/admin/gallery')->with('message', 'Albüm Bilgileri Güncellendi.');


      }


   		}


		   public function deleteImage($id) {

		   		$image = Images::where('image_id','=',$id)->delete(); 

	      return back()->with('message', 'Resim Silindi.');

			   }


	   public function deleteGallery($id) {

	      $page = Gallery::where('album_id','=',$id)->delete(); 

	      return redirect('/admin/gallery')->with('message', 'Albüm Silindi.');


	   }


	   public function allImages () {
	   	
	   	$images = Images::all();
      		return view('admin.images_list', ['images' => $images]);
										
		 }











}
