		<footer class="container">
			<!-- Subscription -->
			<div class="row py-3 border border-start-0 border-end-0">
				<div class="col-md-8">
					<h6 class="display-6">Subscribe now for free <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> website blogs!</h6>
					<p>By subscribing to our email list, you'll receive free <abbr title="HyperText Markup Language" class="initialism"><strong>HTML5</strong></abbr><strong>, Bootstrap 5, and SEO-Friendly website blogs</strong> straight to your inbox! Don't miss out on the latest designs and updates - subscribe now to stay up to date and elevate your web development game.</p>
				</div>
				
				<div class="col-md-4 align-self-center">
					<form class="row g-3 float-end needs-validation" method="POST" action="{{ route('blog.new-subscriber') }}" novalidate>
						@csrf
						<div class="col-auto">
							<label for="staticEmail2" class="visually-hidden"></label>
							<input type="email" class="form-control" name="email" placeholder="name@example.com" required />
						    <div class="valid-feedback">
						      Looks good!
						    </div>
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary mb-3">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
			<!-- Bottom Menu -->
			<div class="row py-3 border border-start-0 border-top-0 border-end-0">
				<div class="col-12">
					<nav class="nav">
						<a class="nav-link" href="{{ route('blog.privacy-policy') }}">Privacy Policy</a>
						<a class="nav-link" href="{{ route('blog.terms-of-service') }}">Terms of Service</a>
						<a class="nav-link" href="{{ route('blog.license') }}">Licenses</a>
						<a class="nav-link" href="{{ route('blog.contact-us') }}">Contact Us</a>
					</nav>
				</div>
			</div>
			<div class="row py-3">
				<div class="col-8">
					<details class="mb-3">
						<summary>2022 © Bootstrap. All Rights Reserved.</summary>
						<p>All content and graphics on this web site are the property of Bootstrap.</p>
					</details>
					<nav class="nav">
						<a href="https://twitter.com" title="Twitter" target="_blank" rel="nofollow" class="link-dark"><i class="fa-brands fa-twitter ms-2"></i></a>
						<a href="https://facebook.com" title="Facebook" target="_blank" rel="nofollow" class="link-dark"><i class="fa-brands fa-facebook ms-2"></i></a>
						<a href="https://github.com" title="Github" target="_blank" rel="nofollow" class="link-dark"><i class="fa-brands fa-github ms-2"></i></a>
						<a href="https://stackoverflow.com" title="Stack Overflow" target="_blank" rel="nofollow" class="link-dark"><i class="fa-brands fa-stack-overflow ms-2"></i></a>
						<a href="https://instagram.com" title="Instagram" target="_blank" rel="nofollow" class="link-dark"><i class="fa-brands fa-instagram ms-2"></i></a>
						<a href="https://dribbble.com" title="Dribbble" target="_blank" rel="nofollow" class="link-dark"><i class="fa-brands fa-dribbble ms-2"></i></a>
					</nav>
				</div>
				<div class="col-4">
					<p class="float-end"><a href="#">Back to top</a></p>
				</div>
			</div>
		</footer>