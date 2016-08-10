<?php

/**
 *clase que sirve como plantilla de la app
 *la cual contine un metodo home que es donde se llamaran las vistas
 */
class Layoute
{

  function __construct()
  {
    # code...
  }

  function home(){ ?>

    <!DOCTYPE html>
      <html lang="en">

      <head>

          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="">

          <title>Portafolio Interactivo</title>

          <!-- Bootstrap Core CSS -->
          <link rel="stylesheet" href="../App/Views/assets/plugins/bootstrap/css/bootstrap.css" media="screen" />

          <!-- Theme CSS -->
          <link href="../App/Views/assets/css/freelancer.min.css" rel="stylesheet">

          <!-- Custom Fonts -->
          <link href="../App/Views/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="data:application/octet-stream;base64,LyohIFJlc3BvbmQuanMgdjEuNC4yOiBtaW4vbWF4LXdpZHRoIG1lZGlhIHF1ZXJ5IHBvbHlmaWxsICogQ29weXJpZ2h0IDIwMTMgU2NvdHQgSmVobAogKiBMaWNlbnNlZCB1bmRlciBodHRwczovL2dpdGh1Yi5jb20vc2NvdHRqZWhsL1Jlc3BvbmQvYmxvYi9tYXN0ZXIvTElDRU5TRS1NSVQKICogICovCgohZnVuY3Rpb24oYSl7InVzZSBzdHJpY3QiO2EubWF0Y2hNZWRpYT1hLm1hdGNoTWVkaWF8fGZ1bmN0aW9uKGEpe3ZhciBiLGM9YS5kb2N1bWVudEVsZW1lbnQsZD1jLmZpcnN0RWxlbWVudENoaWxkfHxjLmZpcnN0Q2hpbGQsZT1hLmNyZWF0ZUVsZW1lbnQoImJvZHkiKSxmPWEuY3JlYXRlRWxlbWVudCgiZGl2Iik7cmV0dXJuIGYuaWQ9Im1xLXRlc3QtMSIsZi5zdHlsZS5jc3NUZXh0PSJwb3NpdGlvbjphYnNvbHV0ZTt0b3A6LTEwMGVtIixlLnN0eWxlLmJhY2tncm91bmQ9Im5vbmUiLGUuYXBwZW5kQ2hpbGQoZiksZnVuY3Rpb24oYSl7cmV0dXJuIGYuaW5uZXJIVE1MPScmc2h5OzxzdHlsZSBtZWRpYT0iJythKyciPiAjbXEtdGVzdC0xIHsgd2lkdGg6IDQycHg7IH08L3N0eWxlPicsYy5pbnNlcnRCZWZvcmUoZSxkKSxiPTQyPT09Zi5vZmZzZXRXaWR0aCxjLnJlbW92ZUNoaWxkKGUpLHttYXRjaGVzOmIsbWVkaWE6YX19fShhLmRvY3VtZW50KX0odGhpcyksZnVuY3Rpb24oYSl7InVzZSBzdHJpY3QiO2Z1bmN0aW9uIGIoKXt1KCEwKX12YXIgYz17fTthLnJlc3BvbmQ9YyxjLnVwZGF0ZT1mdW5jdGlvbigpe307dmFyIGQ9W10sZT1mdW5jdGlvbigpe3ZhciBiPSExO3RyeXtiPW5ldyBhLlhNTEh0dHBSZXF1ZXN0fWNhdGNoKGMpe2I9bmV3IGEuQWN0aXZlWE9iamVjdCgiTWljcm9zb2Z0LlhNTEhUVFAiKX1yZXR1cm4gZnVuY3Rpb24oKXtyZXR1cm4gYn19KCksZj1mdW5jdGlvbihhLGIpe3ZhciBjPWUoKTtjJiYoYy5vcGVuKCJHRVQiLGEsITApLGMub25yZWFkeXN0YXRlY2hhbmdlPWZ1bmN0aW9uKCl7NCE9PWMucmVhZHlTdGF0ZXx8MjAwIT09Yy5zdGF0dXMmJjMwNCE9PWMuc3RhdHVzfHxiKGMucmVzcG9uc2VUZXh0KX0sNCE9PWMucmVhZHlTdGF0ZSYmYy5zZW5kKG51bGwpKX07aWYoYy5hamF4PWYsYy5xdWV1ZT1kLGMucmVnZXg9e21lZGlhOi9AbWVkaWFbXlx7XStceyhbXlx7XH1dKlx7W15cfVx7XSpcfSkrL2dpLGtleWZyYW1lczovQCg/OlwtKD86b3xtb3p8d2Via2l0KVwtKT9rZXlmcmFtZXNbXlx7XStceyg/OlteXHtcfV0qXHtbXlx9XHtdKlx9KStbXlx9XSpcfS9naSx1cmxzOi8odXJsXCgpWyciXT8oW15cL1wpJyJdW146XCknIl0rKVsnIl0/KFwpKS9nLGZpbmRTdHlsZXM6L0BtZWRpYSAqKFteXHtdKylceyhbXFNcc10rPykkLyxvbmx5Oi8ob25seVxzKyk/KFthLXpBLVpdKylccz8vLG1pbnc6L1woW1xzXSptaW5cLXdpZHRoXHMqOltcc10qKFtcc10qWzAtOVwuXSspKHB4fGVtKVtcc10qXCkvLG1heHc6L1woW1xzXSptYXhcLXdpZHRoXHMqOltcc10qKFtcc10qWzAtOVwuXSspKHB4fGVtKVtcc10qXCkvfSxjLm1lZGlhUXVlcmllc1N1cHBvcnRlZD1hLm1hdGNoTWVkaWEmJm51bGwhPT1hLm1hdGNoTWVkaWEoIm9ubHkgYWxsIikmJmEubWF0Y2hNZWRpYSgib25seSBhbGwiKS5tYXRjaGVzLCFjLm1lZGlhUXVlcmllc1N1cHBvcnRlZCl7dmFyIGcsaCxpLGo9YS5kb2N1bWVudCxrPWouZG9jdW1lbnRFbGVtZW50LGw9W10sbT1bXSxuPVtdLG89e30scD0zMCxxPWouZ2V0RWxlbWVudHNCeVRhZ05hbWUoImhlYWQiKVswXXx8ayxyPWouZ2V0RWxlbWVudHNCeVRhZ05hbWUoImJhc2UiKVswXSxzPXEuZ2V0RWxlbWVudHNCeVRhZ05hbWUoImxpbmsiKSx0PWZ1bmN0aW9uKCl7dmFyIGEsYj1qLmNyZWF0ZUVsZW1lbnQoImRpdiIpLGM9ai5ib2R5LGQ9ay5zdHlsZS5mb250U2l6ZSxlPWMmJmMuc3R5bGUuZm9udFNpemUsZj0hMTtyZXR1cm4gYi5zdHlsZS5jc3NUZXh0PSJwb3NpdGlvbjphYnNvbHV0ZTtmb250LXNpemU6MWVtO3dpZHRoOjFlbSIsY3x8KGM9Zj1qLmNyZWF0ZUVsZW1lbnQoImJvZHkiKSxjLnN0eWxlLmJhY2tncm91bmQ9Im5vbmUiKSxrLnN0eWxlLmZvbnRTaXplPSIxMDAlIixjLnN0eWxlLmZvbnRTaXplPSIxMDAlIixjLmFwcGVuZENoaWxkKGIpLGYmJmsuaW5zZXJ0QmVmb3JlKGMsay5maXJzdENoaWxkKSxhPWIub2Zmc2V0V2lkdGgsZj9rLnJlbW92ZUNoaWxkKGMpOmMucmVtb3ZlQ2hpbGQoYiksay5zdHlsZS5mb250U2l6ZT1kLGUmJihjLnN0eWxlLmZvbnRTaXplPWUpLGE9aT1wYXJzZUZsb2F0KGEpfSx1PWZ1bmN0aW9uKGIpe3ZhciBjPSJjbGllbnRXaWR0aCIsZD1rW2NdLGU9IkNTUzFDb21wYXQiPT09ai5jb21wYXRNb2RlJiZkfHxqLmJvZHlbY118fGQsZj17fSxvPXNbcy5sZW5ndGgtMV0scj0obmV3IERhdGUpLmdldFRpbWUoKTtpZihiJiZnJiZwPnItZylyZXR1cm4gYS5jbGVhclRpbWVvdXQoaCksaD1hLnNldFRpbWVvdXQodSxwKSx2b2lkIDA7Zz1yO2Zvcih2YXIgdiBpbiBsKWlmKGwuaGFzT3duUHJvcGVydHkodikpe3ZhciB3PWxbdl0seD13Lm1pbncseT13Lm1heHcsej1udWxsPT09eCxBPW51bGw9PT15LEI9ImVtIjt4JiYoeD1wYXJzZUZsb2F0KHgpKih4LmluZGV4T2YoQik+LTE/aXx8dCgpOjEpKSx5JiYoeT1wYXJzZUZsb2F0KHkpKih5LmluZGV4T2YoQik+LTE/aXx8dCgpOjEpKSx3Lmhhc3F1ZXJ5JiYoeiYmQXx8ISh6fHxlPj14KXx8IShBfHx5Pj1lKSl8fChmW3cubWVkaWFdfHwoZlt3Lm1lZGlhXT1bXSksZlt3Lm1lZGlhXS5wdXNoKG1bdy5ydWxlc10pKX1mb3IodmFyIEMgaW4gbiluLmhhc093blByb3BlcnR5KEMpJiZuW0NdJiZuW0NdLnBhcmVudE5vZGU9PT1xJiZxLnJlbW92ZUNoaWxkKG5bQ10pO24ubGVuZ3RoPTA7Zm9yKHZhciBEIGluIGYpaWYoZi5oYXNPd25Qcm9wZXJ0eShEKSl7dmFyIEU9ai5jcmVhdGVFbGVtZW50KCJzdHlsZSIpLEY9ZltEXS5qb2luKCJcbiIpO0UudHlwZT0idGV4dC9jc3MiLEUubWVkaWE9RCxxLmluc2VydEJlZm9yZShFLG8ubmV4dFNpYmxpbmcpLEUuc3R5bGVTaGVldD9FLnN0eWxlU2hlZXQuY3NzVGV4dD1GOkUuYXBwZW5kQ2hpbGQoai5jcmVhdGVUZXh0Tm9kZShGKSksbi5wdXNoKEUpfX0sdj1mdW5jdGlvbihhLGIsZCl7dmFyIGU9YS5yZXBsYWNlKGMucmVnZXgua2V5ZnJhbWVzLCIiKS5tYXRjaChjLnJlZ2V4Lm1lZGlhKSxmPWUmJmUubGVuZ3RofHwwO2I9Yi5zdWJzdHJpbmcoMCxiLmxhc3RJbmRleE9mKCIvIikpO3ZhciBnPWZ1bmN0aW9uKGEpe3JldHVybiBhLnJlcGxhY2UoYy5yZWdleC51cmxzLCIkMSIrYisiJDIkMyIpfSxoPSFmJiZkO2IubGVuZ3RoJiYoYis9Ii8iKSxoJiYoZj0xKTtmb3IodmFyIGk9MDtmPmk7aSsrKXt2YXIgaixrLG4sbztoPyhqPWQsbS5wdXNoKGcoYSkpKTooaj1lW2ldLm1hdGNoKGMucmVnZXguZmluZFN0eWxlcykmJlJlZ0V4cC4kMSxtLnB1c2goUmVnRXhwLiQyJiZnKFJlZ0V4cC4kMikpKSxuPWouc3BsaXQoIiwiKSxvPW4ubGVuZ3RoO2Zvcih2YXIgcD0wO28+cDtwKyspaz1uW3BdLGwucHVzaCh7bWVkaWE6ay5zcGxpdCgiKCIpWzBdLm1hdGNoKGMucmVnZXgub25seSkmJlJlZ0V4cC4kMnx8ImFsbCIscnVsZXM6bS5sZW5ndGgtMSxoYXNxdWVyeTprLmluZGV4T2YoIigiKT4tMSxtaW53OmsubWF0Y2goYy5yZWdleC5taW53KSYmcGFyc2VGbG9hdChSZWdFeHAuJDEpKyhSZWdFeHAuJDJ8fCIiKSxtYXh3OmsubWF0Y2goYy5yZWdleC5tYXh3KSYmcGFyc2VGbG9hdChSZWdFeHAuJDEpKyhSZWdFeHAuJDJ8fCIiKX0pfXUoKX0sdz1mdW5jdGlvbigpe2lmKGQubGVuZ3RoKXt2YXIgYj1kLnNoaWZ0KCk7ZihiLmhyZWYsZnVuY3Rpb24oYyl7dihjLGIuaHJlZixiLm1lZGlhKSxvW2IuaHJlZl09ITAsYS5zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7dygpfSwwKX0pfX0seD1mdW5jdGlvbigpe2Zvcih2YXIgYj0wO2I8cy5sZW5ndGg7YisrKXt2YXIgYz1zW2JdLGU9Yy5ocmVmLGY9Yy5tZWRpYSxnPWMucmVsJiYic3R5bGVzaGVldCI9PT1jLnJlbC50b0xvd2VyQ2FzZSgpO2UmJmcmJiFvW2VdJiYoYy5zdHlsZVNoZWV0JiZjLnN0eWxlU2hlZXQucmF3Q3NzVGV4dD8odihjLnN0eWxlU2hlZXQucmF3Q3NzVGV4dCxlLGYpLG9bZV09ITApOighL14oW2EtekEtWjpdKlwvXC8pLy50ZXN0KGUpJiYhcnx8ZS5yZXBsYWNlKFJlZ0V4cC4kMSwiIikuc3BsaXQoIi8iKVswXT09PWEubG9jYXRpb24uaG9zdCkmJigiLy8iPT09ZS5zdWJzdHJpbmcoMCwyKSYmKGU9YS5sb2NhdGlvbi5wcm90b2NvbCtlKSxkLnB1c2goe2hyZWY6ZSxtZWRpYTpmfSkpKX13KCl9O3goKSxjLnVwZGF0ZT14LGMuZ2V0RW1WYWx1ZT10LGEuYWRkRXZlbnRMaXN0ZW5lcj9hLmFkZEV2ZW50TGlzdGVuZXIoInJlc2l6ZSIsYiwhMSk6YS5hdHRhY2hFdmVudCYmYS5hdHRhY2hFdmVudCgib25yZXNpemUiLGIpfX0odGhpcyk7"></script>
          <![endif]-->

      </head>

      <body id="page-top" class="index">?>

      <?php
        $this->menu();
        $this->header();
       ?>

       <!--secciones principales  -->

         <section id="portfolio">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Portafolio</h2>
                      <hr class="star-primary">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4 portfolio-item">
                      <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                          <div class="caption">
                              <div class="caption-content">
                                  <i class="fa fa-search-plus fa-3x"></i>
                              </div>
                          </div>
                          <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                      </a>
                  </div>
              </div>
          </div>
      </section>

      <!-- About Section -->
      <section class="success" id="about">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Acerca de mi</h2>
                      <hr class="star-light">
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-lg-offset-2">
                      <p>Desarrollador de app web, con 3 años de experiencia en el campo, apacionado por lo que hago,
                         ademas del futbol y la investigacion de nuevas tecnologias</p>
                  </div>
                  <div class="col-lg-4">
                      <p>Experiencia en desarrolo de aplicaciones Pos y ERP, ademas de software altamente transaccional, casado y disfrutando de la vida apesar de todo</p>
                  </div>
                  <!-- <div class="col-lg-8 col-lg-offset-2 text-center">
                      <a href="#" class="btn btn-lg btn-outline">
                          <i class="fa fa-download"></i> Download Theme
                      </a>
                  </div> -->
              </div>
          </div>
      </section>

      <!-- Contact Section -->
      <section id="contact">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Contactame</h2>
                      <hr class="star-primary">
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                      <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                      <form name="sentMessage" id="contactForm" novalidate>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Please enter your name.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Email</label>
                                  <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Numero de Telefono</label>
                                  <input type="tel" class="form-control" placeholder="Telefono" id="phone" required data-validation-required-message="Please enter your phone number.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row control-group">
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label>Mensaje</label>
                                  <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <br>
                          <div id="success"></div>
                          <div class="row">
                              <div class="form-group col-xs-12">
                                  <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>

      <?php

        $this->footer();

       ?>

        <!-- <script src="vendor/jquery/jquery.min.js"></script> -->

        <!-- Bootstrap Core JavaScript -->
        <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

        <script src="../App/Views/assets/plugins/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../App/Views/assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Plugin JavaScript -->
        <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->

        <script src="../App/Views/assets/scripts/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="../App/Views/assets/scripts/jqBootstrapValidation.js"></script>
        <script src="../App/Views/assets/scripts/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="../App/Views/assets/scripts/freelancer.min.js"></script>
      </body>
      </html>
    <?php
  }

  function header(){?>

    <header>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <img class="img-responsive" src="../App/Views/assets/img/profile.png" alt="">
                  <div class="intro-text">
                      <span class="name">Portafolio de App Web Interactivo</span>
                      <hr class="star-light">
                      <span class="skills">- Desarrollo Web -</span>
                  </div>
              </div>
          </div>
      </div>
    </header>

  <?php
  }

  function menu(){?>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Portafolio Web</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portafolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Acerca de Mi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

  <?php
  }

  function aside(){?>


  <?php
  }

  function footer(){?>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

  <?php
  }
}
 ?>
