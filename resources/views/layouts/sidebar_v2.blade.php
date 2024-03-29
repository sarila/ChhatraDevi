Sidebar -->
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
                    @if(Session::get('admin_page') == 'password')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp 
                    @endif
                    <li class=" {{$active}}" >
                        <a href="{{ route('change.password') }}"><i class="la la-key"></i> <span> Change Password</span> </a>
                    </li>
                    @if(Session::get('admin_page') == 'profile')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp 
                    @endif
                    <li class=" {{$active}}" >
                        <a href="{{ route('admin.profile') }}"><i class="la la-user-cog"></i> <span> Update Profile</span> </a>
                    </li>
                    @if(Session::get('admin_page') == 'theme')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp 
                    @endif
                    <li class=" {{$active}}" >
                        <a href="{{ route('theme') }}"><i class="la la-themeisle"></i> <span> Theme Setting</span> </a>
                    </li>
                    @if(Session::get('admin_page') == 'social')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp 
                    @endif
                    <li class=" {{$active}}" >
                        <a href="{{ route('social') }}"><i class="la la-facebook"></i> <span> Social Setting</span> </a>
                    </li>
                    @if(Session::get('admin_page') == 'setting')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp 
                    @endif
                    <li class=" {{$active}}" >
                        <a href="{{ route('setting') }}"><i class="la la-tools"></i> <span> Site Setting</span> </a>
                    </li>

				</ul>
			</div>
        </div>
    </div>
<!-- /Sidebar