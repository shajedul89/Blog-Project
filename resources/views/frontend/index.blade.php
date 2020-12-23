@extends('frontend.app')
@section('main-content')


<!-- Start Banner Area -->
		<section class="banner-area">
			<div class="container">
				<div class="banner-text">
					<h1>The Best Dog Tech & Accessories</h1>

					<ul>
						<li>
							<a href="#"><i class="bx bxl-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="bx bxl-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="bx bxl-instagram"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->

		<!-- Start Main Blog Area -->
		<section class="main-blog-area-two pb-100">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 plr-5">
						<div class="single-main-blog-item-two bg-1">
							<span class="blog-link">
								Gadgets
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>Why We Need for Guidelines for Brain Scan Data</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										25 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="row">
							<div class="col-lg-12 col-md-6 plr-5">
								<div class="single-main-blog-item-two middle mb-8">
									<img src=" public/frontend/assets/img/home-two/main-blog-img/2.jpg" alt="Image">
									<span class="blog-link">
										IT
									</span>

									<div class="main-blog-content">
										<a href="post-style-one.html">
											<h3>What Would It Take To Shut-down the Internet</h3>
										</a>

										<ul>
											<li>
												<a href="#" class="admin">
													<i class="bx bx-user"></i>
													By Jhona Walker
												</a>
											</li>
											<li>
												<i class="bx bx-calendar"></i>
												26 Jun 2020
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-md-6 plr-5">
								<div class="single-main-blog-item-two middle">
									<img src=" public/frontend/assets/img/home-two/main-blog-img/3.jpg" alt="Image">
									<span class="blog-link">
										Tech
									</span>

									<div class="main-blog-content">
										<a href="post-style-one.html">
											<h3>What Would It Take To Shut-down the Internet</h3>
										</a>

										<ul>
											<li>
												<a href="#" class="admin">
													<i class="bx bx-user"></i>
													By Jhona Walker
												</a>
											</li>
											<li>
												<i class="bx bx-calendar"></i>
												26 Jun 2020
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-5 plr-5">
						<div class="single-main-blog-item-two bg-4">
							<span class="blog-link">
								Gadgets
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>How To Build Artificial Intelligence you can trust</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										30 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Main Blog Area -->



		<!-- Start Latest Project Area -->
		<section class="latest-project-area pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Technology</h2>
				</div>

				<div class="row">

                    @foreach($posts as $p)
					<div class="col-lg-4 col-md-6">
						<div class="single-featured">
							<a href="post-style-one.html">
								<img src="{{URL::to('/')}}/public/media/post_img/{{$p->image}}" style="width:200px" alt="Image">
							</a>

							<div class="featured-content">
								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											Admin By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										25 Jun 2020
									</li>
								</ul>

								<a href="post-style-one.html">
									<h3>{{$p -> title}}</h3>
								</a>

								<p>{!! htmlspecialchars_decode($p->content) !!}</p>

								<a href="post-style-one.html" class="read-more">Read More</a>
							</div>
						</div>
					</div>
                    @endforeach



				</div>
			</div>
		</section>
		<!-- End Latest Project Area -->

		<!-- Start Inspiration Area -->
		<section class="main-inspiration-area pb-100">
			<div class="container">
				<div class="section-title text-center">
					<h2>Inspiration</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 plr-5">
						<div class="single-main-blog-item mb-8">
							<img src=" public/frontend/assets/img/home-two/inspiration/1.jpg" alt="Image">
							<span class="blog-link">
								Technology
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>The Two Most Important Tools to Reconnect With Your Partner</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										25 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 plr-5">
						<div class="single-main-blog-item mb-8">
							<img src=" public/frontend/assets/img/home-two/inspiration/2.jpg" alt="Image">
							<span class="blog-link">
								Technology
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>What Would It Take To Shut-down the Internet</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										26 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 plr-5">
						<div class="single-main-blog-item mb-8">
							<img src=" public/frontend/assets/img/home-two/inspiration/6.jpg" alt="Image">
							<span class="blog-link">
								Technology
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>Genderless Kei – Japan’s Hot New Fashion Trend</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										30 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 plr-5">
						<div class="single-main-blog-item mb-8">
							<img src=" public/frontend/assets/img/home-two/inspiration/4.jpg" alt="Image">
							<span class="blog-link">
								Technology
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>Extreme Athleticism Is the New Midlife Crisis</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										30 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 plr-5">
						<div class="single-main-blog-item mb-8">
							<img src=" public/frontend/assets/img/home-two/inspiration/5.jpg" alt="Image">
							<span class="blog-link">
								Technology
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>The 4 convolution's Neural Network Models That Can Classify</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										30 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 plr-5">
						<div class="single-main-blog-item mb-8">
							<img src=" public/frontend/assets/img/home-two/inspiration/6.jpg" alt="Image">
							<span class="blog-link">
								Technology
							</span>

							<div class="main-blog-content">
								<a href="post-style-one.html">
									<h3>Do You Want Stronger Friendships, a More Balanced Mindset?</h3>
								</a>

								<ul>
									<li>
										<a href="#" class="admin">
											<i class="bx bx-user"></i>
											By Jhona Walker
										</a>
									</li>
									<li>
										<i class="bx bx-calendar"></i>
										30 Jun 2020
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Inspiration Area -->

		<!-- Start Main Blog List Area -->
		<section class="blog-list-area-two mb-30">
			<div class="container">
				<div class="section-title text-center">
					<h2>Trending</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/1.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>Advantage & Disadvantages of having Matchbook</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									25 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/2.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>The Scariest Moment is Always Just Before You</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									26 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/3.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>The Expert's Guide To Surviving long Haul Flights</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									27 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/4.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>The Two Most Important With Your Partner</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									27 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/5.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>I Moved Across the Country and Never Back</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									27 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/6.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>The Expert's Guide To Surviving long Haul Flights</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									27 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/7.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>Advantage & Disadvantages of having Matchbook</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									27 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/8.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>The Argument For Short Meditations</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									27 Jun 2020
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="right-blog-editor pt-0 pb-0">
							<a href="post-style-one.html">
								<img src=" public/frontend/assets/img/home-two/blog-list/9.jpg" alt="Image">
							</a>

							<div class="right-blog-content">
								<a href="blog-detauls.html">
									<h3>Do You Want Stronger Friendships, a More?</h3>
								</a>

								<span>
									<i class="bx bx-calendar"></i>
									27 Jun 2020
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Main Blog List Area -->



		<!-- Start Latest News Slider Area -->
		<section class="latest-news-slider-area">
			<div class="section-title text-center">
				<h2>Latest News</h2>
			</div>

			<div class="container ptb-100">
				<div class="row">
					<div class="single-latest-news-wrap owl-carousel owl-theme">
						<div class="single-latest-news">
							<h3>Five Things To know how to grow your business</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor lacus.........</p>
						</div>

						<div class="single-latest-news">
							<h3>Five Things To know how to grow your business</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor lacus.........</p>
						</div>

						<div class="single-latest-news">
							<h3>Five Things To know how to grow your business</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor lacus.........</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Latest News Slider Area -->


@endsection
