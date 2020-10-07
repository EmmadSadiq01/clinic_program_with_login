<?php
$logedin = false;
echo "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
<a class='navbar-brand' href='/CMS' style='font-family: cursive; font-weight: 600;'>IQBAL HOMEO CLINIC</a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
  <span class='navbar-toggler-icon'></span>
</button>

<div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav ml-auto'>";
  // session_start();
if( isset($_SESSION['logedin']) && $_SESSION['logedin']!=false){
  echo "<li class='nav-item active'>
  <a class='nav-link' href='/CMS'>Home </a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='/CMS/logout.php'>Log Out</a>
    </li>";
    $logedin = true;
}
else{
  $logedin = false;
}
if(!$logedin){

  echo "<li class='nav-item'>
        <a class='nav-link' href='/CMS/login.php'>Log In</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='/CMS/signup.php'>Sign Up</a>
      </li>";
}
    
    ?>

  </ul>
  <!-- <form class='form-inline my-2 my-lg-0'>
    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
  </form> -->
</div>
</nav>
