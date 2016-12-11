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
            <li>
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
            <li class="active">
              <a href="queue.php">Task Queue</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" role="main">
    <h3>Active tasks</h3>
    <p>/bin/bash -c "echo this is a task"</p>
    <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
    </div>
    <p>FINISHED: /bin/bash -c "crontab -l"</p>
   <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">60% Complete</span></div>
      </div>
<p>FINISHED: /bin/bash -c "crontab -l"</p>
   <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">60% Complete</span></div>
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
