@extends('layouts.app')
  
@section('content')
  <!-- Content Wrapper. Contains album content -->
  <div class="content-wrapper">
    <!-- Content Header (album header) -->
    <section class="content-header">
      <h1>
        Albüm Düzenle
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
                <small>Başlık, Resimler</small>
              </h3>
              
            </div>
			@foreach ($editAlbum as $album)
            <!-- /.box-header -->
            <div class="box-body pad">
               <form role="form" method="POST" action="{{ url('/admin/editgallery/'.$album->album_id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
						
	
				
				 <div class="form-group">
                  <label>Albüm Adı</label>
                  <input type="text" class="form-control" name="name" value="{{ $album->name }}"/>
                </div>
				<div class="form-group">
                  <label for="thumbnailFile">Resimler</label>
				  <br/><br/>
				
				
                
                <div class="form-group">
		  <div class="carousel slide multi-item-carousel" id="theCarousel">
			<div class="carousel-inner">
			  
			    
				@foreach ($deleteImage as $image)
			  <div class="item active">
			
				<div class="col-md-2">
				<a href ="{{ url('/admin/deleteImage/'.$image->image_id) }}" onclick="return confirm('Resmi Silmek İstediğinize Emin Misiniz ?')"><span class="btn btn-danger">SİL</span></a>
				
				<br/><br/>
				<img src="/micro{{ $image->image}}" class="img-responsive">
				
			  </div>
           @endforeach
          <!--  Example item end -->
        </div> </div>
        
      </div>
				</div>
	
					
				
			
				<br/><br/>
				
				<div class="form-group">
                  <label for="thumbnailFile">Yeni Resimler Eklemek İçin Dosya Seçin</label>
                <input type="file" name="newImages[]" class="form-control" multiple="true" />
                </div>
				
				
				 <div class="form-group">
				   <br/><br/>
                  <label>İçerik</label>
				  
                 <textarea id="editor1" name="content" rows="10" cols="80" name="content">{{ $album->content }}</textarea>
				 </div>
				
				
				
				<div class="form-group">
                  <label>Albüm Açıklaması</label>
               <textarea class="form-control" name="meta_desc">{{ $album->meta_desc }} </textarea>
				 </div>
				 
				 <div class="form-group">
                  <label>Anahtar Kelimeler</label>
              <input type="text" class="form-control" name="meta_key"/ value="{{ $album->meta_keywords }}"/>
				 </div>
				@endforeach
				<div class="box-footer">
               <a class="btn btn-default btn-close" href="{{ url('admin/gallery') }}">Vazgeç</a>

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
