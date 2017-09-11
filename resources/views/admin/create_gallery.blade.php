@extends('layouts.app')
  
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Yeni Albüm  
        <small>Galeri İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Albümler</a></li>
        
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Albüm Bilgileri
                <small>Başlık, İçerik,Resimler</small>
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
               <form role="form" method="POST" action="{{ url('/admin/newGallery') }}" enctype="multipart/form-data">
			   
			   
                        {{ csrf_field() }}
			  <div class="form-group">
                  <label>Albüm Adı</label>
                  <input type="text" class="form-control" name="name" autofocus required>
                </div>
				
				<div class="form-group">
                  <label>Resimler İçin Alt Yazı</label>
               <textarea class="form-control" name="subtext"> </textarea>
				 </div>
				 
				 <div class="form-group">
                  <label for="thumbnailFile">Resimler</label>
                <input type="file" name="images[]" class="form-control" multiple="true" required />
                </div>
				
				 <div class="form-group">
                  <label>İçerik</label>
                 <textarea id="editor1" name="content" rows="10" cols="80" name="content"></textarea>
				 </div>
				
				
				
				<div class="form-group">
                  <label>Albüm Açıklaması</label>
               <textarea class="form-control" name="meta_desc"> </textarea>
				 </div>
				 
				 <div class="form-group">
                  <label>Anahtar Kelimeler</label>
              <input type="text" class="form-control" name="meta_key"/>
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
