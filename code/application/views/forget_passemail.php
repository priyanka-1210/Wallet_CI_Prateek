<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo favicon_url();?>" type="image/ico" />

    <title><?php echo project_name();?></title>
    <link href="<?php echo asset_url() ?>css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/build/custom.min.css" rel="stylesheet">

  </head>
 <body class="login" style="background-image: url('<?php echo login_bg();?>');">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
           <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php }else if($this->session->flashdata('error')){  ?>
            <div class="alert alert-block alert-danger">
                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
          <section class="login_content">
            <form action="<?php echo base_url()?>Forgetemail/verifyemail" method="POST"  id="forgetemailform">
              <h1><img src="<?php echo logo_url() ?>"></h1>
              <div>
                <input type="text" class="form-control validate[required,custom[email]]" placeholder="Username" id="username" name="username" />
              </div>
              <div>
                <button type="submit" class="btn btn-success" onclick="return formbtn();">Submit</button>
                <button class="btn btn-primary" type="reset">Reset</button>
               
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="<?php echo base_url();?>signup" class="to_register"> Create Account </a> </p>
                   <p><a href="<?php echo base_url();?>" class="to_register"> Want to login? </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><!-- <i class="fa fa-paw"></i> --></h1>
                  <p>©2016 All Rights Reserved. <?php echo project_name();?></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
 <script src="<?php echo asset_url() ?>css/jquery/dist/jquery.min.js"></script>
 <script type="text/javascript">

      $(document).ready(function(){
        $("#forgetemailform").validationEngine('attach');
        setTimeout(function(){ $(".alert").hide(); }, 5000);
        
      });

      function formbtn()
      {

          if ($('#forgetemailform').validationEngine('validate')!='')   
          { 
            return true;
             
          }else{
            return false;
            
          }
      }
  </script>

<link href="<?php echo asset_url() ?>css/validation_engine/validationEngine.jquery.css" rel="stylesheet">
<script src="<?php echo asset_url() ?>css/validation_engine/jquery.validationEngine-en.js"></script>
<script src="<?php echo asset_url() ?>css/validation_engine/jquery.validationEngine.js"></script>