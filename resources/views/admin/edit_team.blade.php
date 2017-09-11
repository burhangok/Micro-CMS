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
			@foreach ($editTeam as $team)
            <!-- /.box-header -->
            <div class="box-body pad">
               <form role="form" method="POST" action="{{ url('/admin/editteam/'.$team->team_id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
						
			 <div class="form-group">
                  <label>Adı</label>
                  <input type="text" class="form-control" name="name" autofocus value ="{{ $team->name }}" >
                </div>
				
				<div class="form-group">
                  <label>Soyadı</label>
                  <input type="text" class="form-control" name="surname" value ="{{ $team->surname }}" >
                </div>
				
					<div class="form-group">
                  <label>Ünvan</label>
                  <input type="text" class="form-control" name="position" value ="{{ $team->position }}" >
                </div>
				
					<div class="form-group">
                  <label>E-Mail Adresi</label>
                  <input type="email" class="form-control" name="email" value ="{{ $team->email }}" >
					</div>
				
					<div class="form-group">
                  <label>Telefon Numarası</label>
                  <input type="text" class="form-control" name="telephone"  value ="{{ $team->telephone }}" >
					</div>
				
				 <div class="form-group">
                  <label>İçerik</label>
                 <textarea id="editor1" name="content" rows="10" cols="80" name="content">{{ $team->content }} </textarea>
				 </div>
				
				
				
				<div class="form-group">
                  <label>Kişi Açıklaması</label>
               <input type="text" class="form-control" name="meta_desc" value ="{{ $team->meta_desc }}" >
				 </div>
				 
				 <div class="form-group">
                  <label>Anahtar Kelimeler</label>
              <input type="text" class="form-control" name="meta_key" value ="{{ $team->meta_keywords }}" />
				 </div>
			
				 
				 <div class="form-group">
                  <label for="thumbnailFile">Kayıtlı Kişi Resmi</label>
				  <br/>  <br/>
                  <img src="/micro{{ $team->thumbnail }}" />
                </div>
				
				
				<div class="form-group">
                  <label for="thumbnailFile">Yeni Kişi Resmi Seçebilirsiniz</label>
                  <input type="file"  name ="thumbnailFile" id="thumbnailFile" />
                </div>
				
			
				
				@endforeach
				<div class="box-footer">
                <a class="btn btn-default btn-close" href="{{ url('admin/team') }}">Vazgeç</a>
     
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
