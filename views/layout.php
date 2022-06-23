
<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>  Academía Notas Web</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/tailwindcss.css"/>
  </head>
  <body>
		<!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container relative">
          <div class="row items-center">
            <div class="w-full">
              <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                <a class="navbar-brand mr-5 text-4xl bold text-white" href="index.html">
                 Academía Notas Web
                </a>
                <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent lg:shadow-none" id="navbarOne">
                  <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                    <li class="nav-item ml-5 lg:ml-11">
                      <a class="page-scroll active" href="#home">Home</a>
                    </li>
                    <?php //if(Acces::check(['students'])) ?>
                     <li class="nav-item ml-5 lg:ml-11">
                      <a class="page-scroll" href="students.php">students</a>
                    </li>
                    <? // endif; ?>
                    <?php //if(Acces::check(['teacher'])) ?>
                    <li class="nav-item ml-5 lg:ml-11">
                      <a class="page-scroll" href="teachers.php">Teachers</a>
                    </li>
                    <? //endif; ?>
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section relative bg-no-repeat bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120" style="background-image: url('assets/img/hero/hero-bg.svg')">
      <div class="container">
        <div class="row flex items-center relative">
          <div class="w-full lg:w-1/2">
            <div class="hero-content mb-0 lg:mb-6">
              <h1 class="text-white mb-9 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl 2xl:text-6xl">Launch Your SaaS Website in Minutes!</h1>
              <p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
              </p>
							<a href="javascript:void(0)" class="main-btn border-btn btn-hover mb-2">Get Started</a>
							<a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
            </div>
					</div>
					<div class="w-full lg:w-1/2">
						<div class="hero-img pt-8 lg:pt-0">
							<img src="assets/img/hero/hero-img.png" alt="" class="w-full lg:w-auto">
						</div>
					</div>
        </div>
			</div>
    </section>
	  <div class="container">
        <?php echo $templateContent;  ?>
    </div>

    <!-- ========================= footer start ========================= -->
		<footer class="footer bg-cover bg-no-repeat bg-right-top pt-120 mt-25 bg-theme-color md:bg-transparent md:pt-260 lg:pt-260" style="background-image: url('assets/img/footer/footer-bg.svg');">

		</footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
