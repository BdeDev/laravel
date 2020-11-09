<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div class="navbar-header">
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#main-menu" aria-controls="main-menu"
				aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="{{ url('/admin') }}">
				{{ config('app.name') }}
			</a>
			<a class="navbar-brand hidden" href="{{ url('/admin') }}"><h2>A</h2></a>
		</div>
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{ url('admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li>
				<li class="menu-item-has-children dropdown" id ="children2">
    				<a href="#" class="dropdown-toggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>User</a>
					<ul class="sub-menu children dropdown-menu" id ="dropdown-menu2">
						<li class=""><a href="{{ url('admin/users') }}"> <i class="menu-icon fa fa-users"></i>Users</a></li>						
					</ul>
				</li>
				
				<li class="menu-item-has-children dropdown" id ="children2">
    				<a href="#" class="dropdown-toggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Manage</a>
					<ul class="sub-menu children dropdown-menu" id ="dropdown-menu2">
						<li class=""><a href="{{ url('admin/login-history') }}"> <i class="menu-icon fa fa-history"></i>Login History</a></li>
						<li class=""><a href="{{ url('admin/email-queue') }}"> <i class="menu-icon fa fa-envelope"></i>Email Queue</a></li>
					</ul>
				</li>
				<li class="active"><a href="{{ URL::to('admin/travel-record') }}" > <i class="menu-icon fa fa-users"></i>Records</a></li>				
				<li class="active"><a href="{{ URL::to('admin/page') }}"> <i class="menu-icon fa fa-file"></i>Pages</a></li>
				<li class="active"><a href="{{ URL::to('admin/age') }}"> <i class="menu-icon fa fa-user"></i>Age</a></li>				
			</ul>
		</div>
	</nav>
</aside>
