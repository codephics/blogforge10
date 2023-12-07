@extends('backend.blog.skeleton.body')
@section('content') @section('custom-head')
<script src="https://cdn.tiny.cloud/1/m9g2pjluv64jkrzcnksdf4ur6nd9lvyrbatcjua3iazeof63/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

<main class="container p-3 py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.categories') }}">Manage Blog Categories</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.subcategories') }}">Manage Blog Subcategories</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.sub-subcategories') }}">Manage Blog Sub Subcategories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Blog Sub Subcategory</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Edit Blog Sub Subcategory</h1>
        </div>
    </div>

    @if(session()->has('message'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        </div>
    </div>
    @endif

    <form class="needs-validation" method="POST" action="{{ route('blog.sub-subcategory.update',$sub_subcategory->id) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="subcategory_name" class="form-label">Subcategory Name *</label>
                            <input class="form-control" list="datalistSubcategory" name="subcategory_name" id="subcategory_name" value="{{ $sub_subcategory->subcategory_name }}" placeholder="Subcategory" />
                            <datalist id="datalistSubcategory">
                                @foreach($subcategories as $category)
                                <option value="{{ $category->subcategory_name }}">{{ $category->subcategory_name }}</option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub_subcategory_name" class="form-label">Sub SubCategory Name *</label>
                            <input type="text" class="form-control" name="sub_subcategory_name" value="{{ $sub_subcategory->sub_subcategory_name }}" placeholder="Sub Subcategory Name" required />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Category Slug *</label>
                            <input type="text" class="form-control" name="slug" value="{{ $sub_subcategory->slug }}" placeholder="Slug" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $sub_subcategory->title }}" placeholder="Title" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="custom-textarea" name="description" rows="3">{{ $sub_subcategory->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <textarea class="form-control" name="meta_title" rows="3">{{ $sub_subcategory->meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_description" rows="3">{{ $sub_subcategory->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="facebook_meta_title" class="form-label">Facebook Meta Title</label>
                            <textarea class="form-control" name="facebook_meta_title" rows="5">{{ $sub_subcategory->facebook_meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="facebook_meta_description" class="form-label">Facebook Meta Description</label>
                            <textarea class="form-control" name="facebook_meta_description" rows="5">{{ $sub_subcategory->facebook_meta_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="twitter_meta_title" class="form-label">Twitter Meta Title</label>
                            <textarea class="form-control" name="twitter_meta_title" rows="5">{{ $sub_subcategory->twitter_meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="twitter_meta_description" class="form-label">Twitter Meta Description</label>
                            <textarea class="form-control" name="twitter_meta_description" rows="5">{{ $sub_subcategory->twitter_meta_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <img src="{{ asset('blog/category/subcategory/sub-subcategory/icon/' . $sub_subcategory->icon) }}" class="img-thumbnail" height="85" width="85" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="icon_alt_text" value="{{ $sub_subcategory->icon_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label">Category Icon *</label>
                            <input class="form-control" type="file" name="icon" id="icon" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <img src="{{ asset('blog/category/subcategory/sub-subcategory/thumb/' . $sub_subcategory->thumb) }}" class="img-thumbnail" height="85" width="85" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="thumb_alt_text" value="{{ $sub_subcategory->thumb_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Category Thumb *</label>
                            <input class="form-control" type="file" name="thumb" id="thumb" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <img src="{{ asset('blog/category/subcategory/sub-subcategory/cover/' . $sub_subcategory->cover) }}" class="img-thumbnail" height="630" width="630" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="cover_alt_text" value="{{ $sub_subcategory->cover_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Category Cover *</label>
                            <input class="form-control" type="file" name="cover" id="cover" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <img src="{{ asset('blog/category/subcategory/sub-subcategory/og/' . $sub_subcategory->og_image) }}" class="img-thumbnail" height="630" width="630" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="og_img_alt_text" value="{{ $sub_subcategory->og_img_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="og_image" class="form-label">Category OG *</label>
                            <input class="form-control" type="file" name="og_image" id="og_image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Publish</button>
                <button type="submit" class="btn btn-primary">Draft</button>
                <button type="submit" class="btn btn-secondary">Publish & Add Another</button>
            </div>
        </div>
    </form>
</main>

@section('custom-scripts')
<script>
    tinymce.init({
        selector: '#custom-textarea',
        plugins: 'link image code',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code'
    });
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
</script>
@endsection @endsection