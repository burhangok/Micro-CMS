@extends('layouts.app')
  
@section('content')
  <!-- Content Wrapper. Contains reference content -->
  <div class="content-wrapper">
    <!-- Content Header (reference header) -->
    <section class="content-header">
      <h1>
        Referans Düzenle
        <small>Referans İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Referanslar</a></li>
        
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Referans Bilgileri
                <small>Başlık, İçerik</small>
              </h3>
              
            </div>
			@foreach ($editReference as $reference)
            <!-- /.box-header -->
            <div class="box-body pad">
               <form role="form" method="POST" action="{{ url('/admin/editReference/'.$reference->reference_id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
						
			  <div class="form-group">
                  <label>Referans Adı</label>
                  <input type="text" class="form-control" name="title" value="{{ $reference->title }}">
                </div>
				
				 <div class="form-group">
                  <label>İçerik</label>
                 <textarea id="editor1" name="content" rows="10" cols="80" name="content">{{ $reference->content }}</textarea>
				 </div>
	
				<div class="form-group">
                  <label>Referans Açıklaması</label>
               <textarea class="form-control" name="meta_desc">{{ $reference->meta_desc }}</textarea>
				 </div>
				 
				 <div class="form-group">
                  <label>Anahtar Kelimeler</label>
                <input type="text" class="form-control" name="meta_key" value="{{ $reference->meta_keywords }}"/>
				 </div>
				 
				 
				 <div class="form-group">
                  <label for="thumbnailFile">Referans Resminiz</label>
				  <br/>  <br/>
                  <img src="/micro{{ $reference->thumbnail }}" />
                </div>
			
				<div class="form-group">
                  <label for="thumbnailFile">Kapak Resmini Güncellemek İçin Dosya Seçiniz</label>
                  <input type="file"  name ="thumbnailFile" id="thumbnailFile"/>
                </div>
				
				@endforeach
				<div class="box-footer">
                <a class="btn btn-default btn-close" href="{{ url('admin/references') }}">Vazgeç</a>
     
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
