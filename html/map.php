<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
  <head>
    <title>Kartsök</title>

    <meta name="author" content="Daniel Lindh" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="imagetoolbar" content="no"/>

    <!-- CSS - Begin -->
    <link rel="stylesheet" type="text/css" href="css/screen-map.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/footer.css" media="screen" />
    <!-- CSS - End -->

    <!-- JQuery - Begin -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
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

    <!-- google map - Begin -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=se&region=se&key=ABQIAAAAF5bIhltbkNqCPFnOWGpVORS6UKxT1WJ8urQdsBWaKBNv0q7aUxTX6tthNtdX3PXsobBzz5nUKI1WEw"></script>
    <script type="text/javascript">
      var table_id = 1115855;
      var map;
      var layer;

      // SQL Query where clause.
      var where;

      function add_where(query, value) {
        if (query && value) {
          if (where) {
            where += " AND ";
          }

          if (value == true) {
            value = 1;
          }

          where += query.replace("$", value);
        }
      }

      function get_where() {
        where = "";

        add_where("livinig_space >= $", document.getElementById("livinig_space_from").value);
        add_where("livinig_space <= $", document.getElementById("livinig_space_to").value);

        add_where("total_beds >= $", document.getElementById("min_beds").value);
        add_where("total_beds <= $", document.getElementById("max_beds").value);

        add_where("total_rooms >= $", document.getElementById("min_rooms").value);
        add_where("total_rooms <= $", document.getElementById("max_rooms").value);

        add_where("meters_to_beach <= $", document.getElementById("meters_to_beach").value);
        add_where("meters_to_lake <= $", document.getElementById("meters_to_lake").value);
        add_where("meters_to_restaurant <= $", document.getElementById("meters_to_restaurant").value);
        add_where("meters_to_fishing <= $", document.getElementById("meters_to_fishing").value);
        add_where("meters_to_sea <= $", document.getElementById("meters_to_sea").value);
        add_where("meters_to_skiing <= $", document.getElementById("meters_to_skiing").value);
        add_where("meters_to_trainstation <= $", document.getElementById("meters_to_trainstation").value);
        add_where("meters_to_golf <= $", document.getElementById("meters_to_golf").value);
        add_where("meters_to_airport <= $", document.getElementById("meters_to_airport").value);

        add_where("apartment == $", document.getElementById("apartment").checked);
        add_where("house == $", document.getElementById("house").checked);

        add_where("rental == $", document.getElementById("rental").checked);
        add_where("for_sale == $", document.getElementById("for_sale").checked);

        add_where("pool_available = $", document.getElementById("pool").checked);
        add_where("boat_available = $", document.getElementById("boat").checked);
        add_where("motorboat_available = $", document.getElementById("motorboat").checked);
        add_where("laundry_machine_available = $", document.getElementById("laundry_machine").checked);
        add_where("dishwasher_available = $", document.getElementById("dishwasher").checked);
        add_where("sauna_available = $", document.getElementById("sauna").checked);

        add_where("smoking_allowed = $", document.getElementById("smoking").checked);
        add_where("animal_allowed = $", document.getElementById("animal").checked);

        if (where) {
          where = " WHERE " + where;
        }

        return where;
      }

      function is_new_where() {
        old_where = where;
        new_where = get_where();
        if (old_where == new_where)
          return false;
        else
          return true;
      }

      function get_query() {
        var query = "select latitude FROM 1115855" + get_where();
        //alert(query);
        return query;
      }

      function search() {
        if (is_new_where()) {
          layer.setQuery(get_query());
        }
      }

      function initialize() {
        var myOptions = {
          zoom: 10,
          center: new google.maps.LatLng(10.75876, -85.37543),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        layer = new google.maps.FusionTablesLayer(1115855);
        layer.setMap(map);

        search()
      }

    </script>
    <!-- google map - End -->

  </head>

<body onload="initialize()">

<div id="wrap">

  <?php include("include/map-search.php"); ?>

  <!-- Content - Begin -->
  <div style="height: 100%; width:100%; min-width: 1258px;">
    <div id="map_canvas" style="width: 100%;height:100%;min-width: 1258px;"></div>
  </div>
  <!-- Content - End -->

  <?php include("include/footer.php"); ?>

</div><!--/ #wrap -->

</body>
</html>