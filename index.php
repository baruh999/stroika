<?php
// Query params are: utm_term={keyword}&utm_creative={ad_id}&utm_campaign={campaign_id}&utm_source={source}&position_type={position_type}&position={position}&gbid={gbid} 

require_once dirname(__FILE__) . '/kclick_client.php';
$client = new KClickClient('http://188.225.37.94/api.php?', 'pDy7rWx6gBrCdHT8');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>