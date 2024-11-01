<?php
/*
Plugin Name: Twitter Counter Cache-rizer
Plugin URI: http://www.xcake.com.br
Description: Tired of an offline Twitter slowing your blog down? This script shows the ammount of followers you have without slowing down your blog or giving off an error if Twitter is down, because it records the last known number. Just add the following code to your template: &lt;?php xtcc('twitter_username'); &gt; or this code to your post: [twitter_counter user="your_username"]
Author: xCakeBlogs (Canha)
Author URI: http://www.xcake.com.br
Version: 1.1
*/
function tcc_installer() {if (is_null(get_option('tcc_followercount'))) update_option('tcc_followercount', '0');}
register_activation_hook(__FILE__, 'tcc_installer');

function xtcc($tcc_user) {
	$tcc_followers = xcTCC_getFollowers($tcc_user);
	$tcc_option = "tcc_followercount_".$tcc_user;
	$tcc_followercount = get_option($tcc_option);
	if (is_null($tcc_followers)) { echo $tcc_followercount; }
	else {update_option($tcc_option, $tcc_followers); echo $tcc_followers;} 
}

function xcTCC_script($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PORT, 80);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	$document = curl_exec($ch);
	curl_close($ch);
	return $document;
}

function xcTCC_getFollowers($tcc_user) {
	$urlpage_data = xcTCC_script("http://www.twitter.com/".$tcc_user);
	preg_match_all('#<span id="follower_count" class="stats_count numeric">(.*?)</span>#is', $urlpage_data, $urlmatches);
	$xtcc_number = $urlmatches[1][0];
	return $xtcc_number;
}

function xcTCC_twitter_short($atts) {
	extract(shortcode_atts(array("user" => 'xcake'), $atts));
	$tcc_followers = xcTCC_getFollowers($user);
	$tcc_option = "tcc_followercount_".$tcc_user;
	$tcc_followercount = get_option($tcc_option);
	if (is_null($tcc_followers)) { return $tcc_followercount; }
	else {update_option($tcc_option, $tcc_followers); return $tcc_followers;} 
}
add_shortcode('twitter_counter', 'xcTCC_twitter_short');
?>