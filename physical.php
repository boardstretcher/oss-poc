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
            <li class="active">
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
      <ul class="nav nav-pills" role="tablist">
        <li role="presentation">
          <a href="#">Rescan SCSI Bus</a>
        </li>
        <li role="presentation">
          <a href="#">Prepare a new drive</a>
        </li>
      </ul>
      <div class="page-header">
        <h1>
          Physical Disks
        </h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                /dev/sda
              </h3>
            </div>
            <div class="panel-body">
              Stat: OK<br>
              WMI : 4327948711417234<br>
              Size: 293 Gb<br>
              Multipath: /dev/sg0<br>
              <button class="btn btn-sm btn-danger pull-right" type="button">Set Offline!</button> <button class="btn btn-sm btn-default pull-left" type="button">Smart Scan</button> <button class="btn btn-sm btn-default pull-left" type="button">More info</button>
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                /dev/sdb
              </h3>
            </div>
            <div class="panel-body">
              Stat: OK<br>
              WMI : 432157147794871234<br>
              Size: 293 Gb<br>
              Multipath: /dev/sg1<br>
              <button class="btn btn-sm btn-danger pull-right" type="button">Set Offline!</button> <button class="btn btn-sm btn-default pull-left" type="button">Smart Scan</button> <button class="btn btn-sm btn-default pull-left" type="button">More info</button>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                /dev/sdc
              </h3>
            </div>
            <div class="panel-body">
              Stat: OK<br>
              WMI : 43987492794871234<br>
              Size: 293 Gb<br>
              Multipath: /dev/sg2<br>
              <button class="btn btn-sm btn-danger pull-right" type="button">Set Offline!</button> <button class="btn btn-sm btn-default pull-left" type="button">Smart Scan</button> <button class="btn btn-sm btn-default pull-left" type="button">More info</button>
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                /dev/sdd
              </h3>
            </div>
            <div class="panel-body">
              Stat: OK<br>
              WMI : 4327946518716234<br>
              Size: 293 Gb<br>
              Multipath: /dev/sg3<br>
              <button class="btn btn-sm btn-danger pull-right" type="button">Set Offline!</button> <button class="btn btn-sm btn-default pull-left" type="button">Smart Scan</button> <button class="btn btn-sm btn-default pull-left" type="button">More info</button>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                /dev/sde
              </h3>
            </div>
            <div class="panel-body">
              Stat: OK<br>
              WMI : 4313452794871234<br>
              Size: 293 Gb<br>
              Multipath: /dev/sg4<br>
              <button class="btn btn-sm btn-danger pull-right" type="button">Set Offline!</button> <button class="btn btn-sm btn-default pull-left" type="button">Smart Scan</button> <button class="btn btn-sm btn-default pull-left" type="button">More info</button>
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">
                /dev/sdf
              </h3>
            </div>
            <div class="panel-body">
              Stat: ERROR<br>
              WMI : 51345432794871234<br>
              Size: 293 Gb<br>
              Multipath: /dev/sg5<br>
              <button class="btn btn-sm btn-danger pull-right" type="button">Set Offline!</button> <button class="btn btn-sm btn-default pull-left" type="button">Smart Scan</button> <button class="btn btn-sm btn-default pull-left" type="button">More info</button>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
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
