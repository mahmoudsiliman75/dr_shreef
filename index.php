<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HOME INTRO SERCTION -->
<div class="intro_wraper">
  <div class="row">
    <!-- START:: HOME SLIDER -->
    <div id="home_slider" class="carousel slide carousel-fade col-12 col-md-10 p-0" data-ride="carousel">

      <!--  <ol class="carousel-indicators">
        <li data-target="#home_slider" data-slide-to="0" class="active"></li>
        <li data-target="#home_slider" data-slide-to="1"></li>
        <li data-target="#home_slider" data-slide-to="2"></li>
        <li data-target="#home_slider" data-slide-to="3"></li>
      </ol> -->

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/media/pic1.jpg" class="d-block" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="assets/media/pic2.jpg" class="d-block" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="assets/media/pic3.jpg" class="d-block" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img src="assets/media/pic4.jpg" class="d-block" alt="Slide 4">
        </div>
      </div>

    </div>
    <!-- END:: HOME SLIDER -->

    <!-- START:: SLIDER MENU -->
    <div class="intro_menu col-12 col-md-2">
      <ul class="list-unstyled mb-0">
        <li class="active">
          <a href="#"> Did You Know? </a>
        </li>

        <li>
          <a href="#"> Surgery FAQ </a>
        </li>

        <li>
          <a href="#"> About Us </a>
        </li>
      </ul>
    </div>
    <!-- END:: SLIDER MENU -->
  </div>
</div>
<!-- END:: HOME INTRO SERCTION -->

<!-- START:: BIOGRAPHY SECTION -->
<div class="about_sec">
	<div class="container-fluid">

		<div class="about_wrape mt-3">
			<div class="row justify-content-center">
				<div class="col-10 col-md-5 mb-3">
					<div class="about_img">
						<img src="assets/media/pic5.jpg" alt="Author Image"> 
					</div>
				</div>

				<div class="col-12 col-md-7">
					<div class="about_text">
						<h4> Angioplasty For Erectile Dysfnction </h4>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Magnam, explicabo aut reprehenderit corporis culpa sint 
							architecto maxime eos quo aliquam incidunt laboriosam 
							quidem consectetur molestias officia, neque quae error exercitationem.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Magnam, explicabo aut reprehenderit corporis culpa sint 
							architecto maxime eos quo aliquam incidunt laboriosam 
							quidem consectetur molestias officia, neque quae error exercitationem.
						</p>
						<div class="btn_box">
							<a href="#"> Read More </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END:: BIOGRAPHY SECTION -->

<!-- START:: HIGHLIGHTS SECTION -->
<div class="highlights_sec">
  <div class="container">
    <div class="header_wraper">
      <h2> Surgery Highlights </h2>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row icons_wraper justify-content-center mt-3">
      <div class="col-6 col-md-3 d-block text-center d-md-flex my-3 mx-0 mx-md-4">
        <img src="assets/media/icons/clock.png" alt="Why Section Icon 1">
        <h5> From 30 Too 60 Min </h5>
      </div>

      <div class="col-6 col-md-3 d-block text-center d-md-flex my-3 mx-0 mx-md-4">
        <img src="assets/media/icons/hospital.png" alt="Why Section Icon 1">
        <h5> No Anesthesia </h5>
      </div>

      <div class="col-6 col-md-3 d-block text-center d-md-flex my-3 mx-0 mx-md-4">
        <img src="assets/media/icons/hospital.png" alt="Why Section Icon 1">
        <h5> No Side Effects </h5>
      </div>

      <div class="col-6 col-md-3 d-block text-center d-md-flex my-3 mx-0 mx-md-4">
        <img src="assets/media/icons/hospital.png" alt="Why Section Icon 1">
        <h5> No Disease Preventions </h5>
      </div>

      <div class="col-6 col-md-3 d-block text-center d-md-flex my-3 mx-0 mx-md-4">
        <img src="assets/media/icons/hospital.png" alt="Why Section Icon 1">
        <h5> No Age Limits </h5>
      </div>

      <div class="col-6 col-md-3 d-block text-center d-md-flex my-3 mx-0 mx-md-4">
        <img src="assets/media/icons/hospital.png" alt="Why Section Icon 1">
        <h5> Surgery Effect Life Time </h5>
      </div>
    </div>
  </div>
</div>
<!-- END:: HIGHLIGHTS SECTION -->

<!-- START:: FAQ SECTION -->
<div class="faq">
  <div class="container">
    <div class="header_wraper">
      <h2> Surgery FAQ </h2>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="accordion" id="question_1">
          <div class="card">
            <div class="card-header" id="heading_1">
              <h5 class="mb-0">
                <button class="btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" aria-controls="collapseOne">
                  <i class="far fa-arrow-alt-circle-down fa-lg"></i>
                  Question #1
                </button>
              </h5>
            </div>

            <div id="collapse_1" class="collapse show" aria-labelledby="heading_1" data-parent="#question_1">
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolor similique voluptate molestias asperiores libero ullam inventore, perspiciatis nostrum dolores nam eveniet iste, aliquam voluptatum mollitia earum accusantium nisi animi. Commodi.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END:: FAQ SECTION -->


<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->