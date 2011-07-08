TODO
====

# Create basic map layout.

* Create the accomodation table in fusion tables.

* Create javascript to display info from the accomdation table.

* Create nice looking map popup page.

* Create house page ie. homenet.com/stuguthyrning_i_småland_ab/sveaborg
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