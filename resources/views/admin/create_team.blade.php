@extends('layouts.app')
  
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Yeni Çalışan 
        <small>Takım İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Takımınız</a></li>
        
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Çalışan Bilgileri
                <small>Ad, Soyad, Ünvan</small>
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
               <form role="form" method="POST" action="{{ url('/admin/newTeam') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
			  <div class="form-group">
                  <label>Adı</label>
                  <input type="text" class="form-control" name="name" autofocus required>
                </div>
				
				<div class="form-group">
                  <label>Soyadı</label>
                  <input type="text" class="form-control" name="surname" required>
                </div>
				
					<div class="form-group">
                  <label>Ünvan</label>
                  <input type="text" class="form-control" name="position" required>
                </div>
				
					<div class="form-group">
                  <label>E-Mail Adresi</label>
                  <input type="email" class="form-control" name="email" required>
					</div>
				
					<div class="form-group">
                  <label>Telefon Numarası</label>
                  <input type="text" class="form-control" name="telephone" required>
					</div>
				
				 <div class="form-group">
                  <label>İçerik</label>
                 <textarea id="editor1" name="content" rows="10" cols="80" name="content">1ki3 İçerik Yönetim Sistemi</textarea>
				 </div>
				
				
				
				<div class="form-group">
                  <label>Kişi Açıklaması</label>
               <input type="text" class="form-control" name="meta_desc">
				 </div>
				 
				 <div class="form-group">
                  <label>Anahtar Kelimeler</label>
              <input type="text" class="form-control" name="meta_key"/>
				 </div>
			
				<div class="form-group">
                  <label for="thumbnailFile">Kişi Resmi</label>
                  <input type="file"  name ="thumbnailFile" id="thumbnailFile" required/>
                </div>
				
				
				<div class="box-footer">
                <button type="submit" class="btn btn-default">Vazgeç</button>
                <button type="submit" class="btn btn-success pull-right">Kaydet</button>
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
