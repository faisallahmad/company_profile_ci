<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url('uploads/img_1.jpg')  ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('uploads/img_2.jpg')  ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('uploads/img_3.jpg')  ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <div class="row">
        <?php foreach ($banner_carousel as $ban_car) : ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo base_url().'/uploads/'.$ban_car->img  ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" mb-1><?php echo $ban_car->title_1  ?></h5>
                    <p class="card-text"><?php echo $ban_car->title_2  ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>