<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="{{ route('blog.home') }}">
			BlogForge10
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Blog
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('blog.new-blog') }}">Add Blog</a></li>
						<li><a class="dropdown-item" href="{{ route('blog.manage-blog') }}">Manage Blog</a></li>
						<li><a class="dropdown-item" href="{{ route('blog.categories') }}">Manage Categories</a></li>
						<li><a class="dropdown-item" href="{{ route('blog.subcategories') }}">Manage Subcategories</a></li>
						<li><a class="dropdown-item" href="{{ route('blog.sub-subcategories') }}">Manage Sub Subcategories</a></li>
						<li><a class="dropdown-item" href="{{ route('blog.tag') }}">Manage Tags</a></li>
						<li><a class="dropdown-item" href="{{ route('blog.comments') }}">Manage Comments</a></li>
					</ul>
				</li>
				
				<li class="nav-item"><a href="{{ route('blog.home') }}" class="nav-link" target="_blank">Visit Site</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{ Auth::user()->name }}
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a></li>
						<li>
							<!-- Authentication -->
	                        <form method="POST" action="{{ route('logout') }}">
	                            @csrf

	                            <x-dropdown-link :href="route('logout')"
	                                    onclick="event.preventDefault();
	                                                this.closest('form').submit();">
	                                {{ __('Log Out') }}
	                            </x-dropdown-link>
	                        </form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>