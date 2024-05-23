@extends('layouts.app')

@section('content')
    

{{-- HERO SECTION --}}
<div id="carouselExampleAutoplaying" class="carousel slide carousel-head" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/wes-hicks-4-EeTnaC1S4-unsplash.jpg') }}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h1>Welcome to Workhobbit</h1>
                <p>Your Ultimate Work Companion</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/brooke-cagle-xcgh5_-QIXc-unsplash.jpg') }}" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h1>Boost Your Productivity</h1>
                <p>With our innovative tools and features</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/thought-catalog-Nv-vx3kUR2A-unsplash.jpg') }}" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h1>Stay Organized, Anywhere</h1>
                <p>Access your tasks and schedules on any device</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




   {{-- <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
    <div class="container">
      <marquee behavior="scroll" direction="left" scrollamount="15">
        <img src="{{ asset('images/client-1.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-2.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-3.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-4.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-5.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-6.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-7.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-8.png') }}" class="img-fluid" alt="">
      </marquee>
    </div>
  </section> --}}

  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="count-box animate__animated animate__bounceInLeft d-flex flex-column">
                    <i class="bi bi-emoji-smile"></i>
                    <span>232</span>
                    <p class="mt-0 ">Happy Clients</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-5 mt-md-0">
                <div class="count-box animate__animated animate__bounceInRight d-flex flex-column">
                    <i class="bi bi-journal-richtext"></i>
                    <span>521</span>
                    <p class="mt-0 ">Projects</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-5 mt-md-0">
                <div class="count-box animate__animated animate__flipInX d-flex flex-column">
                    <i class="bi bi-headset"></i>
                    <span>1463</span>
                    <p class="mt-0 ">Hours Of Support</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-5 mt-md-0">
                <div class="count-box animate__animated animate__zoomIn d-flex flex-column">
                    <i class="bi bi-people"></i>
                    <span>15</span>
                    <p class="mt-0 ">Hard&nbsp;Workers</p>
                </div>
            </div>
        </div>
    </div>
</section>
  
  









 <!-- ======= Tabs Section ======= -->
<section id="tabs" class="tabs">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <i class="ri-gps-line"></i>
                    <h4 class="d-none d-lg-block">Tech Gadgets</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <i class="ri-body-scan-line"></i>
                    <h4 class="d-none d-lg-block">Remote Collaboration</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                    <i class="ri-sun-line"></i>
                    <h4 class="d-none d-lg-block">Digital Workspace</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <i class="ri-store-line"></i>
                    <h4 class="d-none d-lg-block">Virtual Meetings</h4>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <h3>Discover the Latest Tech Gadgets for Remote Work</h3>
                        <p class="fst-italic">
                            Stay connected and productive with cutting-edge technology designed for remote professionals.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Explore innovative gadgets and accessories to enhance your remote setup.</li>
                            <li><i class="ri-check-double-line"></i> Stay ahead of the curve with the latest advancements in wearable tech, smart devices, and productivity tools.</li>
                            <li><i class="ri-check-double-line"></i> Boost your efficiency and effectiveness with tech solutions tailored for remote collaboration and communication.</li>
                        </ul>
                        <p>
                            Embrace the future of work with powerful tech gadgets that streamline your workflow and elevate your remote experience.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('images/tabs-1.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Unlock Seamless Remote Collaboration with Digital Tools</h3>
                        <p>
                            Bridge the distance and work together effectively with a suite of digital collaboration tools tailored for remote teams.
                        </p>
                        <p class="fst-italic">
                            Break down barriers and foster teamwork across geographies with real-time communication and collaboration platforms.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Harness the power of cloud-based project management software to streamline workflows and track progress.</li>
                            <li><i class="ri-check-double-line"></i> Facilitate virtual meetings, brainstorming sessions, and team collaboration with intuitive digital whiteboards and video conferencing solutions.</li>
                            <li><i class="ri-check-double-line"></i> Empower remote teams with shared documents, centralized repositories, and collaborative editing tools for seamless information sharing and collaboration.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('images/tabs-3.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Create Your Digital Workspace for Remote Productivity</h3>
                        <p>
                            Transform any location into your personal office with a digital workspace optimized for remote productivity.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Customize your digital workspace with ergonomic furniture, adjustable lighting, and noise-canceling headphones for maximum comfort and focus.</li>
                            <li><i class="ri-check-double-line"></i> Optimize your workflow with dual monitors, ergonomic keyboards, and wireless peripherals for enhanced productivity and efficiency.</li>
                            <li><i class="ri-check-double-line"></i> Design a clutter-free environment with cable management solutions, desk organizers, and storage solutions to keep your workspace organized and tidy.</li>
                        </ul>
                        <p class="fst-italic">
                            Embrace the freedom of remote work and design a digital workspace that reflects your unique style and enhances your productivity.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('images/tabs-2.jpg') }}" alt="" class="img-fluid">
                       
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-4">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Host Engaging Virtual Meetings with Cutting-Edge Technology</h3>
                        <p>
                            Connect with clients, colleagues, and collaborators from anywhere in the world with immersive virtual meeting solutions.
                        </p>
                        <p class="fst-italic">
                            Leverage the power of virtual meetings to drive collaboration, innovation, and engagement in a remote work environment.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Elevate your presentations and discussions with interactive multimedia features, screen sharing, and live polling.</li>
                            <li><i class="ri-check-double-line"></i> Foster meaningful connections and build rapport with video conferencing tools that offer high-definition video and crystal-clear audio.</li>
                            <li><i class="ri-check-double-line"></i> Enhance collaboration and brainstorming with virtual whiteboards, annotation tools, and breakout rooms for small group discussions.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('images/tabs-4.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Tabs Section -->




      








<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-5 col-md-12 d-flex align-items-stretch">
                <div class="content animate__animated animate__lightSpeedInRight">
                    <h3>Empowering Your Work with Workhobbit</h3>
                    <p>
                        At Workhobbit, we're dedicated to providing solutions that empower individuals and teams to achieve their goals efficiently. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="{{ route('about.us') }}" class="about-btn"><span>About Workhobbit</span> <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box animate__animated animate__lightSpeedInRight" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Efficient Workflows</h4>
                            <p>Streamline your workflows and boost productivity with Workhobbit's intuitive tools.</p>
                        </div>
                        <div class="col-md-6 icon-box animate__animated animate__lightSpeedInRight" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Creative Collaboration</h4>
                            <p>Collaborate seamlessly with your team, whether you're in the office or working remotely.</p>
                        </div>
                        <div class="col-md-6 icon-box animate__animated animate__fadeInTopLeft" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-images"></i>
                            <h4>Visualize Your Progress</h4>
                            <p>Visualize your progress and track your tasks with Workhobbit's interactive features.</p>
                        </div>
                        <div class="col-md-6 icon-box animate__animated animate__fadeInUpBig" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-shield"></i>
                            <h4>Secure Environment</h4>
                            <p>Rest assured that your data is protected within Workhobbit's secure environment.</p>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

        
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-bg">
        <path fill="#000000" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,170.7C384,160,480,160,576,144C672,128,768,96,864,112C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>








 



   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
    <div class="container tech-slideshow">
      {{-- <marquee behavior="scroll" direction="left" scrollamount="19" loop="infinite" > --}}
       <div class="mover-1">
        <img src="{{ asset('images/client-1.png') }}" class="img-fluid" alt="">
        &nbsp;
        &nbsp;
        <img src="{{ asset('images/client-2.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-3.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-4.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-5.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-6.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-7.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/client-8.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/Samsung_logo_blue.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/Google_2015_logo.svg.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/Logo_Traveloka.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/nuro-logo-04135EFBF4-seeklogo.com.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/solera-logo-9A062E9C29-seeklogo.com.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/png-transparent-microsoft-logo-microsoft.png') }}" class="img-fluid" alt="">
        <img src="{{ asset('images/dish.png') }}" class="img-fluid" alt="">
       </div>

{{-- 
    </marquee> --}}
    </div>

    <style>
        .mover-1 {
    white-space: nowrap;
    overflow: hidden;
    position: relative;
    animation: move 15s linear infinite;
}

.mover-1 img {
    display: inline-block;
    margin-right: 20px; /* Adjust spacing between images */
}

.mover-1 {
    animation: move 25s linear infinite alternate; /* Adjust animation duration */
}

@keyframes move {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(calc(-100% - 20px)); /* Adjusted to accommodate margin-right */
    }
}




    </style>

<script>
    // Preload images
    var images = [
        "{{ asset('images/client-1.png') }}",
        "{{ asset('images/client-2.png') }}",
        "{{ asset('images/client-3.png') }}",
        "{{ asset('images/client-4.png') }}",
        "{{ asset('images/client-5.png') }}",
        "{{ asset('images/client-6.png') }}",
        "{{ asset('images/client-7.png') }}",
        "{{ asset('images/client-8.png') }}",
        "{{ asset('images/Samsung_logo_blue.png') }}",
        "{{ asset('images/Google_2015_logo.svg.png') }}",
        "{{ asset('images/Logo_Traveloka.png') }}",
        "{{ asset('images/nuro-logo-04135EFBF4-seeklogo.com.png') }}",
        "{{ asset('images/solera-logo-9A062E9C29-seeklogo.com.png') }}",
        "{{ asset('images/png-transparent-microsoft-logo-microsoft.png') }}",
        "{{ asset('images/dish.png') }}"
        // Add the paths to all your images here
    ];

    function preloadImages(urls) {
        for (var i = 0; i < urls.length; i++) {
            var img = new Image();
            img.src = urls[i];
        }
    }

    preloadImages(images);
</script>


  </section>













<section id="how-it-works" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1"> <!-- Adjusting column width and offset for better alignment -->
                <h2 class="text-center mb-4">How Workhobbit Works</h2>
                <p class="text-center">Workhobbit offers a streamlined process for individuals to join our remote team. Here's a breakdown of how it works:</p>
                <ol>
                    <li><strong>Explore Opportunities:</strong> Browse through our available roles on our website. We offer positions in various fields such as software development, design, marketing, customer support, and more. Find the role that matches your skills and interests.</li>
                    <li><strong>Submit Your Details:</strong> Once you've found a role you're interested in, simply click on the "Apply Now" button to access our application form. Fill out the form with your personal details, including your resume and portfolio if applicable. We may also ask for additional information relevant to the specific role.</li>
                    <li><strong>Review and Approval:</strong> Our dedicated hiring team will carefully review your application. If your qualifications and experience align with the requirements of the role, we'll reach out to you to schedule an interview. During the interview process, we'll discuss your skills, experience, and fit for the position.</li>
                    <li><strong>Join Our Team:</strong> Once you've successfully completed the interview process and we've determined that you're the right fit for the role, congratulations! You'll receive an offer to join our remote team at Workhobbit. We'll provide you with all the necessary onboarding materials and support to ensure a smooth transition.</li>
                </ol>
                <p class="text-center">At Workhobbit, we value diversity, collaboration, and innovation. We believe in providing our team members with meaningful work, opportunities for growth, and a supportive remote work environment. Join us today and take the next step in your career!</p>
            </div>
        </div>
    </div>
</section>




                     


      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title team-meat">
            <h2>Our Team</h2>
            <p>Meet our dedicated team of professionals who are committed to delivering excellence in every project. With their expertise and passion, we strive to exceed your expectations and bring your vision to life.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{ asset('images/team-1.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Data Officer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{ asset('images/team-2.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Project Manager</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{ asset('images/team-3.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>Chief Technology Officer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="{{ asset('images/team-4.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span> Accounting Manager</span>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->


{{-- Testimonials --}}
<section>
    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="col-lg-12 text-center animate__animated animate__bounceIn">
                <h2>TESTIMONIALS</h2>
                <p>See what our clients and employees are saying about Workhobbit.</p>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide animate__animated animate__rotateIn">
                        <div class="testimonial">
                            <div class="cover">
                                <p>"I've been working with Workhobbit for over a year now, and it's been an incredible experience. The remote work setup allows me to balance my personal and professional life effectively." 
                                    <br><br>
                                    <span>Edward Stone, Software Developer</span>
                                </p>
                            </div>
                            <img src="{{ asset('images/oleg-ivanov-aVbR17HLZTg-unsplash.jpg') }}" class="testimonial-img" alt="">
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="swiper-slide animate__animated animate__rotateIn">
                        <div class="testimonial">
                            <div class="cover">
                                <p>"Workhobbit's team is talented, dedicated, and supportive. I've had the opportunity to work on challenging projects and grow both personally and professionally."
                                    <br><br>
                                    <span>Jane Smith, Graphic Designer</span>
                                </p>
                            </div>
                            <img src="{{ asset('images/christina-wocintechchat-com--FG_TDZbN1s-unsplash.jpg') }}" class="testimonial-img" alt="">
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="swiper-slide animate__animated animate__rotateIn">
                        <div class="testimonial">
                            <div class="cover">
                                <p>"As a student balancing coursework and remote work, I'm grateful for the support and flexibility offered by Workhobbit's team. Their understanding of my academic commitments and willingness to accommodate my schedule have been instrumental in my success. Despite the demands of juggling studies and work, I've been able to thrive academically and professionally thanks to their encouragement and guidance."
                                    <br><br>
                                    <span>Scott Emons, Cybersecurity Analyst</span>
                                </p>
                            </div>
                            <img src="{{ asset('images/magnus-andersson-KAzgxInZXMo-unsplash.jpg') }}" class="testimonial-img" alt="">
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide animate__animated animate__rotateIn">
                        <div class="testimonial">
                            <div class="cover">
                                <p>"As a nursing mom working from home, Workhobbit's team has been incredibly understanding, accommodating, and supportive. Despite the challenges of balancing work and motherhood, I've been able to thrive professionally with their assistance. Their dedication to providing a flexible and nurturing work environment has allowed me to excel in both my career and my role as a mother."
                                    <br><br>
                                    <span>Ashley Beck, Virtual Assistant & Nursing Mom</span>
                                </p>
                            </div>
                            <img src="{{ asset('images/good-faces-OnxkPklQ4YY-unsplash.jpg') }}" class="testimonial-img" alt="">
                        </div>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="swiper-slide animate__animated animate__rotateIn">
                        <div class="testimonial">
                            <div class="cover">
                                <p>"Being part of the Workhobbit community has been an enriching experience. The supportive environment and collaborative culture have empowered me to achieve my professional goals while maintaining a healthy work-life balance. Workhobbit's commitment to fostering personal growth and well-being has been instrumental in my success."
                                    <br><br>
                                    <span>Emily Parker, Digital Marketing Specialist</span>
                                </p>
                                
                            </div>
                            <img src="{{ asset('images/christiann-koepke-uyzMBs2KWCU-unsplash.jpg') }}" class="testimonial-img" alt="">
                        </div>
                    </div>

                    <!-- Testimonial 6 -->
                    <div class="swiper-slide animate__animated animate__rotateIn">
                        <div class="testimonial">
                            <div class="cover">
                                <p>"As a client of Workhobbit, I've been consistently impressed by the quality of work and level of professionalism. They always go above and beyond to deliver exceptional results."
                                    <br><br>
                                    <span>Ronald Howell, Fullstack Web Developer</span>
                                </p>
                            </div>
                            <img src="{{ asset('images/brian-wangenheim-2pRimVfww38-unsplash.jpg') }}" class="testimonial-img" alt="">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

  


      
  


















<section class="subscribe-section">
    {{-- Subcribe to our newsletter --}}
    <div class="subscribe">
        <h5>Subscribe To Our Newsletter</h5>
        <form method="POST" action="{{ route('subscribe') }}">
            @csrf
            <input type="email" name="email" placeholder="Your e-mail" class="subscribe-input" required>
            <br>
            <button type="submit" class="submit-btn">SUBSCRIBE</button>
        </form>
    </div>
</section>


@endsection
  




