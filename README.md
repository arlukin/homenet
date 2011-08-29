Credits
=======
* Thanks Santosh Setty (http://webdesigninfo.wordpress.com/) for your
  glossy horizontal menu.
  http://www.dynamicdrive.com/style/csslibrary/item/glossy_horizontal_menu/

Konkurrenter
============

Turistcenter syd
----------------
http://www.turistcentersyd.se/ l�gger ut sina bost�der p� http://www.sverigesemester.com/.

http://sveaborg.cybercow.se/ad

Specification
=============

* Spara bilder p� flickr?

Kolla: http://www.sverigesemester.com/semester/stuga-stugor/boende-2145/vinter-sommar-0/erbjudande-0/0-index.html

accommodation_id
name
description
livinig_space
max_people
description
minimum_rental_period
minimum_rental_period_type [dag|vecka|m�nad]
change_day: {S�ndag}
type  [L�genhet|hus|hotell|vandrarhem]
bussiness_type [for_sale|rental]

rooms
bedrooms
kitchens
livingrooms
bathrooms
toilets
other_rooms

beds
singel_beds
double_beds
single_sofabeds
double_sofabeds
bunk_beds
extra_beds
cots

meters_to_beach
meters_to_lake
meters_to_sea
meters_to_trainstation
meters_to_airport
meters_to_restaurant
meters_to_fishing
meters_to_skiing
meters_to_golf

PROPERTIES
cdplayer_available
tv_available
radio_available
shower_available
fireplace_available
bath_available
garden_furniure_available
bicyble_available
parking_available
stove_available
barbecue_available
oven_available
refrigerator_available
freezer_available
balcony_available
terrace_available
microwave_available
coffe_machine_available
boat_available
motorbot_available
dishwasher_available
laundry_machine_available
tumble_dryer_available
pool_available
sauna_available

ALLOWED
smoking_allowed
anmial_allowed


Kommentarer {discus?}
Tillg�ngliga datum: och priser

DATABASE
========

accommodation
-------------
accommodation_id
name
description
livinig_space
max_people

price
-----
price_id
from_date
to_date
day_price
currency

reservation
------------
reservation_id
accomodation_id
customer_id
checkin_date
checkout_date

customer
--------
customer_id
name
phone

�verlappade pris perioder?
SELECT
  sum(((to_date - $to) - ($from - from_date))*day_price) as price
FROM
accommodation
INNER JOIN price USING(accomodation_id)
LEFT  JOIN reservation ON (accommodation.accomodation_id = reservation.accommodation_id and
                           checkin_date > $from and checkout_date < $to)
WHERE
  price.from_date > $from AND
  price.to_date < $to AND
  reservation_id IS NULL
GROUP BY
  accommodation_id