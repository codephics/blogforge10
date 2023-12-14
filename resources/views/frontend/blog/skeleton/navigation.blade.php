	<section>
	    <header>
		    <div class="collapse bg-dark" id="navbarHeader">
			    <div class="container">
				    <div class="row">
					    <div class="col-sm-8 col-md-7 py-4">
						    <h4 class="text-white">{{ $setting->tagline }}</h4>
						    <div class="text-muted">{!! $setting->about_in_short !!}</div>
					    </div>
						@if ($setting)
					    <div class="col-sm-4 offset-md-1 py-4">
						    <h4 class="text-white">Like or Follow</h4>
						    <ul class="list-unstyled">
						    	@if ($setting->facebook_url)
							    <li><a href="{{ $setting->facebook_url }}" target="_blank" class="text-white">Facebook</a></li>
							    @endif
							    @if ($setting->twitter_url)
							    <li><a href="{{ $setting->twitter_url }}" target="_blank" class="text-white">Twitter</a></li>
							    @endif
							    @if ($setting->instagram_url)
							    <li><a href="{{ $setting->instagram_url }}" target="_blank" class="text-white">Instagram</a></li>
							    @endif
							    @if ($setting->linkedIn_url)
							    <li><a href="{{ $setting->linkedIn_url }}" target="_blank" class="text-white">LinkedIn</a></li>
							    @endif
							    @if ($setting->pinterest_url)
							    <li><a href="{{ $setting->pinterest_url }}" target="_blank" class="text-white">Pinterest</a></li>
							    @endif
							    @if ($setting->reddit_url)
							    <li><a href="{{ $setting->reddit_url }}" target="_blank" class="text-white">Reddit</a></li>
							    @endif
							    @if ($setting->tiktok_url)
							    <li><a href="{{ $setting->tiktok_url }}" target="_blank" class="text-white">Tiktok</a></li>
							    @endif
							    @if ($setting->whatsapp_url)
							    <li><a href="{{ $setting->whatsapp_url }}" target="_blank" class="text-white">Whatsapp</a></li>
							    @endif
							    @if ($setting->youtube_url)
							    <li><a href="{{ $setting->youtube_url }}" target="_blank" class="text-white">Youtube</a></li>
							    @endif
							    @if ($setting->quora_url)
							    <li><a href="{{ $setting->quora_url }}" target="_blank" class="text-white">Quora</a></li>
							    @endif
							    @if ($setting->snapchat_url)
							    <li><a href="{{ $setting->snapchat_url }}" target="_blank" class="text-white">Snapchat</a></li>
							    @endif
							    @if ($setting->telegram_url)
							    <li><a href="{{ $setting->telegram_url }}" target="_blank" class="text-white">Telegram</a></li>
							    @endif
							    @if ($setting->tumblr_url)
							    <li><a href="{{ $setting->tumblr_url }}" target="_blank" class="text-white">Tumblr</a></li>
							    @endif
							    @if ($setting->wechat_url)
							    <li><a href="{{ $setting->wechat_url }}" target="_blank" class="text-white">Wechat</a></li>
							    @endif
						    </ul>
					    </div>
						@endif
				    </div>
			    </div>
		    </div>
		    <div class="navbar navbar-dark bg-dark shadow-sm">
			    <div class="container">
			    	@if($setting->title && $setting->logo)
				    <a href="{{ route('blog.home') }}" class="navbar-brand d-flex align-items-center">
					    <img src="{{ asset('blog/setting/' . $setting['logo']) }}" width="20" height="20" alt="{{ $setting->logo_alt_text }}">
				    </a>
				    @elseif($setting->title)
				    <a href="{{ route('blog.home') }}" class="navbar-brand d-flex align-items-center">
					    <strong>{{ $setting->title }}</strong>
				    </a>
				    @endif
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				    </button>
			    </div>
		    </div>
	    </header>
	</section>
