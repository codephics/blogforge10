@extends('backend.blog.skeleton.body')
@section('content')
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
            <div class="col-md-8">
                <div class="row">
                  <div class="col">
                        <h1>Dashboard</h1>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
	</main>
@endsection