<!-- /*
* Template Name: Volunteer
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
@extends('layouts.master')


@section('title','news')




<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>



@section('content')

	<div class="heros overlays" style="background-image: url('images/about.jpg')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<span class="subheading-white text-white mb-3" data-aos="fade-up">News</span>
					
					<h1 class="heading text-white mb-2" data-aos="fade-up">Our News</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / News</p>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-100">Stay updated with the latest happenings at codemate! Our news page is your source for inspiring stories, course updates, and valuable insights in the world of tech education.</p>

				</div>


			</div>
		</div>
	</div>



	<div class="section bg-light">
		<div class="container">
			<div class="row">


				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="images/tech.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">Sep 3, 2023</span>

							<h3><a href="#">Upcoming Webinar: "Unlocking the World of AI"</a></h3>
							<p> We're dedicated to providing valuable learning opportunities to our community, and we're excited to announce our upcoming webinar.</p>

							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="images/kids.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">jul 29, 2023</span>
							<h3><a href="#">Making Learning Fun: Creative Ways to Teach Kids Coding</a></h3>
							<p>In today's digital age, coding has become a crucial skill for children to learn. But teaching kids to code doesn't have to be dull and intimidating.</p>

							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="images/communitie.png" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">Aug 18, 2023</span>
							<h3><a href="#">Empowering Communities</a></h3>
							<p>Many of our learners come to codemate seeking new career opportunities. Through our coding courses and mentorship programs, we equip them with valuable tech skills that are in high demand.</p>
							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>

						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="images/Orange_logo.svg.png" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">Aug 11, 2023</span>
							<h3><a href="#">codemate Joins Forces with Orange</a></h3>
							<p>Collaboration fuels meaningful change in tech education. Today, we're thrilled to announce our partnership with Orange. </p>
							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>

						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="images/team-1.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">Aug 21, 2023</span>
							<h3><a href="#">Meet Ahmad : Inspiring the Next Generation of Coders</a></h3>
							<p>Ahmad's journey with codemate began 5 years ago when he decided to pay it forward by sharing his knowledge and love for coding.</p>
							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>


						</div>
					</div>
				</div>




				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="images/team-4.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">Sep 1, 2023</span>
							<h3><a href="#">Empowering Dreams: codemate Success Stories</a></h3>
							<p>Sara came to codemate with a dream of breaking into the tech industry but no prior coding experience.</p>
							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>

						</div>
					</div>
				</div>




			</div>
{{--
			<div class="row align-items-center py-5">
				<div class="col-lg-3">
					<!-- Pagination (1 of 10) -->
				</div>
				<div class="col-lg-6 text-center">
					<div class="custom-pagination">
						<a href="#">1</a>
						<a href="#" class="active">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
					</div>
				</div>
			</div> --}}


		</div>
	</div>




@endsection
