<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
     
  <title>Psychiatrist</title>
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
                              <a class="dropdown-item" href="../php/psychologist.php">Psychologist</a>
                              <a class="dropdown-item active" href="../php/psychiatrist.php">Psychiatrist</a>
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
  </br>
  <h1>Psychiatrist</h1>
  </br>
  <img src="../images/img/psychiatrist.jpg" alt="Psychiatrist" class="img" width="300" height="200">
  <p>A psychiatrist is a physician who specializes in psychiatry, the branch of medicine devoted to the diagnosis,
    prevention, study, and treatment of mental disorders. Psychiatrists are medical doctors and evaluate patients to
    determine whether their symptoms are the result of a physical illness, a combination of physical and mental ailments
    or strictly mental issues. A psychiatrist usually works within a multi-disciplinary team, which may comprise
    clinical psychologists, social workers, occupational therapists, and nursing staff. Psychiatrists have broad
    training in a bio-psycho-social approach to assessment and management of mental illness.
    </br>
    </br>
    As part of the clinical assessment process, psychiatrists may employ a mental status examination; a physical
    examination; brain imaging such as a computerized tomography (CT), magnetic resonance imaging (MRI), or positron
    emission tomography (PET) scan; and blood testing. Psychiatrists prescribe medicine, and may also use psychotherapy,
    although they could also primarily concentrate on medical management and refer to a psychologist or other
    specialized therapist for weekly to bi-monthly psychotherapy.</p>
  </br>
  <h2>Diagnosing Patients</h2>
  </br>
  <p>Because they are physicians, psychiatrists can order or perform a full range of medical laboratory and
    psychological tests which, combined with discussions with patients, help provide a picture of a patient's physical
    and mental state. Their education and clinical training equip them to understand the complex relationship between
    emotional and other medical illnesses and the relationships with genetics and family history, to evaluate medical
    and psychological data, to make a diagnosis, and to work with patients to develop treatment plans.
    </br>
    </br>
    Specific diagnoses are based on criteria established in APA's Diagnostic and Statistical Manual of Mental
    Disorders(DSM-5), which contains descriptions, symptoms and other criteria for diagnosing mental disorders.</p>
  </br>
  <h2>What Treatments Do Psychiatrists Use?</h2>
  </br>
  <p>Psychiatrists use a variety of treatments – including various forms of psychotherapy, medications, psychosocial
    interventions and other treatments (such as electroconvulsive therapy or ECT), depending on the needs of each
    patient.
    </br>
    </br>
    Psychotherapy, sometimes called talk therapy, is a treatment that involves a talking relationship between a
    therapist and patient. It can be used to treat a broad variety of mental disorders and emotional difficulties. The
    goal of psychotherapy is to eliminate or control disabling or troubling symptoms so the patient can function better.
    Depending on the extent of the problem, treatment may take just a few sessions over a week or two or may take many
    sessions over a period of years. Psychotherapy can be done individually, as a couple, with a family, or in a group.
    </br>
    </br>
    There are many forms of psychotherapy. There are psychotherapies that help patients change behaviors or thought
    patterns, psychotherapies that help patients explore the effect of past relationships and experiences on present
    behaviors, and psychotherapies that are tailored to help solve other problems in specific ways. Cognitive behavior
    therapy is a goal-oriented therapy focusing on problem solving. Psychoanalysis is an intensive form of individual
    psychotherapy which requires frequent sessions over several years.
    </br>
    </br>
    Most medications are used by psychiatrists in much the same way that medications are used to treat high blood
    pressure or diabetes. After completing thorough evaluations, psychiatrists can prescribe medications to help treat
    mental disorders. While the precise mechanism of action of psychiatric medications is not fully understood, they may
    beneficially modulate chemical signaling and communication within the brain, which may reduce some symptoms of
    psychiatric disorders. Patients on long-term medication treatment will need to meet with their psychiatrist
    periodically to monitor the effectiveness of the medication and any potential side effects.</p>
  </br>
  <h2>What Is the Difference Between a Psychiatrist and Psychologist?</h2>
  </br>
  <p>A psychiatrist is a medical doctor (completed medical school and residency) with special training in psychiatry. A
    psychiatrist is able to conduct psychotherapy and prescribe medications and other medical treatments.
    </br>
    </br>
    A psychologist usually has an advanced degree, most commonly in clinical psychology, and often has extensive
    training in research or clinical practice. Psychologists treat mental disorders with psychotherapy and some
    specialize in psychological testing and evaluation.</p>

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