<!--  -->
<!DOCTYPE html>
<html>
  <head>
   <!--Import Google Icon Font-->
   <link href="fonts/font.css" rel="stylesheet">

       <!--Acme font-->
       <link href="fonts/gfont.css" rel="stylesheet">

       <!--Import materialize.css-->
       <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

       <!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <style>
        .head {
          font-family: 'Acme', sans-serif;
          text-align: center;
          font-size: 70px;
          padding-top: 30px;
        }
        .brand-logo {
          font-family: 'Acme', sans-serif;
          margin-left: 30px;
        }
  </style>
  <body>
      <!--Navigation Bar-->
        <nav>
                <div class="nav-wrapper teal darken-1">
                  <a href="#" class="brand-logo">SWMS</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
										<li><a href="../public-home/public.html"><i class="material-icons left small">home</i>Home</a></li>
                    <li><a href="awareness.html"><i class="material-icons left small">assignment_late</i>Awareness</a></li>
                    <li class="active"><a href="#"><i class="material-icons left small">assignment</i>Complaint</a></li>
                    <li><a href="service.html"><i class="material-icons left small">directions_bus</i>Services Nearby</a></li>

                  </ul>
                </div>
              </nav>
        <!--header-->
        <h1 class="head">
          Complaint Form
        </h1>
      <!--Form-->
        <div class="row">
          <div class="col s2"></div>
          <div class="col s8">
            <form  method="post" action="mail.php" enctype="multipart/form-data">
            	<div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">query_builder</i>
                    <input id="date" type="text" class="datepicker" name="date">
                    <label for="date">Date</label>
                  </div>
                </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="first_name" type="text" class="validate" name="name">
                <label for="first_name">Full Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="email" type="email" class="validate" name="email">
                  <label for="email" data-error="wrong" data-success="right">Email</label>
               </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">my_location</i>
                  <input id="loc" type="text" class="validate" name="loc">
                  <label for="loc">Location</label>
                </div>
              </div>
              <div class="file-field input-field col s12">
                  <div class="btn teal darken-1">
                    <span>File</span>
                    <input type="file" name="attachment" multiple>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files" >
                </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" class="materialize-textarea" name="message"></textarea>
                <label for="icon_prefix2">Message</label>
              </div>
            </div>
            <div class="row">
              <div class="col s4"></div>
              <div class="col s5">
								<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
									 <i class="material-icons right">send</i>
								 </button>
                </div>
            </div>
          </div>
        </div>
          </form>

        <!--Footer-->
        <footer class="page-footer teal">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="black-text">Mira Rd-Bhyandar Nagarpalika</h5>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="black-text">Social Media</h5>
                  <ul>
                    <li><a class="black-text text-lighten-3" href="#!">Facebook</a></li>
                    <li><a class="black-text text-lighten-3" href="#!">Twitter</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container black-text">
              © 2017 Copyright MBN
              <a class="black-text text-lighten-4 right" href="#!">More Links</a>
              </div>
            </div>
          </footer>
  </body>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });

  </script>
</html>
