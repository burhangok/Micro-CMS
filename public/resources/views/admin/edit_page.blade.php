@extends('layouts.app')
  
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sayfa Düzenle
        <small>Sayfa İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Sayfalar</a></li>
        
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sayfa Bilgileri
                <small>Başlık, İçerik</small>
              </h3>
              
            </div>
			@foreach ($editPage as $page)
            <!-- /.box-header -->
            <div class="box-body pad">
               <form role="form" method="POST" action="{{ url('/admin/editPage/'.$page->page_id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
						
			  <div class="form-group">
                  <label>Sayfa Adı</label>
                  <input type="text" class="form-control" name="title" value="{{ $page->title }}">
                </div>
				
				 <div class="form-group">
                  <label>İçerik</label>
                 <textarea id="editor1" name="content" rows="10" cols="80" name="content">{{ $page->content }}</textarea>
				 </div>
	
				<div class="form-group">
                  <label>Sayfa Açıklaması</label>
               <textarea class="form-control" name="meta_desc">{{ $page->meta_desc }}</textarea>
				 </div>
				 
				 <div class="form-group">
                  <label>Anahtar Kelimeler</label>
              <input type="text" class="form-control" name="meta_key" value="{{ $page->meta_keywords }}"/>
				 </div>
			
				<div class="form-group">
                  <label for="thumbnailFile">Kapak Resmi</label>
                  <input type="file"  name ="thumbnailFile" id="thumbnailFile"/>
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
