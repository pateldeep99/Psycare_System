<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
      <title>Psychology</title>
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
                              <a class="dropdown-item active" href="../php/psychology.php">Psychology</a>
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
  <h2>Psychology</h2>
  </br>
  <img src="../images/img/psy.jpg" alt="psychology" class="imgpsy" width="400" height="300">
  <p>Psychology is the science of mind
    and behavior. Psychology includes the study of conscious and unconscious
    phenomena, as well as feeling and thought. It is an academic discipline of immense scope. Psychologists seek an
    understanding of the emergent properties of brains, and all the variety of phenomena linked to those emergent
    properties, joining this way the broader neuro-scientific group of researchers. As a social science, it aims to
    understand individuals and groups by establishing general principles and researching specific cases.
    </br>
    </br>
    In this field, a professional practitioner or researcher is called a psychologist and can be classified as a social,
    behavioral, or cognitive scientist. Psychologists attempt to understand the role of mental functions in individual
    and social behavior, while also exploring the physiological and biological processes that underlie cognitive
    functions and behaviors.
    </br>
    </br>
    Psychologists explore behavior and mental processes, including perception, cognition, attention, emotion,
    intelligence, subjective experiences, motivation, brain functioning, and personality. This extends to interaction
    between people, such as interpersonal relationships, including psychological resilience, family resilience, and
    other areas. Psychologists of diverse orientations also consider the unconscious mind. Psychologists employ
    empirical methods to infer causal and correlational relationships between psychosocial variables. In addition, or in
    opposition, to employing empirical and deductive methods, some—especially clinical and counseling psychologists—at
    times rely upon symbolic interpretation and other inductive techniques. Psychology has been described as a "hub
    science" in that medicine tends to draw psychological research via neurology and psychiatry, whereas social sciences
    most commonly draw directly from sub-disciplines within psychology.
    </br>
    </br>
    While psychological knowledge is often applied to the assessment and treatment of mental health problems, it is also
    directed towards understanding and solving problems in several spheres of human activity. By many accounts,
    psychology ultimately aims to benefit society. The majority of psychologists are involved in some kind of
    therapeutic role, practicing in clinical, counseling, or school settings. Many do scientific research on a wide
    range of topics related to mental processes and behavior, and typically work in university psychology departments or
    teach in other academic settings (e.g., medical schools, hospitals). Some are employed in industrial and
    organizational settings, or in other areas such as human development and aging, sports, health, and the media, as
    well as in forensic investigation and other aspects of law.</p>
  </br>
  <h2>Etymology and definitions</h2>
  </br>
  <p>The word psychology derives from Greek roots meaning study of the psyche, or soul (ψυχή psychē, "breath, spirit,
    soul" and -λογία -logia, "study of" or "research"). The Latin word psychologia was first used by the Croatian
    humanist and Latinist Marko Marulić in his book, Psichiologia de ratione animae humanae in the late 15th century or
    early 16th century. The earliest known reference to the word psychology in English was by Steven Blankaart in 1694
    in The Physical Dictionary which refers to "Anatomy, which treats the Body, and Psychology, which treats of the
    Soul."
    </br>
    </br>
    In 1890, William James defined psychology as "the science of mental life, both of its phenomena and their
    conditions". This definition enjoyed widespread currency for decades. However, this meaning was contested, notably
    by radical behaviorists such as John B. Watson, who in his 1913 manifesto defined the discipline of psychology as
    the acquisition of information useful to the control of behavior. Also since James defined it, the term more
    strongly connotes techniques of scientific experimentation. Folk psychology refers to the understanding of ordinary
    people, as contrasted with that of psychology professionals.</p>
  </br>
  <h2>History</h2>
  </br>
  <p>The ancient civilizations of Egypt, Greece, China, India, and Persia all engaged in the philosophical study of
    psychology. In Ancient Egypt the Ebers Papyrus mentioned depression and thought disorders. Historians note that
    Greek philosophers, including Thales, Plato, and Aristotle (especially in his De Anima treatise), addressed the
    workings of the mind. As early as the 4th century BC, Greek physician Hippocrates theorized that mental
    disorders had physical rather than supernatural causes.
    </br>
    </br>
    In China, psychological understanding grew from the philosophical works of Laozi and Confucius, and later from the
    doctrines of Buddhism. This body of knowledge involves insights drawn from introspection and observation, as well as
    techniques for focused thinking and acting. It frames the universe as a division of, and interaction between,
    physical reality and mental reality, with an emphasis on purifying the mind in order to increase virtue and power.
    An ancient text known as The Yellow Emperor's Classic of Internal Medicine identifies the brain as the nexus of
    wisdom and sensation, includes theories of personality based on yin–yang balance, and analyzes mental disorder in
    terms of physiological and social disequilibria. Chinese scholarship focused on the brain advanced in the Qing
    Dynasty with the work of Western-educated Fang Yizhi (1611–1671), Liu Zhi (1660–1730), and Wang Qingren (1768–1831).
    Wang Qingren emphasized the importance of the brain as the center of the nervous system, linked mental disorder with
    brain diseases, investigated the causes of dreams and insomnia, and advanced a theory of hemispheric lateralization
    in brain function.
    </br>
    </br>
    Distinctions in types of awareness appear in the ancient thought of India, influenced by Hinduism. A central idea of
    the Upanishads is the distinction between a person's transient mundane self and their eternal unchanging soul.
    Divergent Hindu doctrines, and Buddhism, have challenged this hierarchy of selves, but have all emphasized the
    importance of reaching higher awareness. Yoga is a range of techniques used in pursuit of this goal. Much of the
    Sanskrit corpus was suppressed under the British East India Company followed by the British Raj in the 1800s.
    However, Indian doctrines influenced Western thinking via the Theosophical Society, a New Age group which became
    popular among Euro-American intellectuals.
    </br>
    </br>
    Psychology was a popular topic in Enlightenment Europe. In Germany, Gottfried Wilhelm Leibniz (1646–1716) applied
    his principles of calculus to the mind, arguing that mental activity took place on an indivisible continuum—most
    notably, that among an infinity of human perceptions and desires, the difference between conscious and unconscious
    awareness is only a matter of degree. Christian Wolff identified psychology as its own science, writing Psychologia
    empirica in 1732 and Psychologia rationalis in 1734. This notion advanced further under Immanuel Kant, who
    established the idea of anthropology, with psychology as an important subdivision. However, Kant explicitly and
    notoriously rejected the idea of experimental psychology, writing that "the empirical doctrine of the soul can also
    never approach chemistry even as a systematic art of analysis or experimental doctrine, for in it the manifold of
    inner observation can be separated only by mere division in thought, and cannot then be held separate and recombined
    at will (but still less does another thinking subject suffer himself to be experimented upon to suit our purpose),
    and even observation by itself already changes and displaces the state of the observed object." In 1783, Ferdinand
    Ueberwasser (1752-1812) designated himself Professor of Empirical Psychology and Logic and gave lectures on
    scientific psychology, though these developments were soon overshadowed by the Napoleonic Wars, after which the Old
    University of Münster was discontinued by Prussian authorities.[20] Having consulted philosophers Hegel and Herbart,
    however, in 1825 the Prussian state established psychology as a mandatory discipline in its rapidly expanding and
    highly influential educational system. However, this discipline did not yet embrace experimentation. In England,
    early psychology involved phrenology and the response to social problems including alcoholism, violence, and the
    country's well-populated mental asylums.</p>
  </br>
  <h2>Beginning of experimental psychology</h2>
  </br>
  <p>Gustav Fechner began conducting psychophysics research in Leipzig in the 1830s, articulating the principle
    (Weber–Fechner law) that human perception of a stimulus varies logarithmically according to its intensity. Fechner's
    1860 Elements of Psychophysics challenged Kant's stricture against quantitative study of the mind. In Heidelberg,
    Hermann von Helmholtz conducted parallel research on sensory perception, and trained physiologist Wilhelm Wundt.
    Wundt, in turn, came to Leipzig University, establishing the psychological laboratory which brought experimental
    psychology to the world. Wundt focused on breaking down mental processes into the most basic components, motivated
    in part by an analogy to recent advances in chemistry, and its successful investigation of the elements and
    structure of material. Paul Flechsig and Emil Kraepelin soon created another influential psychology laboratory at
    Leipzig, this one focused on more on experimental psychiatry.
    </br>
    </br>
    Psychologists in Germany, Denmark, Austria, England, and the United States soon followed Wundt in setting up
    laboratories. G. Stanley Hall, who studied with Wundt, formed a psychology lab at Johns Hopkins University in
    Maryland, which became internationally influential. Hall, in turn, trained Yujiro Motora, who brought experimental
    psychology, emphasizing psychophysics, to the Imperial University of Tokyo. Wundt's assistant, Hugo Münsterberg,
    taught psychology at Harvard to students such as Narendra Nath Sen Gupta—who, in 1905, founded a psychology
    department and laboratory at the University of Calcutta. Wundt students Walter Dill Scott, Lightner Witmer, and
    James McKeen Cattell worked on developing tests for mental ability. Catell, who also studied with eugenicist Francis
    Galton, went on to found the Psychological Corporation. Wittmer focused on mental testing of children; Scott, on
    selection of employees.
    </br>
    </br>
    Another student of Wundt, Edward Titchener, created the psychology program at Cornell University and advanced a
    doctrine of "structuralist" psychology. Structuralism sought to analyze and classify different aspects of the mind,
    primarily through the method of introspection. William James, John Dewey and Harvey Carr advanced a more expansive
    doctrine called functionalism, attuned more to human–environment actions. In 1890, James wrote an influential book,
    The Principles of Psychology, which expanded on the realm of structuralism, memorably described the human "stream of
    consciousness", and interested many American students in the emerging discipline. Dewey integrated psychology with
    social issues, most notably by promoting the cause progressive education to assimilate immigrants and inculcate
    moral values in children.
    </br>
    </br>

    One of the dogs used in Pavlov's experiment with a surgically implanted cannula to measure salivation, preserved in
    the Pavlov Museum in Ryazan, Russia
    A different strain of experimentalism, with more connection to physiology, emerged in South America, under the
    leadership of Horacio G. Piñero at the University of Buenos Aires. Russia, too, placed greater emphasis on the
    biological basis for psychology, beginning with Ivan Sechenov's 1873 essay, "Who Is to Develop Psychology and How?"
    Sechenov advanced the idea of brain reflexes and aggressively promoted a deterministic viewpoint on human behavior.
    </br>
    </br>
    Wolfgang Kohler, Max Wertheimer and Kurt Koffka co-founded the school of Gestalt psychology (not to be confused with
    the Gestalt therapy of Fritz Perls). This approach is based upon the idea that individuals experience things as
    unified wholes. Rather than breaking down thoughts and behavior into smaller elements, as in structuralism, the
    Gestaltists maintained that whole of experience is important, and differs from the sum of its parts. Other
    19th-century contributors to the field include the German psychologist Hermann Ebbinghaus, a pioneer in the
    experimental study of memory, who developed quantitative models of learning and forgetting at the University of
    Berlin, and the Russian-Soviet physiologist Ivan Pavlov, who discovered in dogs a learning process that was later
    termed "classical conditioning" and applied to human beings.</p>
  </br>
  <h2>Major schools of thought</h2>
  </br>
  <h3>Biological</h3>
  </br>
  <img src="../images/img/thoughts.jpg" alt="thoughts" class="img" width="300" height="200">
  <p>Psychologists generally consider the organism the basis of the mind, and therefore a vitally related area of study.
    Psychiatrists and neuropsychologists work at the interface of mind and body. Biological psychology, also known as
    physiological psychology, or neuropsychology is the study of the biological substrates of behavior and mental
    processes. Key research topics in this field include comparative psychology, which studies humans in relation to
    other animals, and perception which involves the physical mechanics of sensation as well as neural and mental
    processing. For centuries, a leading question in biological psychology has been whether and how mental functions
    might be localized in the brain. From Phineas Gage to H.M. and Clive Wearing, individual people with mental issues
    traceable to physical damage have inspired new discoveries in this area. Modern neuropsychology could be said to
    originate in the 1870s, when in France Paul Broca traced production of speech to the left frontal gyrus, thereby
    also demonstrating hemispheric lateralization of brain function. Soon after, Carl Wernicke identified a related area
    necessary for the understanding of speech.
    </br>
    </br>
    The contemporary field of behavioral neuroscience focuses on physical causes underpinning behavior. For example,
    physiological psychologists use animal models, typically rats, to study the neural, genetic, and cellular mechanisms
    that underlie specific behaviors such as learning and memory and fear responses. Cognitive neuroscientists
    investigate the neural correlates of psychological processes in humans using neural imaging tools, and
    neuropsychologists conduct psychological assessments to determine, for instance, specific aspects and extent of
    cognitive deficit caused by brain damage or disease. The biopsychosocial model is an integrated perspective toward
    understanding consciousness, behavior, and social interaction. It assumes that any given behavior or mental process
    affects and is affected by dynamically interrelated biological, psychological, and social factors.
    </br>
    </br>
    Evolutionary psychology examines cognition and personality traits from an evolutionary perspective. This perspective
    suggests that psychological adaptations evolved to solve recurrent problems in human ancestral environments.
    Evolutionary psychology offers complementary explanations for the mostly proximate or developmental explanations
    developed by other areas of psychology: that is, it focuses mostly on ultimate or "why?" questions, rather than
    proximate or "how?" questions. "How?" questions are more directly tackled by behavioral genetics research, which
    aims to understand how genes and environment impact behavior.
    </br>
    </br>
    The search for biological origins of psychological phenomena has long involved debates about the importance of race,
    and especially the relationship between race and intelligence. The idea of white supremacy and indeed the modern
    concept of race itself arose during the process of world conquest by Europeans. Carl von Linnaeus's four-fold
    classification of humans classifies Europeans as intelligent and severe, Americans as contented and free, Asians as
    ritualistic, and Africans as lazy and capricious. Race was also used to justify the construction of socially
    specific mental disorders such as drapetomania and dysaesthesia aethiopica—the behavior of uncooperative African
    slaves. After the creation of experimental psychology, "ethnical psychology" emerged as a subdiscipline, based on
    the assumption that studying primitive races would provide an important link between animal behavior and the
    psychology of more evolved humans.</p>
  </br>
  <h3>Behavioral</h3>
  </br>
  <p>Psychologists take human behavior as a main area of study. Much of the research in this area began with tests on
    mammals, based on the idea that humans exhibit similar fundamental tendencies. Behavioral research ever aspires to
    improve the effectiveness of techniques for behavior modification.
    </br>
    </br>

    Early behavioral researchers studied stimulus–response pairings, now known as classical conditioning. They
    demonstrated that behaviors could be linked through repeated association with stimuli eliciting pain or pleasure.
    Ivan Pavlov—known best for inducing dogs to salivate in the presence of a stimulus previously linked with
    food—became a leading figure in the Soviet Union and inspired followers to use his methods on humans. In the United
    States, Edward Lee Thorndike initiated "connectionism" studies by trapping animals in "puzzle boxes" and rewarding
    them for escaping. Thorndike wrote in 1911: "There can be no moral warrant for studying man's nature unless the
    study will enable us to control his acts." From 1910–1913 the American Psychological Association went through a sea
    change of opinion, away from mentalism and towards "behavioralism", and in 1913 John B. Watson coined the term
    behaviorism for this school of thought. Watson's famous Little Albert experiment in 1920 demonstrated that repeated
    use of upsetting loud noises could instill phobias (aversions to other stimuli) in an infant human. Karl Lashley, a
    close collaborator with Watson, examined biological manifestations of learning in the brain.
    </br>
    </br>
    Embraced and extended by Clark L. Hull, Edwin Guthrie, and others, behaviorism became a widely used research
    paradigm. A new method of "instrumental" or "operant" conditioning added the concepts of reinforcement and
    punishment to the model of behavior change. Radical behaviorists avoided discussing the inner workings of the mind,
    especially the unconscious mind, which they considered impossible to assess scientifically. Operant conditioning was
    first described by Miller and Kanorski and popularized in the U.S. by B.F. Skinner, who emerged as a leading
    intellectual of the behaviorist movement.
    </br>
    </br>
    Noam Chomsky delivered an influential critique of radical behaviorism on the grounds that it could not adequately
    explain the complex mental process of language acquisition. Martin Seligman and colleagues discovered that the
    conditioning of dogs led to outcomes ("learned helplessness") that opposed the predictions of behaviorism. Skinner's
    behaviorism did not die, perhaps in part because it generated successful practical applications. Edward C. Tolman
    advanced a hybrid "cognitive behavioral" model, most notably with his 1948 publication discussing the cognitive maps
    used by rats to guess at the location of food at the end of a modified maze.
    </br>
    </br>
    The Association for Behavior Analysis International was founded in 1974 and by 2003 had members from 42 countries.
    The field has been especially influential in Latin America, where it has a regional organization known as ALAMOC: La
    Asociación Latinoamericana de Análisis y Modificación del Comportamiento. Behaviorism also gained a strong foothold
    in Japan, where it gave rise to the Japanese Society of Animal Psychology (1933), the Japanese Association of
    Special Education (1963), the Japanese Society of Biofeedback Research (1973), the Japanese Association for Behavior
    Therapy (1976), the Japanese Association for Behavior Analysis (1979), and the Japanese Association for Behavioral
    Science Research (1994). Today the field of behaviorism is also commonly referred to as behavior modification or
    behavior analysis.</p>
</body>
</br>
<h2>Existential-humanistic theories</h2>
</br>
<img src="../images/img/theory.png" alt="theory" class="imgpsy" width="300" height="300">
<p>Humanistic psychology developed in the 1950s as a movement within academic psychology, in reaction to both
  behaviorism and psychoanalysis. The humanistic approach sought to glimpse the whole person, not just fragmented parts
  of the personality or isolated cognitions. Humanism focused on uniquely human issues, such as free will, personal
  growth, self-actualization, self-identity, death, aloneness, freedom, and meaning. It emphasized subjective meaning,
  rejection of determinism, and concern for positive growth rather than pathology.[citation needed] Some founders of the
  humanistic school of thought were American psychologists Abraham Maslow, who formulated a hierarchy of human needs,
  and Carl Rogers, who created and developed client-centered therapy. Later, positive psychology opened up humanistic
  themes to scientific modes of exploration.
  </br>
  </br>
  The American Association for Humanistic Psychology, formed in 1963, declared:
  </br>
  Humanistic psychology is primarily an orientation toward the whole of psychology rather than a distinct area or
  school. It stands for respect for the worth of persons, respect for differences of approach, open-mindedness as to
  acceptable methods, and interest in exploration of new aspects of human behavior. As a "third force" in contemporary
  psychology, it is concerned with topics having little place in existing theories and systems: e.g., love, creativity,
  self, growth, organism, basic need-gratification, self-actualization, higher values, being, becoming, spontaneity,
  play, humor, affection, naturalness, warmth, ego-transcendence, objectivity, autonomy, responsibility, meaning,
  fair-play, transcendental experience, peak experience, courage, and related concepts.
  </br>
  </br>
  In the 1950s and 1960s, influenced by philosophers Søren Kierkegaard and Martin Heidegger, psychoanalytically trained
  American psychologist Rollo May pioneered an existential branch of psychology, which included existential
  psychotherapy: a method based on the belief that inner conflict within a person is due to that individual's
  confrontation with the givens of existence. Swiss psychoanalyst Ludwig Binswanger and American psychologist George
  Kelly may also be said to belong to the existential school. Existential psychologists differed from more "humanistic"
  psychologists in their relatively neutral view of human nature and their relatively positive assessment of anxiety.
  Existential psychologists emphasized the humanistic themes of death, free will, and meaning, suggesting that meaning
  can be shaped by myths, or narrative patterns, and that it can be encouraged by an acceptance of the free will
  requisite to an authentic, albeit often anxious, regard for death and other future prospects.
  </br>
  </br>
  Austrian existential psychiatrist and Holocaust survivor Viktor Frankl drew evidence of meaning's therapeutic power
  from reflections garnered from his own internment. He created a variation of existential psychotherapy called
  logotherapy, a type of existentialist analysis that focuses on a will to meaning (in one's life), as opposed to
  Adler's Nietzschean doctrine of will to power or Freud's will to pleasure.</p>

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