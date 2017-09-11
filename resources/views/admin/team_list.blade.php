@extends('layouts.app')
  
@section('content')


@if (session('message'))
<script>alert('{{session('message')}}');</script>
@endif 
  



  <!-- Content Wrapper. Contains team content -->
  <div class="content-wrapper">
    <!-- Content Header (team header) -->
    <section class="content-header">
      <h1>
        Takımı Listele
        <small>Takım İşlemleri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Takım</a></li>
        
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ekibiniz</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
				   <th>No</th>
                  <th> Adı</th>
                  <th>Soyadı</th>
                  <th>Ünvan</th>
				  <th>Telefon Numarası</th>
				  <th>E-Mail</th>
                  <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
				@foreach ($team as $team)
			
				<tr>
				 <td>{{ $team->team_id }}</td>
                  <td>{{ $team->name }}</td>
                  <td>{{ $team->surname }}</td>
				  <td>{{ $team->position }}</td>
				   <td>{{ $team->telephone }}</td>
				    <td>{{ $team->email }}</td>
				   
				   <td>
				   <a href="{{ url('/admin/editteam/'.$team->team_id) }}"><button type="submit" class="btn btn-success" style="margin-right:8px;">Düzenle</button></a>
				   <a href="{{ url('/admin/deleteteam/'.$team->team_id) }}"><button type="submit" class="btn btn-danger" onclick="return confirm('Emin Misiniz ?')">Sil</button></a></td>
				   
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