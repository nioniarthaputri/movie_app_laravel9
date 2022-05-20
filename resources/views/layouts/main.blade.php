<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

    <title>Netflix | {{ $title }}</title>
  </head>
  <body>
    <div class="wrapper">

      <!-- HEADER -->
      <header>
        <div class="netflixLogo">
          <a id="logo" href="#home"><img src="https://github.com/nioniarthaputri/laravel-2/blob/part-4/img/logo.PNG?raw=true" alt="Logo Image"></a>
        </div>      
        <nav class="main-nav">                
          <a href="#home">Home</a>
          <a href="#tvShows">TV Shows</a>
          <a href="#movies">Movies</a>
          <a href="#originals">Originals</a>
          <a href="#">Recently Added</a>      
        </nav>
        <nav class="sub-nav">
          <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
          <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
          <a href="#">Account</a>        
        </nav>      
      </header>
      <!-- END OF HEADER -->
      
      <!-- MAIN CONTAINER -->
      <section class="main-container" >
        @yield('content')
      
      <!-- END OF MAIN CONTAINER -->

      <!-- LINKS -->
      <section class="link">
        <div class="logos">
          <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
        </div>
        <div class="sub-links">
          <ul>
            <li><a href="#">Audio and Subtitles</a></li>
            <li><a href="#">Audio Description</a></li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Media Center</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Legal Notices</a></li>
            <li><a href="#">Corporate Information</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </section>
      <!-- END OF LINKS -->

      <!-- FOOTER -->
      <footer>
        <p>&copy 1997-2022 Netflix, Inc.</p>
        <p>Nioni Artha Putri &copy 2018</p>
      </footer>
    </div>
  </body>
</html>