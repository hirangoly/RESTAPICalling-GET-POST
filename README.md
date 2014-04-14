RESTAPICalling-GET-POST
=======================
Here is a demo of REST API call in php using GET & POST method.

In my example I called Wordpress Rest API thorugh PHP code. In my scenario I need to post content to my wordpress site using button click on php application.

* First you need to authorize your php application to get access to wordpress .
  * Register to https://developer.wordpress.com/ to get client id and client secret key
  * Follow this document to get access token and site id for you domain. http://developer.wordpress.com/docs/oauth2/
* Now you can use your access token and site id for calling wordpress API.
* As an example I am calling /sites/$site/posts/$post_ID POST API to Edit Post in wordpress through my PHP application. script APICall-POST.php
* I also uploaded a script for API call using GET method
* There one more script for API call using POST method in PHP but using curl command.
