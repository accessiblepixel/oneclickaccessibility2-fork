=== OneClickAccessibility 2 Fork ===
Contributors: jcx, pojo.me, KingYes, ariel.k, jzaltzberg, bainternet, vishal-neochrome, T-I-G-I, julego, ivcreative, elementor
Tags: Accessibility, A11y, Toolbar, Tools, wcag, accessible
Requires at least: 6.0
Tested up to: 7.1
Stable tag: 2.2.7
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Looking for an alternative for the, Elementor Ally plugin, now it’s a cloud service? Why not the original with security fixes and a whole lot of features that people added as pulls, but were never pulled in. Grayscale mode fixed? A font to help those with Dyslexia? The ability to set a limit on text zoom?

Presenting the One Click Accessibility 2 – Fork, a hard fork from the original Elementor plugin to preserve a simple yet useful plugin that makes sites just a little bit more accessible and a little bit easier. No plugin is an instant fix to accessibility, but this gives you a better start, and you don’t need a cloud account or to pay a subscription for such a basic thing.

The Elementor Ally plugin will nag you to make an account with them, you have to import them as a data processor, and they have quite low limits on traffic. Say no, and stick to the original version you know and love.

If you find you’re using this, please tell your friends to consider using the fork if OCA2F gives you the exact amount of functionality you need whilst respecting your users privacy.

== Changelog ==

= 2.2.8 - 2026-09-15 =

This release will be a major update, that might break styles. Please test before deploying.

* **New:** Update check functionality, meaning that even if we're never able to get listed in the WP Plugins site, people can one click upgrade again.
* **Improved:** OpenDyslexic: Updated to latest version, and added the Bold/Italic/BoldItalic and Monospace versions.
* **Improved:** CSS: vastly reduced and optimised. Using global selector used to be slow, but now browsers handle it fine, and it makes maintanance easier for me.
* **Improved:** CSS: Improved High Contrast and Negative Contrast themes.
* **Improved:** CSS: text-zoom fixes to use 'em' rather than a percentage. Which (hopefully) fixes layered tags getting multiple zoom steps applied to them.
* **Improved:** Readded 'Readable Font' option, now with an appropriate toggle with OpenDyslexic so both options can't be enabled at the same time.
* **Chore:** Tested with WordPress 7.0.3 and 7.1 and confirmed support. No code changes. I won't be packaging a new release until there are actual changes, but this update confirms that WP 7.0 and WP 7.1 is supported until that happens.
* **Chore:** Update readme and fixed typos.

= 2.2.7 - 2026-04-01 =

* **Improved:** Developer quality of life feature request, allow text input for picking colours.
* **Improved:** Now you can specify the size (in px) of the toolbar. Recommended settings are 160-300px. It will let you use a silly value though, so test something sensible. Defaults to the original size of 180px

= 2.2.6 - 2026-03-29 =

* **Fixed:** If text zoom steps haven't been set, now it works at it should, and defaults to the maximum.

= 2.2.5 - 2025-10-23 =

* **Fixed:** Incorrect alignment of underlined links in the menu #9

= 2.2.4 - 2025-09-21 =

* **Improved:** Added serialisation and sanitisation to the new option to control font size, it wasn't being validated.
* **Improved:** Made the SVG icons have a description that's the same as a title. The way I've done it is a bit of a bodge and in future may want to add a separate field to admin to have a different description to title. Thanks @mve83 on e#72 for pointing this out.
* **Improved:** Made the steps for text size make more intuitive sense, and moved to 'Toolbar' page near the relevant option.

= 2.2.3 - 2025-09-20 =

* **Improved:** Control maximum zoom levels on site, thanks to e#103 by @vishal-neochrome
* **New:** Added new Visual Handicap SVG graphic option, thanks to e#92 and #94 - with a bit of fix up - thanks @T-I-G-I
* **Improved:** Improved support for HTML5 and fixing some issues with validation, thanks @julego

= 2.2.2 - 2025-09-20 =

* **Fix:** Grayscale mode is now working correctly, thanks to ivcreative leaving a pull request e#39 thank you for the fixes and thank you to @rainbowforgedev for getting me to check old pull requests that got closed as "deprecated" on Elementor's repo =D

= 2.2.1 - 2025-09-13 =

* **Improved:** Removed nag to install Elementor plugin when activating One Click Accessibility for the first time.

= 2.2.0 - 2025-05-16 =

* **Fix:** Backported the fixes from Elementor's "Legacy" version to this version (mainly the XSS admin vulnerability.)
* **Changed:** Changed plugin name, directory, and links to disconnect it from the WordPress Plugins Repository so it can't be auto updated
* **New:** Support for the OpenDyslexic font, rather than the 'Readable Font' from earlier, to better support those with dyslexia.
* **Not tested:** I'm not sure what version of PHP is required. I tested it with PHP 8.2 and WordPress 6.8.1, so I updated the tested to version, but didn't touch the minimum or required PHP version.
