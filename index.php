<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php"><img src="Images/Y.png" alt="Logo" class="responsive-image"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" style="margin-top: 16px;">
          <li class="active"><a href="<?php echo 'index.php'; ?>">Dashboard</a></li>
          <li><a href="<?php echo 'business.php'; ?>">Business</a></li>
          <li><a href="<?php echo 'category.php'; ?>">Category</a></li>
          <li><a href="<?php echo 'funding.php'; ?>">Funding</a></li>
          <li><a href="<?php echo 'location.php'; ?>">Location</a></li>
          <li><a href="<?php echo 'owners.php'; ?>">Owners</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-sm-3 sidenav hidden-xs">
  <a href="index.php"><img src="Images/Y.png" alt="Logo" class="responsive-image"></a>
  <ul class="nav nav-pills nav-stacked" style="margin-top: 16px;">
    <li class="active"><a href="<?php echo 'index.php'; ?>">Dashboard</a></li>
    <li><a href="<?php echo 'business.php'; ?>">Business</a></li>
    <li><a href="<?php echo 'category.php'; ?>">Category</a></li>
    <li><a href="<?php echo 'funding.php'; ?>">Funding</a></li>
    <li><a href="<?php echo 'location.php'; ?>">Location</a></li>
    <li><a href="<?php echo 'owners.php'; ?>">Owners</a></li>
  </ul><br>
</div>


      <div class="col-sm-9">
        <div class="well">
          <h4>Dashboard</h4>
          <p>Some text..</p>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
              <h4>Users</h4>
              <p>1 Million</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Pages</h4>
              <p>100 Million</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Sessions</h4>
              <p>10 Million</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Bounce</h4>
              <p>30%</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p>
              <p>Text</p>
              <p>Text</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p>
              <p>Text</p>
              <p>Text</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p>
              <p>Text</p>
              <p>Text</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="well">
              <p>Text</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>© <?php echo date("Y"); ?> Bakhombisile Dlamini Task Tracker. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</html>