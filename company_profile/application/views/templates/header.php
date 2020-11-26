<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alam Tehnik - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

      <!-- MDB icon -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="<? echo base_url('assets/css/bootstrap.min.css'); ?>">

        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mdb.min.css">
        <!-- Your custom styles (optional) -->
        <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"> -->
        <style>
            body {
            background-color: #FFFFFF;
            }
            .text-poppy-red {
            color: #ef5350 !important;
            }
            .btn-poppy-red {
            background-color: #ef5350 !important;
            }
            .bg-poppy-red {
            background-color: #ef5350 !important;
            }
            .container{ max-width:1600px !important;
            }
            .container-xl{ max-width:1567px !important;
            }
            .container-lg{ max-width:1300px !important;
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
            #topheader .navbar-nav li.active > a {
                background-color: #01aef0;
                color: #fff;
            }

            #topheader .navbar-nav li > a {
                text-transform: capitalize;
                color: #e5e5e5;
                font-weight: bold;
                transition: background-color .2s, color .2s;
                
                &:hover,
                &:focus {
                    background-color: red;
                    color: #e5e5e5;
                }
                .serif {
                    font-family: "Times New Roman", Times, serif;
                }

                .intro-copy {
                padding: 1em;
                margin: 50vh auto;
                max-width: 15em;
                font-family: Helvetica;
                font-weight: lighter;
                font-size: 2em;
                line-height: 1.2;
                text-align: center;
                }

                .top-link {
                transition: all .25s ease-in-out;
                position: fixed;
                bottom: 0;
                right: 0;
                display: inline-flex;
  
                cursor: pointer;
                align-items: center;
                justify-content: center;
                margin: 0 3em 3em 0;
                border-radius: 50%;
                padding: .25em;
                width: 80px;
                height: 80px;
                background-color: #F8F8F8;
                                
                &.show {
                    visibility: visible;
                    opacity: 1;
                }
                
                &.hide {
                    visibility: hidden;
                    opacity: 0;
                }

                svg {
                fill: #000;
                width: 24px;
                height: 12px;
                }

                &:hover {
                background-color: #E8E8E8;

                svg {
                fill: #000000;
                }
            }
        }

        .screen-reader-text {
        position: absolute;
        clip-path: inset(50%);
        margin: -1px;
        border: 0;
        padding: 0;
        width: 1px;
        height: 1px;
        overflow: hidden;
        word-wrap: normal !important;
        clip: rect(1px, 1px, 1px, 1px);

        &:focus {
        display: block;
        top: 5px;
        left: 5px;
        z-index: 100000; // Above WP toolbar
        clip-path: none;
        background-color: #eee;
        padding: 15px 23px 14px;
        width: auto;
        height: auto;
        text-decoration: none;
        line-height: normal;
        color: #444;
        font-size: 1em;
        clip: auto !important;
        }
        }

        .btn {
        background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 12px 16px;
        font-size: 16px;
        cursor: pointer;
        }

        /* Darker background on mouse-over */
        .btn:hover {
        background-color: RoyalBlue;
        }



                /* @media all and (min-width: 992px) {
	.navbar-nav .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar-nav .nav-item:hover .nav-link{ color: #fff;  }
	.navbar-nav .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar-nav .dropdown-menu.fade-up{ top:180%;  }
	.navbar-nav .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
            } */
            
   
}
        </style>
</head>
