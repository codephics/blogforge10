@extends('skeleton.body')
@section('content')
		<!-- Featured -->
		<section>
			<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
				<div class="col-md-12 px-0">
					<h1 class="display-4 fst-italic">Illuminate\Support\Str::limit(title, 100,</h1>
					blog->short_description
					<p><a href="#" class="text-white fw-bold">Continue reading...</a></p>
				</div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-md-6">
			      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
			        <div class="col p-4 d-flex flex-column position-static">
			          <strong class="d-inline-block mb-2 text-primary">blog->tags</strong>
			          <h2 class="mb-0">Illuminate\Support\Str::limit(->title, 75</h2>
			          <div class="mb-1 text-muted">created_at </div>
			          {!! \Illuminate\Support\Str::limit(blog short_description, 150, '...')
			          <br>
			          <a href="#" class="stretched-link">Continue reading</a>
			        </div>
			        <div class="col-auto d-none d-lg-block">
			          <img src="#" class="img-fluid rounded-start" width="200" height="250" alt="...">
			        </div>
			      </div>
			    </div>
			</div>
		<section>
		<!-- End Featured -->

		<section>
			<div class="row">
				<div class="col-md-8">
					<h3 class="pb-4 mb-4 fst-italic border-bottom">\Illuminate\Support\Str::limit(title, 100, '...')</h3>

					<article class="blog-post" id="listingBlog">
						<p class="blog-post-meta">created_at <a href="#">->seller</a></p>
						->long_description
					</article>

					<!-- <nav class="blog-pagination" aria-label="Pagination">
						<a class="btn btn-outline-primary" href="javascript:prevPage()" id="btn_prev">Older</a>
						<a class="btn btn-outline-secondary" href="javascript:nextPage()" id="btn_next">Newer</a>
					</nav> -->
				</div>

				<div class="col-md-4">
					<div class="position-sticky" style="top: 2rem;">
						<div class="p-4 mb-3 bg-light rounded">
							<h5 class="fst-italic">About</h5>
							<p>
								page->short_description 
								<a href="{{ route('blog.home') }}">Download Now!</a>
							</p>
						</div>

						<!-- <div class="p-4">
							<h5 class="fst-italic">Archives</h5>
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
							<h5 class="fst-italic">Elsewhere</h5>
							<ol class="list-unstyled">
								<li><a href="https://github.com/codephics" target="_blank" rel="nofollow">GitHub</a></li>
								<li><a href="https://twitter.com/codephics" target="_blank" rel="nofollow">Twitter</a></li>
								<li><a href="https://facebook.com/codephics" target="_blank" rel="nofollow">Facebook</a></li>
								<li><a href="https://instagram.com/codephics" target="_blank" rel="nofollow">Instagram</a></li>
								<li><a href="https://stackoverflow.com/users/22997964/codephics" target="_blank" rel="nofollow">Stackoverflow</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Questions or Suggestions -->
		<section>
			<div class="row">
				<div class="col-12">
					<p>Have questions or suggestions? <a href="#">Contact Us</a></p>
				</div>
			</div>
		</section>
		<!-- End Questions or Suggestions -->
	
	@endsection