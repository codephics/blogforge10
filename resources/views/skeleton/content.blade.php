@extends('frontend.blog.skeleton.body')
@section('content')
		<!-- Breadcrumb -->
		<section>
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('blog.home') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $pageContent->name }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb -->

		<section>
			<div class="row">
				<div class="col-12">
					{!! $pageContent->long_description !!}
				</div>
			</div>
		</section>
	
	@endsection