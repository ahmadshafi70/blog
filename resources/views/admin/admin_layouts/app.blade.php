<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admin_layouts.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
		<!-- Sidebar -->
       	@include('admin.admin_layouts.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
       	 @yield('content')
        <!-- End of Content Wrapper -->
	</div>
    <!-- End of Page Wrapper -->
    @include('admin.admin_layouts.footer')
</body>

</html> 	