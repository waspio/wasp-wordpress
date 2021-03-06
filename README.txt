=== Wasp.io ===
Contributors: waspio
Donate link: 
Tags: errors, warnings, reporting
Requires at least: 3.0
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin automatically grabs all errors created by WordPress, Wordpress plugins, and Wordpress Themes and notifies you in realtime.

== Description ==

This plugin is designed to handle errors outside of the ordinary errors thrown by Wordpress plugins, Wordpress, and any other code within your wordpress website.

**You must have a [Wasp.io](https://wasp.io/) account in order to use this plugin.  Sign up for free, no credit card needed**

A 14 day free trial is provided for all Wasp users.

Wasp.io automatically tracks errors generated by your applications, intelligently notifies your team, and provides realtime data feeds of errors and activity for all of your websites by sending the details of generated errors to the Wasp API.

== Installation ==

1. Install Wasp either via the WordPress.org plugin directory, or by uploading the files to your server
2. After activating Wasp from the 'Plugins' menu in Wordpress, you need to sign up at [https://wasp.io](https://wasp.io/) for an API Key.
3. If you don't yet have a Wasp.io account, you can quickly create one at [Wasp.io](https://wasp.io/).
4. That's it.  Wasp will now automatically track your errors!

== Frequently asked questions ==

= Where do I get a Wasp API key? =

Once you have a Wasp.io account, and have created a project, navigate to the project settings, and your API key will be shown there.

= Why should I use Wasp? =

Errors slow down, and can take down your websites, and often the only notification you get is from a panicking client, or a visitor nice enough to let you know; Wasp.io automatically overrides the default error handling of your Wordpress (or other) sites, and sends those errors (including fatal errors) to the WaspAPI for grouping, filtering, and notification in realtime.

= Where does the data go? =

Error details are sent to the Wasp API (all things Waspside are SSL only for security) for filtering, notification, and management through your user account.  Since debugging is already a task, Wasp sends as much information as possible including full stacktrace information, browser information, the code where an error was generated, and user email, user name, and user ID of logged in users (if the option to track users is enabled from the settings page).

= What happens after the 14 day trial period expires? =

If after using Wasp, if you aren't inclined to pay for a subscription after the 14 day trial period expires, you'll still have full access to your Wasp account and any projects you've been added to by owners of other accounts.  API requests for projects associated with expired accounts are just rejected.

== Screenshots ==

1. 

== Changelog ==

= 2.2.1 =
* Fixed support for required PHP5.3.0 version
* Updated plugin files to more clearly represent free trial period for Wasp service

= 2.2.0 =
* Added support for user defined filters to remove potentially sensitive data
* Consolidated configuration options
* Better presentation of ignored levels within admin

= 2.1.7 =
* Added warning for PHP version 5.3 and below
* Added try/catch block

= 2.1.6 =
* Initial Wordpress Plugin release

== Upgrade notice ==

= 2.1.6 = 
* Initial Wordpress Plugin release

== Additional Information ==

This plugin sends the details of errors generated by your Wordpress site to the Wasp API.  Error details include a full stacktrace (the functions and files through which the error was generated), the code surrounding the file and line where the error was generated, information on the browser, operating system, and other information relating to the visitor generating the error.  If the "track users" option is enabled in the Wasp settings page, the user ID, user name, and email of currently logged in users generating the error will also be sent to the Wasp API.

If the option to track javascript or ajax errors is enabled, this plugin automatically includes wasp.js and wasp.ajax.js from Wasp servers on your website.