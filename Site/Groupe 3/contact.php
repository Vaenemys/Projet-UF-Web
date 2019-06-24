<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <link rel="stylesheet" href="css/CV.css">

</head>
<body>
    
                    <div class="title">
                        <a href="index.php">
                            <h1>Denys DELAUNAY</h1>
                          </a>



                    </div>







                  </div>

    </header>
<main>
        <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="title-box-2">
                            <h5 class="title-left">
                              Me contacter
                            </h5>
                          </div>
                          <div>
                              <form action="" method="post" role="form" class="contactForm">
                              <div id="sendmessage">votre message à bien été envoyé merci!</div>
                              <div id="errormessage"></div>
                              <div class="row">
                                <div class="col-md-12 mb-3">
                                  <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="votre prénom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                  </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="votre email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                  </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="subject" id="subject" placeholder="sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                      <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <button type="submit" class="button button-a button-big button-rouded">envoyer un message</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="title-box-2 pt-4 pt-md-0">

                            <ul class="list-ico">
                              <li><span class="ion-ios-location"></span> 11 place de la distillerie Ferrieres-en-brie</li>
                              <li><span class="ion-ios-telephone"></span> 0652481988</li>
                              <li><span class="ion-email"></span> denys.delaunay@ynov.com</li>
                            </ul>
                          </div>
                          <div class="socials">
                            <ul>
                              <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                              <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                              <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                              <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>
</main>
<script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>
</body>
</html>
