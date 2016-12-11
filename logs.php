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
            <li class="active">
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

    <h3>/var/log/messages</h3>
<div class="well">
        <p>
<pre>
Dec 11 03:13:51 tools systemd-logind: Removed session 639.
Dec 11 03:13:51 tools systemd: Removed slice user-0.slice.
Dec 11 03:13:51 tools systemd: Stopping user-0.slice.
Dec 11 03:14:07 tools systemd: Created slice user-0.slice.
Dec 11 03:14:07 tools systemd: Starting user-0.slice.
Dec 11 03:14:07 tools systemd: Started Session 640 of user root.
Dec 11 03:14:07 tools systemd-logind: New session 640 of user root.
Dec 11 03:14:07 tools systemd: Starting Session 640 of user root.
Dec 11 03:14:38 tools yum[13272]: Installed: unzip-6.0-15.el7.x86_64
Dec 11 04:01:01 tools systemd: Started Session 641 of user root.
Dec 11 04:01:01 tools systemd: Starting Session 641 of user root.
Dec 11 04:58:08 tools yum[13628]: Installed: 1:perl-Error-0.17020-2.el7.noarch
Dec 11 04:58:08 tools yum[13628]: Installed: libgnome-keyring-3.8.0-3.el7.x86_64
Dec 11 04:58:08 tools yum[13628]: Installed: perl-TermReadKey-2.30-20.el7.x86_64
Dec 11 04:58:10 tools yum[13628]: Installed: git-1.8.3.1-6.el7_2.1.x86_64
Dec 11 04:58:10 tools yum[13628]: Installed: perl-Git-1.8.3.1-6.el7_2.1.noarch
Dec 11 05:01:01 tools systemd: Started Session 642 of user root.
Dec 11 05:01:01 tools systemd: Starting Session 642 of user root.
</pre>
        </p>
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
