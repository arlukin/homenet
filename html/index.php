<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
  <head>
    <title>Hyra bostad</title>

    <meta name="author" content="Daniel Lindh" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="imagetoolbar" content="no"/>

    <!-- CSS - Begin -->
    <link rel="stylesheet" type="text/css" href="/css/screen.css" media="screen" />    
    <link rel="stylesheet" type="text/css" href="/css/screen-index.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/screen-map-search.css" media="screen" />
    <!-- CSS - End -->

    <!-- JQuery - Begin -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/qtip/jquery.qtip.min.js"></script>
    <!-- JQuery - End -->

    <!-- Nivoslider - Begin -->
    <link rel="stylesheet" href="/js/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />    
    <script type="text/javascript" src="/js/nivo-slider/jquery.nivo.slider.pack.js"></script>

    <!-- Nivoslider - End -->

    <!-- Expandable Sticky Bar - Begin-->
    <script src="js/expstickybar.js">

    /***********************************************
    * Expandable Sticky Bar- (c) Dynamic Drive (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit http://www.dynamicdrive.com/ for this script and 100s more.
    ***********************************************/

    </script>
    <!-- Expandable Sticky Bar - End -->

  </head>

  <body>
    <div id="wrap">
      <?php include("include/map-search.phsp"); ?>
      
      <?php include("include/header.php"); ?>

      <div id="content">
        <div class="inner border">          

          <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
              <a href="sveaborg.php">
                <img src='/images/nivo-slider/tjoloholm.jpg' title="Tjolöholm">
              </a>

              <a href="sveaborg.php">
                <img src='/images/nivo-slider/tjoloholm-kyrka.jpg' title="Kyrkan">
              </a>

              <a href="sveaborg.php">
                <img src='/images/nivo-slider/grindstugan.jpg'  title="Grindstugan">
              </a>

              <a href="sveaborg.php">
                <img src='/images/nivo-slider/baksidan.jpg'  title="Baksidan">
              </a>

              <a href="sveaborg.php">
                <img src='/images/nivo-slider/sveaborg.jpg'  title="Sveaborg">
              </a>
            </div>
          </div>
          <script type="text/javascript">
          $(window).load(function() {
              $('#slider').nivoSlider();
          });
          </script>
          
          <div id="ingress-text">
            <h1>Hitta ditt semesterboende</h1>
            <h3>Med våra sökfunktioner hittar du stugor, fritidshus, villor och lägenheter att hyra under korta och långa perioder.</h3>
          </div>

          <div class="clear"></div>

          <dl>
            <dt>
              Hyra bostad
            </dt>
            <dd>
              <a href="/rental-accommodation.php">
                <div class="sprite promotional1"></div>
                Hos oss hittar du bostäder att hyra. Både korttidsboende på ett par dagar
                eller veckor att använda vid semestern, och andrahands-kontrakt för att bo
                i flera månader eller år.
              </a>
            </dd>
            <dt>
              Hyr ut din bostad
            </dt>
            <dd>
              <a href="/rentals.php">
                <div class="sprite promotional2"></div>
                Har du en eller flera bostäder att hyra ut? Med hjälp av hyrabo får du
                tillgång till ett heltäckande adminverktyg som hjälper dig att lätt hyra ut
                din bostad. Du kan hyra ut stugor, fritidshus, sommarhus, villor eller
                varför inte din lägenhet när du själv är på semester.
              </a>
            </dd>
          </dl>
          <dl>
            <dt>
              Kartsök
            </dt>
            <dd>
              <a href="/map.php">
                <div class="sprite promotional3"></div>
                Med vår kartsöksfunktion får du snabbt en överblick över vilka bostäder
                som finns tillgängliga i ett område och exact var dom ligger.
              </a>
            </dd>
            <dt>
              Betalningar
            </dt>
            <dd>
              <a href="/payments.php">
                <div class="sprite promotional4"></div>
                Betalningen av hyran sköter du enkelt med vår integrerade betalningslösning.
                Detta är inget tvång men ger både hyrare och uthyrare ett enkelt och säkert
                medel att genomföra betalningen.
              </a>
            </dd>
          </dl>
          <dl>
            <dt>
              Bildsök
            </dt>
            <dd>
              <a href="/pictures.php">
                <div class="sprite promotional5"></div>
                Bildsöksfunktionen hjälper dig att hitta ditt boende utifrån hur bostäderna
                ser ut. Utan en massa text och andra störande element presenterar vi så många
                hus bilder som din skärm tillåter, för att du snabbt ska kunna hitta dit
                drömboende.
              </a>
            </dd>
            <dt>
              Mäklare
            </dt>
            <dd>
              <a href="/company.php">
                <div class="sprite promotional6"></div>
                Hyrabos web system går även att använda av dig som är företagare och hyr ut
                flera bostäder. Du kan antingen lägga ut dina bostäder på www.hyrabo.com bland
                övriga hus, eller på en egen domän där bara dina bostäder finns. Eller båda
                och.
              </a>
            </dd>
          </dl>
      </div>
    </div>

    <?php include("include/footer.php"); ?>

  </div>

</body>
</html>