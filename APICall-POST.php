<?php
 
$options  = array (
  'http' => 
  array (
    'ignore_errors' => true,
    'method' => 'POST',
    'header' => 
    array (
      0 => 'authorization: Bearer eo3CqXVQGMFunIPQ64yuLl$jd@cN18a^oA4zObdls@t9JcKiF7(b#%dJTa0Ct*BZ',
      1 => 'Content-Type: application/x-www-form-urlencoded',
    ),
    'content' => http_build_query(   
      array (
        'title' => 'Hello World (Again)',
        'content' => 'Hello. I am an edited post. I was edited by the API',
        'tags' => 'tests',
        'categories' => 'API',
      )
    ),
  ),
);
 
$context  = stream_context_create( $options );
$response = file_get_contents(
  'https://public-api.wordpress.com/rest/v1/sites/66896949/posts/1/',
  false,
  $context
);
$response = json_decode($response, true);
echo $response['URL'];
echo $response['title'];
echo $response['content']; 
?>
