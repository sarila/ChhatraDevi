<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"> 
					<span>Main</span>
				</li>
				<li>
					<a href="{{ route('admin.dashboard') }}"><i class="la la-arrow-left"></i> <span>Go To Dashboard</span> </a>
				</li>
				@if(Session::get('admin_page') == 'password')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<?php dd(Session('admin_page'));?>
				<li class="{{ $active }}">
					<a href="{{ route('change.password') }}"><i class="la la-key"></i> <span> Change Password</span> </a>
				</li>
			</ul>
		</div>
    </div>
</div>
<!-- /Sidebar -->
