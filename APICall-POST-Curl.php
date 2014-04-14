<?php
$ch = curl_init();
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
 
$fields  = stream_context_create( $options );
$fields_string = "";
//url-ify the data for the POST
/*foreach($fields as $key=>$value) 
{ 
 $fields_string .= $key.'='.$value.'&';
}
rtrim($fields_string, '&');*/
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://public-api.wordpress.com/rest/v1/sites/66896949/posts/1/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
$curl_response = curl_exec($ch);
echo $curl_response['site_ID'];
echo $curl_response['title'];
echo $curl_response['content']; 
if ($curl_response === false) {
    $info = curl_getinfo($ch);
    curl_close($ch);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($ch);
$decoded = json_decode($h);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
var_export($decoded->response);
echo $curl_response['site_ID'];
echo $curl_response['title'];
echo $curl_response['content']; 
?>
