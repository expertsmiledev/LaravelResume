<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Brant</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet"> -->
    <link rel="shortcut icon" type="image/icon" href="images/logo/favicon.png"/>
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"> 
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">Brant</a>
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
              <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
              <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
              <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
              <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Portfolio</span></a></li>
              <li class="nav-item"><a href="#resume-section" class="nav-link"><span>WorkExperience</span></a></li>
              <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
              <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <section id="home-section" class="hero">
          <div class="home-slider  owl-carousel">
          <div class="slider-item ">
            <div class="overlay"></div>
            <div class="container">
              <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                <div class="one-third js-fullheight order-md-last img" style="margin-left:10px;background-image:url(images/bg_2.jpg);">
                    <div class="overlay"></div>
                </div>
                  <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Hello!</span>
                        <h1 class="mb-4 mt-3">I'm <span>Brant Beer</span></h1>
                        <h2 class="mb-4">A Freelance Web Developer</h2>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
              <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_1.png);">
                    <div class="overlay"></div>
                </div>
                  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Hello!</span>
                        <h1 class="mb-4 mt-3">I'm a <span>Full Stack Developer</span> and <span> Web Designer</span></h1>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_3.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                  <div class="col-md-12 heading-section ftco-animate">
                    <h1 class="big">About</h1>
                    <h2 class="mb-4">About Me</h2>
                    <p>Full-stack Developer with 7+ years experience working on applications’       server and client sides at several companies, including Web
                                    Synergies Pte Ltd, XB Software Corp and so on. As a Results, built a web sites in front-end and back-end helping the firm download
                                    10k+ company descriptions and stock quotes. I have strong command over the latest trends in not only Ecommerce, estate sites and
                                    other education systems based on React.js and other core technologies. I'm passionate and ambitious about my work, and love to be on
                                    a team that questions possibilities. I am looking for a new job opportunity in Full stack development. I will work harder with all my
                                    ability and knowledge for the company. Congratulations!
                                </p>
                    <ul class="about-info mt-4 px-md-0 px-2">
                        <li class="d-flex"><span>Name:</span> <span>Brant Beer</span></li>
                        <li class="d-flex"><span>Date of birth:</span> <span>December 12 13, 1993</span></li>
                        <li class="d-flex"><span>Address:</span> <span>L40 Lloyd Rd, Singapore, Singapore/span></li>
                        <li class="d-flex"><span>Zip code:</span> <span>239107</span></li>
                        <li class="d-flex"><span>Email:</span> <span>tuasmile213@gmail.com</span></li>
                        <li class="d-flex"><span>Phone: </span> <span>+65 90074372</span></li>
                    </ul>
                  </div>
                </div>
              <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
                <p class="mb-4">
                    <span class="number" data-number="200">0</span>
                    <span>Project complete</span>
                </p>
                <p><a href="./cv/brant.pdf" class="btn btn-primary py-3 px-3">View CV</a></p>
              </div>
              </div>
            </div>
        </div>
        </div>
    </section>

            <section class="ftco-section" id="skills-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
          </div>
        </div>
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>React</h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Redux</h3>
                            <div class="progress">
                                <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Vue.js</h3>
                            <div class="progress">
                                <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>TypeScript</h3>
                            <div class="progress">
                                <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Html 5</h3>
                            <div class="progress">
                                <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <span>100%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>CSS 3</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <span>100%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>CSS 3</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <span>100%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>JavaScript</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Figma Design</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>WordPress</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Web design</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Adobe Photoshop</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <span>100%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>PHP</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Laravel</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Next.Js</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Node.js</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Express.js</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Ruby on Rails</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>MySql</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>MongoDB</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Ethereum</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Net Framework</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                <span>70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Smart Contract</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-8">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big big-2">Portfolio</h1>
            <h2 class="mb-4">Portfolio</h2>
          </div>
        </div>
            <div class="row">
             <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="{{url('https://theflexliving.com')}}">Visit Site</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/2.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://clicktoid.ru">Visit Site</a></h3>
                        </div>
                    </div>
                </div>
                 <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/3.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="{{url('http://zopto.io')}}">Vist site</a></h3>
                            <span>Visit Site</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/4.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                          <h3><a href="{{url('https://manilanovias.com')}}">Visit Site</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
              <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/5.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://www.ruelala.com">Visit Site</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/6.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://www.walgreens.com">Visit Site</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/7.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="{{url('https://www.thalia.com')}}/">Visit Site</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/8.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="{{url('http://velxtech.com')}}">Visit Site</a></h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/9.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="{{url('http://linsemeadows.com/parkway-oaks/')}}">Visit Site</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/10.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="{{url('https://www.fixdrepair.com/')}}">Visit site</a></h3>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h1 class="big big-2">Work Experience</h1>
            <h2 class="mb-4">Wokr Experience</h2>
            <p>Expert credit developer for good clients.</p>
          </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2015 - 2018</span>
                        <h2>Junior Web developer</h2>
                        <span class="position">Web Synergies Pte Ltd</span>
                        <p class="mt-4">Learned organization's overall strategies, business operates, and
                                what drives success in the business. Collaborated with 3 engineering and design teams to integrate
                                external APIs into web pages and appications. Took an many software products to learn more about web design
                                and management, and successfully finished the big booking project
                            </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2018 - 2019</span>
                        <h2>Back-end Developer</h2>
                        <span class="position"><span>Awebstar Technologies Pte.Ltd</span></span>
                        <p class="mt-4">Every day was a new challenge! I developed state-of-the-art web
                                pages & applications with the help of an amazing team and the
                                latest front-end technologies like three.js implemented in a React
                                or Vue web application opens a whole new level to web
                                development.
                            </p>
                    </div>      
                </div>
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2016 - 2018</span>
                        <h2>Front-end developer</h2>
                        <span class="position">Web Synergies Pte Ltd</span>
                        <p class="mt-4">Assisted in requirements analysis , high level design, low level
                                design and complex code development for 15+appications. Produced websites compatible with multiple browsers Designed
                                and updated layouts. Redesigned and released 11+ applications abandoned for 36 weeks
                                by mentoring the same team under the previous developer.
                            </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2019 - 2022</span>
                        <h2>Senior Full Stack Developer</h2>
                        <span class="position">Gecko Dynamics</span>
                        <p class="mt-4">Had been engaged in several projects - Building user-friendly web
                                frontend using Vue.js, React.js and Next.js - Developing backend
                                using Node and PHP
                                Designed and developed over 15 full-stack solutions that solved
                                70% of use cases from embedded devices, and web UI to backend
                                and database.
                            </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="./cv/brant.pdf" class="btn btn-primary py-4 px-5">Download CV</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
          </div>
        </div>
            <div class="row">
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-analysis"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Web Design</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-flasks"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Phtography</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-ideas"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Web Developer</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-analysis"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">App Developing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-flasks"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Landing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="flaticon-ideas"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">Product Strategy</h3>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 ftco-animate text-center">
                        <h2>I'm <span>Available</span> for freelancing</h2>
                        <p>Thanks for watching my profile.</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
                    </div>
                </div>
            </div>
        </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Address</h3>
                <p>L40 Lloyd Rd, Singapore, Singapore</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
                <p><a href="#">+65 90074372</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Address</h3>
                <p><a href="mailto:info@yoursite.com">tuasmile1213@gmail.com</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-skype"></span>
                </div>
                <h3 class="mb-4">Skype</h3>
                <p><a href="#">live:.cid.59870d74296444d6</a></p>
              </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            @csrf
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url(images/about.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
        

    <footer class="ftco-footer ftco-section">
        <div class="row">
          <div class="col-md-12 text-center">

            <p> This site is made by <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Brant Beer</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>