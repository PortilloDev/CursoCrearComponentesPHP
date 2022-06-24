
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
      <div class="navbar-area" style="background-color: #5864ff; color: white !important;">
        <div class="container relative">
          <div class="row items-center">
            <div class="w-full">
              <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                <a class="navbar-brand mr-5 text-4xl bold text-white" href="/index.php">
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
                      <a class="" href="/">Home</a>
                    </li>
                    <?php if ($access->check(['students'])): ?>
                     <li class="nav-item ml-5 lg:ml-11">
                      <a class="" href="students.php">students</a>
                    </li>
                    <?php endif ?>
                    <?php if ($access->check('teacher')): ?>
                    <li class="nav-item ml-5 lg:ml-11">
                      <a class="" href="teachers.php">Teachers</a>
                    </li>
                    <?php endif ?>
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
    <section id="home" class="hero-section relative bg-no-repeat bg-blue-300 bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120 w-full" style="background-image: url('assets/img/hero/header.jpg'); width:100%">>
      <div class="container">
        <div class="row flex items-center relative">
          <div class="w-full lg:w-1/2">
					</div>
					<div class="w-full lg:w-1/2">
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
