@extends("templates.index")

@section('title','Get a loan offer')

@section('meta')
<META NAME="DESCRIPTION" CONTENT="promoter of development and brokerage offers for financial products for individuals">
<META NAME="KEYWORDS" CONTENT="loan, credit, loan, finance, private loan, private credit, personal loan, home loan, personal loan, consumable loan">
@endsection('meta')

@section('content')
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li>
            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-globe"></i>
            </a>
            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
              <li>
                <a href="/">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/fr.png')}}"></i> Français</span>
                </a>
              </li>
              <li>
                <a href="/de">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/de.png')}}"></i> Deutsch</span>
                </a>
              </li>
              <li>
                <a href="/en">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/gb.png')}}"></i> English</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Example</a></li>
          <li><a href="#features">Demand</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Your best loan offer with <span>Kredit Angebote Deutsch</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Find out more</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="{{asset('assets/img/intro-img.png')}}" alt="Kredit Angebote Deutsch" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="{{asset('assets/img/about-us.png')}}" alt="Kredit Angebote Deutsch">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About-Us</h2>
              <h3><a href="/">KreditAngebote-Deutsch</a> is a finance consultancy and online financial brokerage firm.</h3>
              <p>In a constant concern to support consumers in their life plans, loan experts are attentive to your needs. They offer you adapted solutions online, depending on the products you have chosen. 
              <p>With Our Commitments, we are committed to our customers throughout our relationship: from the subscription to the reimbursement of your credit, including your possible life changes. Let yourself be guided on our website and subscribe in a few clicks to a revolving credit, a personal loan, or a quick loan, which will meet your expectations.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Our services</h3>
          <p>Discover examples of dedicated and adapted credit offers for your project.</p>
        </header>

        <div class="row">
            <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="">Quick Credit</a></h4>
                    <span class="description mb-12 text-justify center">Borrow online 24/7</span>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> from 2000 €</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> minimum 6 months </span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> for 0.75%</span></li>
                    </ul>
                    <div>
                      <a href="#features" class="btn-get-started scrollto">Make my request</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box center">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="">Personal credit</a></h4>
                    <span class="description mb-12 text-justify center">Borrow online 24/7</span>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> From 5000€</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> Minimum 12 months</span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> For 2.89%</span></li>
                    </ul>
                    <div>
                      <a href="#features" class="btn-get-started scrollto">Make my request</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section><!-- #services -->


    <!--==========================
        Demand Section
    ============================-->
    <section id="features" >
        <header class="section-header">
            <h3>Request a loan offer</h3>
            <p>Submit a request today and get an offer in 24h</p>
        </header>
      <div class="container">
          <div class="row">

              <div class="col-md-6 col-lg-8">
                  <div class=" box-with-humber">
                      <h2 class="text-black center">Registration Form</h2>
                      <p class="mb-4 center">Complete and submit your credit application</p>
                      <form name="Demande" class="form-demand">
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="gender">Civility</label>
                                  <select class="form-control" id="gender" name="gender">
                                    <option value="">--</option>
                                    <option value="M.">Mr.</option>
                                    <option value="Mlle">Ms.</option>
                                    <option value="Mme">Mrs</option>
                                  </select>
                              </div>
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="gender">Purpose of Credit</label>
                                  <select class="form-control" id="TypeCredit">
                                      <option value="">--</option>
                                      <option value="CRD001">Quick Credit</option>
                                      <option value="CRD002">Personal credit</option>
                                  </select>
                              </div>
                          </div>
    
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                              	<label for="montant">Amount(Euro/€)</label>
                              	<input type="text" class="form-control" aria-label="Dollar amount" id="Montant" placeholder="From 2000€" value="" >
                              </div>
                              
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="nom">Surname</label>
                                  <input type="text" id="nom" class="form-control" name="Nom" placeholder="MESSI">
                              </div>
                          </div>
    
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="periode">Duration(Month)</label>
                                  <input type="text" class="form-control" aria-label="Dollar periode" id="Periode" placeholder="minimum 6 months" value="">
                              </div>
                              
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="prenom">Name</label>
                                  <input type="text" id="prenom" class="form-control" name="Prenom" placeholder="Lionel">
                              </div>
                              
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" class="form-control" name="Email" placeholder="votremail@email.com">
                              </div>
                              
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="cemail">Confirm Email</label>
                                  <input type="email" id="cemail" class="form-control" name="Email" placeholder="repeat Email">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="pays">Country</label>
                                  <input type="text" id="pays" class="form-control" name="Pays" placeholder="France">
                              </div>
                              <div class="col-md-6">
                                  <label for="phone">Phone</label>
                                  <input type="text" id="phone" class="form-control" name="Phone" placeholder="+33 XX XX XX XXX">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="ville">City</label>
                                  <input type="text" id="ville" class="form-control" name="Ville" placeholder="Paris">
                              </div>
                              <div class="col-md-6">
                                  <label for="code_postal">Postal code</label>
                                  <input type="text" id="code_postal" class="form-control" name="CodePostal" placeholder="750001">
                              </div>
                          </div>
                          
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0 col-lg">
                                  <label for="address">Address</label>
                                  <input type="text" id="address" class="form-control" name="address" placeholder="14, rue Charles Corbeau ">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <a class="btn btn-info btn-demand" style="border-radius: 4px;">Submit</a>
                              </div>
                              <div class="col-md-6">
                                  <div class="alert alert-success cmdsuccess" style="display: none;"></div>
                                  <div class="alert alert-danger cmderror" style="display: none;"></div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              
               <div class="col-md-6 col-lg-4">
                  <div class=" box-with-humber">
                      <h2 class="text-black">your credit</h2>
                      <p class="mb-4">Below, the simulation of your credit.</p>
                      
                      <img src="{{asset('assets/img/calculator-savings.svg')}}" alt="Kredit Angebote Deutsch" class="img-fluid align-content-center">
                      
                      <ul class="list-unstyled ul-check primary recapitulatif">
                          <li>Type of loan: <strong id="type">--</strong> </li>
                          <li>Loan amount (euros) : <strong id="amount">--</strong></li>
                          <li>Borrowing period(months) : <strong id="periode">--</strong></li>
                          <li>Interest rate(%) : <strong id="interet">--</strong></li>
                          <li>Monthly credit(euros) : <strong id="mensualite">--</strong></li>
                          <li>Total credit : <strong id="totalCredit">--</strong></li>
                          <li>Total interest : <strong id="totalInteret">--</strong></li>
                      </ul>
                      <div class="alert alert-info" style="display: none;">The results of this simulation are temporary. Your credit settings can be reviewed by your credit manager.</div>
                  </div>
              </div>
          </div>
      </div>
    </section><!-- #demande -->

      <!--==========================
        Call To Action Section
      ============================-->
      <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Have you already applied?</h3>
              <p class="cta-text"> If you already have a request being processed, please click on <strong>Track my loan</strong> </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Track my loan</a>
            </div>
          </div>
        </div>
      </section><!-- #call-to-action -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently asked questions </h3>
          <p>Below are some questions to your answers.</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">What are the steps to apply for online financing? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                With KreditAngebot-Deutsch, you can easily apply for your loan without having to travel! Here are the 5 steps to follow:
              </p>
                <ol>
                 <li>Depending on your project, you choose the loan that suits you. Thanks to our simulator, depending on the amount you need, you can customize the monthly payment and the duration that seem best suited to your situation. It only remains to enter your request!</li>
                 <li>You will receive an immediate reply in principle, as well as an email summarizing your request.</li>
                 <li>You have the option of downloading and printing your credit file so as not to waste time. Or, choose to receive your file by mail.</li>
                 <li>You send us your credit contract offer and your dialogue sheet, dated and signed, as well as the supporting documents requested.</li>
                 <li>Upon receipt, your file is finalized by your agency.</li>
                </ol>
                <p> And remember: to know where your request is, consult your request tracking from your customer area, thanks to the file number sent in the summary email!</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Can I change the amount of my monthly payments? How long will my credit last? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
               With the KAD personal loan or revolving credit, you can change the amount of your monthly payments at any time, as many times as you want, after studying your file.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">It's been more than 48 hours since I entered my file, and I still don't have an answer?<i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
               Normally an email has been sent to you. We therefore invite you to check your electronic mailbox, including « Spam ».
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- #faq -->
  </main>

    <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <a href="/"><img src="{{asset('assets/img/logo.png')}}" alt="Kredit Angebote Deutsch" class="img-fluid"></a>
              <div class="footer-info">
                <p>
                  14, rue Charles Corbeau<br>
                  Fecamp 76400<br>
                  France <br>
                  <strong>Email:</strong> kad-gmbh@kreditangebote-deutsch.com<br>
              	</p>
              </div>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        	</div>
          </div>

            <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p>You can send us a message for any information.</p>
              <form role="form" class="form-contact">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="contact-name" placeholder="Your name" data-rule="minlen:4" data-msg="Entrez au moins 4 caractères pour le nom" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="contact-email" placeholder="Your Email" data-rule="minlen:5" data-msg="Entrez un mail valide" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="contact-subject" placeholder="Subject" data-rule="minlen:8" data-msg="Entrez au moins 8 caractères pour le sujet" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="contact-message" rows="5" data-rule="required" data-msg="Entrez quelques mots" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                    <a class="btn btn-info btn-contact" style="border-radius: 4px;">Send</a>
                </div>
                <div class="alert alert-success sendmessage" style="display:none;"> Your message has been sent. Thank you!</div>
                <div class="alert alert-danger errormessage" style="display:none;">Message not sent</div>
              </form>
            </div>

          </div>

        </div>
        
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>KAD</strong> &copy;. All rights reserved
      </div>
    </div>
@endsection('content')