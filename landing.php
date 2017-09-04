<!DOCTYPE html>
<html>
<head>
<title>Cuir Ally Affiliate Link</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Ubuntu:400,500,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>assests/css/formvalidation.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assests/js/formvalidation.js"></script>
</head>
<body class="landing">
  <div class="top-home topbar">
      <div class="col-md-6">
          <div class="row">
            <img src="https://cuirally.com/img/featuerd/featured_col_2.jpg" class="img-responsive">
          </div>
      </div>
      <div class="col-md-6 text-center">
        <h1 class="fontubuntu">The World's Most Functional Smart Wallet <img src="https://cuirally.com/img/voyager-smart.png" class="img-responsive" style="display:block;margin:0 auto;padding-top: 15px;padding-bottom: 10px;" alt="Voyager Smart Wallet"> Is <br> Coming soon on <br>
          <div class="text-center"> 
            <img src="<?php echo base_url(); ?>assests/img/indigogo.png" alt="Indiegogo" style="padding-top:10px;">
          </div>
        </h1>
        <h3><span class="text-uppercase">At an unbelievable price </span></h3>
        <div class="price">
          <span class="old-price"><b style="color:#e42525; font-size:18px;"><del>$ 119.99</del></b></span> Starting <span class="new-price"><b style="color:#2b862b; font-size:30px;">$ 49.00</b></span>
        </div>
      </div>
      <div class="clearfix"></div>
  </div>
  <div class="bottom-home">
      <div class="container">
          <div class="col-md-8 col-md-offset-2">
            <form id="contactForm" class="form-horizontal" action="<?php base_url(); ?>webapi/users/">
                <div class="almsg"></div>
                <h2 class="text-center fontopensans lineheight16">Refer your friends and family <br>to get<br> Upto <span class="fontweight600"> 30% </span> Cuir Ally Gift Voucher </h2>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-ms-offset-2" style="margin-top:25px;">
                        <input type="text" class="form-control input-lg fontweight300" name="email" placeholder="Enter your Email Address" autocomplete="off"/>
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary">Login / Signup</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>
  <script>
  $(document).ready(function() {
      $('.top-home').css('min-height', $(window).height()/2.4 +'px');
      $(window).resize(function(){
            $('.top-home').css('min-height', $(window).height()/2.4 +'px');
      });
      $('#contactForm')
          .formValidation({
              framework: 'bootstrap',
              icon: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  email: {
                    threshold: 8,
                    message: 'The email address is not valid',
                    delay: 2000,
                    validators: {
                      notEmpty: {
                          message: 'The username is required'
                      },
                      regexp: {
                          regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                          message: 'The value is not a valid email address'
                      }
                    }
                  }
              }
          })
          .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            var $form = $(e.target),
                fv    = $form.data('formValidation');

            // Use Ajax to submit form data
            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                success: function(result) {
          				    var json_data = $.parseJSON(result);
                      $('.almsg').html('<div class="alert alert-success"<strong>Success!</strong> ' +json_data.msg+  '.</div>')
                      setTimeout(function(){ window.location.href = json_data.redirect;  }, 3000);
        			  }
            });
        });
  });
  </script>



</body>
</html>
