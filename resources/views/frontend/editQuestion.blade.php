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
		<!-- <link rel="stylesheet" href="/css/style-roti.css"> -->
        <div class="form-content">
            <form action="/question/{{$question->id}}" method="POST">
                @method('PUT')
                @csrf
                <p class="p1">Title</p>
                <p class="p2">Type in your simplified question</p>
                <textarea class="big-input" name="title" id="question-title" type="text">{{  $question->title    }}</textarea>
                <p></p>
                <br>
                <p class="p1">Body</p>
                <p class="p2">Type in your question detail here</p>
                <textarea class="big-input" name="content" id="question-body" type="text">{{ $question->content  }}</textarea>
                <input type="hidden" name='uID' value="{{ Auth::user()->id }}">
                <br>
                <button class="yellow-button">Save</button>
            </form>
            
        </div>
	</main>

	<script>

	</script>
</body>

</html>