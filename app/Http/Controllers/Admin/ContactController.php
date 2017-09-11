<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

	  public function __construct()
    {
        $this->middleware('auth');
    }



   public function index () {

 		$contact = Contact::where('company_id','=',1)->get();

      return view('admin.contact', ['editContact' => $contact]);

   }


   public function updateContact (Request $request) {

   	if(empty($request->file('thumbnailFile'))) 
      {

      $temp['company_name'] = $request->input('name');
      $temp['taxes_no'] =$request->input('taxes');
      $temp['address'] = $request->input('address');
      $temp['telephone'] = $request->input('telephone');
      $temp['fax'] = $request->input('fax');
      $temp['web'] = $request->input('web');
      $temp['email'] = $request->input('email');
      $temp['map_url'] = $request->input('map');
     
     
     if($updatePage = Contact::where('company_id','=',1)->update($temp)) {

        return redirect('/admin')->with('message', 'İletişim ve Firma Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput();


    }

      }

      else {

      $imageName = "Image_".$this->replace_tr($request->input('name')).time();
      $filExt =  $request->file('thumbnailFile')->getClientOriginalExtension();
      $request->file('thumbnailFile')->move(base_path() . '/public/images/contact/thumbnails/', $imageName.".".$filExt);

      $temp['company_name'] = $request->input('name');
      $temp['taxes_no'] =$request->input('taxes');
      $temp['address'] = $request->input('address');
      $temp['telephone'] = $request->input('telephone');
      $temp['fax'] = $request->input('fax');
      $temp['web'] = $request->input('web');
      $temp['email'] = $request->input('email');
      $temp['map_url'] = $request->input('map');
      $temp['thumbnail'] = "/public/images/contact/thumbnails/".$imageName. ".".$filExt;
      
     
     if($updatePage = Contact::where('company_id','=',1)->update($temp)) {

        return redirect('/admin')->with('message', 'Sayfa Bilgileri Güncellendi.');

     }
    
    else {

         return back()->withInput();


    }






   }
}

















}
