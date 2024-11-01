=== Plugin Name ===
Contributors: canha
Donate link: http://bit.ly/xctcc
Tags: twitter, cache, count, followers, follow, counter, simple, customize, customizable, multiple, account, accounts
Requires at least: 2.9
Tested up to: 3.1
Stable tag: 1.1

Twitter Counter Cache-rizer show the number of followers a certain Twitter account has, even when Twitter is offline.

== Description ==

Tired of an offline Twitter slowing your blog down? This script shows the ammount of followers you have without slowing down your blog or giving off an error if Twitter is down, because it records the last known number. It's easy to install and to use.

Twitter Counter Cache-rizer shows the number of followers you have on a specific Twitter account as plain text, without no formating. Just add the code to your layout and you're good to go. And now with multiple Twitter account support!

Usage: place `<?php xtcc('twitter_username'); ?>` in your template where you want the code to be show. Or just add the new shortcode in your post: [twitter_counter user=`twitter_username`]. Will display as non-formated text.

*Been usefull for you? Show your love! [Donate today](http://bit.ly/xctcc "Show your love to the developer!")!*

== Installation ==

1. Upload `xtcc.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php xtcc('twitter_username'); ?>` in your template where you want the code to be show or `[twitter_counter user='twitter_username']` as shortcode in a post. Will print out as a normal, non-formated text.
1. Remember always to use only your username (without the @ sign)

== Frequently Asked Questions ==

= Why aren't my followers showing? =

Make sure your server's safe_mode is ON. If it's not, contact your service provider to make this change.

= The plugin shows my number of followers as 0 (zero). Why? =

When you install it, it shows the number of followers as zero until you insert the code in your template and run it for the first time. The next time anyone opens your blog, it should automatically update. If it doesn't, make sure your blogs cache is clean.

= I've cleaned my cache and still shows as 0 (zero) followers. Why? =

Are you sure you place the tag right? It must **exactly** as shown under "Installation", with the single quotes. Check out if your Twitter username is correct.

= Will this plugin show my number of followers even if my tweets are protected? =

Yes. It has been tested and it will display the amount of followers even if your Twitter account is protected.

= Can I add more than one tag for multiple (or same) Twitter accounts? =

Yes. The plugin supports multiple Twitter accounts and caches all of them.

= This plugin has changed my life forever! Can I show my appreciation by making a small donation? =

Sure! I accept PayPal donations. Just head on to http://bit.ly/xctcc - any amount is much appreciated!

= I have a question. How can I get an answer to it? =

Post in the Wordpress.org forums a question under the `Themes and Templates` section with `xtcc` tag and I'll get back to you. *Please avoid sending me e-mails*

== Screenshots ==

None

== Changelog ==

= 1.1 =
* Shortcode corrected. Will act as normal text.
* Timeout set from 30 to 10 seconds, improving pageload.
* Won't reset the cache to 0 followers when updated.

= 1.0 =
* Official 100% functional launch. Minor bugs corrected.

= 0.1.3 =
* Added shortcode to add in posts/widgets

= 0.1.2 =
* Some mixup with WP's plugin directory.

= 0.1.1 =
* Tested on 2nd of July 2010 when Fail Whale started appearing after the NED x BRA football game. Seems to be working fine.

== Upgrade Notice ==

None
