<!-- Header -->
	<div class="header">

		<!-- Logo -->
	    <div class="header-left">
	        <a href="{{route('admin.dashboard')}}" class="logo">
				<img src="{{asset('/admin/assets/img/logo.png')}}" width="40" height="40" alt="">
			</a>
	    </div>
		<!-- /Logo -->
		
		<a id="toggle_btn" href="javascript:void(0);">
			<span class="bar-icon">
				<span></span>
				<span></span>
				<span></span>
			</span>
		</a>
		
		<!-- Header Title -->
	    <div class="page-title-box">
			<h3>Chhatradevi Foundation</h3>
	    </div>
		<!-- /Header Title -->
		
		<a id="mobile_btn" class="mobile_btn" href="index.html#sidebar"><i class="fa fa-bars"></i></a>
		
        @php
            $current_user = Auth::guard('admin')->user();
        @endphp


		<!-- Header Menu -->
		<ul class="nav user-menu">
			<li class="nav-item dropdown has-arrow main-drop">
				<a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
					<span class="user-img"><img src="{{ asset('storage/admin/'. $current_user->image) }}" alt="">
					<span class="status online"></span></span>
					<span>Admin</span>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{route('admin.profile')}}">My Profile</a>
					<a class="dropdown-item" href="{{route('setting')}}">Settings</a>
					<a class="dropdown-item" href="{{route('change.password')}}">Change Password</a>
					<a class="dropdown-item" href="{{route('logout')}}">Logout</a>
				</div>
			</li>
		</ul>
		<!-- /Header Menu -->
		
		<!-- Mobile Menu -->
		<div class="dropdown mobile-user-menu">
			<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="profile.html">My Profile</a>
				<a class="dropdown-item" href="settings.html">Settings</a>
				<a class="dropdown-item" href="{{route('change.password')}}">Change Password</a>
				<a class="dropdown-item" href="login.html">Logout</a>
			</div>
		</div>
		<!-- /Mobile Menu -->
		
	</div>
<!-- /Header -->