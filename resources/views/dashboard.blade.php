{{-- <h1>Welcome, {{ Auth::user()->name }}</h1>

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel 11 Multi Auth</title>
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   </head>
   <body class="bg-light">
        <nav class="navbar navbar-expand-md bg-white shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
            <div class="container">
                <a class="navbar-brand" href="#">
                   <strong>Laravel 11 Multi Auth</strong>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                </button>


                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">                          
                                <li>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <div class="container">
           <div class="card border-0 shadow my-5">
                <div class="card-header bg-light">
                    <h3 class="h5 pt-2">Dashboard</h3>
                </div>
                <div class="card-body">
                    Welcome, {{ Auth::user()->name }} You are logged in !!
                </div>
           </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Your dedication to providing top-notch manpower services is truly commendable. Your expertise in staffing and talent acquisition has consistently delivered the right people at the right time. We appreciate your commitment to excellence and look forward to our continued partnership.">
  
  <meta name="copyright" content="Proviso Manpower Management Pvt. Ltd.">
  
  <meta name="keywords" content="Manpower services, Staffing agency, Workforce solutions, Temporary staffing, Recruitment agency, Labor hire, Human resources outsourcing, Employment agency, Personnel services, Temporary employment, Contingent workforce, Labor staffing, Temporary labor, On-demand staffing, Talent acquisition">

  <title>Proviso Manpower Management | Best human resource services</title>

  {{-- <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
  
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  
  <link rel="stylesheet" href="assets/css/owl.theme.default.css"> --}}

  <link rel="stylesheet" href={{ asset('css/app.css')}}>
  <script type="text/javascript" src={{ asset('js/app.js') }}></script>

  
  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="index.html"><img src="{{ asset('img/Proviso_logo_01.png')}}" alt="Proviso Manpower logo"></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"> {{ Auth::user()->name }}</a>
            </li>
<!--             <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Free Analytics</a>
            </li> -->
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Your Dream Team Awaits – Let’s Build Success Together!</h1>


            <p class="text-lg text-grey mb-5">Unleash Potential: Where Talent Meets Triumph! Elevate with our Mass Recruitment, Headhunting, and Executive Search Excellence.</p>
            <a href="https://forms.gle/ocJHT8hDbnF1ZSZs6" target="_blank" class="btn btn-primary btn-split">Submit Resume<div class="fab"><span class=""></span></div></a>
          </div>
          <div class="col-md-6 py-3 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="{{ asset('img/ManpowerManagement_Proviso_01.png')}}" class="img-fluid" alt="Proviso Manpower Management Cover">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>



  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">About us</span>
          <h2 class="title-section">Building Career. Building Trust.</h2>
          <div class="divider"></div>

          <p>Proviso Manpower Management Pvt. Ltd., a distinguished name in organized recruitment services, has emerged as a leader in the industry, establishing an expansive network across PAN India and internationally since its inception in 2010. The company, now known as Proviso Manpower Private Limited following the rebranding from Prime Services, holds an esteemed position as one of India's foremost talent solution providers.</p>
          <p>With a rich history spanning 13 years, our firm specializes in delivering comprehensive human resource services to a diverse clientele. Our extensive knowledge and experience uniquely position us to offer invaluable support to your business, facilitating its prosperity in today's highly competitive market landscape. Recognizing the challenges faced by enterprises, we are committed to providing tailored solutions by supplying the finest talents that precisely align with your specific requirements.</p>
		  <p>At Proviso Manpower Private Limited, we view it as our responsibility to contribute to your business's success by leveraging our expertise to navigate the complexities of the contemporary business environment. Trust us to not only meet but exceed your expectations, as we are dedicated to fostering enduring partnerships and facilitating the growth and triumph of your enterprise</p>

          <a href="about.html" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="{{ asset('img/ManpowerManagement_Proviso_02.png')}}" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our services</div>
        <h2 class="title-section">How Our Team Can Help</h2>
        <div class="divider mx-auto"></div>
      </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Bulk Recruitment</h5>
              <p>Executive Search & Head Hunting Services Mass Recruitment </p>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Outsourcing</h5>
              <p>Outsourcing Employment / Payroll Management Human Resource</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Career Counseling</h5>
              <p>Development Career Counseling</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>Salary Surveys</h5>
              <p>We analyse your structure, internal architecture & other key</p>
            </div>
          </div>


        </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section banner-seo-check">
    <div class="wrap bg-image" style="background-image: url('assets/img/bg_pattern.svg');">
      <div class="container text-center">
        <div class="row justify-content-center wow fadeInUp">
		<h2 class="mb-4">:: Our Clients ::</h2> 
          <div class="col-lg-12">

					<div class="owl-carousel owl-theme">
						<div class="item card-logo"><img src="{{ asset('img/logos/ambujaNeotia.jpg')}}" alt="Ambuja Neotia Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/americanLogistic.jpg')}}" alt="American Logistic Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/amitoje.jpg')}}" alt="Amitoje Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/noormahal.jpg')}}" alt="Noor mahal Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/onco.jpg')}}" alt="ONCO Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/pv.jpg')}}" alt="pv Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/livspace.jpg')}}" alt="livspace Logo"></div>
						<!-- <div class="item card-logo"><img src="assets/img/logos/finsmart.jpg" alt="finsmart Logo"></div>  -->
						<div class="item card-logo"><img src="{{ asset('img//logos/el.jpg')}}assets/img/logos/" alt="Eternity Logistic Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/morena.jpg')}}assets/img/logos/" alt="Morena Technologies Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/sterling.jpg')}}assets/img/logos/" alt="Sterling Logo"></div>
						<div class="item card-logo"><img src="{{ asset('img//logos/spectrum.jpg')}}assets/img/logos/" alt="Spectrum Logo"></div>
					</div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <!-- <div class="subhead">Pricing Plan</div> -->
        <h2 class="title-section">Our Unique Services Always Right for You</h2>
        <div class="divider mx-auto"></div>
      </div>
	  <div class="text-center wow fadeInUp">
        <p>We bring on board stellar, seasoned professionals who excel in 24/7 customer service. Picture this: they'll craft tailored strategies to nab top talent without breaking the bank for your business. Every potential hire experiences a laid-back yet insightful competency interview, and you'll get the lowdown with a detailed report. Our commitment? We dive deep into your business vibes, goals, and what makes it tick. Plus, we're all about confidentiality and ethical standards, ensuring a trust-filled journey for both candidates and clients. Let's make hiring a breeze!</p>
      </div>
	  <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h2 class="title-section">Proviso Expertise Functions</h2>
          <div class="divider"></div>
			<p>Executive Search & Head Hunting Services Mass Recruitment (Bulk Recruitment)</p>
			<p>Overseas Manpower Employment</p>
			<p>Outsourcing Employment / Payroll Management Human Resource</p>    
			<p>Development Career Counseling</p>
			<p>Salary Surveys</p>

          <h2 class="title-section">Human Resource recruitment process</h2>
          <div class="divider"></div>
			<p>Boost Your Brand with Strategic Advertising and Expert CV Screening.</p>
			<p>Craft Excellence: Precise Shortlisting for Top Talent.</p>
			<p>Experience Unmatched Talent: Rigorous Tests and Interviews.</p>
			<p>Seal the Deal: Final Selection Tailored to You.</p>
			<p>Effortless Onboarding: Streamlined Placement Formalities.</p>
			<p>Meet Your Future Champions:</p>

        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="assets/img/ManpowerManagement_Proviso_04.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- Banner info -->
  <div class="page-section banner-info">
    <div class="wrap bg-image" style="background-image: url(assets/img/bg_pattern.svg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
            <h2 class="title-section">Our specialized areas :</h2>
            <div class="divider"></div>      
            <div class="theme-list theme-list-light text-white">

                <!-- <div class="h5">SEO Content Strategy</div> -->
<p>Visionary Top Executives and Management Wizards</p>
<p>Tech Gurus (Hardware, Telecom, Networking)</p>
<p>Engineering Mavericks (Civil, Mechanical, Electrical, Chemical)</p>
<p>Sales Maestros (Including VAN Sales)</p>
<p>Tech Wizards (HVAC, HSE, Refrigeration, Electrical)</p>
<p>Supply Chain & Factory Pros</p>
<p>IT Pioneers (Software Engineers, Designers, SAP, Oracle Experts)</p>
<p>Customer Champions (Telemarketing, Admin, Support)</p>
<p>Office Wizards (Secretaries, Admin Staff)</p>
<p>Skilled Labor Heroes (Shelter, Carpenter, Masons, Panel Beater)</p>
<p>Logistics Virtuosos</p>

		    </div>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <div class="img-fluid text-center">
              <img src="assets/img/ManpowerManagement_Proviso_05.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <!-- Blog -->
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our Blog</div>
        <h2 class="title-section">Read Latest Blog</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="assets/img/blog/EmergingTechnologies_proviso_manpower.jpg" alt="Emerging Technologies Proviso Manpower">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="emergingTechnologies_proviso_manpower.html">Emerging Technologies</a></h5>
              <div class="post-date">Posted on <a href="#">08 Sept 2023</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="assets/img/blog/managedSolutions_proviso_manpower.jpg" alt="Managed Solutions proviso manpower">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="managedSolutions_proviso_manpower.html">Managed Solutions</a></h5>
              <div class="post-date">Posted on <a href="#">10 Aug 2023</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="assets/img/blog/internalAuditServicesproviso_manpower.jpg" alt="Internal Audit Services Proviso Manpower">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="internalAuditServices_proviso_manpower.html">Internal Audit Services</a></h5>
              <div class="post-date">Posted on <a href="#">15 July 2023</a></div>
            </div>
          </div>
        </div>

        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="blog.html" class="btn btn-primary">View More</a>
        </div>
      </div>
    </div>
  </div>

  <footer id="contact" class="page-footer bg-image" style="background-image: url(assets/img/world_pattern.svg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>Proviso</h3>
          <p>Crafting Brilliance: Guiding Progress Through HR Wisdom, Infused with the Apex of Best Practices for Organizational Triumph.</p>

          <div class="social-media-button">
            <a href="https://www.facebook.com/profile.php?id=61553984495358" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <!-- <a href="#"><span class="mai-logo-twitter"></span></a> -->
            <a href="https://www.linkedin.com/feed/" target="_blank" ><span class="mai-logo-linkedin"></span></a>
            <a href="https://instagram.com/provisomanpower?igshid=YzAwZjE1ZTI0Zg==" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Help & Support</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Us</h5>
          <p>27, Weston Street, Kolkata-700012 <br>Room No - 301 (3rd floor)</p>
          <a href="#" class="footer-link">+91 98756 45276, +033 4600 7645</a>
          <a href="#" class="footer-link">info@provisomanpower.com</a>
        </div>
        <div class="col-lg-3 py-3">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.26586816776904!2d88.35475529914874!3d22.569605624504902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a8cd6bbba7%3A0x37e087ec9a0f9317!2s27%2C%20Weston%20St%2C%20Esplanade%2C%20Bowbazar%2C%20Kolkata%2C%20West%20Bengal%20700012!5e0!3m2!1sen!2sin!4v1697538428991!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2023. <a>Proviso</a></p>
    </div>
  </footer>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:5,
    responsiveClass:true,
	autoplay:true,
	autoplayTimeout:2000,
    responsive:{
        0:{
            items:2,
            
        },
        600:{
            items:3,
            
        },
        1000:{
            items:5,
            
            loop:false
        }
    }
})
</script>
  
</body>
</html>
