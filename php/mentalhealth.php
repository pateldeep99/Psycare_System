<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
     <title>Mental Health</title>
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
                              <a class="dropdown-item active" href="../php/mentalhealth.php">Mental Health</a>
                              <a class="dropdown-item" href="../php/psychology.php">Psychology</a>
                              <a class="dropdown-item" href="../php/psychotherapy.php">Psychotherapy</a>
                              <a class="dropdown-item" href="../php/psychologist.php">Psychologist</a>
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
  </br>
  </br>
  <h1>What is Mental health?</h1>
  </br>
  <img src="../images/img/mentalhealth.jpg" alt="mentalhealth" class="img" width="500" height="300">
  <p>Mental health, defined by the World Health Organization (WHO), is "a state of well-being in which the individual
    realizes his or her own abilities, can cope with the normal stresses of life, can work productively and fruitfully,
    and is able to make a contribution to his or her community". According to the WHO, mental health includes
    "subjective well-being, perceived self-efficacy, autonomy, competence, intergenerational dependence, and
    self-actualization of one's intellectual and emotional potential, among others". From the perspectives of positive
    psychology or of holism, mental health may include an individual's ability to enjoy life and to create a balance
    between life activities and efforts to achieve psychological resilience. Cultural differences, subjective
    assessments, and competing professional theories all affect how one defines "mental health".</p>
  </br>
  <h2>Distinguishing mental health from mental illness</h2>
  </br>
  <p>According to the U.K. Surgeon Journal (1999), mental health is the successful performance of the mental function
    resulting in productive activities, fulfilling relationships with other people, and providing the ability to adapt
    to change and cope with adversity. The term mental illness refers collectively to all diagnosable mental
    disorders—health conditions characterized by alterations in thinking, mood, or behavior associated with distress or
    impaired functioning. Mental health has long been defined as the absence of psychopathologies, such as depression
    and anxiety. The absence of mental illness, however, is a minimal outcome from a psychological perspective on
    lifespan development Corey M Keyes has created a two continua model of mental illness and health which holds that
    both are related, but distinct dimensions: one continuum indicates the presence or absence of mental health, the
    other the presence or absence of mental illness.For example, people with optimal mental health can also have a
    mental illness, and people who have no mental illness can also have poor mental health. Indeed, the World Health
    Organization distinguishes mental health from mental illness: "{mental health}... a state of complete physical,
    mental and social well-being and not merely the absence of disease or infirmity".
    </br>
    </br>
    Marie Jahoda described six major, fundamental categories that can be used to categorize mentally healthy
    individuals. These include a positive attitude towards the self, personal growth, integration, autonomy, a true
    perception of reality, and environmental mastery, which include adaptability and healthy interpersonal
    relationships.
    </br>
    </br>
    Mental health problems may arise due to stress, loneliness, depression, anxiety, relationship problems, death of a
    loved one, suicidal thoughts, grief, addiction, ADHD, self-harm, various mood disorders, or other mental illnesses
    of varying degrees, as well as learning disabilities. Therapists, psychiatrists, psychologists, social workers,
    nurse practitioners, or family physicians can help manage mental illness with treatments such as therapy,
    counseling, or medication.</p>
  </br>
  <h2>History</h2>
  </br>
  <p>In the mid-19th century, William Sweetser was the first to coin the term mental hygiene, which can be seen as the
    precursor to contemporary approaches to work on promoting positive mental health.[13] Isaac Ray, the fourth
    president[15] of the American Psychiatric Association and one of its founders, further defined mental hygiene as
    "the art of preserving the mind against all incidents and influences calculated to deteriorate its qualities, impair
    its energies, or derange its movements".
    </br>
    </br>
    In American history, mentally ill patients were thought to be religiously punished. This response persisted through
    the 1700s, along with inhumane confinement and stigmatization of such individuals. Dorothea Dix (1802–1887) was an
    important figure in the development of the "mental hygiene" movement. Dix was a school teacher who endeavored to
    help people with mental disorders and to expose the sub-standard conditions into which they were put. This became
    known as the "mental hygiene movement". Before this movement, it was not uncommon that people affected by mental
    illness would be considerably neglected, often left alone in deplorable conditions without sufficient clothing. From
    1840-1880, she won over the support of the federal government to set up over 30 state psychiatric hospitals;
    however, they were understaffed, under-resourced, and were accused of violating human rights.
    </br>
    </br>
    Emil Kraepelin in 1896 developed the taxonomy of mental disorders which has dominated the field for nearly 80 years.
    Later, the proposed disease model of abnormality was subjected to analysis and considered normality to be relative
    to the physical, geographical and cultural aspects of the defining group.
    </br>
    </br>
    At the beginning of the 20th century, Clifford Beers founded "Mental Health America – National Committee for Mental
    Hygiene", after publication of his accounts as a patient in several lunatic asylums, A Mind That Found Itself, in
    1908 and opened the first outpatient mental health clinic in the United States.
    </br>
    </br>
    The mental hygiene movement, similar to the social hygiene movement, had at times been associated with advocating
    eugenics and sterilisation of those considered too mentally deficient to be assisted into productive work and
    contented family life. In the post-WWII years, references to mental hygiene were gradually replaced by the term
    'mental health' due to its positive aspect that evolves from the treatment of illness to preventive and promotive
    areas of healthcare.</p>
  </br>
  <h2>Factors affecting mental health</h2>
  </br>
  <h3>Economic factors</h3>
  </br>
  <img src="../images/img/factors.png" alt="factors" class="img" width="500" height="400">
  <p>Unemployment has been shown to hurt an individual's emotional well-being, self-esteem, and more broadly their
    mental health. Increasing unemployment has been shown to have a significant impact on mental health, predominantly
    depressive disorders. This is an important consideration when reviewing the triggers for mental health disorders in
    any population survey.

    </br>
    </br>
    The prevalence of mental illness is higher in more unequal rich countries
    Emotional mental disorders are a leading cause of disabilities worldwide. Investigating the degree and severity of
    untreated emotional mental disorders throughout the world is a top priority of the World Mental Health (WMH) survey
    initiative, which was created in 1998 by the World Health Organization (WHO). "Neuropsychiatric disorders are the
    leading causes of disability worldwide, accounting for 37% of all healthy life years lost through disease.These
    disorders are most destructive to low and middle-income countries due to their inability to provide their citizens
    with proper aid. Despite modern treatment and rehabilitation for emotional mental health disorders, "even
    economically advantaged societies have competing priorities and budgetary constraints".
    </br>
    </br>
    The World Mental Health survey initiative has suggested a plan for countries to redesign their mental health care
    systems to best allocate resources. "A first step is documentation of services being used and the extent and nature
    of unmet treatment needs. A second step could be to do a cross-national comparison of service use and unmet needs in
    countries with different mental health care systems. Such comparisons can help to uncover optimum financing,
    national policies, and delivery systems for mental health care."[This quote needs a citation]
    </br>
    </br>
    Knowledge of how to provide effective emotional mental health care has become imperative worldwide. Unfortunately,
    most countries have insufficient data to guide decisions, absent or competing visions for resources, and
    near-constant pressures to cut insurance and entitlements. WMH surveys were done in Africa (Nigeria, South Africa),
    the Americas (Colombia, Mexico, United States), Asia and the Pacific (Japan, New Zealand, Beijing and Shanghai in
    the People's Republic of China), Europe (Belgium, France, Germany, Italy, Netherlands, Spain, Ukraine), and the
    middle east (Israel, Lebanon). Countries were classified with World Bank criteria as low-income (Nigeria),
    lower-middle-income (China, Colombia, South Africa, Ukraine), higher middle-income (Lebanon, Mexico), and
    high-income.
    </br>
    </br>
    The coordinated surveys on emotional mental health disorders, their severity, and treatments were implemented in the
    aforementioned countries. These surveys assessed the frequency, types, and adequacy of mental health service use in
    17 countries in which WMH surveys are complete. The WMH also examined unmet needs for treatment in strata defined by
    the seriousness of mental disorders. Their research showed that "the number of respondents using any 12-month mental
    health service was generally lower in developing than in developed countries, and the proportion receiving services
    tended to correspond to countries' percentages of gross domestic product spent on health care". "High levels of
    unmet need worldwide are not surprising, since WHO Project ATLAS' findings of much lower mental health expenditures
    than was suggested by the magnitude of burdens from mental illnesses.
  </p>
  </br>
  <h3>Stress</h3>
  </br>
  <p>The Centre for Addiction and Mental Health discuss how a certain amount of stress is a normal part of daily life.
    Small doses of stress help people meet deadlines, be prepared for presentations, be productive and arrive on time
    for important events. However, long-term stress can become harmful. When stress becomes overwhelming and prolonged,
    the risks for mental health problems and medical problems increase."</p>
  </br>

  <h2>Mental health laws and public health policies</h2>
  <p>There are many factors that influence mental health including:

    Mental illness, disability, and suicide are ultimately the result of a combination of biology, environment, and
    access
    to and utilization of mental health treatment.
    </br>
    </br>
    Public health policies can influence access and utilization, which subsequently may improve mental health and help
    to
    progress the negative consequences of depression and its associated disability.
    </br>
    </br>
    Emotional mental illnesses should be a particular concern in the United States since the U.S. has the highest annual
    prevalence rates (26 percent) for mental illnesses among a comparison of 14 developing and developed countries.[118]
    While approximately 80 percent of all people in the United States with a mental disorder eventually receive some
    form
    of treatment, on the average persons do not access care until nearly a decade following the development of their
    illness, and less than one-third of people who seek help receive minimally adequate care. The government offers
    everyone programs and services, but veterans receive the most help, there is certain eligibility criteria that has
    to
    be met.</p>
  </br>
  <h2>Policies</h2>
  </br>
  <p>The mental health policies in the United States have experienced four major reforms: the American asylum movement
    led
    by Dorothea Dix in 1843; the "mental hygiene" movement inspired by Clifford Beers in 1908; the
    deinstitutionalization
    started by Action for Mental Health in 1961; and the community support movement called for by The CMCH Act
    Amendments
    of 1975.
    </br>
    </br>
    In 1843, Dorothea Dix submitted a Memorial to the Legislature of Massachusetts, describing the abusive treatment and
    horrible conditions received by the mentally ill patients in jails, cages, and almshouses. She revealed in her
    Memorial: "I proceed, gentlemen, briefly to call your attention to the present state of insane persons confined
    within
    this Commonwealth, in cages, closets, cellars, stalls, pens! Chained, naked, beaten with rods, and lashed into
    obedience...." Many asylums were built in that period, with high fences or walls separating the patients from other
    community members and strict rules regarding the entrance and exit. In those asylums, traditional treatments were
    well
    implemented: drugs were not used as a cure for a disease, but a way to reset equilibrium in a person's body, along
    with other essential elements such as healthy diets, fresh air, middle class culture, and the visits by their
    neighboring residents.[citation needed] In 1866, a recommendation came to the New York State Legislature to
    establish
    a separate asylum for chronic mentally ill patients. Some hospitals placed the chronic patients into separate wings
    or
    wards, or different buildings.
    </br>
    </br>
    In A Mind That Found Itself (1908) Clifford Whittingham Beers described the humiliating treatment he received and
    the
    deplorable conditions in the mental hospital. One year later, the National Committee for Mental Hygiene (NCMH) was
    founded by a small group of reform-minded scholars and scientists – including Beers himself – which marked the
    beginning of the "mental hygiene" movement. The movement emphasized the importance of childhood prevention. World
    War
    I catalyzed this idea with an additional emphasis on the impact of maladjustment, which convinced the hygienists
    that
    prevention was the only practical approach to handle mental health issues. However, prevention was not successful,
    especially for chronic illness; the condemnable conditions in the hospitals were even more prevalent, especially
    under
    the pressure of the increasing number of chronically ill and the influence of the depression.
    </br>
    </br>
    In 1961, the Joint Commission on Mental Health published a report called Action for Mental Health, whose goal was
    for
    community clinic care to take on the burden of prevention and early intervention of the mental illness, therefore to
    leave space in the hospitals for severe and chronic patients. The court started to rule in favor of the patients'
    will
    on whether they should be forced to treatment. By 1977, 650 community mental health centers were built to cover 43
    percent of the population and serve 1.9 million individuals a year, and the lengths of treatment decreased from 6
    months to only 23 days. However, issues still existed. Due to inflation, especially in the 1970s, the community
    nursing homes received less money to support the care and treatment provided. Fewer than half of the planned centers
    were created, and new methods did not fully replace the old approaches to carry out its full capacity of treating
    power. Besides, the community helping system was not fully established to support the patients' housing, vocational
    opportunities, income supports, and other benefits. Many patients returned to welfare and criminal justice
    institutions, and more became homeless. The movement of deinstitutionalization was facing great challenges.
    </br>
    </br>
    After realizing that simply changing the location of mental health care from the state hospitals to nursing houses
    was
    insufficient to implement the idea of deinstitutionalization, the National Institute of Mental Health in 1975
    created
    the Community Support Program (CSP) to provide funds for communities to set up a comprehensive mental health service
    and supports to help the mentally ill patients integrate successfully in the society. The program stressed the
    importance of other supports in addition to medical care, including housing, living expenses, employment,
    transportation, and education; and set up new national priority for people with serious mental disorders. In
    addition,
    the Congress enacted the Mental Health Systems Act of 1980 to prioritize the service to the mentally ill and
    emphasize
    the expansion of services beyond just clinical care alone. Later in the 1980s, under the influence from the Congress
    and the Supreme Court, many programs started to help the patients regain their benefits. A new Medicaid service was
    also established to serve people who were diagnosed with a "chronic mental illness." People who were temporally
    hospitalized were also provided aid and care and a pre-release program was created to enable people to apply for
    reinstatement prior to discharge. Not until 1990, around 35 years after the start of the deinstitutionalization, did
    the first state hospital begin to close. The number of hospitals dropped from around 300 by over 40 in the 1990s,
    and
    finally a Report on Mental Health showed the efficacy of mental health treatment, giving a range of treatments
    available for patients to choose.
    </br>
    </br>
    However, several critics maintain that deinstitutionalization has, from a mental health point of view, been a
    thoroughgoing failure. The seriously mentally ill are either homeless, or in prison; in either case (especially the
    latter), they are getting little or no mental health care. This failure is attributed to a number of reasons over
    which there is some degree of contention, although there is general agreement that community support programs have
    been ineffective at best, due to a lack of funding.
    </br>
    </br>
    The 2011 National Prevention Strategy included mental and emotional well-being, with recommendations including
    better
    parenting and early intervention programs, which increase the likelihood of prevention programs being included in
    future US mental health policies.[87][page needed] The NIMH is researching only suicide and HIV/AIDS prevention, but
    the National Prevention Strategy could lead to it focusing more broadly on longitudinal prevention studies.
    </br>
    </br>
    In 2013, United States Representative Tim Murphy introduced the Helping Families in Mental Health Crisis Act,
    HR2646.
    The bipartisan bill went through substantial revision and was reintroduced in 2015 by Murphy and Congresswoman Eddie
    Bernice Johnson. In November 2015, it passed the Health Subcommittee by an 18–12 vote.</p>

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