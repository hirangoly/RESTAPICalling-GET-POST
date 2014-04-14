<?php
 
$options  = array (
  'http' => 
  array (
    'ignore_errors' => true,
  ),
);

print "hello";
 
$context  = stream_context_create( $options );
$response = file_get_contents(
  'https://public-api.wordpress.com/rest/v1/sites/66896949/posts/1/?pretty=1',
  false,
  $context
);
$response1 = json_decode($response,true);
echo $response1['site_ID'];
echo $response1['title'];
echo $response1['content']; 
?>
