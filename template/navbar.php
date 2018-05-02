<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="<?php echo $base_url."index.php?p=home" ?>"> Siakad </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav float-left">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $base_url."index.php?p=student" ?>">Student <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <ul class="navbar-nav float-right">
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php echo $_SESSION["name"] ?> </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $base_url."process/logout.php" ?>"> Logout </a>
      </li>
    </ul>
    <span class="clearfix"></span>
  </div>
</nav>