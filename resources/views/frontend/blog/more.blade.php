@extends('frontend.blog.skeleton.body')
@section('content')
		<!-- Breadcrumb -->
		<section>
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('blog.home') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">More Blogs</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb -->

		<!-- All Blogs -->
		<section>
			<div class="row">
				<div class="col-md-9">
					<div class="album py-5">
			            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			                @foreach($blogs as $blog)
			                <div class="col">
			                    <div class="card shadow-sm">
			                        <a href="{{ route('blog.detail',$blog->slug) }}"><img src="{{ asset('blog/image/featured/' . $blog->featured_image) }}" class="img-fluid rounded-start" width="100%" height="225" alt="..."></a>

			                        <div class="card-body">
			                            <strong class="d-inline-block mb-2 text-primary">{{ $blog->tags }}</strong>
			                            <a href="{{ route('blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">{{ \Illuminate\Support\Str::limit($blog->title, 45, '...') }}</a>
			                            <p class="card-text">{!! \Illuminate\Support\Str::limit($blog->short_description, 150, '...') !!}</p>
			                            <div class="d-flex justify-content-between align-items-center">
			                                <div class="btn-group">
			                                    <a type="button" class="btn btn-sm btn-outline-secondary" href="{{ route('blog.detail',$blog->slug) }}">Read</a>
			                                </div>
			                                <small class="mb-1 text-muted">{{ $blog->created_at }}</small>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                @endforeach
			            </div>
			        </div>
				</div>

				<div class="col-md-3 py-5">
					<div class="position-sticky" style="top: 2rem;">
						<div class="p-4 mb-3 bg-light rounded">
							<h5>About</h5>
							<p>
								short_description
								<a href="{{ route('blog.home') }}">Download Now!</a>
							</p>
						</div>

						<div class="p-4">
							<h5>Archives</h5>
							<ol class="list-unstyled mb-0">
								<li><a href="#">March 2021</a></li>
								<li><a href="#">February 2021</a></li>
								<li><a href="#">January 2021</a></li>
								<li><a href="#">December 2020</a></li>
								<li><a href="#">November 2020</a></li>
								<li><a href="#">October 2020</a></li>
								<li><a href="#">September 2020</a></li>
								<li><a href="#">August 2020</a></li>
								<li><a href="#">July 2020</a></li>
								<li><a href="#">June 2020</a></li>
								<li><a href="#">May 2020</a></li>
								<li><a href="#">April 2020</a></li>
							</ol>
						</div>

						<div class="p-4">
							<h5>Elsewhere</h5>
							<ol class="list-unstyled">
								<li><a href="https://github.com/codephics">GitHub</a></li>
								<li><a href="https://twitter.com/codephics">Twitter</a></li>
								<li><a href="https://facebook.com/codephics">Facebook</a></li>
								<li><a href="https://instagram.com/codephics">Instagram</a></li>
								<li><a href="https://stackoverflow.com/users/22997964/codephics">Stackoverflow</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blogs -->
	
	@endsection