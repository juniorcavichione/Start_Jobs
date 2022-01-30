<?php include_once('./includes/cabecalho.php')?>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<?php include "includes/header.php"?>
				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header class="py-5 border-bottom">
							<div class="container pt-md-1 pb-md-4">
								<div class="row">
									<div class="col-xl-8">
										<h1 class="bd-title mt-0">Examples</h1>
										<p class="bd-lead">Quickly get a project started with any of our examples
											ranging from using parts of the framework to custom components and layouts.
										</p>

										<div class="d-flex flex-column flex-sm-row">
											<a href="https://github.com/twbs/bootstrap/releases/download/v5.0.2/bootstrap-5.0.2-examples.zip"
												class="btn btn-lg btn-bd-primary"
												onclick="ga('send', 'event', 'Examples', 'Hero', 'Download Examples');">Download
												examples</a>
											<a href="https://github.com/twbs/bootstrap/archive/v5.0.2.zip"
												class="btn btn-lg btn-outline-secondary mt-3 mt-sm-0 ms-sm-3"
												onclick="ga('send', 'event', 'Examples', 'Hero', 'Download');">Download
												source code</a>
										</div>

									</div>
									<div class="col-xl-4 d-lg-flex justify-content-xl-end">
										<script async=""
											src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&amp;placement=getbootstrapcom"
											id="_carbonads_js"></script>

									</div>
								</div>
							</div>
						</header>

						<main class="bd-content order-1 py-5" id="content">
							<div class="container">

								<h2 id="snippets">Snippets</h2>
								<p>Common patterns for building sites and apps that build on existing components and
									utilities with custom CSS and more.</p>
								<div class="row">
									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/headers/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/headers.png,
                                                  /docs/5.0/assets/img/examples/headers@2x.png 2x"
												src="/docs/5.0/assets/img/examples/headers.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Headers</h3>
										</a>
										<p class="text-muted">Display your branding, navigation, search, and more with
											these header components</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/heroes/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/heroes.png,
                                                  /docs/5.0/assets/img/examples/heroes@2x.png 2x"
												src="/docs/5.0/assets/img/examples/heroes.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Heroes</h3>
										</a>
										<p class="text-muted">Set the stage on your homepage with heroes that feature
											clear calls to action.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/features/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/features.png,
                                                  /docs/5.0/assets/img/examples/features@2x.png 2x"
												src="/docs/5.0/assets/img/examples/features.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Features</h3>
										</a>
										<p class="text-muted">Explain the features, benefits, or other details in your
											marketing content.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/sidebars/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/sidebars.png,
                                                  /docs/5.0/assets/img/examples/sidebars@2x.png 2x"
												src="/docs/5.0/assets/img/examples/sidebars.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Sidebars</h3>
										</a>
										<p class="text-muted">Common navigation patterns ideal for offcanvas or
											multi-column layouts.</p>
									</div>
								</div>
								<h2 id="custom-components">Custom Components</h2>
								<p>Brand new components and templates to help folks quickly get started with Bootstrap
									and demonstrate best practices for adding onto the framework.</p>
								<div class="row">
									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/album/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/album.png,
                                                  /docs/5.0/assets/img/examples/album@2x.png 2x"
												src="/docs/5.0/assets/img/examples/album.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Album</h3>
										</a>
										<p class="text-muted">Simple one-page template for photo galleries, portfolios,
											and more.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/pricing/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/pricing.png,
                                                  /docs/5.0/assets/img/examples/pricing@2x.png 2x"
												src="/docs/5.0/assets/img/examples/pricing.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Pricing</h3>
										</a>
										<p class="text-muted">Example pricing page built with Cards and featuring a
											custom header and footer.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/checkout/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/checkout.png,
                                                  /docs/5.0/assets/img/examples/checkout@2x.png 2x"
												src="/docs/5.0/assets/img/examples/checkout.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Checkout</h3>
										</a>
										<p class="text-muted">Custom checkout form showing our form components and their
											validation features.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/product/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/product.png,
                                                  /docs/5.0/assets/img/examples/product@2x.png 2x"
												src="/docs/5.0/assets/img/examples/product.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Product</h3>
										</a>
										<p class="text-muted">Lean product-focused marketing page with extensive grid
											and image work.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/cover/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/cover.png,
                                                  /docs/5.0/assets/img/examples/cover@2x.png 2x"
												src="/docs/5.0/assets/img/examples/cover.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Cover</h3>
										</a>
										<p class="text-muted">A one-page template for building simple and beautiful home
											pages.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/carousel/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/carousel.png,
                                                  /docs/5.0/assets/img/examples/carousel@2x.png 2x"
												src="/docs/5.0/assets/img/examples/carousel.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Carousel</h3>
										</a>
										<p class="text-muted">Customize the navbar and carousel, then add some new
											components.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/blog/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/blog.png,
                                                  /docs/5.0/assets/img/examples/blog@2x.png 2x"
												src="/docs/5.0/assets/img/examples/blog.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Blog</h3>
										</a>
										<p class="text-muted">Magazine like blog template with header, navigation,
											featured content.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/dashboard/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/dashboard.png,
                                                  /docs/5.0/assets/img/examples/dashboard@2x.png 2x"
												src="/docs/5.0/assets/img/examples/dashboard.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Dashboard</h3>
										</a>
										<p class="text-muted">Basic admin dashboard shell with fixed sidebar and navbar.
										</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/sign-in/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/sign-in.png,
                                                  /docs/5.0/assets/img/examples/sign-in@2x.png 2x"
												src="/docs/5.0/assets/img/examples/sign-in.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Sign-in</h3>
										</a>
										<p class="text-muted">Custom form layout and design for a simple sign in form.
										</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/sticky-footer/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/sticky-footer.png,
                                                  /docs/5.0/assets/img/examples/sticky-footer@2x.png 2x"
												src="/docs/5.0/assets/img/examples/sticky-footer.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Sticky footer</h3>
										</a>
										<p class="text-muted">Attach a footer to the bottom of the viewport when page
											content is short.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/sticky-footer-navbar/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/sticky-footer-navbar.png,
                                                  /docs/5.0/assets/img/examples/sticky-footer-navbar@2x.png 2x"
												src="/docs/5.0/assets/img/examples/sticky-footer-navbar.png" alt=""
												width="480" height="300" loading="lazy">
											<h3 class="h5 mb-1">Sticky footer navbar</h3>
										</a>
										<p class="text-muted">Attach a footer to the bottom of the viewport with a fixed
											top navbar.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/jumbotron/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/jumbotron.png,
                                                  /docs/5.0/assets/img/examples/jumbotron@2x.png 2x"
												src="/docs/5.0/assets/img/examples/jumbotron.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Jumbotron</h3>
										</a>
										<p class="text-muted">Use utilities to recreate and enhance Bootstrap 4's
											jumbotron.</p>
									</div>
								</div>
								<h2 id="framework">Framework</h2>
								<p>Examples that focus on implementing uses of built-in components provided by
									Bootstrap.</p>
								<div class="row">
									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/starter-template/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/starter-template.png,
                                                  /docs/5.0/assets/img/examples/starter-template@2x.png 2x"
												src="/docs/5.0/assets/img/examples/starter-template.png" alt=""
												width="480" height="300" loading="lazy">
											<h3 class="h5 mb-1">Starter template</h3>
										</a>
										<p class="text-muted">Nothing but the basics: compiled CSS and JavaScript.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/grid/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/grid.png,
                                                  /docs/5.0/assets/img/examples/grid@2x.png 2x"
												src="/docs/5.0/assets/img/examples/grid.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Grid</h3>
										</a>
										<p class="text-muted">Multiple examples of grid layouts with all four tiers,
											nesting, and more.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/cheatsheet/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/cheatsheet.png,
                                                  /docs/5.0/assets/img/examples/cheatsheet@2x.png 2x"
												src="/docs/5.0/assets/img/examples/cheatsheet.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Cheatsheet</h3>
										</a>
										<p class="text-muted">Kitchen sink of Bootstrap components.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/cheatsheet-rtl/" hreflang="ar">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/cheatsheet-rtl.png,
                                                  /docs/5.0/assets/img/examples/cheatsheet-rtl@2x.png 2x"
												src="/docs/5.0/assets/img/examples/cheatsheet-rtl.png" alt=""
												width="480" height="300" loading="lazy">
											<h3 class="h5 mb-1">Cheatsheet RTL</h3>
										</a>
										<p class="text-muted">Kitchen sink of Bootstrap components, RTL.</p>
									</div>
								</div>
								<h2 id="navbars">Navbars</h2>
								<p>Taking the default navbar component and showing how it can be moved, placed, and
									extended.</p>
								<div class="row">
									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/navbars/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/navbars.png,
                                                  /docs/5.0/assets/img/examples/navbars@2x.png 2x"
												src="/docs/5.0/assets/img/examples/navbars.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Navbars</h3>
										</a>
										<p class="text-muted">Demonstration of all responsive and container options for
											the navbar.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/navbar-static/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/navbar-static.png,
                                                  /docs/5.0/assets/img/examples/navbar-static@2x.png 2x"
												src="/docs/5.0/assets/img/examples/navbar-static.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Navbar static</h3>
										</a>
										<p class="text-muted">Single navbar example of a static top navbar along with
											some additional content.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/navbar-fixed/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/navbar-fixed.png,
                                                  /docs/5.0/assets/img/examples/navbar-fixed@2x.png 2x"
												src="/docs/5.0/assets/img/examples/navbar-fixed.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Navbar fixed</h3>
										</a>
										<p class="text-muted">Single navbar example with a fixed top navbar along with
											some additional content.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/navbar-bottom/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/navbar-bottom.png,
                                                  /docs/5.0/assets/img/examples/navbar-bottom@2x.png 2x"
												src="/docs/5.0/assets/img/examples/navbar-bottom.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Navbar bottom</h3>
										</a>
										<p class="text-muted">Single navbar example with a bottom navbar along with some
											additional content.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/offcanvas-navbar/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/offcanvas-navbar.png,
                                                  /docs/5.0/assets/img/examples/offcanvas-navbar@2x.png 2x"
												src="/docs/5.0/assets/img/examples/offcanvas-navbar.png" alt=""
												width="480" height="300" loading="lazy">
											<h3 class="h5 mb-1">Offcanvas navbar</h3>
										</a>
										<p class="text-muted">Turn your expandable navbar into a sliding offcanvas menu
											(doesn't use our offcanvas component).</p>
									</div>
								</div>
								<h2 id="rtl">RTL</h2>
								<p>See Bootstrap's RTL version in action with these modified Custom Components examples.
								</p>
								<div class="bd-callout bd-callout-warning">
									<p>The RTL feature is still <strong>experimental</strong> and will probably evolve
										according to user feedback. Spotted something or have an improvement to suggest?
										<a href="https://github.com/twbs/bootstrap/issues/new">Open an issue</a>, we'd
										love to get your insights.</p>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/album-rtl/" hreflang="ar">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/album-rtl.png,
                                                  /docs/5.0/assets/img/examples/album-rtl@2x.png 2x"
												src="/docs/5.0/assets/img/examples/album-rtl.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Album RTL</h3>
										</a>
										<p class="text-muted">Simple one-page template for photo galleries, portfolios,
											and more.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/checkout-rtl/" hreflang="ar">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/checkout-rtl.png,
                                                  /docs/5.0/assets/img/examples/checkout-rtl@2x.png 2x"
												src="/docs/5.0/assets/img/examples/checkout-rtl.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Checkout RTL</h3>
										</a>
										<p class="text-muted">Custom checkout form showing our form components and their
											validation features.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/carousel-rtl/" hreflang="ar">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/carousel-rtl.png,
                                                  /docs/5.0/assets/img/examples/carousel-rtl@2x.png 2x"
												src="/docs/5.0/assets/img/examples/carousel-rtl.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Carousel RTL</h3>
										</a>
										<p class="text-muted">Customize the navbar and carousel, then add some new
											components.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/blog-rtl/" hreflang="ar">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/blog-rtl.png,
                                                  /docs/5.0/assets/img/examples/blog-rtl@2x.png 2x"
												src="/docs/5.0/assets/img/examples/blog-rtl.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Blog RTL</h3>
										</a>
										<p class="text-muted">Magazine like blog template with header, navigation,
											featured content.</p>
									</div>

									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/dashboard-rtl/" hreflang="ar">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/dashboard-rtl.png,
                                                  /docs/5.0/assets/img/examples/dashboard-rtl@2x.png 2x"
												src="/docs/5.0/assets/img/examples/dashboard-rtl.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Dashboard RTL</h3>
										</a>
										<p class="text-muted">Basic admin dashboard shell with fixed sidebar and navbar.
										</p>
									</div>
								</div>
								<h2 id="integrations">Integrations</h2>
								<p>Integrations with external libraries.</p>
								<div class="row">
									<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
										<a class="d-block" href="/docs/5.0/examples/masonry/">
											<img class="img-thumbnail mb-3" srcset="/docs/5.0/assets/img/examples/masonry.png,
                                                  /docs/5.0/assets/img/examples/masonry@2x.png 2x"
												src="/docs/5.0/assets/img/examples/masonry.png" alt="" width="480"
												height="300" loading="lazy">
											<h3 class="h5 mb-1">Masonry</h3>
										</a>
										<p class="text-muted">Combine the powers of the Bootstrap grid and the Masonry
											layout.</p>
									</div>
								</div>

								<hr class="my-5">
								<div class="container">
									<div class="text-center">
										<div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
												fill="currentColor" focusable="false" viewBox="0 0 16 16">
												<path fill-rule="evenodd"
													d="M8 16a6 6 0 006-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 006 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z"
													clip-rule="evenodd"></path>
											</svg>

										</div>
										<h2 class="display-6 fw-normal">Go further with Bootstrap Themes</h2>
										<p class="col-md-10 col-lg-8 mx-auto lead">
											Need something more than these examples? Take Bootstrap to the next level
											with premium themes from the <a
												href="https://themes.getbootstrap.com/">official Bootstrap Themes
												marketplace</a>. They’re built as their own extended frameworks, rich
											with new components and plugins, documentation, and powerful build tools.
										</p>
										<a href="https://themes.getbootstrap.com/"
											class="btn btn-lg btn-outline-primary mb-3">Browse themes</a>
									</div>
									<img class="d-block img-fluid mt-3 mx-auto" srcset="/docs/5.0/assets/img/bootstrap-themes-collage.png,
                                                              /docs/5.0/assets/img/bootstrap-themes-collage@2x.png 2x"
										src="/docs/5.0/assets/img/bootstrap-themes-collage.png" alt="Bootstrap Themes"
										width="1150" height="320" loading="lazy">
								</div>

							</div>
						</main>
					</div>
					<span class="image object">
						<!-- <img src="images/pic10.jpg" alt="" /> -->
					</span>
				</section>
				<hr>
				<!-- VAGAS  BACK-END -->
				<h2>Vagas</h2>
			</div>
		</div>
		<?php include_once('./includes/sidebar.php');?>
	</div>
	<?php include_once('./includes/footer.php');?>