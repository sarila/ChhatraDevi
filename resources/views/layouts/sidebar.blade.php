<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"> 
					<span>Main</span>
				</li>
				<li>
					<a href="{{ route('admin.dashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
				</li>
				<li>
					<a href="{{ route('setting') }}"><i class="la la-cogs"></i> <span> Settings</span> </a>
				</li>
				<li>
					<a href="{{ route('teams.index')}}"><i class="la la-users"></i> <span> Our Teams</span> </a>
				</li>
				<li>
					<a href="{{ route('categories.index')}}"><i class="la la-list-alt"></i> <span> Categories</span> </a>
				</li>
				<li>
					<a href="{{ route('news.index')}}"><i class="la la-newspaper"></i> <span> All News</span> </a>
				</li>
			</ul>
		</div>
    </div>
</div>
<!-- /Sidebar -->
