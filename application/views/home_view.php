
<?php if($this->session->flashdata('logout')): ?>
    <?php echo $this->session->flashdata('logout'); ?>
    <div class="container">
        <p class="alert alert-danger">
            You have been logged out
        </p>
    </div>
<?php endif; ?>

<div class="row">
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://placehold.it/1200x400/16a085/ffffff&text=About Us">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Projects">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Portfolio">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
                <div class="item">
                    <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Services">
                    <div class="carousel-caption">
                        <h3>
                            Headline</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Carousel Inner -->
            <ul class="nav nav-pills nav-justified">
                <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
                            ipsum dolor sit</small></a></li>
                <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
                            dolor sit</small></a></li>
                <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                            dolor sit</small></a></li>
                <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                            dolor sit</small></a></li>
            </ul>
        </div>
        <!-- End Carousel -->
    </div>
</div>








