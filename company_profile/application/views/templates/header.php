  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">

  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="<? echo base_url('assets/css/bootstrap.min.css'); ?>">

  <!-- Custom Font CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/font.css">

  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"> -->

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


  <style>
      body {
          background-color: #FFFFFF;
          font-family: 'MyriadPro-Regular';
      }

      .back-to-top {
          position: fixed;
          bottom: 25px;
          right: 25px;
          display: none;
      }

      .container {
          max-width: 1500px !important;
      }

      .container-xl {
          max-width: 1400px !important;
      }

      .container-lg {
          max-width: 1300px !important;
      }

      #topheader .navbar-nav li.active>a {
          background-color: #01aef0;
          color: #fff;
      }

      .navbar {
          box-shadow: none;
          max-height: 30px;
          margin-top: 0px;
          margin-bottom: 0px;
      }

      .navbar-brand {
          box-shadow: none;
          max-height: 5px;
      }

      .navbar {
          z-index: 10;
      }

      .navbar-collapse.in {
          background: #fff
      }

      .background_1 {
          background-color: #F2F2F2;
      }

      .text_color {
          color: #626262;
      }

      .text_color_blue {
          color: #01aef0;
      }

      .text_color_dark_grey {
          color: #626262;
      }

      .background_2 {
          width: 210px;
          background-color: #F2F2F2;
      }

      .type_1 {
          width: 210px;
          background-color: #F2F2F2;
          border-color: transparent;
          height: 32px;
          margin-top: 5px;
          margin-bottom: 5px;
      }

      .type_2 {
          width: 32px;
          background-color: #F2F2F2;
          border-color: transparent;
          height: 32px;
      }


      .type_3 {
          width: 32px;
          background-color: #999999;
          border-color: transparent;
          height: 32px;
      }

      .type_4 {
          width: 32px;
          background-color: #cccccc;
          border-color: transparent;
          height: 32px;
      }

      .type_5 {
          width: 32px;
          background-color: #01aef0;
          border-color: transparent;
          height: 32px;
      }
  </style>

  <script>
      $(document).ready(function() {
          $(window).scroll(function() {
              if ($(this).scrollTop() > 15) {
                  $('#back-to-top').fadeIn();
              } else {
                  $('#back-to-top').fadeOut();
              }
          });
          // scroll body to 0px on click
          $('#back-to-top').click(function() {
              $('body,html').animate({
                  scrollTop: 0
              }, 400);
              return false;
          });
      });
  </script>
    <!-- <script>
    $(document).ready(function() {
        $( ".mr-auto .nav-item" ).bind( "click", function(event) {
            event.preventDefault();
            var clickedItem = $( this );
            $( ".mr-auto .nav-item" ).each( function() {
                $( this ).removeClass( "active" );
            });
            clickedItem.addClass( "active" );
        });
    });
    </script> -->