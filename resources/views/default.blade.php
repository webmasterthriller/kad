@extends("templates.index")

@section('title','Obtenez une offre de prêt')

@section('meta')
<META NAME="DESCRIPTION" CONTENT="promoteur d'offre de développement et de courtage de produits financiers pour particuliers">
<META NAME="KEYWORDS" CONTENT="prêt, crédit, emprunt, finance, prêt privé, crédit privé, crédit entre particulier, prêt immobilier, prêt personnel, prêt consommable">
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
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/fr.png')}}"></i></span>
                </a>
              </li>
              <li>
                <a href="/de">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/de.png')}}"></i></span>
                </a>
              </li>
              <li>
                <a href="/en">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/gb.png')}}"></i></span>
                </a>
              </li>
            </ul>
          </li>
          <li class="active"><a href="#intro">Accueil</a></li>
          <li><a href="#about">A propos</a></li>
          <li><a href="#services">Exemples</a></li>
          <li><a href="#features">Demande</a></li>
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
          <h2>Votre prêt sur mesure avec <span>Kredit Angebote Deutsch</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
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
              <h2>Qui sommes-nous?</h2>
              <h3><a href="/">KreditAngebote-DE</a> est un cabinet de consultant en finance et de courtage de produits financiers en ligne.</h3>
              <p>Dans un souci constant d’accompagnement des consommateurs dans leurs projets de vie, les experts en prêt sont à l’écoute de vos besoins. Ils vous proposent des solutions adaptées en ligne, en fonction des produits que vous aurez choisies. Nous vous proposons essentiellement des produits comme : </p>
              <ul>
                  <li><i class="ion-android-checkmark-circle"></i> Crédit rapide</li>
                  <li><i class="ion-android-checkmark-circle"></i> Crédit personnel</li>
              </ul>
              <p>Avec Nos Engagements, nous nous engageons envers nos clients tout au long de notre relation : de la souscription au remboursement de votre credit, en passant par vos éventuels changements de vie. Laissez-vous guider sur notre site Internet et souscrivez en quelques clics un credit renouvelable, un prêt perso, ou un prêt rapide, qui saura répondre à vos attentes.</p>
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
          <h3>Nos prestations</h3>
          <p>Découvrez des exemples d'offres de crédit dédiées et adaptés pour votre projet.</p>
        </header>

        <div class="row">
            <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="">Crédit rapide</a></h4>
                    <span class="description mb-12 text-justify center">Emprunter en ligne 24h/24 et 7j/7</span>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> à partir de 2000€</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> minimum 6 mois </span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> pour 0.75%</span></li>
                    </ul>
                    <div>
                      <a href="#features" class="btn-get-started scrollto">Faire ma demande</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box center">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="">Crédit personnel</a></h4>
                    <span class="description mb-12 text-justify center">Emprunter en ligne 24h/24 et 7j/7</span>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> à partir de 5000€</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> minimum 12 mois</span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> pour 2.89%</span></li>
                    </ul>
                    <div>
                      <a href="#features" class="btn-get-started scrollto">Faire ma demande</a>
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
            <h3>Demander une offre</h3>
            <p>Déposer une demande aujourd'hui et obtenez une offre en 24h</p>
        </header>
      <div class="container">
          <div class="row">

              <div class="col-md-6 col-lg-8">
                  <div class=" box-with-humber">
                      <h2 class="text-black center">Formulaire d'inscription</h2>
                      <p class="mb-4 center">Remplir et soumettre sa demande de crédit</p>
                      <form name="Demande" class="form-demand">
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="gender">Civilité</label>
                                  <select class="form-control" id="gender" name="gender">
                                    <option value="">--</option>
                                    <option value="M.">M.</option>
                                    <option value="Mlle">Mlle</option>
                                    <option value="Mme">Mme</option>
                                  </select>
                              </div>
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="type">Objet du crédit</label>
                                  <select class="form-control" id="type">
                                      <option value="">--</option>
                                      <option value="CRD001">Crédit rapide</option>
                                      <option value="CRD002">Crédit personnel</option>
                                  </select>
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                              	<label for="amount">Montant(Euro/€)</label>
                              	<input type="text" class="form-control" aria-label="Dollar amount" id="amount" placeholder="A partir de 3000€" value="" >
                              </div>

                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="surname">Nom</label>
                                  <input type="text" id="surname" class="form-control" name="surname" placeholder="Ex: MESSI">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="duration">Durée(Mois)</label>
                                  <input type="text" class="form-control" aria-label="Dollar duration" id="duration" placeholder="A partir de 3 mois" value="">
                              </div>

                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="name">Prénom</label>
                                  <input type="text" id="name" class="form-control" name="name" placeholder="Ex: Lionel">
                              </div>

                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="email">Email</label>
                                  <input type="text" id="email" class="form-control" name="email" placeholder="Ex: votremail@email.com">
                              </div>

                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="cemail">Confirmer Email</label>
                                  <input type="text" id="cemail" class="form-control" name="cemail" placeholder="Confirmez Email">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="country">Pays</label>
                                  <input type="text" id="country" class="form-control" name="country" placeholder="Ex: France">
                              </div>
                              <div class="col-md-6">
                                  <label for="phone">Téléphone</label>
                                  <input type="text" id="phone" class="form-control" name="phone" placeholder="Ex: +33 XX XX XX XXX">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="city">Ville</label>
                                  <input type="text" id="city" class="form-control" name="city" placeholder="Ex: Paris">
                              </div>
                              <div class="col-md-6">
                                  <label for="post_code">Code Postal</label>
                                  <input type="text" id="post_code" class="form-control" name="post_code" placeholder="Ex: 750001">
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0 col-lg">
                                  <label for="address">Adresse</label>
                                  <input type="text" id="address" class="form-control" name="address" placeholder="Ex: 14, rue Charles Corbeau ">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <a class="btn btn-info btn-demand" style="border-radius: 4px;">Soumettre</a>
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
                      <h2 class="text-black">Votre crédit</h2>
                      <p class="mb-4">Ci-dessous, la simulation de votre crédit.</p>

                      <img src="{{asset('assets/img/calculator-savings.svg')}}" alt="Kredit Angebote Deutsch" class="img-fluid align-content-center">

                      <ul class="list-unstyled ul-check primary recapitulatif">
                          <li>Type de prêt : <strong id="sim_type">--</strong> </li>
                          <li>Montant emprunt (euros) : <strong id="sim_amount">--</strong></li>
                          <li>Durée d'emprunt(mois) : <strong id="sim_duration">--</strong></li>
                          <li>TAEG négociable(%) : <strong id="sim_rate">--</strong></li>
                          <li>Mensualité du credit(euros) : <strong id="sim_payment">--</strong></li>
                          <li>Total du crédit : <strong id="sim_payments">--</strong></li>
                          <li>Total des intérêts : <strong id="sim_rates">--</strong></li>
                      </ul>
                      <div class="alert alert-info" style="display: none;">Les résultats de cette simulation sont temporaires. Les paramètres de votre crédit pourront être revus par le responsable de votre crédit.</div>
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
              <h3 class="cta-title">Vous avez déjà déposé une demande ?</h3>
              <p class="cta-text"> Si vous avez déjà une demande en cours de traitement, veuillez cliquer sur <strong>Suivre ma demande</strong> </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Suivre ma demande</a>
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
          <h3>Questions posées fréquemments </h3>
          <p>Ci-dessous quelques questions à vos réponse.</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Quelles sont les étapes d'une demande de financement en ligne ? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Avec KreditAngebote-DE, vous pouvez effectuer votre demande de prêt en toute simplicité, sans vous déplacer ! Voici les 5 étapes à suivre :
              </p>
                <ol>
                 <li>Selon votre projet, vous choisissez le prêt qui vous convient. Grâce à notre simulateur, selon le montant dont vous avez besoin, vous personnalisez la mensualité et la durée qui vous paraissent les mieux adaptées à votre situation. Il ne reste plus qu'à saisir votre demande !</li>
                 <li>Vous recevez une réponse de principe immédiate, ainsi qu'un e-mail récapitulatif de votre demande.</li>
                 <li>Vous avez la possibilité de télécharger et imprimer votre dossier de crédit pour ne pas perdre de temps. Ou bien, choisissez de recevoir votre dossier par courrier.</li>
                 <li>Vous nous adressez votre offre de contrat de crédit et votre fiche de dialogue, datées et signées, ainsi que les justificatifs demandés.</li>
                 <li>Dès réception, votre dossier est finalisé par votre agence.</li>
                </ol>
                <p> Et rappelez-vous : pour savoir où en est votre demande, consultez votre suivi de demande depuis votre espace client, grâce au numéro de dossier transmis dans l'e-mail récapitulatif !</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Ai-je la possibilité de modifier le montant de mes mensualités ? La durée de mon crédit ? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Avec le prêt personnel ou le crédit renouvelable KreditAngebote-DE, vous pouvez modifier le montant de vos mensualités à tout moment, autant de fois que vous le voulez, après étude de votre dossier.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Cela fait plus de 48h que j'ai saisi mon dossier, et je n'ai toujours pas de réponse ? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
               Normalement, un e-mail vous a été envoyé. Nous vous invitons donc à vérifier votre boîte électronique, y compris le dossier « Courrier indésirable ».
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

              <h4>Envoyez-nous un message</h4>
              <p>Vous pouvez nous envoyer un message pour tous renseignements.</p>
              <form role="form" class="form-contact">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="contact-name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Entrez au moins 4 caractères pour le nom" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="contact-email" placeholder="Votre Email" data-rule="minlen:5" data-msg="Entrez un mail valide" />
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
                    <a class="btn btn-info btn-contact" style="border-radius: 4px;">Envoyer</a>
                </div>
                <div class="alert alert-success sendmessage" style="display:none;"> Votre message a été envoyé. Merci!</div>
                <div class="alert alert-danger errormessage" style="display:none;">Message non envoyé</div>
              </form>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>KAD</strong> &copy;. Tous droits réservés
      </div>
    </div>
@endsection('content')
