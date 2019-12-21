<?php
use Bitm\Admin;

$_admin = new Admin();
$admins = $_admin->getActiveadmin();
?>


<div class="col-12 px-0">
    <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <?php
            $active = 'active';
            foreach ($admins as $admin):
            ?>

                <div class="carousel-item <?=$active?>">
                    <img src="<?=$webroot?>/uploads/<?=$admin['picture']?>" class="d-block w-100" alt="Slider Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>

                <?php
                $active = 'empty';
            endforeach;
            ?>


        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>