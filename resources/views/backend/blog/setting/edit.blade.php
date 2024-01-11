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
                    <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Edit Setting</h1>
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

    @if($page)
    <form class="needs-validation" method="POST" action="{{ route('blog.setting.update') }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $page->title }}" placeholder="Title" required />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="tagline" class="form-label">Tagline</label>
                            <input type="text" class="form-control" name="tagline" value="{{ $page->tagline }}" placeholder="Tagline" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="about_in_short" class="form-label">About in Short</label>
                            <textarea id="custom-textarea" name="about_in_short">{{ $page->about_in_short }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="facebook_url" class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook_url" value="{{ $page->facebook_url }}" placeholder="Enter Full LinkedIn URL" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="twitter_url" class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="twitter_url" value="{{ $page->twitter_url }}" placeholder="Enter Full Twitter URL" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="instagram_url" class="form-label">Instagram</label>
                            <input type="text" class="form-control" name="instagram_url" value="{{ $page->instagram_url }}" placeholder="Enter Full Facebook URL" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="linkedIn_url" class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" name="linkedIn_url" value="{{ $page->linkedIn_url }}" placeholder="Enter Full Pinterest" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="pinterest_url" class="form-label">Pinterest</label>
                            <input type="text" class="form-control" name="pinterest_url" value="{{ $page->pinterest_url }}" placeholder="Enter Full Instagram URL" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="reddit_url" class="form-label">Reddit</label>
                            <input type="text" class="form-control" name="reddit_url" value="{{ $page->reddit_url }}" placeholder="Enter Full Reddit URL" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="tiktok_url" class="form-label">TikTok</label>
                            <input type="text" class="form-control" name="tiktok_url" value="{{ $page->tiktok_url }}" placeholder="Enter Full TikTok URL" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="whatsapp_url" class="form-label">WhatsApp</label>
                            <input type="text" class="form-control" name="whatsapp_url" value="{{ $page->whatsapp_url }}" placeholder="Enter Full WhatsApp URL" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="youtube_url" class="form-label">YouTube</label>
                            <input type="text" class="form-control" name="youtube_url" value="{{ $page->youtube_url }}" placeholder="Enter Full YouTube URL" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="quora_url" class="form-label">Quora</label>
                            <input type="text" class="form-control" name="quora_url" value="{{ $page->quora_url }}" placeholder="Enter Full Quora URL" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="snapchat_url" class="form-label">Snapchat</label>
                            <input type="text" class="form-control" name="snapchat_url" value="{{ $page->snapchat_url }}" placeholder="Enter Full Snapchat URL" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="telegram_url" class="form-label">Telegram</label>
                            <input type="text" class="form-control" name="telegram_url" value="{{ $page->telegram_url }}" placeholder="Enter Full Telegram URL" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="tumblr_url" class="form-label">Tumblr</label>
                            <input type="text" class="form-control" name="tumblr_url" value="{{ $page->tumblr_url }}" placeholder="Enter Full Tumblr URL" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="wechat_url" class="form-label">WeChat</label>
                            <input type="text" class="form-control" name="wechat_url" value="{{ $page->wechat_url }}" placeholder="Enter Full WeChat URL" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/'.$page->og_image) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="og_img_alt_text" value="{{ $page->og_img_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="og_image" class="form-label">Upload OG</label>
                            <input class="form-control" type="file" name="og_image" multiple />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/'.$page->favicon) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="favicon_alt_text" value="{{ $page->favicon_apple_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input class="form-control" type="file" name="favicon" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/'.$page->favicon_16) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="favicon_16_alt_text" value="{{ $page->favicon_16_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="favicon_16" class="form-label">Favicon x 16</label>
                            <input class="form-control" type="file" name="favicon_16" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/'.$page->favicon_apple) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="favicon_apple_alt_text" value="{{ $page->favicon_apple_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="favicon_apple" class="form-label">Favicon Apple Touch</label>
                            <input class="form-control" type="file" name="favicon_apple" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/'.$page->favicon_32) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="favicon_32_alt_text" value="{{ $page->favicon_32_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="favicon_32" class="form-label">Favicon x 32</label>
                            <input class="form-control" type="file" name="favicon_32" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
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
                            <img src="{{ asset('blog/image/setting/'.$page->logo) }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="logo_alt_text" value="{{ $page->logo_alt_text }}" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input class="form-control" type="file" name="logo" />
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
                <button type="submit" class="btn btn-primary" disabled>Publish</button>
            </div>
        </div>
    </form>
    @else
    <form class="needs-validation" method="POST" action="{{ route('blog.setting.store') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" required />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="tagline" class="form-label">Tagline</label>
                            <input type="text" class="form-control" name="tagline" placeholder="Tagline" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/') }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="favicon_apple_alt_text" value="" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="favicon_apple" class="form-label">Favicon Apple Touch</label>
                            <input class="form-control" type="file" name="favicon_apple" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/') }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="favicon_32_alt_text" value="" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="favicon_32" class="form-label">Favicon x 32</label>
                            <input class="form-control" type="file" name="favicon_32" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/') }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="favicon_16_alt_text" value="" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="favicon_16" class="form-label">Favicon x 16</label>
                            <input class="form-control" type="file" name="favicon_16" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/') }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="logo_alt_text" value="" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input class="form-control" type="file" name="logo" />
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/') }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('blog/image/setting/') }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="og_img_alt_text" value="" placeholder="Alt Text" />
                        </div>
                        <div class="mb-3">
                            <label for="og_image" class="form-label">Upload OG</label>
                            <input class="form-control" type="file" name="og_image" multiple />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label class="form-label" for="content">Content?</label>
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" name="is_index" value="1" id="featuredCheckDefault">
                                  <label class="form-check-label" for="featuredCheckDefault">Index?</label>
                            </div>
                            <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" name="is_follow" value="1" id="featuredCheckDefault">
                                  <label class="form-check-label" for="featuredCheckDefault">Follow?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="custom-textarea" name="comment" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary" disabled>Publish</button>
            </div>
        </div>
    </form>
    @endif
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