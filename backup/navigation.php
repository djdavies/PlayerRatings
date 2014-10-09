  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Newport County A.F.C.</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">U21 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="u21Defenders.php">Defenders</a></li>
              <li><a href="#">Midfields</a></li>
              <li><a href="#">Strikers</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">U18 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Defenders</a></li>
              <li><a href="#">Midfields</a></li>
              <li><a href="#">Strikers</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">U16 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Defenders</a></li>
              <li><a href="#">Midfields</a></li>
              <li><a href="#">Strikers</a></li>
            </ul>
          </li>
        
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          <!-- include login -->
          <?php require_once('loginForm.php');?>
        </form>
          
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



