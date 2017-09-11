<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>1ki3 İçerik Yönetim Sistemi</title>
	
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
			<!-- Font Awesome -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
			<!-- Ionicons -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
			<!-- Theme style -->
			<link rel="stylesheet" href="/micro/resources/assets/sass/AdminLTE.min.css">
			<link rel="stylesheet" href="/micro/resources/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
			<link rel="stylesheet" href="/micro/resources/assets/sass/skin-blue.min.css">
			<link rel="stylesheet" href="/micro/resources/assets/skins/_all-skins.min.css">
			<!-- DataTables -->
			<link rel="stylesheet" href="/micro/resources/assets/plugins/datatables/dataTables.bootstrap.css">
			
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
		<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>1</b>ki3</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>1ki</b>3</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Mobil Menu</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        

         
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
            
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
             <span class="hidden-xs"> {{ Auth::user()->name }}</span> 
			
                                       
                                   
              
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                

                <p>
              {{ Auth::user()->name }}
                
                </p>
              </li>
               
             <script>
			 function cikis() {
				 
				 alert("Güvenli Bir Şekilde Çıkış Yapıldı.");
			 }
			 
			 </script>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
				  <a href="{{ url('/logout') }}" onclick = "cikis();" class="btn btn-default btn-flat">
                                        Çıkış </a> </div> </li> </ul></li>
		  
		  <li> <a href="{{ url('/logout') }} " onclick = "cikis();">Çıkış </a>  </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header></div>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
 <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
      
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-file-text"></i> <span>Sayfa İşlemleri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="{{ url('/admin/pages') }}">Sayfaları Görüntüle</a></li>
            <li><a href="{{ url('/admin/newPage') }}">Yeni Sayfa Ekle</a></li>
          </ul>
        </li>
		
		<li class="treeview">
					  <a href="#"><i class="fa fa-image"></i> <span>Galeri İşlemleri</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="{{ url('/admin/gallery') }}">Albümleri Görüntüle</a></li>
						<li><a href="{{ url('/admin/images') }}">Tüm Resimleri Görüntüle</a></li>
						<li><a href="{{ url('/admin/newGallery') }}">Yeni Albüm Oluştur</a></li>
							</ul>
			</li>
			
		<li class="treeview">
					  <a href="#"><i class="fa fa-file-text"></i> <span>Referans İşlemleri</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="{{ url('/admin/references') }}">Referansları Görüntüle</a></li>
						<li><a href="{{ url('/admin/newReference') }}">Yeni Referans Ekle</a></li>
					  </ul>
        </li>
		
			<li class="treeview">
					  <a href="#"><i class="fa fa-user"></i> <span>Takım İşlemleri</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="{{ url('/admin/team') }}">Takımı Görüntüle</a></li>
						<li><a href="{{ url('/admin/newTeam') }}">Yeni Takım Ekle</a></li>
					  </ul>
			</li>
		
        <li><a href="{{ url('/admin/contact') }}"><i class="fa fa-mobile"></i> <span>İletişim İşlemleri</span></a></li>
		<li><a href="{{ url('/admin/menu') }}"><i class="fa fa-bars"></i> <span>Menüleri Düzenle</span></a></li>
		
		  
			<li class="treeview">
					  <a href="#"><i class="fa fa-user"></i> <span>Yönetici İşlemleri</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-left pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="{{ url('/admin/resetPassword') }}">Şifre İşlemleri</a></li>
						<li><a href="{{ url('/admin/newUser') }}">Yeni Yönetici Ekle</a></li>
					  </ul>
			</li>
		
       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

    @yield('content')
	
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">1ki3</a>.</strong> Tüm hakları saklıdır.
  </footer>
  <!-- jQuery 2.2.3 -->
<script src="micro/resources/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

	
		<!-- jQuery 2.2.3 -->
		<script src="/micro/resources/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Scripts -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="/micro/resources/assets/js/app.js"></script>
		<!-- FastClick -->
		<script src="/micro/resources/assets/plugins/fastclick/fastclick.js"></script>
		<!-- CK Editor -->
		<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="/micro/resources/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<!-- DataTables -->
		<script src="/micro/resources/assets/plugins/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="/micro/resources/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
		
		<script>
		  $(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor1');
			//bootstrap WYSIHTML5 - text editor
			$(".textarea").wysihtml5();
		  });
	</script>
	
	<script>
	
	$('.dd').nestable({ /* config options */ });
	$('.dd').on('change', function() {
    /* on change event */
});
$('.dd').nestable('serialize');

	</script>
	


		
</body>
</html>
