TODO
====

# Create basic map layout.

* Create the accomodation table in fusion tables.

* Create javascript to display info from the accomdation table.

* Create nice looking map popup page.

* Create house page ie. homenet.com/stuguthyrning_i_sm�land_ab/sveaborg
  homenet.com/sveaborg
  sveaborg.home.net

* Display menu button, have a look at gravatar.
  http://www.dynamicdrive.com/style/csslibrary/item/jquery_drop_line_tabs/

* Display prices.

* Display free room/house.

* Hover over marker, and display house info in a window.
    /* Click listener */
    // http://code.google.com/apis/maps/documentation/javascript/reference.html#FusionTablesMouseEvent
    google.maps.event.addListener(layer, 'click', function(kmlEvent) {
      var text = kmlEvent.infoWindowHtml;
      showInContentWindow(text);
    });

    function showInContentWindow(text) {
      var sidediv = document.getElementById('content_window');
      sidediv.innerHTML = text;
    }

* Use fustiontable/heatmap thing. To display the price level on different areas.
  http://code.google.com/apis/maps/documentation/javascript/examples/layer-fusiontables-styling.html

* Add photos
  http://code.google.com/apis/maps/documentation/javascript/examples/layer-panoramio-widget.html
  http://code.google.com/apis/maps/documentation/javascript/examples/layer-georss.html
  
* Add data to fusion tables with python.
  http://code.google.com/p/fusion-tables-client-python/source/browse/trunk/src/samples/clientlogin_example.py

* Use the fusion table with a map
  https://www.google.com/fusiontables/DataSource?dsrcid=1096601

* Nice forms
  http://www.sitepoint.com/fancy-form-design-css-7/
  http://24ways.org/2009/have-a-field-day-with-html5-forms

* Add http://www.olark.com/blog/

* Snyggare knappar.
  http://www.dynamicdrive.com/style/csslibrary/item/css3_gradient_menu_buttons/

* Copyright bar blocks the google t&c button.

* Use the images to get a nicer copyright bar on the bottom of the page
  http://www.dynamicdrive.com/style/csslibrary/item/glossy_horizontal_menu/

* En thumbnail sida liknande
  http://www.prisjakt.nu/kategori.php?b=2

* Good reading
  http://coding.smashingmagazine.com/2009/04/08/from-table-hell-to-div-hell/
  http://www.alistapart.com/articles/prettyaccessibleforms

* Eng�ng per �r skicka mail/ringa alla hus�gare och be dom uppdatera sin annons.

* En area d�r man kan l�gga in en kommentar om vilka andra sidor som man
  lagt ut sin annons p�.

* Sammarbeta med andra siter, och l�gg in annons automatiskt hos dom.
  Fr�ga anv�ndaren om han vill det, och om han vill betala f�r det.

* MAMP
  http://localhost:8888/MAMP/?language=English

* Cool image thing
  http://www.ferryhalim.com/orisinal/

* Nice tab-page menu
  http://www.komodomedia.com/

* Gallery example
  http://livepipe.net/control/tabs#image_1

* Good looking design
  http://savethepixel.org/
  http://jelastic.com/docs/upload-deploy-application
  http://www.plaxo.com/
  http://www.webdesignfromscratch.com/web-design/current-style/

* Use the bottom up/down thingie.
  http://www.webdesignfromscratch.com/web-design/current-style/
  http://camille.boidron.me/

* The cloud at the bottom, but at house or something.
  http://www.secondpicture.com/tutorials/web_design/css_ul_li_horizontal_css_menu.html

* http://soundcloud.com/tour/
  The footer and the square.

* The footer http://www.searchengineoptimisationbristol.com/

* Frameworks
  http://codeigniter.com/

* DATABAS
  Ett hus ska kunna ligga p� flera uthyrnings f�retag.
  Hus �garen �r den som har tillg�ng till att regigera sitt hus.
  Uthyrningsf�retagen kan i vissa fall g� in och redigera dessa hus ocks�.

* Add calender page to http://localhost:8888/sveaborg.html.
* Add price page to http://localhost:8888/sveaborg.html.
* Add galleries page to http://localhost:8888/sveaborg.html.
  Take pictures from http://sveaborg.cybercow.se/sv/bilder-av-stommarstuga-fritidshus-foer-uthyrning
* Add translations to http://localhost:8888/sveaborg.html.
