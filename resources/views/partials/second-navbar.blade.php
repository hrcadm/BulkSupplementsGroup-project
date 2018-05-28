<div class="navbar navbar-default" id="navbar-second">
	<ul class="nav navbar-nav no-border visible-xs-block">
		<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
	</ul>

	<div class="navbar-collapse collapse" id="navbar-second-toggle">
		<ul class="nav navbar-nav navbar-nav-material">
			<li class="active"><a href="{{ route('home') }}"><i class="icon-display4 position-left"></i> Dashboard</a></li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-make-group position-left"></i> Company <span class="caret"></span>
				</a>

				<ul class="dropdown-menu width-250">
					<li class="dropdown-header">Manage Companies</li>
					<li><a href="{{ route('company.index') }}"><i class="icon-align-center-horizontal"></i> All Companies</a></li>
					<li><a href="{{ route('company.create') }}"><i class="icon-align-center-horizontal"></i> Add New Company</a></li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-strategy position-left"></i> Products & Categories <span class="caret"></span>
				</a>

				<ul class="dropdown-menu width-200">
					<li class="dropdown-header">Products</li>
					<li>
						<a href="{{ route('product.index') }}"><i class="icon-paragraph-justify3"></i> All Products</a>
					</li>
					<li>
						<a href="{{ route('product.create') }}"><i class="icon-hammer"></i> Add New Product</a>
					</li>

					<li class="dropdown-header">Categories</li>
					<li><a href="{{ route('product-categories.index') }}"><i class="icon-align-center-horizontal"></i> View All Categories</a></li>
					<li><a href="{{ route('product-categories.create') }}"><i class="icon-flip-vertical3"></i> Add New Category</a></li>

					<li class="dropdown-header">Sub Categories</li>
					<li><a href="{{ route('product-subcategories.index') }}"><i class="icon-align-center-horizontal"></i> View All Sub-Categories</a></li>
					<li><a href="{{ route('product-subcategories.create') }}"><i class="icon-flip-vertical3"></i> Add New Sub-Category</a></li>

				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-users position-left"></i> Customers and Memberships <span class="caret"></span>
				</a>

				<ul class="dropdown-menu width-250">
					<li class="dropdown-header">Manage Customers</li>
					<li><a href="{{ route('users.index') }}"><i class="icon-user"></i> All Customers</a></li>
					<li class="dropdown-header">Manage Memberships</li>
					<li><a href="{{ route('membership.index') }}"><i class="icon-strategy"></i> All Memberships</a></li>
				</ul>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-nav-material navbar-right">
			<li>
				<a href="changelog.html">
					<i class="icon-history position-left"></i>
					Changelog
					<span class="label label-inline position-right bg-success-400">1.6</span>
				</a>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-cog3"></i>
					<span class="visible-xs-inline-block position-right">Share</span>
					<span class="caret"></span>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
					<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
					<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>