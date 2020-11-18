
<!doctype html>
<html lang="zxx">
    

<head>
		<!-- Required meta tags -->
		@include('frontend.head')
    </head>

    <body>
		
		<!-- Start Navbar Area -->
		@include('frontend.menu')
		<!-- End Navbar Area -->

		<!-- Sidebar Modal Area -->
       @include('frontend.sidebar')
		<!-- End Sidebar Modal Area -->

		@section('main-content')
		@show

		<!-- Start Footer Top Area -->
		@include('frontend.footer')
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up'></i>
			<i class='bx bx-chevrons-up'></i>
		</div>
		<!-- End Go Top Area -->
		

        <!-- Jquery-3.5.1.Slim.Min.JS -->
       @include('frontend.partials.script')
    </body>

</html>