
<div class="container">

<!--   <form class="form-signin" role="form">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="email" class="form-control" placeholder="Email address" required autofocus>
    <input type="password" class="form-control" placeholder="Password" required>
    <label class="checkbox">
      <input type="checkbox" value="remember-me"> Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <br>
    <a href="#" class="txt-lg txt-center btn-block">Forgot your password?</a>
  </form> -->



  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <h2>Tituloooooo</h2>
      <p>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quasi, molestiae, esse, placeat saepe dolorem animi incidunt in quisquam enim rerum natus dolor eveniet nostrum autem impedit nisi. Porro, qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, cum, nisi labore vel voluptatum quas exercitationem magni quisquam saepe enim. Quidem, optio perspiciatis inventore eveniet vero eius quas excepturi eaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, necessitatibus, dolore odit culpa fuga vero molestias quasi a corrupti voluptate tempore doloremque enim iste. Quos, eum accusantium suscipit voluptas dolores?
      </p>
      <p><?php echo "cookie_token=".$this->session->userdata('token'); ?></p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <?$attributes = array('class' => 'form-signin', 'role' => 'form');?>
      <?echo form_open('qrnetwork/secure_login', $attributes);?>
      <!-- <form action="" method="POST" role="form" class="form-signin"> -->
        <h2 class="">Please sign in</h2>

        <div class="form-group">

          <?php $data = array(
              'name'      => 'username',
              'type'      => 'text',
              'class'     => 'form-control',
              'required' => 'required',
              'placeholder'      => 'User Name',
              'autofocus'     => ''
          ); ?>
          <?php echo form_input($data); ?>

          <!-- <input type="email" name="email" class="form-control" required="required" placeholder="Email address" autofocus> -->

          <?php $data = array(
              'name'      => 'password',
              'type'      => 'password',
              'class'     => 'form-control',
              'required' => 'required',
              'placeholder'      => 'Password'
          ); ?>
          <?php echo form_input($data); ?>

          <!-- <input type="password" name="" class="form-control" required="required" placeholder="Password"> -->

          <div class="checkbox">
            <label>
              <?php echo form_checkbox('remember', 'remember-me');?>
              <!-- <input type="checkbox" value="remember-me"> -->
              Remember me
            </label>
          </div>
          <?=form_hidden('token',$token)?>
        </div>
          <?php $data = array(
              'name' => 'enviar',
              'type' => 'submit',
              'class' => 'btn btn-lg btn-primary btn-block',
              'content' => 'Sign in'
          ); ?>
          <?php echo form_button($data); ?>
        <!-- <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button> -->
        <br>
        <p class="centrar"><a href="#">Forgot your password?</a></p>
      <?= form_close()?>
      <?php
        $error = $this->session->flashdata('usuario_incorrecto');
        if($error){
        echo $error;
      } ?>
      <!-- </form> -->
    </div>

  </div> <!-- /.row -->

</div> <!-- /container -->



<!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

      <form action="" method="POST" role="form" class="form-signin">
        <h2 class="">Please sign in</h2>

        <div class="form-group">
          <input type="email" name="email" class="form-control" required="required" placeholder="Email address" autofocus>

          <input type="password" name="" class="form-control" required="required" placeholder="Password">

          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me">
              Remember me
            </label>
          </div>

        </div>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
        <br>
        <p class="centrar"><a href="#">Forgot your password?</a></p>
      </form>
    </div>  -->

