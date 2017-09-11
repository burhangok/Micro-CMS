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
        Resimleri Görüntüle
        <small>Galeri İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Resimler</a></li>
        
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tüm Resimleriniz</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
				
			<div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <div class="hide-bullets">
                   @foreach ($images as $image)
				   <div class="col-sm-3">
                        <a class="thumbnail">
                            <img src="{{ $image->image }}"/>
                        </a>
                    </div>
					 @endforeach
                </ul>
            </div>
           
				
                
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div>
  <!-- /.content-wrapper -->
  
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