@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains menu content -->
  <div class="content-wrapper">
    <!-- Content Header (menu header) -->
    <section class="content-header">
      <h1>
        Menülerinizi Buradan Düzenleyebilirsiniz
        <small>Menü</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menü İşlemleri</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Menülerinize Sayfa Ekleyin / Çıkartın</h3>
            </div> 
			
			  <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sayfa Adı</th>
                  <th>URL</th>
                  <th>Üst Menü</th>
				   <th>Alt Menü</th>
                  <th>Oluşturulma Tarihi</th>
                  <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
				@foreach ($menus as $menu)
			
				<tr>
			
                  <td>{{ $menu->name }}</td>
                  <td>{{ $menu->url }}</td>
                  <td>{{ $menu->isHeader }}</td>
				   <td>{{ $menu->isFooter }}</td>
				   <td>{{ date("d F Y",strtotime($menu->created_at)) }}</td>
				   <td>
				   
				   <a href="{{ url('/admin/deletemenu/'.$menu->item_id) }}"><button type="submit" class="btn btn-danger" onclick="return confirm('Emin Misiniz')">Sil</button></a></td>
				   
                </tr>
				
				
                @endforeach
				
				
                </tbody>
               
              </table>
			  <br/><button type="submit" class="btn btn-success" style="margin-right:8px;">KAYDET</button>
            </div>
			
            <!-- /.box-body -->
			
			</div>
			
			<div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Sayfa Ekleyin</h3>
            </div> 
			
			  <div class="box-body">
			  
            <label>Sayfa Adı</label>
								<select name="ilanturu" class="form-control" required>
									<option value="İşyeri">İşyeri</option>
									
								
								</select>
								  
            <label>Üst Menü</label>
								<input type="checkbox" value=""></label>
			  <br/><button type="submit" class="btn btn-success" style="margin-right:8px;">Ekle</button>
            </div>
			
            <!-- /.box-body -->
			
			</div>
	
            

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
