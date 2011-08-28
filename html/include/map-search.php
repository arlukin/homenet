  <!-- Stickybar - Begin -->
  <div id="stickybar" class="expstickybar">

    <!-- Map search criterion - Begin -->
    <div id="map_search">
      <form>
        <table border="0">
          <tr>
            <td><label for="livinig_space_from">Boarea</label></td>
            <td><label>Bostadstyp</label></td>
            <td><label>Max avstånd till</label></td>
            <td></td>
            <td><label>Tillgång till</label></td>
            <td></td>
            <td rowspan="6">
              <label for="order_by" class="select_label">Sortera på</label>              
              
              <select id="order_by" tabindex="19" onchange="search();">
                <option value="price">Pris</option>
                <option value="area">Område</option>
              </select>

              <br/>
 
              <input type="button" class="button" value="Bildsök" onclick="search();"></input><br/>
              <input type="button" class="button" value="Kartsök" onclick="search();"></input>
            </td>
          </tr>

          <tr>
            <td>
              <input id="livinig_space_from" type="input" value="" alt="from" onblur="search();"></input>
              <input id="livinig_space_to" type="input" value="" onblur="search();"></input>
            </td>

            <td>
              <input id="apartment" type="checkbox" value="" onclick="search();"></input>
              <label for="apartment" class="checkbox_label">Lägenheter</label>
            </td>

            <td>
              <label for="meters_to_beach" class="select_label">Strand</label>
              <select id="meters_to_beach" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <label for="meters_to_restaurant" class="select_label">Restaurang</label>
              <select id="meters_to_restaurant" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <input id="pool" type="checkbox" value="" onclick="search();"></input>
              <label for="pool" class="checkbox_label">Pool</label>
            </td>

            <td>
              <input id="sauna" type="checkbox" value="" onclick="search();"></input>
              <label for="sauna" class="checkbox_label">Bastu</label>
            </td>
          </tr>

          <tr>
            <td><label for="min_beds">Sängplatser</label></td>

            <td>
              <input id="house" type="checkbox" value="" onclick="search();"></input>
              <label for="house" class="checkbox_label">Hus</label>
            </td>

            <td>
              <label for="meters_to_lake" class="select_label">Sjö</label>
              <select id="meters_to_lake" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <label for="meters_to_fishing" class="select_label">Fiske</label>
              <select id="meters_to_fishing" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <input id="boat" type="checkbox" value="" onclick="search();"></input>
              <label for="boat" class="checkbox_label">Båt</label>
            </td>

            <td><label>Tillåtet med</label></td>
          </tr>

          <tr>
            <td>
              <input id="min_beds" type="input" value="" onblur="search();"></input>
              <input id="max_beds" type="input" value="" onblur="search();"></input>
            </td>

            <td><label>Tillgänglighet</label><br></td>

            <td>
              <label for="meters_to_sea" class="select_label">Hav</label>
              <select id="meters_to_sea" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <label for="meters_to_skiing" class="select_label">Skidåkning</label>
              <select id="meters_to_skiing" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <input id="motorboat" type="checkbox" value="" onclick="search();"></input>
              <label for="motorboat" class="checkbox_label">Motorbåt</label>
            </td>

            <td>
              <input id="smoking" type="checkbox" value="" onclick="search();"></input>
              <label for="smoking" class="checkbox_label">Rökning</label>
            </td>
          </tr>

          <tr>
            <td><label for="min_rooms">Rum</label></td>

            <td>
              <input id="rental" type="checkbox" value="" onclick="search();"></input>
              <label for="rental" class="checkbox_label">Uthyres</label>
            </td>

            <td>
              <label for="meters_to_trainstation" class="select_label">Tågstation</label>
              <select id="meters_to_trainstation" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <label for="meters_to_golf" class="select_label">Golf</label>
              <select id="meters_to_golf" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td>
              <input id="laundry_machine" type="checkbox" value="" onclick="search();"></input>
              <label for="laundry_machine" class="checkbox_label">Tvättmaskin</label>
            </td>

            <td>
              <input id="animal" type="checkbox" value="" onclick="search();"></input>
              <label for="animal" class="checkbox_label">Husdjur</label>
            </td>
          </tr>

          <tr>
            <td>
              <input id="min_rooms" type="input" value="" onblur="search();"></input>
              <input id="max_rooms" type="input" value="" onblur="search();"></input>
            </td>

            <td>
              <input id="for_sale" type="checkbox" value="" onclick="search();"></input>
              <label for="for_sale" class="checkbox_label">Till salu</label>
            </td>

            <td>
              <label for="meters_to_airport" class="select_label">Flygplats</label>
              <select id="meters_to_airport" tabindex="19" onchange="search();">
                <option value="">Alla</option>
                <option value="100">100m</option>
                <option value="500">500m</option>
                <option value="1000">1km</option>
                <option value="5000">5km</option>
              </select>
            </td>

            <td></td>

            <td>
              <input id="dishwasher" type="checkbox" value="" onclick="search();"></input>
              <label for="dishwasher" class="checkbox_label">Diskmaskin</label>
            </td>

            <td>              
            </td>
          </tr>
        </table>
      </form>
    </div>
    <!-- Map search criterion - End -->

    <!-- Display toolbar button - Begin -->
    <div id ="toolbar" style="width:20px; height:20px;text-align:center;margin:auto;">
      <a href="#togglebar"><img src="images/open.gif" data-closeimage="images/close.gif" data-openimage="images/open.gif" style="border-width:0;" /></a>
    </div>
    <!-- Display toolbar button - End -->

  </div>
  <!-- Stickybar - End -->  