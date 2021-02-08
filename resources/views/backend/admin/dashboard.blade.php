@include('layouts.head')
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			@include('layouts.header')
				
			@include('layouts.sidebar')
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				</div>
				<!-- /Page Content -->
            </div>
			<!-- /Page Wrapper -->	
        </div>
		<!-- /Main Wrapper -->
		
		@include('layouts.footer')
    </body>
</html>