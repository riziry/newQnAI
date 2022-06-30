<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts.htmlconfig')
</head>

<body>
	<!-- font awesome icon  -->
	<script src="https://kit.fontawesome.com/9641d2c6f3.js" crossorigin="anonymous"></script>
	<!-- end font awesome icon -->
	<header>
		@auth
			@include('layouts.navbar-loggedin')
		@else
			@include('layouts.navbar-guest')
		@endauth	
	</header>

	<main>
		@switch (url()->current())
			@case('http://localhost:8000')
				@include('frontend.layouts.timeline')
				@break
			@case('http://localhost:8000/dashboard')
				@include('frontend.layouts.timeline')
				@break
			@case('http://localhost:8000/leaderboard')
				@include('frontend.layouts.rank')
				@break
			@case('http://localhost:8000/notification')
				@include('frontend.layouts.notif-info')
				@break
			@case('http://localhost:8000/profile')
				@include('frontend.layouts.profile-content')
				@break
			@case('http://localhost:8000/profile/edit')
				@include('frontend.layouts.profile-edit')
				@break
			@case('http://localhost:8000/ask')
				@include('frontend.layouts.make')
				@break

		@endswitch
	</main>

	<script>

	</script>
</body>

</html>