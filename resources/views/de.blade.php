@extends("templates.index")

@section('title','Holen Sie sich ein Darlehensangebot')

@section('meta')
<META NAME="DESCRIPTION" CONTENT="Förderer von Entwicklungs- und Maklerangeboten für Finanzprodukte für Privatpersonen">
<META NAME="KEYWORDS" CONTENT="darlehen, kredit, darlehen, finanzierung, privates darlehen, privates darlehen, persönliches darlehen, wohnungsdarlehen, persönliches darlehen, verbrauchbares darlehen">
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
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/fr.png')}}"></i>Français</span>
                </a>
              </li>
              <li>
                <a href="/de">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/de.png')}}"></i>Deutsch</span>
                </a>
              </li>
              <li>
                <a href="/en">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/gb.png')}}"></i>English</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="active"><a href="#intro">Willkommen</a></li>
          <li><a href="#about">Über uns</a></li>
          <li><a href="#services">Beispiel</a></li>
          <li><a href="#features">Nachfrage</a></li>
          <li><a href="#footer">Kontakt</a></li>
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
          <h2>Ihr bestes Kreditangebot mit <span>Kredit Angebote Deutsch</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Finde mehr heraus</a>
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
              <h2>Über uns</h2>
              <h3><a href="/">KreditAngebote-Deutsch</a> ist eine Finanzberatungs- und Online-Finanzmaklerfirma.</h3>
              <p>In einem ständigen Bestreben, die Verbraucher in ihren Lebensplänen zu unterstützen, gehen Kreditexperten auf Ihre Bedürfnisse ein. Sie bieten Ihnen online angepasste Lösungen, abhängig von den von Ihnen gewählten Produkten. 
              <p>Mit unseren Verpflichtungen verpflichten wir uns während unserer gesamten Geschäftsbeziehung gegenüber unseren Kunden: vom Abonnement bis zur Rückzahlung Ihres Kredits, einschließlich möglicher Änderungen Ihres Lebens. Lassen Sie sich auf unserer Website führen und abonnieren Sie mit wenigen Klicks einen revolvierenden Kredit, einen Privatkredit oder einen Schnellkredit, der Ihren Erwartungen entspricht.</p>
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
          <h3>Unsere Dienstleistungen</h3>
          <p>Entdecken Sie Beispiele dedizierter und angepasster Kreditangebote für Ihr Projekt.</p>
        </header>

        <div class="row">
            <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="">Schnelle Gutschrift</a></h4>
                    <span class="description mb-12 text-justify center">Rund um die Uhr online ausleihen</span>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> ab 2000 €</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> mindestens 6 Monate </span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> für 0,75%</span></li>
                    </ul>
                    <div>
                      <a href="#features" class="btn-get-started scrollto">Mach meine Anfrage</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box center">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="">Persönlicher Kredit</a></h4>
                    <span class="description mb-12 text-justify center">Rund um die Uhr online ausleihen</span>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span>Ab 5000 €</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> Mindestens 12 Monate</span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> Für 2,89%</span></li>
                    </ul>
                    <div>
                      <a href="#features" class="btn-get-started scrollto">Mach meine Anfrage</a>
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
            <h3>Fordern Sie ein Kreditangebot an</h3>
            <p>Senden Sie noch heute eine Anfrage und Sie erhalten innerhalb von 24 Stunden ein Angebot</p>
        </header>
      <div class="container">
          <div class="row">

              <div class="col-md-6 col-lg-8">
                  <div class=" box-with-humber">
                      <h2 class="text-black center">Anmeldeformular</h2>
                      <p class="mb-4 center">Füllen Sie Ihren Kreditantrag aus und reichen Sie ihn ein</p>
                      <form name="Demande" class="form-demand">
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="gender">Höflichkeit</label>
                                  <select class="form-control" id="gender" name="gender">
                                    <option value="">--</option>
                                    <option value="M.">Herr.</option>
                                    <option value="Mme">Frau</option>
                                  </select>
                              </div>
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="gender">Zweck des Kredits</label>
                                  <select class="form-control" id="TypeCredit">
                                      <option value="">--</option>
                                      <option value="CRD001">Schnelle Gutschrift</option>
                                      <option value="CRD002">Persönlicher Kredit</option>
                                  </select>
                              </div>
                          </div>
    
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                              	<label for="montant">Menge(Euro/€)</label>
                              	<input type="text" class="form-control" aria-label="Dollar amount" id="Montant" placeholder="From 2000€" value="" >
                              </div>
                              
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="nom">Name</label>
                                  <input type="text" id="nom" class="form-control" name="Nom" placeholder="MESSI">
                              </div>
                          </div>
    
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="periode">Dauer(Month)</label>
                                  <input type="text" class="form-control" aria-label="Dollar periode" id="Periode" placeholder="mindestens 6 Monate" value="">
                              </div>
                              
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="prenom">Vorname</label>
                                  <input type="text" id="prenom" class="form-control" name="Prenom" placeholder="Lionel">
                              </div>
                              
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" class="form-control" name="Email" placeholder="votremail@email.com">
                              </div>
                              
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="cemail">Bestätigungs-E-Mail</label>
                                  <input type="email" id="cemail" class="form-control" name="Email" placeholder="Email bestätigen">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="pays">Land</label>
                                  <input type="text" id="pays" class="form-control" name="Pays" placeholder="France">
                              </div>
                              <div class="col-md-6">
                                  <label for="phone">Telefon</label>
                                  <input type="text" id="phone" class="form-control" name="Phone" placeholder="+33 XX XX XX XXX">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="ville">Stadt</label>
                                  <input type="text" id="ville" class="form-control" name="Ville" placeholder="Paris">
                              </div>
                              <div class="col-md-6">
                                  <label for="code_postal">Postleitzahl</label>
                                  <input type="text" id="code_postal" class="form-control" name="CodePostal" placeholder="750001">
                              </div>
                          </div>
                          
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0 col-lg">
                                  <label for="address">Adresse</label>
                                  <input type="text" id="address" class="form-control" name="address" placeholder="14 Corbeau strasse">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <a class="btn btn-info btn-demand" style="border-radius: 4px;">einreichen</a>
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
                      <p class="mb-4">Unten die Simulation Ihres Guthabens.</p>
                      
                      <img src="{{asset('assets/img/calculator-savings.svg')}}" alt="Kredit Angebote Deutsch" class="img-fluid align-content-center">
                      
                      <ul class="list-unstyled ul-check primary recapitulatif">
                          <li>Art des Darlehens: <strong id="type">--</strong> </li>
                          <li>Darlehensbetrag (euros) : <strong id="amount">--</strong></li>
                          <li>Ausleihzeitraum(Monate) : <strong id="periode">--</strong></li>
                          <li>Zinsrate(%) : <strong id="interet">--</strong></li>
                          <li>Monatliche Gutschrift(euros) : <strong id="mensualite">--</strong></li>
                          <li>Gesamtpunktzahl : <strong id="totalCredit">--</strong></li>
                          <li>Gesamtzins : <strong id="totalInteret">--</strong></li>
                      </ul>
                      <div class="alert alert-info" style="display: none;">Die Ergebnisse dieser Simulation sind temporär. Ihre Krediteinstellungen können von Ihrem Kreditmanager überprüft werden.</div>
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
              <h3 class="cta-title">Hast du dich schon beworben?</h3>
              <p class="cta-text"> Wenn Sie bereits eine Anfrage bearbeitet haben, klicken Sie bitte auf <strong>Verfolge meinen Kredit</strong> </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Verfolge meinen Kredit</a>
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
          <h3>Häufig gestellte Fragen </h3>
          <p>Im Folgenden finden Sie einige Fragen zu Ihren Antworten.</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Was sind die Schritte, um eine Online-Finanzierung zu beantragen?<i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Mit KreditAngebot-Deutsch können Sie Ihren Kredit ganz einfach beantragen, ohne reisen zu müssen! Hier sind die 5 folgenden Schritte:
              </p>
                <ol>
                 <li>Abhängig von Ihrem Projekt wählen Sie das Darlehen, das zu Ihnen passt. Dank unseres Simulators können Sie je nach benötigter Menge die monatliche Zahlung und die Dauer anpassen, die Ihrer Situation am besten entsprechen. Sie müssen nur noch Ihre Anfrage eingeben!</li>
                 <li>Sie erhalten grundsätzlich umgehend eine Antwort sowie eine E-Mail mit einer Zusammenfassung Ihrer Anfrage.</li>
                 <li>Sie haben die Möglichkeit, Ihre Kreditdatei herunterzuladen und auszudrucken, um keine Zeit zu verlieren. Oder wählen Sie, ob Sie Ihre Datei per E-Mail erhalten möchten.</li>
                 <li>Sie senden uns Ihr Kreditvertragsangebot und Ihr datiertes und unterschriebenes Dialogblatt sowie die angeforderten Belege.</li>
                 <li>Nach Erhalt wird Ihre Datei von Ihrer Agentur finalisiert.</li>
                </ol>
                <p> Und denken Sie daran: Um zu wissen, wo sich Ihre Anfrage befindet, rufen Sie die Anfrageverfolgung in Ihrem Kundenbereich auf, und zwar dank der in der Zusammenfassungs-E-Mail angegebenen Dateinummer!</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Kann ich den Betrag meiner monatlichen Zahlungen ändern? Wie lange reicht mein Guthaben? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
               Mit dem KAD-Privatdarlehen oder dem revolvierenden Guthaben können Sie die Höhe Ihrer monatlichen Zahlungen nach Einsicht in Ihre Akte jederzeit beliebig oft ändern.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Es ist mehr als 48 Stunden her, seit ich meine Datei eingegeben habe, und ich habe immer noch keine Antwort?<i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
               Normalerweise wurde eine E-Mail an Sie gesendet. Wir laden Sie daher ein, Ihr elektronisches Postfach einschließlich «Spam» zu überprüfen.
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
                  <strong>Email:</strong>  kad-gmbh@kreditangebote-deutsch.com<br>
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

              <h4>Schick uns eine Nachricht</h4>
              <p>Sie können uns eine Nachricht senden, um weitere Informationen zu erhalten.</p>
              <form role="form" class="form-contact">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="contact-name" placeholder="Dein Name" data-rule="minlen:4" data-msg="Entrez au moins 4 caractères pour le nom" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="contact-email" placeholder="Deine E-Mail" data-rule="minlen:5" data-msg="Entrez un mail valide" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="contact-subject" placeholder="Gegenstand" data-rule="minlen:8" data-msg="Entrez au moins 8 caractères pour le sujet" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="contact-message" rows="5" data-rule="required" data-msg="Entrez quelques mots" placeholder="Botschaft"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                    <a class="btn btn-info btn-contact" style="border-radius: 4px;">Senden</a>
                </div>
                <div class="alert alert-success sendmessage" style="display:none;"> Ihre Nachricht wurde gesendet. Vielen Dank!</div>
                <div class="alert alert-danger errormessage" style="display:none;">Nachricht nicht gesendet</div>
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