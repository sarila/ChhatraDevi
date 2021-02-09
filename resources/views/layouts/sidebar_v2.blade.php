<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<li class="menu-title">
						<span>Main</span>
					</li>

					<li>
						<a href="{{ route('admin.dashboard') }}"><i class="la la-arrow-left"></i> <span> Go To Home</span> </a>
					</li>
                    <li>
                        <a href="{{ route('change.password') }}"><i class="la la-key"></i> <span> Change Password</span> </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.profile') }}"><i class="la la-user"></i> <span> Update Profile</span> </a>
                    </li>
                    <li>
                        <a href="{{ route('theme') }}"><i class="la la-user"></i> <span> Theme Setting</span> </a>
                    </li>
                    <li>
                        <a href="{{ route('social') }}"><i class="la la-user"></i> <span> Social Setting</span> </a>
                    </li>
                    <li>
                        <a href="{{ route('setting') }}"><i class="la la-user"></i> <span> Site Setting</span> </a>
                    </li>

				</ul>
			</div>
        </div>
    </div>
<!-- /Sidebar -->