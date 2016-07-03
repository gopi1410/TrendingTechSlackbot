<?php
	require_once('TwitterAPIExchange.php');
	
	require_once('MyTwitterOauthKeys.php');

	$tUsers= array("fwd","verge","businessinsider","Entrepreneur","Forbes","TheEconomist","EconomicTimes","Kissmetrics","nytimes","NewYorker", "BBCBreaking","BBCWorld","engadget","lifehacker","TechCrunch","mashabletech","WIREDScience","TheNextWeb","Gizmodo","techradar");
	$selectedUser = $tUsers[array_rand($tUsers)];

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$getfield = '?screen_name='.$selectedUser.'&count=10';
	$requestMethod = 'GET';
	$twitter = new TwitterAPIExchange($settings);
	
	$arr = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(), true);
             
        
        $arr=$arr[rand(0,9)];
	$text = $arr['text'];
	echo $text;
	echo "\n";
	echo $arr['entities']['urls'][0]['expanded_url'];
	