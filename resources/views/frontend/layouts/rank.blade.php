<div class="center">
    <div class="content">
        <div class="leaderboard">
        	<center style="padding-bottom: 50px;font-size: 30px"><h1>Our Top 3 Users</h1></center>

			@php
				$i=0;
			@endphp
			@foreach ($rank as $userrank)
				@php
					$i++;
				@endphp
				<div class="top-user-card">
					<div class="number"><p>{{$i}}</p></div>
					<img src="Assets/images/johndoe.jpg" class="rounded">
					<h1 style="padding-top: 15px;">{{ $userrank->name}}</h1>
					<p>{{ $userrank->points	}}</p>
				</div>
			@endforeach
          	<center style="padding-top: 50px;">Haven't see yourself here? Answer more questions and help more people to receive the top 3 at the end of the month!</center>
        </div>
    </div>
</div>