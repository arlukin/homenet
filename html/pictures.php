<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
  <head>
    <title>Pictures</title>

    <meta name="author" content="Daniel Lindh" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="imagetoolbar" content="no"/>

    <!-- CSS - Begin -->
    <link rel="stylesheet" type="text/css" href="/js/qtip/jquery.qtip.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/screen-map.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/screen-picture-search.css" media="screen" />    
    <!-- CSS - End -->

    <!-- JQuery - Begin -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/qtip/jquery.qtip.min.js"></script>
    <!-- JQuery - End -->

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

      <?php include("include/map-search.php"); ?>

      <div id="content">
        <div class="inner border">
          <?php for ($i=1; $i < 100; $i++) { ?>
          <a class="picture-search" href="sveaborg.php" title="Det här är ett nedrans fint hus">
            <img id="ts1" src="/images/picture-search/<?= $i % 24 ?>.jpg" alt="Sveaborg">
          </a>
          <?php } ?>
        </div>
      </div>      

      <?php include("include/footer.php"); ?>
      
    </div>    

    <!-- JQuery - Begin -->    
    <script type="text/javascript">
    $(document).ready(function()
    {
      // Match all <A/> links with a title tag and use it as the content (default).
      $('a[title]').qtip({
        position: {
          my: 'right center',
          at: 'center left', 
          viewport: $(window)
        },
      });

      // Tooltip over all pictures.
      var shared = {
        content: {
          text: 'Loading...', 
          ajax: {
            url: '/pictures-qtip.php',
            type: 'GET',
            data: { id: 3},
            loading: true
          }
        },
        position: {
          my: 'top center',  
          at: 'bottom center', 
          viewport: $(window)
        },
        show: {
          solo: true
        },
        hide: {
          fixed: true,
          delay:200
        },
        style: {
          classes: 'ui-tooltip-green ui-tooltip-shadow ui-tooltip-rounded',
          
        }
      };

      $('.picture-search').qtip( $.extend(true, shared, {
        content: {
          ajax: {
            data: { id: 3}
          }
        },
      }));

    });
    </script>
    <!-- JQuery - End -->
  </body>
</html>