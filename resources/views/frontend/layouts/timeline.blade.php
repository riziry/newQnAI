<div class="center">
	<div class="content">
		<div class="question-card">
			<pic>
			    <img class="white-logo" src="Assets/images/white_logo.png" alt="logo">
			    <text>
				    <p class="p1">Anything we can help?</p>
				    <p class="p2">Ask a question so that we can help you!</p>
                    @auth
				        <a href="{{ url('/ask')   }}"><button class="question-card-button">Ask question</button></a>
                    @else
                        <a href="{{ route('login') }}"><button class="question-card-button">Ask question</button></a>
                    @endauth
                </text>
			</pic>
		</div>
        
        @foreach ($questions as $question)
            <a href="">
                <div class="question-detail-card">
                <container>
                    <pic>
                    <img class="profile-pic" src="Assets/images/profile_pic.png" alt="profile">
                    <p class="bold-card">{{   $question->uID  }}</p>
                    <p class="regular-card">{{    $question->updated_at   }}</p>
                    </pic>
                    <img class="right-line" src="Assets/images/right-line.png" alt="I">
                    <text>
                    <p class="bold-card">{{   $question->title    }}</p>
                    <p class="regular-card" id="content">{{   $question->content  }}</p>
                    <!-- <button class="button-read-more" onclick ="location.href='#'"> Read more </button> -->
                    <br>
                    </text>
                </container>
                </div>
            </a>
        @endforeach
    </div>
</div>