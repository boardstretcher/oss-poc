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
            <li class="active">
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
      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">
                Change Multipath
              </h4>
            </div>
            <div class="modal-body">
              Make a form to add and remove multipath devices.
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button> <button class="btn btn-primary" type="button">Apply changes</button>
            </div>
          </div>
        </div>
      </div>
      <ul class="nav nav-pills" role="tablist">
        <li data-target="#myModal" data-toggle="modal" role="presentation">
          <a href="#">Add multipath</a>
        </li>
        <li data-target="#myModal" data-toggle="modal" role="presentation">
          <a href="#">Delete Multipath</a>
        </li>
      </ul>
      <div class="page-header">
        <h1>
          Multipath
        </h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                multi01
              </h3>
            </div>
            <div class="panel-body">
              Drive: SEAGATE,ST340008SSUN0.4<br>
              Size: 370GB<br>
              Options: Roundrobin, 0, hw<br>
              Path1: sda Device: 0:0:0:1<br>
              Path2: sg0 Device: 0:1:0:0<br>
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                multi02
              </h3>
            </div>
            <div class="panel-body">
              Drive: SEAGATE,ST340008SSUN0.4<br>
              Size: 370GB<br>
              Options: Roundrobin, 0, hw<br>
              Path1: sda Device: 0:0:0:1<br>
              Path2: sg0 Device: 0:1:0:0<br>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                multi03
              </h3>
            </div>
            <div class="panel-body">
              Drive: SEAGATE,ST340008SSUN0.4<br>
              Size: 370GB<br>
              Options: Roundrobin, 0, hw<br>
              Path1: sda Device: 0:0:0:1<br>
              Path2: sg0 Device: 0:1:0:0<br>
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                multi04
              </h3>
            </div>
            <div class="panel-body">
              Drive: SEAGATE,ST340008SSUN0.4<br>
              Size: 370GB<br>
              Options: Roundrobin, 0, hw<br>
              Path1: sda Device: 0:0:0:1<br>
              Path2: sg0 Device: 0:1:0:0<br>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                multi05
              </h3>
            </div>
            <div class="panel-body">
              Drive: SEAGATE,ST340008SSUN0.4<br>
              Size: 370GB<br>
              Options: Roundrobin, 0, hw<br>
              Path1: sda Device: 0:0:0:1<br>
              Path2: sg0 Device: 0:1:0:0<br>
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
                multi06
              </h3>
            </div>
            <div class="panel-body">
              Drive: SEAGATE,ST340008SSUN0.4<br>
              Size: 370GB<br>
              Options: Roundrobin, 0, hw<br>
              Path1: sda Device: 0:0:0:1<br>
              Path2: sg0 Device: 0:1:0:0<br>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>
    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script> 
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script> 
    <script src="../../dist/js/bootstrap.min.js">
    </script> 
    <script src="../../assets/js/docs.min.js">
    </script> 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js">
    </script>
  </body>
</html>
