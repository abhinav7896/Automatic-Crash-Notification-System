# Automatic-Crash-Notification-System

->Used ESP8266 Wi-Fi SoC that contains TCP/IP stack and a microcontroller. It was flashed with firmware written in C++, using Arduino IDE. The firmware configures the SoC in STA (station) mode and connects it to the access point on driver’s mobile phone (personal hotspot).

->The crash sensors and the GPS module in the vehicle are interfaced to the microcontroller. The firmware reads the GPS and posts the coordinates to the PHP service on a remote WAMP server, in the event of an accident, which inserts the coordinates into the table in MySQL database.

->Another PHP service retrieves the coordinates from the MySQL database and calls the Firebase Cloud Messaging API to push a notification to the other user. Upon tapping on the notification, the pinpoint location of the crashed vehicle can be seen on the map through Google Maps API, on the android application.
