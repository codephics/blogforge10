@extends('frontend.blog.skeleton.body')
@section('content')
		<!-- Breadcrumb -->
		<section>
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('blog.home') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb -->

		<!-- Content -->
		<section>
			<div class="row g-5">
				<div class="col-md-12">
					<h1>{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</h1>

					<img src="{{ asset('blog/image/featured/' . $blog->featured_image) }}" alt="" class="img-fluid mt-3" />

					<article class="blog-post">
						<p class="blog-post-meta mt-3">{{ $blog->created_at }} <a href="#">{{ $blog->author }}</a></p>
						{!! $blog->long_description !!}
					</article>
				</div>
			</div>
		</section>
		<!-- End Content -->

		<!-- HR -->
		<div class="mt-3 border-top border-start-0 border-bottom-0 border-end-0"></div>

		<div class="mt-3"></div>

		<!-- Related Blogs -->
		<section>
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-10">
					<h4 class="display-6">Explore more insightful content from our blog</h4>

					<p>Dive into the fundamentals of SEO and discover how it can elevate your online presence. This beginner's guide covers essential strategies and tips to optimize your website for search engines.</p>
				</div>
				<div class="col-lg-2 align-self-center">
					<div class="row">
						<div class="col-12 col-sm-12">
							<a type="button" class="btn btn-outline-secondary float-end" href="{{ route('blog.home') }}">Read Blogs</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-3"></div>

			<div class="row">
				@foreach ($relatedBlog as $blog)
				<div class="col-lg-6">
					<article>
						<figure>
							<div class="card shadow mb-5 rounded-3 no-border-card">
								<a href="{{ route('blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="{{ asset('blog/image/featured/' . $blog->featured_image) }}" class="card-img-top" alt="...">
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="{{ route('blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}
											</a>
											<small>{{ $blog->created_at }}</small>
											<p class="card-text">{!! \Illuminate\Support\Str::limit($blog->short_description, 100, '...') !!}</p>
											<!-- <p class="card-text">
												<small><i>by</i> {{ $blog->author }}</small><br>
												<small><i>in</i> <a href="{{ url('/' . $blog->slug) }}" target="_blank" class="link-dark">{{ $blog->category_name }}</a></small>
											</p> -->
										</p>
									</div>
									<!-- <div class="card-body">
										<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
											<a href="{{ route('blog.detail',$blog->slug) }}" target="_self" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
										</div>
									</div> -->
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
				@endforeach
			</div>
		</section>
		<!-- End Related Blogs -->
	
	@endsection