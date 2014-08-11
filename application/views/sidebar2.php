<!-- <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
<link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png"> -->

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>QR Network</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<? echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<? echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>">
  <link rel="stylesheet" href="<? echo base_url("assets/css/bootstrap-theme.min.css");?>">

  <link rel="stylesheet" href="<?// echo base_url("assets/css/signin.css");?>">
  <link rel="stylesheet" href="<?// echo base_url("assets/css/main.css");?>">
  <link rel="stylesheet" href="<?// echo base_url("assets/css/simple-sidebar.css");?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  body{
    /*background-color: #eee;*/

  }
  header {
    margin-bottom:30px;
  }

  #leftCol{
    /*margin-left: -250px;*/
    /*left: 250px;*/
/*width: 250px;
background: #000;
/*position: fixed;*/
/*height: 100%;*/
/*overflow-y: auto;
z-index: 1000;
transition: all 0.4s ease 0s;*/
}

</style>
</head>
<body>




  <header class="navbar navbar-inverse navbar-static-top" role="banner">
    <!-- container sirve para centrar el contenido -->
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a href="#" class="navbar-brand"><span class="fa fa-qrcode fa-1x"></span> QRNetwork</a>
      </div>
      <nav class="collapse navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li>
            <a href="#">Get Started</a>
          </li>
          <li>
            <a href="#">Edit</a>
          </li>
          <li>
            <a href="#">Visualize</a>
          </li>
          <li>
            <a href="#">Prototype</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">Link</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <strong class="caret"></strong></a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Action</a>
              </li>
              <li>
                <a href="#">Another action</a>
              </li>
              <li>
                <a href="#">Something else here</a>
              </li>
              <li class="divider">
              </li>
              <li>
                <a href="#">Separated link</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Logout <i class="fa fa-power-off fa-fw"></i></a>
          </li>
        </ul>
      </nav>
    </div> <!-- /.container -->
  </header> <!-- /Fin de NavBar -->


  <div class="container"> <!-- container sirve para centrar el contenido -->
    <div class="row">
      <!-- SIDEBAR -->
      <div class="col-md-3" id="leftCol">

        <div class="list-group" >

          <!-- <a href="javascript:" class="list-group-item active" data-toggle="collapse" data-target="#mainmenu"> -->
          <a href="javascript:" class="list-group-item active" data-target="#mainmenu">
            Dashboard
            <i class="pull-right fa fa-dashboard fa-fw" ></i>
          </a>

          <!-- 1º Item collapsable -->
          <a href="javascript:" class="list-group-item list-group-item-info" data-toggle="collapse" data-target="#menu1">
            <span class="fa fa-cogs fa-fw"></span>
            Settings
            <i class="pull-right fa fa-minus-square-o fa-fw"></i>
          </a>
          <div class="nav nav-pills nav-stacked collapse in" id="menu1">
            <a href="#home" class="list-group-item" data-toggle="tab">
              &nbsp; <i class="fa fa-home fa-fw"></i>
              Home
            </a>
            <a href="#transactions" class="list-group-item" data-toggle="tab">
              &nbsp; <i class="fa fa-refresh fa-fw"></i>
              Transactions
            </a>
            <a href="#" class="list-group-item">
              &nbsp; <i class="fa fa-table fa-fw"></i>
              Database
            </a>
            <a href="#" class="list-group-item">
              &nbsp; <i class="fa fa-power-off fa-fw"></i>
              Logout
            </a>
          </div>

          <!--2º Item collapsable -->
          <a href="javascript:" class="list-group-item list-group-item-info" data-toggle="collapse" data-target="#menu2">
            <span class="fa fa-book fa-fw"></span>
            Reports
            <i class="pull-right fa fa-plus-square-o fa-fw"></i>
          </a>
          <div class="nav nav-pills nav-stacked collapse" id="menu2">
            <a href="#" class="list-group-item">
              &nbsp; <i class="fa fa-spinner fa-fw"></i>
              Information</a>
              <a href="#" class="list-group-item">Requests</a>
              <a href="#" class="list-group-item">Alerts</a>
            </div>

            <!--3º Item collapsable -->
            <a href="javascript:" class="list-group-item list-group-item-info" data-toggle="collapse" data-target="#menu3">
              <span class="fa fa-comments fa-fw"></span>
              Social Media
              <i class="pull-right fa fa-plus-square-o fa-fw"></i>
            </a>
            <div class="nav nav-pills nav-stacked collapse" id="menu3">
              <a href="#" class="list-group-item">
                <i class="fa fa-facebook fa-fw"></i>
                Facebook
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-twitter fa-fw"></i>
                Twitter
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-google-plus fa-fw"></i>
                Google+
              </a>
            </div>

            <!--4º Item collapsable -->
            <a href="javascript:" class="list-group-item list-group-item-info" data-toggle="collapse" data-target="#menu4">
              <span class="fa fa-qrcode fa-fw"></span>
              About
              <i class="pull-right fa fa-plus-square-o fa-fw"></i>
            </a>

            <div class="nav nav-pills nav-stacked collapse" id="menu4">
              <a href="#" class="list-group-item">Our Company</a>
              <a href="#" class="list-group-item">Contact</a>
            </div>

          </div> <!-- /.list-group -->
        </div> <!-- /.col-md-3 -->
        <!-- End SideBar -->


        <!-- Begin Body -->
        <div class="col-md-9">
          <div id="myTabContent" class="tab-content">

            <!-- HOME -->
            <div class="tab-pane fade active in" id="home">
              <h2 id="sec0">Home</h2>
                At Bootply we like to build simple Bootstrap templates that utilize the code Bootstap CSS without a lot of customization. Sure you can
                find a lot of Bootstrap themes and inspiration, but these templates tend to be heavy on customization.

                <hr class="col-md-12">
                Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut.
                Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!



              <h2 id="sec1">Content</h2>
              <p>
                Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut.
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                      Aliquam in felis sit amet augue.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading"><h3>Hello.</h3></div>
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                      Aliquam in felis sit amet augue.
                    </div>
                  </div>
                </div>
              </div>

              <hr>
          </div> <!-- /.tab-pane id=home -->

          <!-- Transactions -->
          <div class="tab-pane fade" id="transactions">
            <h2 id="sec2">Transactions</h2>
            <p>
              Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores
              eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
              sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!
            </p>
            <div class="row">
              <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
              <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
              <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
            </div>

            <hr>

            <h2 id="sec3">Section 3</h2>
            Images are responsive sed @mdo but sum are more fun peratis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores
            eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..
            <br>
            Fos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..


            <h2 id="sec4">Section 4</h2>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores
            eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut


            <hr>
            <h4><a href="http://bootply.com/100993">Edit on Bootply</a></h4>
            <hr>
          </div> <!-- /.tab-pane id=transactions -->
          </div> <!-- /.tab-content id=myTabContent-->

        </div> <!-- /.col-md-9 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->

    <script src="<?echo base_url("assets/js/jquery-1.9.1.min.js");?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?echo base_url("assets/js/bootstrap.min.js");?>"></script>
    <!-- Este script tuve que agregarlo para que me funciones ciertas propiedades de los modales -->
    <!--<script src="<? //echo base_url("/assets/js/docs.min.js");?>"></script> -->
    <!-- Mi codigo js Personal -->
    <script type="text/javascript" src="<?// echo base_url("/assets/js/main.js");?>"></script>

    <!-- JavaScript jQuery code from Bootply.com editor  -->
    <script type='text/javascript'>
      $(document).ready(function() {
        /* swap open/close side menu icons */
        $('[data-toggle=collapse]').on("click", function(){
        // toggle icon
          $(this).find("i").toggleClass("fa-plus-square-o fa-minus-square-o");
        });

        $('#myTab a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })

        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("active");
        });


      });
    </script>
  </body>
  </html>