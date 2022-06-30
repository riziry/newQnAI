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

		<br>
		<div class="question-detail-card">
			<container>
                <pic>
                    <img class="profile-pic" src="Assets/images/profile_pic.png" alt="profile">
                    <p class="bold-card">Yolanda</p>
                    <p class="regular-card">25 March</p>
                </pic>
                <img class="right-line" src="Assets/images/right-line.png" alt="I">
                <text>
                    <p class="bold-card">Here's a question for you</p>
                    <p class="regular-card" id="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac
                    vestibulum nunc. In hac habitasse platea dictumst. Aenean vitae imperdiet nunc. Sed lobortis ac lorem in
                    malesuada. Sed lacus ex, sodales id commodo in, ultricies id nisl. Vestibulum nisi enim, sollicitudin sit
                    amet posuere a, egestas non diam. Vivamus sed nibh urna. Nullam eget purus congue ante egestas cursus.
                    Donec venenatis pharetra aliquet. Aenean in condimentum odio. Nam eget erat a tortor convallis dictum. In
                    hac habitasse platea dictumst. Morbi rhoncus tortor diam, at aliquam massa vehicula quis.</p>
                    <button class="button-read-more" onclick="location.href='#'"> Read more </button>
                </text>
			</container>
		</div>
    </div>
</div>