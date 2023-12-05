@extends('frontend.template.skeleton.body')
@section('content')
		<!-- Breadcrumb -->
		<section>
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{ route('template.blog') }}">Blog</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ \Illuminate\Support\Str::limit($page->title, 100, '...') }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb -->

		<!-- Content -->
		<section>
			<div class="row g-5">
				<div class="col-md-8">
					<h1>{{ \Illuminate\Support\Str::limit($page->title, 100, '...') }}</h1>

					<img src="{{ asset('template/blog/image/featured/' . $page->featured_image) }}" alt="" class="img-fluid mt-3" />

					<article class="blog-post">
						<p class="blog-post-meta mt-3">{{ $page->created_at }} <a href="#">{{ $page->author }}</a></p>
						{!! $page->long_description !!}
					</article>

					<!-- <nav class="blog-pagination" aria-label="Pagination">
						<a class="btn btn-outline-primary" href="javascript:prevPage()" id="btn_prev">Older</a>
						<a class="btn btn-outline-secondary" href="javascript:nextPage()" id="btn_next">Newer</a>
					</nav> -->
				</div>

				<div class="col-md-4">
					<div class="position-sticky" style="top: 2rem;">
						<div class="p-4 mb-3 bg-light rounded">
							<h5>About</h5>
							<p>
								{!! $page_short_des->short_description !!}
								<a href="{{ route('template.store') }}">Download Now!</a>
							</p>
						</div>

						<!-- <div class="p-4">
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
						</div> -->

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
							<a type="button" class="btn btn-outline-secondary float-end" href="{{ route('template.blog') }}">Read Blogs</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-3"></div>

			<div class="row">
				@foreach ($relatedBlog as $page)
				<div class="col-lg-6">
					<article>
						<figure>
							<div class="card shadow mb-5 rounded-3 no-border-card">
								<a href="{{ route('template.blog.detail',$page->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="{{ asset('template/blog/image/featured/' . $page->featured_image) }}" class="card-img-top" alt="...">
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="{{ route('template.blog.detail',$page->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												{{ \Illuminate\Support\Str::limit($page->title, 100, '...') }}
											</a>
											<small>{{ $page->created_at }}</small>
											<p class="card-text">{!! \Illuminate\Support\Str::limit($page->short_description, 100, '...') !!}</p>
											<!-- <p class="card-text">
												<small><i>by</i> {{ $page->author }}</small><br>
												<small><i>in</i> <a href="{{ url('/' . $page->slug) }}" target="_blank" class="link-dark">{{ $page->category_name }}</a></small>
											</p> -->
										</p>
									</div>
									<!-- <div class="card-body">
										<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
											<a href="{{ route('template.blog.detail',$page->slug) }}" target="_self" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
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

		<!-- Questions or Suggestions -->
		<section>
			<div class="row">
				<div class="col-12">
					<p class="text-center">Have questions or suggestions? <a href="{{ route('template.contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</section>
		<!-- End Questions or Suggestions -->
	
	@endsection