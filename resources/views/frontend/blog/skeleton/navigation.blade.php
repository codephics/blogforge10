	<section>
	    <header>
		    <div class="collapse bg-dark" id="navbarHeader">
			    <div class="container">
				    <div class="row">
					    <div class="col-sm-8 col-md-7 py-4">
						    <h4 class="text-white">{{ $page->tagline }}</h4>
						    <div class="text-muted">{!! $page->about_in_short !!}</div>
					    </div>
						@if ($page)
					    <div class="col-sm-4 offset-md-1 py-4">
						    <h4 class="text-white">Like or Follow</h4>
						    <ul class="list-unstyled">
						    	@if ($page->facebook_url)
							    <li><a href="{{ $page->facebook_url }}" target="_blank" class="text-white">Facebook</a></li>
							    @endif
							    @if ($page->twitter_url)
							    <li><a href="{{ $page->twitter_url }}" target="_blank" class="text-white">Twitter</a></li>
							    @endif
							    @if ($page->instagram_url)
							    <li><a href="{{ $page->instagram_url }}" target="_blank" class="text-white">Instagram</a></li>
							    @endif
							    @if ($page->linkedIn_url)
							    <li><a href="{{ $page->linkedIn_url }}" target="_blank" class="text-white">LinkedIn</a></li>
							    @endif
							    @if ($page->pinterest_url)
							    <li><a href="{{ $page->pinterest_url }}" target="_blank" class="text-white">Pinterest</a></li>
							    @endif
							    @if ($page->reddit_url)
							    <li><a href="{{ $page->reddit_url }}" target="_blank" class="text-white">Reddit</a></li>
							    @endif
							    @if ($page->tiktok_url)
							    <li><a href="{{ $page->tiktok_url }}" target="_blank" class="text-white">Tiktok</a></li>
							    @endif
							    @if ($page->whatsapp_url)
							    <li><a href="{{ $page->whatsapp_url }}" target="_blank" class="text-white">Whatsapp</a></li>
							    @endif
							    @if ($page->youtube_url)
							    <li><a href="{{ $page->youtube_url }}" target="_blank" class="text-white">Youtube</a></li>
							    @endif
							    @if ($page->quora_url)
							    <li><a href="{{ $page->quora_url }}" target="_blank" class="text-white">Quora</a></li>
							    @endif
							    @if ($page->snapchat_url)
							    <li><a href="{{ $page->snapchat_url }}" target="_blank" class="text-white">Snapchat</a></li>
							    @endif
							    @if ($page->telegram_url)
							    <li><a href="{{ $page->telegram_url }}" target="_blank" class="text-white">Telegram</a></li>
							    @endif
							    @if ($page->tumblr_url)
							    <li><a href="{{ $page->tumblr_url }}" target="_blank" class="text-white">Tumblr</a></li>
							    @endif
							    @if ($page->wechat_url)
							    <li><a href="{{ $page->wechat_url }}" target="_blank" class="text-white">Wechat</a></li>
							    @endif
						    </ul>
					    </div>
						@endif
				    </div>
			    </div>
		    </div>
		    <div class="navbar navbar-dark bg-dark shadow-sm">
			    <div class="container">
				    <a href="{{ route('blog.home') }}" class="navbar-brand d-flex align-items-center">
				    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
				    <strong>BlogForge10</strong>
			    </a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				    </button>
			    </div>
		    </div>
	    </header>
	</section>
