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
                    <li class="breadcrumb-item"><a href="{{ route('blog.page.manage-pages') }}">Manage Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Page</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Edit Page</h1>
        </div>
    </div>

    @if(session()->has('update'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                {{ session('update') }}
            </div>
        </div>
    </div>
    @endif

    <form class="needs-validation" method="POST" action="{{ route('blog.page.update', $page->id) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $page->name }}" placeholder="Name" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $page->title }}" placeholder="Title" required />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $page->slug }}" placeholder="Slug" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="keywords" class="form-label">Keywords</label>
                            <input type="text" class="form-control" name="keywords[]" value="{{ $page->keywords }}" placeholder="Keywords" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category</label>
                            <input class="form-control" list="datalistCategory" name="category_name" value="{{ $page->category_name }}" placeholder="Category" />
                            <datalist id="datalistCategory">
                                @foreach($categories as $category)
                                <option value="{{ $category->category_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="subcategory_name" class="form-label">Subcategory</label>
                            <input class="form-control" list="datalistSubcategory" name="subcategory_name" value="{{ $page->subcategory_name }}" id="subcategory_name" placeholder="Subcategory" />
                            <datalist id="datalistSubcategory">
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->subcategory_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub_subcategory_name" class="form-label">Sub Subcategory</label>
                            <input class="form-control" list="datalistSubSubcategory" name="sub_subcategory_name" value="{{ $page->sub_subcategory_name }}" placeholder="Sub Subcategory" />
                            <datalist id="datalistSubSubcategory">
                                @foreach($sub_subcategories as $sub_subcategory)
                                <option value="{{ $sub_subcategory->sub_subcategory_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea id="custom-textarea" name="short_description">{{ $page->short_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="long_description" class="form-label">Long Description</label>
                            <textarea id="custom-textarea" name="long_description">{{ $page->long_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="youtube_iframe" class="form-label">Youtube Iframe</label>
                            <textarea class="form-control" rows="3" name="youtube_iframe">{{ $page->youtube_iframe }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="header_content" class="form-label">Header Content</label>
                            <textarea class="form-control" rows="3" name="header_content">{{ $page->header_content }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <textarea class="form-control" id="meta_title" rows="3" name="meta_title">{{ $page->meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" id="meta_description" rows="3" name="meta_description">{{ $page->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="facebook_meta_title" class="form-label">Facebook Meta Title</label>
                            <textarea class="form-control" id="facebook_meta_title" rows="3" name="facebook_meta_title">{{ $page->facebook_meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="facebook_meta_description" class="form-label">Facebook Meta Description</label>
                            <textarea class="form-control" id="facebook_meta_description" rows="3" name="facebook_meta_description">{{ $page->facebook_meta_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="twitter_meta_title" class="form-label">Twitter Meta Title</label>
                            <textarea class="form-control" id="twitter_meta_title" rows="3" name="twitter_meta_title">{{ $page->twitter_meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="twitter_meta_description" class="form-label">Twitter Meta Description</label>
                            <textarea class="form-control" id="twitter_meta_description" rows="3" name="twitter_meta_description">{{ $page->twitter_meta_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/page/thumb/' . $page->thumb) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="thumb_alt_text" value="{{ $page->thumb_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="fthumb" class="form-label">Thumb</label>
                            <input class="form-control" type="file" name="thumb" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/page/breadcrumb/' . $page->breadcrumb_image) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="breadcrumb_alt_text" value="{{ $page->breadcrumb_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="breadcrumb_image" class="form-label">Breadcrumb</label>
                            <input class="form-control" type="file" name="breadcrumb_image" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/page/cover/' . $page->cover_image) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="cover_alt_text" value="{{ $page->cover_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="cover_image" class="form-label">Cover</label>
                            <input class="form-control" type="file" name="cover_image" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/page/og/' . $page->og_image) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="og_img_alt_text" value="{{ $page->og_img_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="og_image" class="form-label">Upload OG</label>
                            <input class="form-control" type="file" name="og_image" multiple />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content?</label>
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="is_index" value="1" id="featuredCheckDefault" @if($page->is_index == 1) checked @endif>
                                <label class="form-check-label" for="featuredCheckDefault">Index?</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="is_follow" value="1" id="featuredCheckDefault" @if($page->is_follow == 1) checked @endif>
                                <label class="form-check-label" for="featuredCheckDefault">Follow?</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_featured" value="1" id="featuredCheckDefault" @if($page->is_featured == 1) checked @endif>
                                <label class="form-check-label" for="featuredCheckDefault">Featured?</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupStatus">Status</label>
                                <select class="form-select" id="inputGroupStatus" name="status">
                                    @if($page->status == 1)
                                    <option value="1">Published</option>
                                    <option value="0">Draft</option>
                                    @else
                                    <option value="0">Draft</option>
                                    <option value="1">Publish</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="custom-textarea" name="comment" rows="3">{{ $page->comment }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Publish</button>
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