  <div class="container-fluid">  
    <div class="col-md-12">&nbsp;</div>
  

    <!-- Carousel -->
    <div class="well">
      <h1 class="text-center">Carousel</h1>
    </div>
    
    <div class="row">

      <div class="col-md-8 col-md-offset-2">
  
        <h3>Funcionalidad de los botones programada en jquery</h3>
        <button class="btn btn-success" id="prev">Prev</button>
        <button class="btn btn-success" id="next">Next</button>
        <button class="btn btn-success" id="1">1</button>
        <button class="btn btn-success" id="2">2</button>
        <button class="btn btn-success" id="3">3</button>
        <hr>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<? echo base_url("assets/img/01.jpg");?>" alt="...">
              <div class="carousel-caption">
                <h4>First Thumbnail label</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, omnis, dolorum blanditiis temporibus voluptate odio velit est error harum soluta accusantium inventore assumenda suscipit ullam minima ad obcaecati excepturi quis.
                </p>
              </div>
            </div>

            <div class="item">
              <img src="<? echo base_url("assets/img/02.jpg");?>" alt="...">
              <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, quas placeat ea eos deleniti saepe in architecto! Recusandae, iure, numquam, eligendi, nulla repudiandae dolor eius ea at quae voluptate impedit.
                </p>
              </div>
            </div>

            <div class="item">
              <img src="<? echo base_url("assets/img/03.jpg");?>" alt="...">
              <div class="carousel-caption">
                <h4>Third Thumbnail label</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, quas placeat ea eos deleniti saepe in architecto! Recusandae, iure, numquam, eligendi, nulla repudiandae dolor eius ea at quae voluptate impedit.
                </p>
              </div>
            </div>

          </div> <!-- /.carousel-inner -->

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>

      </div>
    </div> <!-- /.row -->

    <hr>
    <!-- Collapse o Acordion -->
    <div class="well">
      <h1 class="text-center">Collapse o Acordion</h1>
    </div> 

    <div class="row">
      <div class="col-md-12">

        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Collapsible Group Item #1
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry 
                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor 
                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, 
                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda 
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson 
                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. 
                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt 
                you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Collapsible Group Item #2
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry 
                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor 
                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, 
                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch 
                et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt 
                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat 
                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably 
                haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Collapsible Group Item #3
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry 
                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor 
                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, 
                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda 
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson 
                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. 
                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt 
                you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- /.row -->


    <!-- Buttons, Checkbox y Radio Button -->
    <div class="well">
      <h1 class="text-center">Buttons, Checkbox y Radio Button</h1>
    </div> 

    <div class="row">
      <div class="col-md-4">
        
        <h3>Simple Button</h3>
        <div class="btn-group">
          <button type="button" class="btn btn-default">Left</button>
          <button type="button" class="btn btn-default">Middle</button>
          <button type="button" class="btn btn-default">Right</button>
        </div>
      </div>
      
      <div class="col-md-4">
        <h3>checkboxs</h3>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default">
            <input type="checkbox"> Option 1
          </label>
          <label class="btn btn-default">
            <input type="checkbox"> Option 2
          </label>
          <label class="btn btn-default">
            <input type="checkbox"> Option 3
          </label>
        </div>
      </div>
      <div class="col-md-4">
        <h3>radio buttons</h3>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default">
            <input type="radio" name="options" id="option1"> Option 1
          </label>
          <label class="btn btn-default">
            <input type="radio" name="options" id="option2"> Option 2
          </label>
          <label class="btn btn-default">
            <input type="radio" name="options" id="option3"> Option 3
          </label>
        </div>

      </div>
    </div> <!-- /.row -->

    <hr>
    <!-- Popovers -->
    <div class="well">
      <h1 class="text-center">Popovers</h1>
    </div> 

    <div class="row">
      <div class="col-md-12">
        
        
        <h3>Popover programado en js y convocado desde este boton</h3>
        <!-- El siguiente popover esta codificado en el archivo main.js -->
        <a href="#" class="btn btn-default pop" id="mypopover">My popover con js</a>
        <!-- Popover con html en su interior -->
        <a href="#" class="btn btn-default btn-info pop" id="pophtml">Popover con html en su interior</a>


        <h3>Popovers con css y activados en js para etiquetas a y button</h3>
        <a data-original-title="A Title" href="#" class="btn btn-lg btn-danger" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. right?" role="button">Click to toggle popover</a>


        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on left
        </button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on top
        </button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
        sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on bottom
        </button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on right
        </button>

      </div>
    </div> <!-- /.row -->

    <hr>
    <!-- Tool Tips -->
    <div class="well">
      <h1 class="text-center">Tool Tips</h1>
    </div> 

    <!-- IMPORTANTE: ver el archivo js/main.js donde se encuentra el script necesario para la funcionalidad de los tool tips. -->

    <div class="row">
      <div class="col-md-12">
        
        <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a data-original-title="Default tooltip" href="#" data-toggle="tooltip" title="">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a data-original-title="Another tooltip" href="#" data-toggle="tooltip" title="">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a data-original-title="Another one here too" href="#" data-toggle="tooltip" title="">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
        </p>

      </div>
    </div> <!-- /.row -->

    <div class="row">
      <div class="col-md-12">

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
    

      </div>
    </div> <!-- /.row -->

    <hr>
    <!-- NAVS con JavaScript -->
    <div class="well">
      <h1 class="text-center">NAVS con JavaScript (para dar funcionalidad con js ver la pagina de bootstrap)</h1>
    </div> 

    <div class="row">
      <div class="col-md-12">
        
        <ul id="myTab" class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
          <li class=""><a href="#profile" data-toggle="tab">Profile</a></li>
          <li class="dropdown">
            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
              <li class=""><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
              <li class=""><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
            </ul>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="home">
            <h1>Home</h1>
            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
          </div>
          <div class="tab-pane fade" id="profile">
            <h1>Profile</h1>
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
          </div>
          <div class="tab-pane fade" id="dropdown1">
            <h1>@Fat</h1>
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
          </div>
          <div class="tab-pane fade" id="dropdown2">
            <h1>@Mdo</h1>
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
          </div>
        </div>

      </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
  
    <!-- Ventana Modal -->
    <div class="well">
      <h1 class="text-center">Ventana Modal</h1>
    </div> 

    <h2>Modales con JavaScript (ver codigo fuente y descomentar para probar)</h2>
    <!-- IMPORTANTE: ver el archivo js/main.js donde se encuentra el script necesario para la funcionalidad de los tool tips. -->


    <div class="row">
      <div class="col-md-4">
        <!-- Button trigger modal -->
        <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#staticmodal">
          Launch static modal
        </button> -->

        <div class="modal fade" id="jsmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <p>Modal convocado desde javascript!&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div> <!-- /.col-md-4 -->

      <div class="col-md-4">
        
      </div> <!-- /.col-md-4 -->
      <div class="col-md-4">
        
      </div> <!-- /.col-md-4 -->
    </div> <!-- /.row -->

    <hr>
    <h2>Modales con css</h2>
    <div class="row">
      <div class="col-md-4">
                
        <!-- Button trigger modal -->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#staticmodal">
          Launch static modal
        </button>

        <div class="modal fade" id="staticmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </div> <!-- /.col-md-4 -->

      <div class="col-md-4">

        <!--  Modal content for the above example -->
        <!-- La clase bs-example-modal-lg esta en el archivo assets/js/docs.min.js que lo saque de la pagina de bootstrap...pero la funionalidad aqui para los tooltip y modales deberia ser dada con javascript...chequear esto! -->
        <div style="display: none;" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
              </div>
              <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, doloribus, aspernatur animi autem placeat culpa aliquid architecto sequi ullam eos sint dolorum officiis eius eaque at doloremque ducimus nobis recusandae.
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div style="display: none;" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
              </div>
              <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas, id, necessitatibus, vero quia voluptatibus modi aspernatur deleniti provident fugiat animi maxime fuga exercitationem tenetur maiores saepe distinctio porro obcaecati.
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

      </div> <!-- /.col-md-4 -->

      <div class="col-md-4">

        <!-- sample modal content -->
        <div style="display: none;" id="completeModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
              </div>
              <div class="modal-body">
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

                <h4>Popover in a modal</h4>
                <p>This <a data-original-title="A Title" href="#" role="button" class="btn btn-default popover-test" title="" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on click.</p>                
                <h4>Tooltips in a modal</h4>
                <p><a data-original-title="Tooltip" href="#" class="tooltip-test" title="">This link</a> and <a data-original-title="Tooltip" href="#" class="tooltip-test" title="">that link</a> should have tooltips on hover.</p>

                <hr>

                <h4>Overflowing text to show scroll behavior</h4>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="bs-example" style="padding-bottom: 24px;">
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#completeModal">
            Launch example complete
          </button>
        </div><!-- /example -->

      </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->    


    <!-- PROGRESS BAR -->
    <div class="well">
      <h1 class="text-center">PROGRESS BAR</h1>
    </div> 

    <div class="row">
      <div class="col-md-12">
        
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <!-- La clase class="sr-only" oculta la etiqueta! -->
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
        
        <h3>Con label</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            60%
          </div>
        </div>

        <h3>Striped</h3>
        <div class="progress progress-striped">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete (success)</span>
          </div>
        </div>

        <h3>Animated</h3>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete (success)</span>
          </div>
        </div>

        <h3>Stacked</h3>
        <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 35%">
            <span class="sr-only">35% Complete (success)</span>
          </div>
          <div class="progress-bar progress-bar-warning" style="width: 20%">
            <span class="sr-only">20% Complete (warning)</span>
          </div>
          <div class="progress-bar progress-bar-danger" style="width: 10%">
            <span class="sr-only">10% Complete (danger)</span>
          </div>
        </div>

      </div>
    </div>


    <!-- ALERTS -->
    <div class="well">
      <h1 class="text-center">ALERTS</h1>
    </div> 

    <div class="row">
      <div class="col-md-12">        
        
        <h3>Alertas Comunes</h3>
        <div class="alert alert-success">Alert basico!</div>

        <div class="alert alert-info">
          <strong>Well done!</strong> You successfully read this important alert message.
        </div>  
        
        <h3>Alertas desechables</h3>
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Warning!</strong> Este alert puede ser cerrado o desechado.
        </div>

        <h3>Alertas con enlaces</h3>
        <div class="alert alert-danger">
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

      </div>
    </div>


    <!-- THUMBNAILS -->
    <div class="well">
      <h1 class="text-center">THUMBNAILS</h1>
    </div> 
    
    <div class="row">

      <div class="col-md-4">
      <h3>Thumbnails</h3>
        <a href="#" class="thumbnail">
          <img src="<? echo base_url("assets/img/bootstrap.jpeg"); ?>" data-src="holder.js/100%x180" alt="100%x180">
        </a>
      </div>

      <div class="col-md-4">
      <h3>Thumbnails Personalizado</h3>
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="..." src="<? echo base_url("assets/img/bootstrap.jpeg"); ?>">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, modi, illo ea pariatur eum odio placeat amet fugit saepe molestiae doloribus ipsa nemo illum molestias eligendi a harum! Vel, corporis.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>

    </div>

    <!-- JUMBOTRON/PAGE HEADER -->
    <div class="well">
      <h1 class="text-center">JUMBOTRON/PAGE HEADER</h1>
    </div> 

    <div class="jumbotron">
      <h1>Hello, world!</h1>
      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
    </div>

    <div class="page-header">
      <h1>Example page header <small>Subtext for header</small></h1>
    </div>



    <!-- LABELS/BADGES -->
    <div class="well">
      <h1 class="text-center">LABELS/BADGES</h1>
    </div> 

    <div class="row">

      <div class="col-md-6">
        <div class="page-header">
          <h3>Labels</h3>

          <div>
            <h1>Example heading <span class="label label-default">New</span></h1>
            <h2>Example heading <span class="label label-default">New</span></h2>
            <h3>Example heading <span class="label label-default">New</span></h3>
            <h4>Example heading <span class="label label-default">New</span></h4>
            <h5>Example heading <span class="label label-default">New</span></h5>
            <h6>Example heading <span class="label label-default">New</span></h6>
          </div>
          <hr>
          <div>
            <span class="label label-default">Default</span>
            <span class="label label-primary">Primary</span>
            <span class="label label-success">Success</span>
            <span class="label label-info">Info</span>
            <span class="label label-warning">Warning</span>
            <span class="label label-danger">Danger</span>
          </div>

        </div>
      </div>

      <div class="col-md-6">
        <div class="page-header">
          <h3>Badges</h3>

          <div>
            <a href="#">Inbox <span class="badge">42</span></a>
          </div>
          
          <h3>Se adapta a estados activos de navegación</h3>
          <div>
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages <span class="badge">3</span></a></li>
            </ul>
            <br>
            <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
                <li class="active">
                    <a href="#">
                        <span class="badge pull-right">42</span>
                        Home
                    </a>
                </li>
                <li><a href="#">Profile</a></li>
                <li>
                    <a href="#">
                        <span class="badge pull-right">3</span>
                        Messages
                    </a>
                </li>
            </ul>
          </div>

        </div>
      </div>

    </div>


    <!-- PAGINATION -->
    <div class="well">
      <h1 class="text-center">PAGINATION</h1>
    </div> 

    <div class="row">
      <div class="col-md-12">
        <div class="page-header">

        <h3>Paginación predeterminada</h3>
        <h5>Esta es una paginación sencilla inspirada por Rdio, buena para aplicaciones y resultados de búsqueda. No es difícil detectar el bloque grande, que puede aumentar de tamaño y permitir tener grandes áreas para hacer clic.</h5>
          <div>
            <ul class="pagination pagination-lg">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
          </div>

          <div>
            <ul class="pagination">
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>

          <div>
            <ul class="pagination pagination-sm">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li class="active"><a href="#">5</a></li>
              <li class="disabled"><a href="#">&raquo;</a></li>
            </ul>
          </div> 

          <h3>Control de paginación</h3>
          <h5>Enlaces rápidos previos y siguientes para implementaciones más sencillas de navegación con marcado leve y estilos. Es muy bueno para sitios sencillos de blogs o revistas.</h5>

          <div>
            <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
            </ul>
          </div>

          <h3>Enlaces alineados</h3>
          <h5>Alternativamente, puede alinear cada enlace a los lados: </h5>
          <div>
            <ul class="pager">
              <li class="previous"><a href="#">&larr; Older</a></li>
              <li class="next"><a href="#">Newer &rarr;</a></li>
            </ul>
          </div>
    

        </div>
      </div>
    </div>



    <!-- BREADCRUMB -->
    <div class="well">
      <h1 class="text-center">BREADCRUMB</h1>
    </div>  

    <div class="row">
      <div class="col-md-12">
        <div class="page-header">          

          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol>
            
          <h5>Otra forma o estructura </h5>
          <ol class="breadcrumb">
            <li class="active">Home</li>
          </ol>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Library</li>
          </ol>
          <ol class="breadcrumb" style="margin-bottom: 5px;">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol>

        </div>
      </div>
    </div>

    <!-- BARRAS DE NAVEGACION/LISTAS -->
    <div class="well">
      <h1 class="text-center">BARRAS DE NAVEGACION/LISTAS</h1>
    </div>  

     <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1 class="text-center">Barras de navegacion con Navbar</h1>
        </div>
        
        <!-- IMPORTANTE: con la clase navbar-fixed-top y navbar-fixed-botton
        podemos fijar nuestras barras de navegacion en el tope o debajo de nuestra pagina -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <!-- Este boton se activa cuando la pantalla es chica y se muestra
              contraida la barra de navegacion -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button> <!-- fin del boton -->
              <a class="navbar-brand" href="#">Brand</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex8-collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Link</a></li>
                  <li><a href="#">Link</a></li>
              </ul>
          </div><!-- /.navbar-collapse -->
        </nav>




        <nav class="navbar navbar-default" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>



        
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="page-header">
          <h1>Listas con Nav </h1>

          <hr>
          <h5>Listas con nav-pills </h5>
          <ul class="nav nav-pills">
            <li class="active"><a href="">test 1</a></li>
            <li><a href="">test 2</a></li>
            <li><a href="">test 3</a></li>
            <li class="disabled"><a href="">test 4</a></li>
          </ul>
          
          <hr>
          <h5>Listas con nav-tabs y nav-justified</h5>
          <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="">test 1</a></li>
            <li><a href="">test 2</a></li>
            <li><a href="">test 3</a></li>
            <li class="disabled"><a href="">test 4</a></li>
          </ul>

          <hr>
          <h5>Listas con nav-tabs y dropdown</h5>
          <ul class="nav nav-tabs">
            <li class="active"><a href="">test 1</a></li>
            <li><a href="">test 2</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">
                test 3
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="">@codigofacilito</a></li>
                <li><a href="">@codigofacilito</a></li>
                <li><a href="">@codigofacilito</a></li>
                <li><a href="">@codigofacilito</a></li>
              </ul>
            </li>
            <li class="disabled"><a href="">test 4</a></li>
          </ul>

          <hr>
          <h5>Listas con nav-pills y nav-stacked</h5>
          <ul class="nav nav-pills nav-stacked well">
            <li class="active"><a href=""><i class="fa fa-use"></i> test 1</a></li>            
            <li class="nav-divider"></li>
            <li class="disabled"><a href="">test 2</a></li>
            <li><a href="">test 3</a></li>
          </ul>

          <hr>
          <h5>Listas con nav-tabs y nav-stacked</h5>
          <ul class="nav nav-tabs nav-stacked">
            <li><a href="">test 1</a></li>
            <li><a href="">test 2</a></li>
            <li><a href="">test 3</a></li>            
          </ul>

        </div>
      </div>

      <div class="col-md-6">
        <div class="page-header">
          <h1>Listas Verticales con List-group</h1>
                    
          <hr>
          <h5>Listas con list-group y list-group-item</h5>  
          <ul class="list-group">
            <li class="list-group-item">Item </li>  
            <li class="list-group-item"><i class="badge">14</i>Item </li>
            <li class="list-group-item"><span class="badge">14</span>Item </li>
          </ul>

          <hr>
          <h5>Listas con links</h5>
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Listas con link</a>
            <a href="#" class="list-group-item list-group-item-info">Listas con link</a>
            <a href="#" class="list-group-item">Listas con link</a>
            <a href="#" class="list-group-item">Listas con link</a>
            <a href="#" class="list-group-item">Listas con link</a>
          </div>

          <hr>
          <h5>Listas con contenido personalizado</h5>
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>            
          </div>
        </div>
      </div>
    </div>


    <!-- BOTONES/ICONOS -->
    <div class="well">
      <h1 class="text-center">BOTONES/ICONOS</h1>
    </div>    

    <!-- BOTONES -->
    <div class="row">
      <div class="col-md-6">
        <!-- Button simple -->
        <h5>Buttons div btn-group</h5>
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-success">Left</button>
          <button type="button" class="btn btn-default btn-success">Middle</button>
          <button type="button" class="btn btn-default btn-success">Right</button>
          <!-- Botones como link con clase btn-lnk -->
          <hr>
          <h5>Button link con btn-link</h5>          
          <button type="button" class="btn btn-link ">Left</button>
          <button type="button" class="btn btn-link ">Middle</button>
          <button type="button" class="btn btn-link ">Right</button>
        </div>
        <!-- Button toolbar -->
        <h5>Button toolbar con btn-toolbar</h5>
        <div class="btn-toolbar" role="toolbar">
          <div class="btn-group">
            <button type="button" class="btn btn-default">1</button>
            <button type="button" class="btn btn-default">2</button>
            <button type="button" class="btn btn-default">3</button>
            <button type="button" class="btn btn-default">4</button>
          </div>         
        </div>
        <!-- Menu desplegable con dropdown -->
        <h5>Menu desplegable con dropdown</h5>
        <div class="btn-group">
          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Dropdown <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
        </div>
        <br>
        <br>
        <!-- Botones verticales -->
        <h5>Botones verticales con btn-group-vertical</h5>
        <div class="btn-group-vertical">
          <button class="btn btn-default">Butones verticales 1</button>
          <button class="btn btn-default">Butones verticales 2</button>
          <button class="btn btn-default">Butones verticales 3</button>
          <button class="btn btn-default">Butones verticales 4</button>
        </div>
      </div>

      <!-- ICONOS -->  
      <div class="col-md-6">            
          <h5>Botones con btn-block</h5>
          <button type="button" class="btn btn-default btn-lg btn-block">Left</button>
          <button type="button" class="btn btn-default btn-lg btn-block">Middle</button>
          <button type="button" class="btn btn-default btn-lg btn-block">Right</button>

          <h5>Iconos con glyphicon glyphicon-user</h5>
          <i class="glyphicon glyphicon-user"></i>
          <i class="glyphicon glyphicon-pencil"></i>
          <i class="glyphicon glyphicon-ok"></i>
          <i class="glyphicon glyphicon-file"></i>

          <button type="button" class="btn btn-default btn-xs">
            <span class="glyphicon glyphicon-star"></span> Star
          </button>
          <button type="button" class="btn btn-default btn-xs">
            <i class="glyphicon glyphicon-user"></i> Registrar
          </button>
          
          <hr>
          <h4>Iconos Vectoriales con awesome font</h4>
          <i class="fa fa-android" style="font-size: 50px" ></i>
          <i class="fa fa-spinner fa-spin" style="font-size: 50px" ></i>
          <i class="fa fa-refresh fa-spin" style="font-size: 50px" ></i>
          <i class="fa fa-cog fa-spin" style="font-size: 50px" ></i> 
          <h4>Mas info: http://fortawesome.github.io/Font-Awesome/</h4>

      </div>      
    </div>
    
    <!-- FORMULARIOS -->
    <div class="well">
      <h1 class="text-center">Formularios</h1>
    </div>    

    <div class="row">
      <div class="col-md-12">
        <!-- form con role=form -->
        <form action="" role="form">          
            <!-- div form-group -->
            <div class="form-group">
              <legend>Datos Personales</legend>
              <label for="">Nombre</label>
              <input type="text" class="form-control">                      
              <label for="">Name</label>
              <input type="text" class="form-control">
              <br>   
              <input type="submit" class="btn btn-default">
            </div> 
            <!-- div input-group -->
            <div class="input-group">
              <!-- span input-group-addon -->
              <span class="input-group-addon">@</span>
              <input type="text" class="form-control" placeholder="Username">
            </div>

            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>

            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>

            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            </div>

            <div class="input-group">
              <!-- span input-group-btn -->
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>                
              </span>
              <input type="text" class="form-control">
            </div>

            <div class="input-group">              
              <input type="text" class="form-control">
              <!-- span input-group-btn -->
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>                
              </span>
            </div>

        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-striped table-hover table-condensed">
          <tr>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
          </tr>
          <tr>
            <td>Celdas</td>
            <td>Celdas</td>
            <td>Celdas</td>
            <td>Celdas</td>
          </tr>
          <tr>
            <td>Celdas</td>
            <td>Celdas</td>
            <td>Celdas</td>
            <td>Celdas</td>
          </tr>
          <tr>
            <td>Celdas</td>
            <td>Celdas</td>
            <td>Celdas</td>
            <td>Celdas</td>
          </tr>
        </table>
      </div>
    </div>
    
      <!--   well: resalta en un cuadro el texto
        visible-md: hace visible los elemento en un grid medium
        hidden-md: oculta los elemento en un grid medium-->
    <div class="col-md-12">        
      <div class="well visible-xs">
        <h1 class="text-center">Phone</h1>
        <p>Extra small grid (≤767px)</p>
      </div>
      <div class="well visible-sm">
        <h1 class="text-center">Tablet</h1>
        <p>Small grid (≥768px and ≤ 991)</p>  
      </div>        
      <div class="well visible-md">
        <h1 class="text-center">Desktop pequeño</h1>
        <p>Medium grid (≥992px and ≤ 1199)</p>
      </div>  
      <div class="well visible-lg">
        <h1 class="text-center">Desktop grande</h1>
        <p>Large grid (≥1200px)</p>
      </div>
    </div>
          
    <div class="row">
      <div class="col-md-12">      
          <h1>Pagina principal de QR Network, se debe escanear un codigo QR para continuar!</h1>
          <p>
            Bootstrap fue desarrollado por Mark Otto y Jacbod Thornton de Twitter, como
            un marco de trabajo (framework) para fomentar la consistencia a través de
            herramientas internas. Antes de Bootstrap, se usaban varias librerías para el 
            desarrollo de interfaces de usuario, las cuales guiaban a inconsistencias y a una
            carga de trabajo alta en su mantenimiento. Según el desarrollador de Twitter Mark Otto, 
            frente a esos desafíos            
          </p>
      </div>
    </div> 

    <div class="row">
      <div class="col-md-6">
        <h1>Pagina principal de QR Network, se debe escanear un codigo QR para continuar!</h1>
          <p>
            Bootstrap fue desarrollado por Mark Otto y Jacbod Thornton de Twitter, como
            un marco de trabajo (framework) para fomentar la consistencia a través de
            herramientas internas. Antes de Bootstrap, se usaban varias librerías para el 
            desarrollo de interfaces de usuario, las cuales guiaban a inconsistencias y a una
            carga de trabajo alta en su mantenimiento. Según el desarrollador de Twitter Mark Otto, 
            frente a esos desafíos
          </p>
      </div>

      <div class="col-md-6">
        <h1>Pagina principal de QR Network, se debe escanear un codigo QR para continuar!</h1>
          <p>
            Bootstrap fue desarrollado por Mark Otto y Jacbod Thornton de Twitter, como
            un marco de trabajo (framework) para fomentar la consistencia a través de
            herramientas internas. Antes de Bootstrap, se usaban varias librerías para el 
            desarrollo de interfaces de usuario, las cuales guiaban a inconsistencias y a una
            carga de trabajo alta en su mantenimiento. Según el desarrollador de Twitter Mark Otto, 
            frente a esos desafíos
          </p>
      </div>

    </div>
  </div> <!-- /content -->