<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Psychotherapy</title>
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
                              <a class="dropdown-item active" href="../php/psychotherapy.php">Psychotherapy</a>
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
  <h2>Psychotherapy</h2>
  </br>
  <img src="../images/img/psychotherapy.jpg" alt="psychotherapy" class="img" width="250" height="200">
  <p>Psychotherapy (also psychological therapy or talking therapy) is the use of psychological methods, particularly
    when based on regular personal interaction with adults, to help a person change behavior and overcome problems in
    desired ways. Psychotherapy aims to improve an individual's well-being and mental health, to resolve or mitigate
    troublesome behaviors, beliefs, compulsions, thoughts, or emotions, and to improve relationships and social skills.
    There is also a range of psychotherapies designed for children and adolescents, which typically involve play, such
    as sandplay. Certain psychotherapies are considered evidence-based for treating some diagnosed mental disorders.
    Others have been criticized as pseudoscience.
    </br>
    </br>
    There are over a thousand different psychotherapy techniques, some being minor variations, while others are based on
    very different conceptions of psychology, ethics (how to behave professionally), or techniques. Most involve
    one-to-one sessions, between the client and therapist, but some are conducted with groups, including families.
    </br>
    </br>
    Psychotherapists may be mental health professionals such as psychiatrists, psychologists, mental health nurses,
    clinical social workers, marriage and family therapists, or professional counselors. Psychotherapists may also come
    from a variety of other backgrounds, and depending on the jurisdiction may be legally regulated, voluntarily
    regulated or unregulated (and the term itself may be protected or not).</p>
  </br>
  <h2>Definitions</h2>
  </br>
  <p>The term psychotherapy is derived from Ancient Greek psyche (ψυχή meaning "breath; spirit; soul") and therapeia
    (θεραπεία "healing; medical treatment"). The Oxford English Dictionary defines it now as "The treatment of disorders
    of the mind or personality by psychological methods...", however, in earlier use it denoted the treatment of disease
    through hypnotic suggestion.
    </br>
    </br>
    The American Psychological Association adopted a resolution on the effectiveness of psychotherapy in 2012 based on a
    definition developed by John C. Norcross: "Psychotherapy is the informed and intentional application of clinical
    methods and interpersonal stances derived from established psychological principles for the purpose of assisting
    people to modify their behaviors, cognitions, emotions, and/or other personal characteristics in directions that the
    participants deem desirable". Influential editions of a work by psychiatrist Jerome Frank defined psychotherapy as a
    healing relationship using socially authorized methods in a series of contacts primarily involving words, acts and
    rituals—regarded as forms of persuasion and rhetoric.
    </br>
    </br>
    Some definitions of counseling overlap with psychotherapy (particularly in non-directive client-centered
    approaches), or counseling may refer to guidance for everyday problems in specific areas, typically for shorter
    durations with a less medical or 'professional' focus. Somatotherapy refers to the use of physical changes as
    injuries and illnesses, and sociotherapy to the use of a person's social environment to effect therapeutic change.
    Psychotherapy may address spirituality as a significant part of someone's mental / psychological life, and some
    forms are derived from spiritual philosophies, but practices based on treating the spiritual as a separate dimension
    are not necessarily considered as traditional or 'legitimate' forms of psychotherapy.
    </br>
    </br>
    Historically, psychotherapy has sometimes meant "interpretative" (i.e. Freudian) methods, namely psychoanalysis, in
    contrast with other methods to treat psychiatric disorders such as behavior modification.
    </br>
    </br>
    Psychotherapy is often dubbed as a "talking therapy", particularly for a general audience,[ though not all forms of
    psychotherapy rely on verbal communication.[ Children or adults who do not engage in verbal communication (or not in
    the usual way) are not excluded from psychotherapy; indeed some types are designed for such cases.</p>
  </br>
  <h2>Overview</h2>
  </br>
  <p>There are hundreds of psychotherapy approaches or schools of thought. By 1980 there were more than 250;[50] by 1996
    more than 450; and at the start of the 21st century there were over a thousand different named psychotherapies—some
    being minor variations while others are based on very different conceptions of psychology, ethics (how to live) or
    technique. In practice therapy is often not of one pure type but draws from a number of perspectives and
    schools—known as an integrative or eclectic approach. The importance of the therapeutic relationship, also known as
    therapeutic alliance, between client and therapist is often regarded as crucial to psychotherapy. Common factors
    theory addresses this and other core aspects thought to be responsible for effective psychotherapy. Sigmund Freud
    (1856–1939), a Viennese neurologist who studied with Jean-Martin Charcot in 1885, is often considered the father of
    modern psychotherapy. His methods included analyzing his patient's dreams in search of important hidden insights
    into their unconscious minds. Other major elements of his methods, which changed throughout the years, included
    identification of childhood sexuality, the role of anxiety as a manifestation of inner conflict, the differentiation
    of parts of the psyche (id, ego, superego), transference and countertransference (the patient's projections onto the
    therapist, and the therapist's emotional responses to that). Some of his concepts were too broad to be amenable to
    empirical testing and invalidation, and he was critiqued for this by Jaspers. Numerous major figures elaborated and
    refined Freud's therapeutic techniques including Melanie Klein, Donald Winnicott, and others. Since the 1960s,
    however, the use of Freudian-based analysis for the treatment of mental disorders has declined substantially.
    Different types of psychotherapy have been created along with the advent of clinical trials to test them
    scientifically. These incorporate subjective treatments (after Beck), behavioral treatments (after Skinner and
    Wolpe) and additional time-constrained and centered structures, for example, interpersonal psychotherapy. In youth
    issue and in schizophrenia, the systems of family treatment hold esteem. A portion of the thoughts emerging from
    therapy are presently pervasive and some are a piece of the tool set of ordinary clinical practice. They are not
    just medications, they additionally help to understand complex conduct.
    </br>
    </br>
    Therapy may address specific forms of diagnosable mental illness, or everyday problems in managing or maintaining
    interpersonal relationships or meeting personal goals. A course of therapy may happen before, during or after
    pharmacotherapy (e.g. taking psychiatric medication).
    </br>
    </br>
    Psychotherapies are categorized in several different ways. A distinction can be made between those based on a
    medical model and those based on a humanistic model. In the medical model, the client is seen as unwell and the
    therapist employs their skill to help the client back to health. The extensive use of the DSM-IV, the diagnostic and
    statistical manual of mental disorders in the United States is an example of a medically exclusive model. The
    humanistic or non-medical model in contrast strives to depathologise the human condition. The therapist attempts to
    create a relational environment conducive to experiential learning and help build the client's confidence in their
    own natural process resulting in a deeper understanding of themselves. The therapist may see themselves as a
    facilitator/helper.
    </br>
    </br>
    Another distinction is between individual one-to-one therapy sessions, and group psychotherapy, including couples
    therapy and family therapy.
    </br>
    </br>
    Therapies are sometimes classified according to their duration; a small number of sessions over a few weeks or
    months may be classified as brief therapy (or short-term therapy), others, where regular sessions take place for
    years, may be classified as long-term.
    </br>
    </br>
    Some practitioners distinguish between more "uncovering" (or "depth") approaches and more "supportive"
    psychotherapy. Uncovering psychotherapy emphasizes facilitating the client's insight into the roots of their
    difficulties. The best-known example is classical psychoanalysis. Supportive psychotherapy by contrast stresses
    strengthening the client's coping mechanisms and often providing encouragement and advice, as well as
    reality-testing and limit-setting where necessary. Depending on the client's issues and situation, a more supportive
    or more uncovering approach may be optimal.
    </br>
    </br>
    Most forms of psychotherapy use spoken conversation. Some also use various other forms of communication such as the
    written word, artwork, drama, narrative story or music. Psychotherapy with children and their parents often involves
    play, dramatization (i.e. role-play), and drawing, with a co-constructed narrative from these non-verbal and
    displaced modes of interacting.
    </br>
    </br>
    There are also different formats for delivering some therapies, as well as the usual face to face: for example via
    telephone or via online interaction. There have also been developments in computer-assisted therapy, such as virtual
    reality therapy for behavioral exposure, multimedia programs to each cognitive techniques, and handheld devices for
    improved monitoring or putting ideas into practice.</p>
  </br>
  <h2>Effects</h2>
  </br>
  <h3>Evaluation</h3>
  </br>
  <p>There is considerable controversy about whether, or when, psychotherapy efficacy is best evaluated by randomized
    controlled trials or more individualized idiographic methods.
    </br>
    </br>
    One issue with trials is what to use as a placebo treatment group or non-treatment control group. Often, this group
    includes patients on a waiting list, or those receiving some kind of regular non-specific contact or support.
    Researchers must consider how best to match the use of inert tablets or sham treatments in placebo-controlled
    studies in pharmaceutical trials. Several interpretations and differing assumptions and language remain. Another
    issue is the attempt to standardize and manualize therapies and link them to specific symptoms of diagnostic
    categories, making them more amenable to research. Some report that this may reduce efficacy or gloss over
    individual needs. Fonagy and Roth's opinion is that the benefits of the evidence-based approach outweighs the
    difficulties.
    </br>
    </br>
    There are several formal frameworks for evaluating whether a psychotherapist is a good fit for a patient. One
    example is the Scarsdale Psychotherapy Self-Evaluation (SPSE). However, some scales, such as the SPS, elicit
    information specific to certain schools of psychotherapy alone (e.g. the superego).
    </br>
    </br>
    Many psychotherapists believe that the nuances of psychotherapy cannot be captured by questionnaire-style
    observation, and prefer to rely on their own clinical experiences and conceptual arguments to support the type of
    treatment they practice. Psychodynamic therapists in particular believe that evidence-based approaches are not
    appropriate to their methods or assumptions, though some have increasingly accepted the challenge to implement
    evidence-based approaches in their methods.</p>
  </br>
  <h3>Outcomes in relation with selected kinds of treatment</h3>
  </br>
  <p>Large-scale international reviews of scientific studies have concluded that psychotherapy is effective for numerous
    conditions.
    </br>
    </br>
    One line of research consistently finds that supposedly different forms of psychotherapy show similar effectiveness.
    According to The Handbook of Counseling Psychology: "Meta-analyses of psychotherapy studies have consistently
    demonstrated that there are no substantial differences in outcomes among treatments". The handbook states that there
    is "little evidence to suggest that any one psychological therapy consistently outperforms any other for any
    specific
    psychological disorders. This is sometimes called the Dodo bird verdict after a scene/section in Alice in Wonderland
    where every competitor in a race was called a winner and is given prizes".
    </br>
    </br>
    Further analyses seek to identify the factors that the psychotherapies have in common that seem to account for this,
    known as common factors theory; for example the quality of the therapeutic relationship, interpretation of problem,
    and the confrontation of painful emotions.
    </br>
    </br>
    Outcome studies have been critiqued for being too removed from real-world practice in that they use carefully
    selected
    therapists who have been extensively trained and monitored, and patients who may be non-representative of typical
    patients by virtue of strict inclusionary/exclusionary criteria. Such concerns impact the replication of research
    results and the ability to generalize from them to practicing therapists.
    </br>
    </br>
    However, specific therapies have been tested for use with specific disorders, and regulatory organizations in both
    the
    UK and US make recommendations for different conditions.
    </br>
    </br>
    The Helsinki Psychotherapy Study was one of several large long-term clinical trials of psychotherapies that have
    taken
    place. Anxious and depressed patients in two short-term therapies (solution-focused and brief psychodynamic)
    improved
    faster, but five years long-term psychotherapy and psychoanalysis gave greater benefits. Several patient and
    therapist
    factors appear to predict suitability for different psychotherapies.
    </br>
    </br>
    Meta-analyses have established that Cognitive Behavioural Therapy (CBT) and psychodynamic psychotherapy are equally
    effective in treating depression.
    </br>
    </br>
    A 2014 meta analysis over 11,000 patients reveals that Interpersonal Psychotherapy (IPT) is of comparable
    effectiveness to CBT for depression but is inferior to the latter for eating disorders. For children and
    adolescents, interpersonal psychotherapy and CBT are the best methods according to a 2014 meta analysis of almost
    4000
    patients.</p>
  </br>
  <h2>Adverse effects</h2>
  </br>
  <p>Research on adverse effects of psychotherapy has been limited for various reasons, yet they may be expected to
    occur
    in 5% to 20% of patients. Problems include deterioration of symptoms or developing new symptoms, strains in other
    relationships, and therapy dependence. Some techniques or therapists may carry more risks than others, and some
    client
    characteristics may make them more vulnerable. Side-effects from properly conducted therapy should be distinguished
    from harms caused by malpractice.</p>
  </br>
  <h2>General critiques</h2>
  </br>
  <p>Some critics are skeptical of the healing power of psychotherapeutic relationships. Some dismiss psychotherapy
    altogether in the sense of a scientific discipline requiring professional practitioners, instead favoring either
    nonprofessional help or biomedical treatments. Others have pointed out ways in which the values and techniques of
    therapists can be harmful as well as helpful to clients (or indirectly to other people in a client's life).
    </br>
    </br>
    Many resources available to a person experiencing emotional distress—the friendly support of friends, peers, family
    members, clergy contacts, personal reading, healthy exercise, research, and independent coping—all present
    considerable value. Critics note that humans have been dealing with crises, navigating severe social problems and
    finding solutions to life problems long before the advent of psychotherapy.
    </br>
    </br>
    On the other hand, some argue psychotherapy is under-utilized and under-researched by contemporary psychiatry
    despite
    offering more promise than stagnant medication development. In 2015, the US National Institute of Mental Health
    allocated only 5.4% of its budget to new clinical trials of psychotherapies (medication trials are largely funded by
    pharmaceutical companies), despite plentiful evidence they can work and that patients are more likely to prefer
    them.
    </br>
    </br>
    Some Christians, such as theologian Thomas C. Oden, have argued that successful therapeutic relationships, based on
    true acceptance of the client as a human being without contingency, require a theological assumption, an ontological
    acceptance of God.[further explanation needed]
    </br>
    </br>
    Further critiques have emerged from feminist, constructionist and discourse-analytical sources.[164] Key to these is
    the issue of power. In this regard there is a concern that clients are persuaded—both inside and outside the
    consulting room—to understand themselves and their difficulties in ways that are consistent with therapeutic ideas.
    This means that alternative ideas (e.g., feminist, economic, spiritual) are sometimes implicitly undermined. Critics
    suggest that we idealize the situation when we think of therapy only as a helping relationship—arguing instead that
    it
    is fundamentally a political practice, in that some cultural ideas and practices are supported while others are
    undermined or disqualified, and that while it is seldom intended, the therapist–client relationship always
    participates in society's power relations and political dynamics. A noted academic who espoused this criticism was
    Michel Foucault.</p>


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