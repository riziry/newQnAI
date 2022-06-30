<div class="center">
    <div class="content">
        <div class="leaderboard">
          <center style="padding-bottom: 50px;font-size: 30px"><h1>Our Top 3 Users</h1></center>
          {{ $i=0}}
          @foreach($rank as $userrank)
          {{ $i++ }}
            <div class="top-user-card">
              <div class="number"><p>{{$i}}</p></div>
              <img src="Assets/images/johndoe.jpg" class="rounded">
              <h1 style="padding-top: 15px;">{{ $userrank->name}}</h1>
              <p>Total Points: 1064</p>
            </div>
          @endforeach
         
          <div class="top-user-card">
            <div class="number"><p>2</p></div>
            <img src="Assets/images/janedoe.jpg" class="rounded">
            <h1 style="padding-top: 15px;">Jane Doe</h1>
            <p>Total Points: 872</p>
          </div>
          <div class="top-user-card">
            <div class="number"><p>3</p></div>
            <img src="Assets/images/jombloe.jpg" class="rounded">
            <h1 style="padding-top: 15px;">Jom Bloe</h1>
            <p>Total Points: 666</p>
          </div>
          <center style="padding-top: 50px;">Haven't see yourself here? Answer more questions and help more people to receive the top 3 at the end of the month!</center>
        </div>
    </div>
</div>