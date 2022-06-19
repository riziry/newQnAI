<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QnAI - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="Assets/images/title-logo.png" sizes="24x24">
</head>
<body>
    <!-- font awesome icon  -->
    <script src="https://kit.fontawesome.com/9641d2c6f3.js" crossorigin="anonymous"></script>
    <!-- end font awesome icon -->
    <header>
        <img class="logo" src="Assets/images/nav_logo.png" alt="logo">
        <nav>
            <ul class="nav__links">
                <li><a href="/">Home</a></li>
                <li><a href="#">Leaderboard</a></li>
                <li><a href="#">Notification</a></li>
                <li class="search-container">
                    <form class="searchBar">
                        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                        </svg>
                        </button>
                    </form>
                </li>
                
            </ul>
        </nav>
        @if (Route::has('login'))
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">
                    <i class="fa-solid fa-user profile-pic" alt="profile"></i>
                </button>
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <div id="myDropdown" class="dropdown-content">
                        <a href="{{ route('login') }}">Log In</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                @endauth
            </div>
        @endif
    </header>
  
    <div class="center">
      <div class="content">
        <div class="question-card">
          <pic>
            <img class="white-logo" src="Assets/images/white_logo.png" alt="logo">
            <text>
              <p class="p1">Anything we can help?</p>
              <p class="p2">Ask a question so that we can help you!</p>
              <button class="question-card-button" href="#">Ask question</button>
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
              <p class="regular-card" id="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac vestibulum nunc. In hac habitasse platea dictumst. Aenean vitae imperdiet nunc. Sed lobortis ac lorem in malesuada. Sed lacus ex, sodales id commodo in, ultricies id nisl. Vestibulum nisi enim, sollicitudin sit amet posuere a, egestas non diam. Vivamus sed nibh urna. Nullam eget purus congue ante egestas cursus. Donec venenatis pharetra aliquet. Aenean in condimentum odio. Nam eget erat a tortor convallis dictum. In hac habitasse platea dictumst. Morbi rhoncus tortor diam, at aliquam massa vehicula quis.</p>
              <button class="button-read-more" onclick ="location.href='#'"> Read more </button>
            </text>
          </container>
        </div>
      </div>
    </div>
  </div>
    
    

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
          if (!e.target.matches('.dropbtn')) {
          var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
            }
          }
        }
        </script>
</body>
</html>