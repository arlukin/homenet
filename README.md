

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
Torktumlare
CD-Spelare
TV
Sat-TV
V�ningss�ng
Radio
Dusch
Kamin
Badkar
Tr�dg�rdsm�bler
Spis
Grill
Ugn
Cyklar
Kylsk�p
Parkeringsplats
Frys/-fack
Balkong
Diskmaskin
Terrass
Mikrov�gsugn
B�t/Kanot
Kaffebryggare
Motorb�t/B�tmotor
Tv�ttmaskin
R�kning?
Husdjur?
Pool
Bastu

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