		<meta name="description" content="{{ $page->meta_description }}" />
		<meta name="keywords" content="{{ $page->keywords }}">
		<meta name="author" content="Codephics">
		<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
		<link rel="canonical" href="https:///" />

		<!-- Meta OG Tags -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="{{ $page->facebook_meta_title }}" />
		<meta property="og:description" content="{{ $page->facebook_meta_description }}" />
		<meta property="og:image" content="{{ asset('blog/image/setting/' . $page->og_image) }}" />
		<meta property="og:image:alt" content="" />
		<meta property="og:url" content="{{ url()->full() }}" />

		<meta property="fb:app_id" content="" />
		<meta property="ia:markup_url" content="" />
		<meta property="ia:markup_url_dev" content="" />
		<meta property="ia:rules_url_dev" content="" />

		<!-- Twitter Meta Tags -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta property="twitter:domain" content="" />
		<meta name="twitter:title" content="{{ $page->twitter_meta_title }}" />
		<meta name="twitter:description" content="{{ $page->twitter_meta_description }}" />
		<meta name="twitter:image" content="{{ asset('blog/image/setting/' . $page->og_image) }}" />
		<meta property="twitter:url" content="{{ url()->full() }}" />

		@if($page->is_index == 1 && $page->is_follow == 1)
		<meta name="robots" content="index, follow">
		@elseif($page->is_index == 1) 
		<meta name="robots" content="index">
		@elseif($page->is_follow == 1)
		<meta name="robots" content="follow">
		@else
		<meta name="robots" content="noindex, nofollow">
		@endif



		
