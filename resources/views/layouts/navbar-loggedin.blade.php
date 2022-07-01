<!-- <link rel="stylesheet" href="/css/style.css"> -->

<!-- font awesome icon  -->
<script src="https://kit.fontawesome.com/9641d2c6f3.js" crossorigin="anonymous"></script>
<!-- end font awesome icon -->

<img class="logo" src="/Assets/images/nav_logo.png" alt="logo">
<nav>
    <ul class="nav__links">
        <li><a id="btn-home" onclick="activeHome()" href="/">Home</a></li>
        <li><a id="btn-leaderboard" href="{{ url('/leaderboard') }}">Leaderboard</a></li>
        <li><a id="btn-notif" href="{{ url('/notification') }}">Notification</a></li>
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
<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">
        {{ Auth::user()->name }}
    </button>
    <div id="myDropdown" class="dropdown-content">
        <a href="{{ url('/profile') }}">Profile</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                Log Out
            </a>
        </form>
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

    function botBorder() {
        var botBorder = document.getElementById("");
        botBorder.style.borderBottom = "1px solid #ccc";
    }

    var btnHome = document.getElementById("btn-home");
    var btnLeaderboard = document.getElementById("btn-leaderboard");
    var btnNotif = document.getElementById("btn-notif");

    function activeHome() {
        btnHome.classList.add("active");
        btnLeaderboard.classList.remove("active");
        btnNotif.classList.remove("active");
    }


</script>
