=== WP NGP ActionTag Plugin ===
Contributors: signalfade, rwwmatt, dauzy
Tags: NGP, NGPVAN, donations, FEC, politics, fundraising, signup, volunteer, petition
Requires at least: 4.0.0
Tested up to: 4.1.1
Stable tag: 2.0

*Please note*: This plugin is not produced or supported by NGPVAN.

Integrate NGP donation, signup, petition and volunteer forms with your site. You'll need an SSL certificate running on your site if you want to embed the donation forms.

== Description ==

Please note: This plugin is not produced or supported by NGPVAN.

Instead, it is produced and supported by Revolution Messaging, LLC.
You can email support@revolutionmessaging.com.

This plugin requires an NGP account and API Key. An API key can be requested from NGPVAN here: http://developers.ngpvan.com/apiKey/request

This plugin utilizes the ActionTag javascript to embed forms, so you must also request that they whitelist the URLs you will be embedding the forms on.

Current version of plugin only support shortcode embedding.

Show success message upon successful submission:

`[actiontag id="1234327864327812" success="Thank You!"]`

Redirect to other page upon successful submission:

`[actiontag id="1234327864327812" success="http://bettermotherfuckingwebsite.com/"]`

We will support auto-render of published forms in a later version.

== Installation ==

Go to `Settings -> NGP ActionTag` and fill out the "API Key" and "API Endpoint" fields.

== Usage ==


== Changelog ==

= 2.0 =
* Supporting for more options on shortcode.
* Support for auto-render of published forms.

= 1.0 =
* First version. Shortcodes with success configuration.