<div class="left-bar col-md-3">
	<div class="row heading">
		<h1><i class="fa fa-building-o"></i> Hotel Management</h1>
	</div>
	
	<div class="row">
		<div class="btn-group btn-group-screen">
			<a type="button" class="btn btn-default btn-screen"><i class="fa fa-calendar"></i></a>
			<a type="button" class="btn btn-default btn-screen"><i class="fa fa-check"></i></a>
			<a type="button" class="btn btn-default btn-screen"><i class="fa fa-users"></i></a>
			<a type="button" class="btn btn-default btn-screen"><i class="fa fa-briefcase"></i></a>
		</div>
	</div>

	<div class="row">
		<div class="btn-group-vertical btn-group-cate">
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle <?php echo (isset($cur) && $cur == 'branches') ? 'cur' : ''; ?>" data-toggle="dropdown">
					Branches
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle" data-toggle="dropdown">
					Hotels
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle" data-toggle="dropdown">
					Room types
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle" data-toggle="dropdown">
					Rooms
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>
			<div class="divider-cate"></div>
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle" data-toggle="dropdown">
					Companies
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle" data-toggle="dropdown">
					Customers
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>

			<div class="divider-cate"></div>
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle" data-toggle="dropdown">
					Reservations
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>
			<div class="btn-group">
				<a type="button" class="btn btn-default btn-cate dropdown-toggle" data-toggle="dropdown">
					Bill informations
					<i class="fa fa-angle-down dropdown-arrow"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-cate" role="menu">
					<li><a href="#">Show all</a></li>
					<li><a href="#">Create new</a></li>
  				</ul>
			</div>

			
			<a type="button" class="btn btn-default btn-signout">
				Sign out
			</a>
			
		</div>

	</div>
</div>