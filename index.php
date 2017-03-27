<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="poorna rao villuri" content="PHP Email with attachment example">
    <meta name="poorna rao villuri" content="">

    <title>PHP Email with attachment example</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PHP Email with Attachment</a>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    <!-- Begin page content -->
        <div class="container-fluid">
          <div class="row">
            <div class="alert alert-success col-sm-offset-1 col-sm-10 text-center <?php echo $hidden; ?>">
              <strong>Success!</strong> Your Mail sent successfully with attachment. Please check with "to mail" that you provided in the form.
            </div>
            <div class="col-md-12">
              <h3 class="col-sm-offset-4">User Information</h3>
              <form enctype="multipart/form-data" class="form-horizontal col-sm-offset-2" action="sendmail.php" method="POST">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">
                    Name
                  </label>
                  <div class="col-sm-5">
                    <input class="form-control" id="username" name="username" type="text" required="" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">
                    To Email
                  </label>
                  <div class="col-sm-5">
                    <input class="form-control" id="toemail" name="toemail" type="email" required="" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">
                    From Email
                  </label>
                  <div class="col-sm-5">
                    <input class="form-control" id="fromemail" name="fromemail" type="email" required="" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">
                    Attachment
                  </label>
                  <div class="col-sm-5">
                    <input class="form-control" id="myfile" name="myfile" type="file" required="" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">
                    Email Message
                  </label>
                  <div class="col-sm-5">
                    <textarea class="form-control" id="message" name="message" required=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" required /> Accept
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5 text-right">
                    <button type="submit" class="btn btn-success">
                      Send Email
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
    <footer class="footer" style="position: fixed;bottom: 2px;">
      <div class="container">
        <p class="text-muted">Copyright @ 2017 by Poorna Rao Villuri.</p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
