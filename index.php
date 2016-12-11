<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../../favicon.ico" rel="icon">
    <title>
      Theme Template for Bootstrap
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js">
    </script>
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">The BOSS</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="index.php">Overview</a>
            </li>
            <li>
              <a href="physical.php">Physical Disks</a>
            </li>
            <li>
              <a href="multipath.php">MultiPathing</a>
            </li>
            <li>
              <a href="zpool.php">ZFS pools</a>
            </li>
            <li>
              <a href="zvol.php">ZFS volumes</a>
            </li>
            <li>
              <a href="logs.php">System Logs</a>
            </li>
            <li>
              <a href="queue.php">Task Queue</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" role="main">
      <h3>
        Physical Disk Health
      </h3>
      <div class="alert alert-success" role="alert">
        <strong>OK!</strong> All physical disks are functional and healthy
      </div>
      <h3>
        Multipath Health
      </h3>
      <div class="alert alert-danger" role="alert">
        <strong>ERROR!!</strong> Multipath device "mp01" has an ERROR - Investigate IMMEDIATELY<br>
        <strong>ERROR!!</strong> Multipath device "mp02" has an ERROR - Investigate IMMEDIATELY<br>
      </div>
      <h3>
        ZFS Pool Health
      </h3>
      <div class="alert alert-success" role="alert">
        <strong>OK!</strong> Pool "Primary" functional and healthy<br>
        <strong>OK!</strong> Pool "LOG" functional and healthy<br>
      </div>
      <div class="alert alert-danger" role="alert">
        <strong>ERROR!!</strong> ZFS Volume "/storage01" has an ERROR - Investigate IMMEDIATELY
      </div>
    </div><!-- /container -->
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> 
    <script src="../../dist/js/bootstrap.min.js"></script> 
    <script src="../../assets/js/docs.min.js"></script> 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
