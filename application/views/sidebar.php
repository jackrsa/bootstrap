<style>

  body {
  padding-top:65px;
}

@media (min-width: 979px) {

  #midCol.affix-top {
      position:fixed;
      width:265px;
      margin-right:10px;
      border: solid;
  }

  #midCol.affix {
      position:static;
      width:100%;
      border: solid;
  }

}

@media (min-width: 767px) {
  .affix,.affix-top {
      position:fixed;
      
  }
}

</style>

<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">World</a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li><a href="#">Link</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


<!-- Content -->
<div class="container">
     <div class="row">
      <div class="col-sm-2">
          <ul id="sidebar" class="nav nav-stacked affix">
            <li><a href="#">The Next Web</a></li>
            <li><a href="#">Mashable</a></li>
            <li><a href="#">TechCrunch</a></li>
            <li><a href="#">GitHub</a></li>
            <li><a href="#">In1</a></li>
            <li><a href="#">TechMeMe</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <div id="midCol" data-spy="affix" data-offset-top="300">
        <div class="well"><h3><a href="http://getbootstrap.com">Bootstrap 3 is Here.</a></h3>
                In simple terms, a responsive web design figures out what resolution of
                device it's being served on. Flexible grids then size correctly to fit
                the screen.</div>
        <div class="well">
              <img class="img-responsive" src="//placehold.it/300x300">
        </div>
        <div class="well">The new Bootstrap 3 is a smaller build. The separate Bootstrap
                base and responsive.css files have now been merged into one. There is no
                more fixed grid, only fluid..</div>
        <div class="well">Well, that's it for now Jim.</div>
        <div class="well">A big design trend for 2013 is "flat" design. Gone are the days of excessive
                gradients and shadows. Designers are producing cleaner flat designs, and
                Bootstrap 3 takes advantage of this minimalist trend.
        Aliquam in felis sit amet augue.</div>
         </div>
      </div>
      <div class="col-sm-7">
          <div class="row">
            <div class="col col-sm-12"><h2>Responsive</h2><p>In simple terms, a responsive web design figures out what resolution of
                device it's being served on. Flexible grids then size correctly to fit
                the screen. Mobile-first Bootstrap 3 is responsive.</p></div>
          </div>
           <hr>
          <div class="row">
            <div class="col-sm-8"><h2>Lighweight</h2><p>The new Bootstrap 3 is a smaller build. The separate Bootstrap
                base and responsive.css files have now been merged into one. There is no
                more fixed grid, only fluid.</p></div>
            <div class="col-sm-4"><img class="img-responsive" src="//placehold.it/220x180/666666/FFF"></div>
          </div>
           <hr>
          <div class="row">
            <div class="col-sm-4"><img class="img-responsive" src="//placehold.it/220x180/777777/FFF"></div>
            <div class="col-sm-8"><h2>Large, Small or Tiny</h2><p>
              The new fluid grid comes in 3 flavors, or actually sizes. The large grid <code>col-lg-*</code> works exactly like the Bootstrap 2.x <code>span*</code> did.
              There is also a small grid that is realized using the <code>col-sm-*</code> classes. This smaller grid is ideal for smartphones and tablets.
              Finally, there is the non-stacking tiny grid <code>col-*</code> that is intended for very small screens less that 480px.
              </p></div>
          </div>
           <hr>
          <div class="row">
            <div class="col-sm-8"><h2>A Playground</h2><p>
              Bootply is a playground for Bootstrap. Designers and developers use Bootply to edit, design, prototype, test and find examples that use Bootstrap 3.
              Use Bootply to hand-code HTML, Javascript, CSS and drop in the Bootstrap classes. There is a also a visual drag-and-drop builder that is perfect for wire-framing and mockups.
              </p></div>
            <div class="col-sm-4"><img class="img-responsive" src="//placehold.it/220x180/777777/FFF"></div>
          </div>
           <hr>
      </div>
    </div>
</div>


