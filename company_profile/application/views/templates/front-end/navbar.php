<body class="fixed-sn mdb-skin-custom" data-spy="scroll" data-target="#scrollspy" data-offset="15">

 <!--Main Navigation-->
 <header>

<!--Navbar-->

    <div class='container'>
        <a class="navbar-brand" href="<?php echo base_url('home')  ?>">
            <img src="<?php echo base_url() ?>assets/img/logo.png" class="d-inline-block align-top"
            >
        </a>
        <p  style="margin-bottom: 0px; color: #01aef0; font-size: 17px; font-weight: bold" class='text-right serif'>CALL CENTER</p>
        <p  style="margin-bottom: 0px; color: #626262; font-size: 27px; font-weight: bold" class='text-right'>+6221 3500586</p>
        <p  style="margin-bottom: 0px; color: #01aef0; font-size: 17px; font-weight: bold" class='text-right serif d-lg-none'>or ASK US NOW!</p>
    </div>

<nav class="navbar navbar-expand-lg navbar-light">

    <div id="topheader" class="container">
     <!-- Collapse button -->
     <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class=""><i class="fas fa-bars fa-1x"></i></span>
     </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse white" id="navbarSupportedContent">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('home')  ?>">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li <?php if($this->uri->segment(1)=="home"){echo 'class="nav-item active"';}?> >
                <a style="font-weight: bold;"  class="nav-link" href="<?php echo base_url(); ?>/home" >Home <span class="sr-only">(current)</span></a>
                </li>

                <li <?php if($this->uri->segment(1)=="aboutus"){echo 'class="nav-item active"';}?> >
                    <a style="font-weight: bold;" class="nav-link" href="<?php echo base_url('aboutus')  ?>">About Us</a>
                </li>
                <li <?php if($this->uri->segment(1)=="services"){echo 'class="nav-item active"';}?> >
                    <a style="font-weight: bold;" class="nav-link" href="<?php echo base_url('services')  ?>">Services</a>
                </li>
                <li <?php if($this->uri->segment(1)=="products"){echo 'class="nav-item active"';}?> >
                    <a style="font-weight: bold;" class="nav-link" href="<?php echo base_url('products')  ?>">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="font-weight: 600; color: #999999" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        News
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Judul Terakhir</a>
                        <a class="dropdown-item" href="#">Judul Kedua</a>
                        <a class="dropdown-item" href="#">Judul Ketiga</a>
                        <a class="dropdown-item" href="#">Judul Keempat</a>
                        <a class="dropdown-item" href="#">Judul Kelima</a>
                        <a class="dropdown-item" href="#">Judul Keenam</a>
                        <a class="dropdown-item" href="<?php echo base_url('news')  ?>">INDEX</a>
                    </div>
                </li>
                <li <?php if($this->uri->segment(1)=="partners"){echo 'class="nav-item active"';}?> >
                    <a style="font-weight: bold;" class="nav-link" href="<?php echo base_url('partners')  ?>">Partners</a>
                </li>
                <li <?php if($this->uri->segment(1)=="contactus"){echo 'class="nav-item active"';}?> >
                    <a style="font-weight: bold;" class="nav-link" href="<?php echo base_url('contactus')  ?>">Contact Us</a>
                </li>
            </ul>
            <!-- Links -->
            <div style="color: #01aef0; font-size: 17px; font-weight: bold"  class="d-none d-lg-block">or ASK US NOW!</div>
        </div>
        <!-- Collapsible content -->
       
    </div>
    
</nav>
<div class="container">
    <hr class="d-none d-lg-block" style="border: 5px solid #01aef0; margin-top: 0px; margin-bottom: 0px">
    <hr class="d-lg-none" style="border: 3px solid #01aef0; margin-top: 7px; margin-bottom: 0px">
</div>


<!--/.Navbar-->