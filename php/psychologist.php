<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
  <title>Psychologist</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/info.css" media="screen" />
  

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
  <!-- Start header -->
  <header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="../php/index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">E-Checkup</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/commontestquestion_quiz.php">Common Quiz
                              </a>
                              <a class="dropdown-item" href="../php/Echeckup.php">Individual Quiz</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">Meditation</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/self_meditation.php">self Motivation
                              </a>
                              <a class="dropdown-item" href="../php/meditation_webinar.php">TED Talks</a>
                              <a class="dropdown-item" href="../php/yoga_meditation.php">Yoga</a>
                            </div>
                        </li>
                        <li><a class="nav-link" href="../php/consultancy.php">Consultancy</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">Information</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/mentalhealth.php">Mental Health</a>
                              <a class="dropdown-item" href="../php/psychology.php">Psychology</a>
                              <a class="dropdown-item" href="../php/psychotherapy.php">Psychotherapy</a>
                              <a class="dropdown-item active" href="../php/psychologist.php">Psychologist</a>
                              <a class="dropdown-item" href="../php/psychiatrist.php">Psychiatrist</a>
                            </div>
                        </li>
                        <li><a class="nav-link" href="../php/News.php">News</a></li>
                        <li><a class="nav-link" href="../php/about.php">About</a></li>
                        <?php
                        session_start();
                        if(isset($_SESSION["email"]))
                        {
                        ?>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown"><?php  if (isset($_SESSION['name'])) ?>
							
										<strong>
											<?php echo $_SESSION['name']; ?>
										</strong></a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/user_common_dashboard.php">Dashboard</a>
                              <a class="dropdown-item" href="../php/Profile_update.php">Edit Profile</a>
                              <a class="dropdown-item" href="../php/logout.php">Logout</a>
                            </div>
                        </li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li><a class="nav-link" href="../php/login.php">Login</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
  </header>
  <!-- End header -->
  
  </br>
  </br>
  <h2>Psychologist</h2>
  </br>
  <img src="../images/img/psychologist.jpg" alt="psychologist" class="img" width="350" height="250">
  <p>A psychologist is a person who studies normal and abnormal mental states, perceptual, cognitive, emotional, and
    social processes and behavior by experimenting with, and observing, interpreting, and recording how individuals
    relate to one another and to their environments.</p>
  </br>
  <h2>Prescription privileges</h2>
  </br>
  <p>Psychologists in the United States campaigned for legislative changes to enable specially trained psychologists to
    prescribe psychotropic medications. Legislation in Idaho, Iowa, Louisiana, New Mexico, and Illinois has granted
    those who complete an additional master's degree program in psychopharmacology permission to prescribe medications
    for mental and emotional disorders. As of 2019, Louisiana is the only state where the licensing and regulation of
    the practice of psychology by medical psychologists (MPs) is regulated by a medical board (the Louisiana State Board
    of Medical Examiners) rather than a board of psychologists. While other states have pursued prescriptive privileges,
    they have not succeeded. Similar legislation in the states of Hawaii and Oregon passed through their respective
    legislative bodies, but in each case the legislation was vetoed by the state's governor.
    </br>
    </br>
    In 1989, the U.S Department of Defense was directed to create the Psychopharmacology Demonstration Project (PDP). By
    1997, ten psychologists were trained in psychopharmacology and granted the ability to prescribe psychiatric
    medications.</p>
  </br>
  <h2>Licensure</h2>
  </br>
  <p>The practice of clinical psychology requires a license in the United States and Canada. Although each of the U.S.
    states is different in terms of requirements and licenses (see and for examples), there are three common
    requirements:
    </br>
    </br>
    Graduation from an accredited school with the appropriate degree
    Completion of supervised clinical experience
    Passing a written and/or oral examination
    All U.S. state, and Canada provincial, licensing boards are members of the Association of State and Provincial
    Psychology Boards (ASPPB) which created and maintains the Examination for Professional Practice in Psychology
    (EPPP). Many states require other examinations in addition to the EPPP, such as a jurisprudence (i.e. mental health
    law) examination or an oral examination. Most states also require a certain number of continuing education
    credits per year in order to renew a license. Licensees can obtain this through various means, such as taking
    audited classes and attending approved workshops.
    </br>
    </br>
    There are professions whose scope of practice overlaps with the practice of psychology (particularly with respect to
    providing psychotherapy) and for which a license is required.</p>

  <h2>Types</h2>
  </br>
  <h3>Aviation Psychologists</h3>
  <p>These psychologists study the behavior of pilots and other flight crew members. Aviation psychologists also perform
    research on airline safety, develop new training equipment, and help select suitable employees.
    </br>
    </br>
    For example, an aviation psychologist might select or even develop psychological tests used to screen applicants for
    elite pilot positions. Because of the highly specialized and delicate nature of the job, it is essential to choose
    candidates who are healthy, stable, and capable of coping with intense pressure. Aviation psychologists utilize
    their knowledge of psychology to ensure that only the best people are chosen for these critical roles.
    </br>
    </br>
    Aviation psychologists might also work with other professionals, including engineers and human factors
    psychologists, to design different components of airplanes such as the cabins or flight decks. By taking human
    psychology into consideration during the design process, aviation psychologists can help ensure that these products
    are developed with perception, attention, memory, and other capabilities in mind.</p>
  </br>
  <h3>Biopsychologists</h3>
  </br>
  <p>These psychologists are also sometimes called biological psychologists or physiological psychologists. They study
    and perform research on the brain and behavior. By examining the neural bases of behavior, biopsychologists are able
    to understand different biological factors that might impact how people think, feel, and act.
    </br>
    </br>

    This type of psychologist might also investigate how brain disease and injury impact behavior. By better
    understanding how people are affected by such injuries and diseases, researchers can also find new ways of
    preventing, treating, and managing serious brain illnesses and trauma.</p>
  </br>
  <h3>Clinical Psychologists</h3>
  </br>
  <p>Clinical psychologists assess, diagnose and treat individuals experiencing psychological distress and mental
    illness. They also perform psychotherapy and develop treatment plans.
    </br>
    </br>

    Clinical psychologists often work in hospitals, mental health clinics, and private practice. They are trained in a
    variety of treatment techniques but may specialize in treating certain disorders or working with certain
    populations. For example, a clinical psychologist might specialize in an area such as substance abuse treatment,
    child mental health, adult mental health, or geriatric mental health.
    </br>
    </br>

    While clinical psychologists often work in medical settings, they are not physicians and in most cases cannot
    prescribe medications.</p>

  <h3>Cognitive Psychologists</h3>
  <p>Cognitive psychologists investigate how people think, including topics such as decision-making and problem-solving.
    This type of psychologist is interested in how the brain processes, learns, stores, recognizes, and utilizes
    information.

    </br>
    </br>
    Cognitive psychologists may work in a variety of settings, including universities, research centers, rehabilitation
    facilities, hospitals, government agencies, and in private practice. Professionals in this field often perform a
    range of duties such as conducting research and working with patients.
    </br>
    </br>
    As with other areas of psychology, cognitive psychologists often choose to specialize in a particular area such as
    memory, language development, attention, problem-solving, or learning disabilities.</p>
  </br>
  <h3>Community Psychologists</h3>
  </br>
  <p>This type of psychologist conducts research on community health issues. They also seek to educate the community and
    develop prevention programs. These professionals are focused on helping lead positive changes at both the individual
    and community levels.
    </br>
    </br>
    You may find community psychologists working in a range of settings at universities, government agencies, community
    organizations, and private businesses as professors, consultants, policy advisors, program directors, and
    researchers.
    </br>
    </br>
    Research in this area tends to be very action-oriented and focuses on developing real-world solutions that can
    immediately be put into practice. Community psychologists work to address social problems, promote health and
    wellness, and enact policies that improve people's lives.</p>
  </br>
  <h3>Comparative Psychologists</h3>
  </br>
  <p>Comparative psychologists study the behavior of different species, particularly how animal and human behavior
    differs. Why study animals? Because while there are obviously major differences, it is assumed that some things may
    hold true for all species.
    </br>
    </br>
    Therefore studying the behaviors and responses of animals such as rats and dogs can provide insights into human
    behaviors as well. Such observations have proven important throughout much of psychology's history.
    </br>
    </br>
    Thorndike's work with cats, Pavlov's work with dogs, and Skinner's work with pigeons are just some of the examples
    of comparative psychology in which animal behavior can provide insights into human behavior.</p>
  </br>
  <h3>Consumer Psychologists</h3>
  </br>
  <p>Also known as marketing psychologists, consumer psychologists research consumer behavior and develop marketing
    strategies to promote businesses. This type of psychologist is involved in helping businesses better understand what
    makes consumers purchase products and services. They research how buyers respond to marketing messages, analyze
    decision-making strategies, and investigate the role that emotions play in purchasing choices.
    </br>
    </br>
    These professionals help businesses develop marketing messages, identify target audiences, develop products that
    appeal to specific consumers, and learn about how attitudes toward brands and products form and change. They
    accomplish these tasks through the use of market research surveys, experiments, naturalistic observations, and
    consumer focus groups.</p>

     <!-- Start Footer -->
  <footer class="footer-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="../php/index.php">Mental Health Lab!</a> Design By : <a href="epsycare16@gmail.com">Psycare Solution corp.</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
    <!-- ALL JS FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script>
    <script src="../js/slider-index.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/TweenMax.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>