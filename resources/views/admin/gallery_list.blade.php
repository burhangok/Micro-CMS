@extends('layouts.app')
  
@section('content')


@if (session('message'))
<script>alert('{{session('message')}}');</script>
@endif 
  



  <!-- Content Wrapper. Contains reference content -->
  <div class="content-wrapper">
    <!-- Content Header (reference header) -->
    <section class="content-header">
      <h1>
        Albümleri Listele
        <small>Galeri İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Albümler</a></li>
        
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tüm Albümleriniz</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
				 
                  <th>Albüm Adı</th>
                  <th>Açıklama</th>
                  <th>Oluşturulma Tarihi</th>
                  <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
				@foreach ($gallery as $gallery)
			
				<tr>
				 <td>{{ $gallery->name }}</td>
                  <td>{{ $gallery->meta_desc }}</td>
               
				   <td>{{ date("d F Y",strtotime($gallery->created_at)) }}</td>
				   
				   <td>
				   <a href="{{ url('/admin/editgallery/'.$gallery->album_id) }}"><button type="submit" class="btn btn-success" style="margin-right:8px;">Düzenle</button></a>
				   <a href="{{ url('/admin/deletegallery/'.$gallery->album_id) }}"><button type="submit" class="btn btn-danger" onclick="return confirm('Emin Misiniz ?')">Sil</button></a></td>
				   
                </tr>
                @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div>
  <!-- /.content-wrapper -->,
  
  </div>
  
  </div>
  </section>

@endsection

@push('scripts')

	<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@endpush