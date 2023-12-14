@extends('frontend.blog.skeleton.body') @section('custom-head')
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
</style>
@endsection @section('content')
<!-- Featured -->
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">{{ \Illuminate\Support\Str::limit($page->title, 100, '...') }}</h1>
            <p class="lead text-muted">{!! $page->short_description !!}</p>
            <p>
                <a href="{{ route('blog.more') }}" class="btn btn-primary my-2">Explore More Blogs</a>
            </p>
        </div>
    </div>
</section>
<!-- End Featured -->

<!-- All Blogs -->
<section>
    <div class="album py-5 bg-light">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($blogs as $blog)
            <div class="col">
                <div class="card shadow-sm">
                    <a href="{{ route('blog.detail',$blog->slug) }}"><img src="{{ asset('blog/image/featured/' . $blog->featured_image) }}" class="img-fluid rounded-start" width="100%" height="225" alt="..." /></a>

                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">{{ $blog->tags }}</strong>
                        <a href="{{ route('blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">{{ \Illuminate\Support\Str::limit($blog->title, 45, '...') }}</a>
                        <p class="card-text"></p>
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
</section>
<!-- End Blogs -->

@endsection
