<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"> 
					<span>Main</span>
				</li>
				@if(Session::get('admin_page') == 'dashboard')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('admin.dashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
				</li>
				@if(Session::get('admin_page') == 'setting')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('setting') }}"><i class="la la-cogs"></i> <span> Settings</span> </a>
				</li>
				@if(Session::get('admin_page') == 'team')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('teams.index')}}"><i class="la la-users"></i> <span> Our Teams</span> </a>
				</li>
				@if(Session::get('admin_page') == 'category')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('categories.index')}}"><i class="la la-list-alt"></i> <span> Categories</span> </a>
				</li>
				@if(Session::get('admin_page') == 'news')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('news.index')}}"><i class="la la-newspaper-o"></i> <span> All News</span> </a>
				</li>
				@if(Session::get('admin_page') == 'gallery')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('galleries.index')}}"><i class="la la-picture-o"></i> <span>Gallery</span> </a>
				</li>
				@if(Session::get('admin_page') == 'image')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('images.index')}}"><i class="la la-camera"></i> <span>Images</span> </a>
				</li>
				@if(Session::get('admin_page') == 'project')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('projects.index')}}"><i class="la la-tasks"></i> <span>Projects</span> </a>
				</li>
				@if(Session::get('admin_page') == 'testimonial')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('testimonials.index')}}"><i class="la la-question-circle"></i> <span>Testimonials</span> </a>
				</li>
				@if(Session::get('admin_page') == 'partner')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('partners.index')}}"><i class="fa fa-handshake-o"></i> <span>Partners</span> </a>
				</li>
				@if(Session::get('admin_page') == 'slider')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('sliders.index')}}"><i class="la la-sliders"></i> <span>Slider</span> </a>
				</li>
				@if(Session::get('admin_page') == 'event')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('events.index')}}"><i class="la la-calendar"></i> <span>Events</span> </a>
				</li>
				@if(Session::get('admin_page') == 'pcategory')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('pcategories.index')}}"><i class="la la-list"></i> <span>Product Categories</span> </a>
				</li>
				@if(Session::get('admin_page') == 'product')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('products.index')}}"><i class="fa fa-product-hunt"></i> <span>Products</span> </a>
				</li>
				@if(Session::get('admin_page') == 'order')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('orders.index')}}"><i class="la la-shopping-cart"></i> <span>Orders</span> </a>
				</li>
				@if(Session::get('admin_page') == 'donation')
					@php $active = "active" @endphp
				@else
					@php $active = "" @endphp 
				@endif
				<li class="{{$active}}">
					<a href="{{ route('donations.index')}}"><i class="la la-heart-o"></i> <span>Donation</span> </a>
				</li>
			</ul>
		</div>
    </div>
</div>
<!-- /Sidebar -->
