@extends('layouts.app')
  
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        İletişim Bilgilerini Düzenle
        <small>İletişim İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> İletişim</a></li>
        
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">İletişim Bilgileri
                <small>Telefon Bilgileri, İletişim Bilgileri</small>
              </h3>
              
            </div>
			@foreach ($editContact as $contact)
            <!-- /.box-header -->
            <div class="box-body pad">
               <form role="form" method="POST" action="{{ url('/admin/contact') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
						
			  <div class="form-group">
                  <label>Firma Adı</label>
                  <input type="text" class="form-control" name ="name" id="name" value="{{ $contact->company_name }}" autofocus/>
                </div>
				
				 <div class="form-group">
                  <label>Vergi Numarası</label>
                 <input type="text"  class="form-control" name ="taxes" value="{{ $contact->taxes_no }}"/>
				 </div>
	
				<div class="form-group">
                  <label>Adres</label>
               <textarea class="form-control"  name="address">{{ $contact->address }}</textarea>
				 </div>
				 
				
			
				<div class="form-group">
                  <label for="telephone">Telefon Numarası</label>
                  <input type="text" class="form-control" name ="telephone" id="telephone" value="{{ $contact->telephone }}"/>
                </div>
				
				<div class="form-group">
                  <label for="fax">Faks Numarası</label>
                  <input type="text" class="form-control" name ="fax" value="{{ $contact->fax }}"/>
                </div>
				
				<div class="form-group">
                  <label>Web Sitesi</label>
                  <input type="text" class="form-control" name ="web" id="web" value ="{{ $contact->web }}"/>
                </div>
				
				<div class="form-group">
                  <label>E- Mail Adresi</label>
                  <input type="email"   class="form-control"name ="email" id="email" value="{{ $contact->email }}"/>
                </div>
				
				
				 <div class="form-group">
                  <label>Google Map URL</label>
                <input type="text" class="form-control" name="map" value="{{ $contact->map_url }}"/>
				 </div>
				
				
				<div class="form-group">
                  <label for="thumbnailFile">Kayıtlı Resim</label>
				  <br/>  <br/>
                  <img src="/micro{{ $contact->thumbnail }}" />
                </div>
				
				
				<div class="form-group">
                  <label for="thumbnailFile">Yeni Kapak Resmi</label>
                  <input type="file" class="form-control" name ="thumbnailFile" id="thumbnailFile"/>
                </div>
				
				
				@endforeach
				<div class="box-footer">
                <button type="submit" class="btn btn-default">Vazgeç</button>
                <button type="submit" class="btn btn-success pull-right">Güncelle</button>
              </div>
			
			</form>
			
			</div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->,

@endsection
