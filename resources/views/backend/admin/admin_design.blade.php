@include('layouts.head')
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			@include('layouts.header')
				
			@include('layouts.sidebar')
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				@yield('content')
            </div>
			<!-- /Page Wrapper -->	
        </div>
		<!-- /Main Wrapper -->
		
		@include('layouts.footer')
    </body>
</html>