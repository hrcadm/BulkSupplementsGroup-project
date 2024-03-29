<div class="navbar navbar-inverse bg-indigo">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

		<ul class="nav navbar-nav pull-right visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">

		<ul class="nav navbar-nav navbar-right">

			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<span>{{ Auth::user()->username }}</span>
					<i class="caret"></i>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="{{ route('myprofile') }}"><i class="icon-user-plus"></i> My profile</a></li>
					<li class="divider"></li>
					<li>
						<a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
				</ul>
			</li>
		</ul>
	</div>
</div>