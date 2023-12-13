@extends('backend.blog.skeleton.body') @section('content')
<main class="container p-3 py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->
    <div class="row g-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col">
                    <h1>Dashboard</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <hr class="col-12" />

                <div class="row g-5">
                    <div class="col-md-6">
                        <p>
                            🚀 Elevate Your Blogging Experience with BlogForge10! Simplify tasks, from creation to publication, with a streamlined workflow. Enjoy cross-platform compatibility for on-the-go management. Our robust security
                            ensures data protection, while optimized performance guarantees a seamless user experience. Gain insights with comprehensive analytics and customize your blog with themes and layouts. Join savvy developers and
                            revolutionize your blogging game. 🌐✨
                        </p>
                        <ul class="icon-list ps-0">
                            <li class="d-flex align-items-start mb-1"><a href="https://codephics.com" rel="noopener" target="_blank">codephics.com</a></li>
                            <li class="text-muted d-flex align-items-start mb-1">Explore More!</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h2>Quick Links</h2>
                        <ul class="icon-list ps-0">
                            <li class="d-flex align-items-start mb-1"><a href="{{ route('blog.new-blog') }}">Add Blog</a></li>
                            <li class="d-flex align-items-start mb-1"><a href="{{ route('blog.manage-blog') }}">Manage Blog</a></li>
                            <li class="d-flex align-items-start mb-1"><a href="{{ route('blog.categories') }}">Manage Categories</a></li>
                            <li class="d-flex align-items-start mb-1"><a href="{{ route('blog.subcategories') }}">Manage Subcategories</a></li>
                            <li class="d-flex align-items-start mb-1"><a href="{{ route('blog.sub-subcategories') }}">Manage Sub Subcategories</a></li>
                            <li class="d-flex align-items-start mb-1"><a href="{{ route('blog.tag') }}">Manage Tags</a></li>
                            <li class="d-flex align-items-start mb-1"><a href="{{ route('blog.comments') }}">Manage Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</main>
@endsection
