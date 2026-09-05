## One Click Accessibility 2 Fork

Looking for an alternative for the, Elementor Ally plugin, now it’s a cloud service? Why not the original with security fixes and a whole lot of features that people added as pulls, but were never pulled in. Grayscale mode fixed? A font to help those with Dyslexia? The ability to set a limit on text zoom?

Presenting the One Click Accessibility 2 – Fork, a hard fork from the original Elementor plugin to preserve a simple yet useful plugin that makes sites just a little bit more accessible and a little bit easier. No plugin is an instant fix to accessibility, but this gives you a better start, and you don’t need a cloud account or to pay a subscription for such a basic thing.

The Elementor Ally plugin will nag you to make an account with them, you have to import them as a data processor, and they have quite low limits on traffic. Say no, and stick to the original version you know and love.

If you find you’re using this, please tell your friends to consider using the fork if OCA2F gives you the exact amount of functionality you need whilst respecting your users privacy. 🙂


This fork is looked after by jcx and is currently available online at [https://oneclickaccessibility.com](https://oneclickaccessibility.com/)

----

#### Why Fork?

I started this fork because OCA2 did everything I wanted it to, and Elementor have not only required an account to use their later changes, it also requires making additional changes to your terms and conditions to incorporate Elementor's processing of your user's data.

In my opinion, they bought or otherwise acquired a popular WordPress plugin and used it as a means to acquire more users for their service(s). I do not believe that an accessibility function should be tied into a separate entity's analytics and limited by page views or requests. For a time it also included Google Fonts, which is troublesome in the EU, though this may have changed in newer versions. The original, and this fork, do not.

Since the Elementor version still includes (what they call the 'Legacy' version) the original code which can be used until a site admin is nagged enough to upgrade and make an account, it was possible to backport the security fixes from it and refactor the code to match their "legacy" version, minus the extra namespace stuff they added to separate the module from their new version with anti-features.

I also added the OpenDyslexic font, a free font that makes things more readable for those with dyslexia. I just felt it was a better feature than the "readable font". I don't have dyslexia but I've heard from many people that say that the font being available is transformative to their experience.

I will do my best to keep the plugin updated, but this is the first proper fork I've managed so contributions and suggestions are welcome.

----

### Details

**Contributors:** jcx, pojo.me, KingYes, ariel.k, jzaltzberg, bainternet, vishal-neochrome, T-I-G-I, julego, ivcreative, elementor  
**Tags:** Accessibility, A11y, Toolbar, Tools, wcag, accessible  
**Requires at least:** 4.1  
**Tested up to:** 7.0  
**Requires PHP:** 5.4  
**Stable tag:** 2.2.7  
**License:** GPLv2 or any later version.

---

While most accessibility issues can’t be addressed without directly changing your content, One Click Accessibility adds a number of helpful accessibility features with the minimum amount of setup and without the need for expert knowledge.

#### Accessibility Toolbar:

Add a toolbar toggling that allows you to set:

* Resize font (increase/decrease)
* Grayscale
* Negative Contrast
* High Contrast
* Light Background
* Links Underline
* OpenDyslexic Font (OFL Licensed)
* Link to Sitemap / Feedback / Help pages

#### Accessibility Features:

* Enable skip to content
* Add outline focus for focus able elements
* Remove the target attribute from links
* Add landmark roles to all links
* Customizer for style adjustment

#### Other Features:
* No cloud account or connectivity required
* Doesn't use Google Fonts
* No updates to site terms and conditions required.
* Only cookies that are set are user preferences on interaction (to remember the mode) which is classified as "Functional Cookies", so should be GDPR compliant 

#### Contributions:

Would you like to contribute to One Click Accessibility? You are more than welcome to submit your requests, either on GitHub or on my own git infrastructure (once I get it up and running). :)

I'm still learning how to best handle running the fork, but issues and comments are open for feedback and PRs - just be nice to each other.

----
### Installation


#### Upgrade from the Old 2.1.0 Version (or Later Elementor Version If Still in 'Legacy Mode')

Upgrading should be fairly simple. Deactivate the existing plugin, and follow either of the installation methods. Then activate the fork version, and make sure your settings are still correct - It should use existing settings from the old version.

**Easy Installation**
1. Download the ZIP file from the [website](https://oneclickaccessibility.com/latest-download.html) or GitHub releases.
2. Go to plugins > Add New > Upload ZIP
3. Navigate to where you downloaded the zip version and upload it.
4. Activate the plugin through the 'Plugins' menu in WordPress
5. Go to the plugin page (under Dashboard > Accessibility)
6. Enjoy!

**Manual Installation**
1. Download the ZIP file, either from the [website](https://oneclickaccessibility.com/latest-download.html) or GitHub releases.
2. Extract the zip file and just drop the contents in the <code>wp-content/plugins/</code> directory of your WordPress installation
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Go to the plugin page (under Dashboard > Accessibility)
5. Enjoy!


#### Screenshots

1. Accessibility Customizer
2. Accessibility Toolbar
3. Grayscale Mode
4. Negative Contrast Mode
---

### Changelog
2.2.8 - 2026-08-10
* Chore: Tested with WordPress 7.0.3 and 7.1 and confirmed support. No code changes. I won't be packaging a new release until there are actual changes, but this update confirms that WP 7.0 and WP 7.1 is supported until that happens.
* Chore: Update readme and fixed typos.

2.2.7 - 2026-04-01
* Improved - Developer quality of life feature request, allow text input for picking colours. [#3](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/3)
* Improved - Now you can specify the size (in px) of the toolbar. Recommended settings are 160-300px. It will let you use a silly value though, so test something sensible. Defaults to the original size of 180px [#12](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/12)

2.2.6 - 2026-03-29
* Fixed: If text zoom steps haven't been set, now it works at it should, and defaults to the maximum. [#8](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/8)

2.2.5 - 2025-10-23
* Fixed: Incorrect alignment of underlined links in the menu [#9](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/9)

2.2.4 - 2025-09-21
* Improved: Added serialisation and sanitisation to the new option to control font size, it wasn't being validated.
* Improved: Made the SVG icons have a description that's the same as a title. The way I've done it is a bit of a bodge and in future may want to add a separate field to admin to have a different description to title. Thanks @mve83 on [e#72](https://github.com/elementor/one-click-accessibility/issues/72) for pointing this out.
* Improved: Made the steps for text size make more intuitive sense, and moved to 'Toolbar' page near the relevant option.

2.2.3 - 2025-09-20
* Improved: Control maximum zoom levels on site, thanks to [e#103](https://github.com/elementor/one-click-accessibility/pull/103) by @vishal-neochrome
* New: Added new Visual Handicap SVG graphic option, thanks to [e#92](https://github.com/elementor/one-click-accessibility/pull/92) and [#94](https://github.com/elementor/one-click-accessibility/pull/94) - with a bit of fix up - thanks @T-I-G-I
* Improved: Improved support for HTML5 and fixing some issues with validation, thanks to [e#55](https://github.com/elementor/one-click-accessibility/pull/55) and [e#56](https://github.com/elementor/one-click-accessibility/pull/56) thanks @julego

2.2.2 - 2025-09-20
* Fix: Grayscale mode is now working correctly, thanks to ivcreative leaving a pull request [e#39](https://github.com/elementor/one-click-accessibility/pull/63) thank you for the fixes and thank you to @rainbowforgedev for getting me to check old pull requests that got closed as "deprecated" on Elementor's repo =D


2.2.1 - 2025-09-13
* Improved: Removed nag to install Elementor plugin when activating One Click Accessibility for the first time.

2.2.0 - 2025-05-16
* Fix: Backported the fixes from Elementor's "Legacy" version to this version  
  Mainly the XSS admin vulnerability, reported ([here](https://patchstack.com/database/wordpress/plugin/pojo-accessibility/vulnerability/wordpress-one-click-accessibility-plugin-3-1-0-cross-site-scripting-xss-vulnerability))
* Changed: Changed plugin name, directory, and links to disconnect it from the WordPress Plugins Repository so it can't be auto updated
* New: Support for the OpenDyslexic font, rather than the 'Readable Font' from earlier, to better support those with dyslexia.
* Not tested: I'm not sure what version of PHP is required. I tested it with PHP 8.2 and WordPress 6.8.1, so I updated the tested to version, but didn't touch the minimum or required PHP version.

2.1.0 - 2022-12-18
* New: Added custom element ID for "Skip Content" link ([e#35](https://github.com/elementor/one-click-accessibility/issues/35)), ([e#36](https://github.com/elementor/one-click-accessibility/issues/36))
* Tweak: Added title for all SVG icons ([e#30](https://github.com/elementor/one-click-accessibility/issues/35))
* Tweak: Add `role="button"` to the toggle ([e#57](https://github.com/elementor/one-click-accessibility/issues/57))
* Tweak: Changed the default icon to "One Click"
* Fix: Remove extra quote ([Topic](https://wordpress.org/support/topic/bug-317/))
* Fix: High Contrast and Negative Contrast still appear after disabled from the settings ([e#39](https://github.com/elementor/one-click-accessibility/issues/39))
* Fix: Added compatibility with Twenty Twenty theme

2.0.3 - 2018-05-28
* Fix: Toolbar settings panel empty in non-English sites
* Fix: Avoid showing Help & Feedback links if not defined ([e#27](https://github.com/elementor/one-click-accessibility/issues/#27))

2.0.2 - 2018-05-03
* Fix! - Added default settings for toolbar title
* Fix! - Print CSS rules before code to fix responsive issues
* Fix! - Added visibility CSS to fix dependency issues

2.0.1 - 2018-05-02
* Fix! - Increased icon size in the toolbar
* Tweak! - Restored `sr-only` class for smooth update

2.0.0 - 2018-05-01
* Tweak! - Renamed plugin to One Click Accessibility
* Tweak! - Added an option to select a toolbar icon
* Tweak! - Split Settings Panel to Settings and Toolbar
* Tweak! - Removed FontAwesome dependency
* Tweak! - Removed Bootstrap dependency
* Tweak! - Removed Pojo Framework dependency

1.1.6 - 2017-10-26
* Fix! - Border with RGBA is hidden in high contrast mode

1.1.5 - 2016-03-09
* Tweak! - Fix minor style issue

1.1.4 - 2016-02-23
* Fixed! - tabindex on custom links issue

1.1.3 - 2016-02-21
* Tweak! - Resolve the focus issues by another way

1.1.2 - 2016-02-10
* Fixed! - Triggering blur after focus to avoid autofocus by browser on tab reactivated

1.1.1 - 2016-02-08
* Tweak! - Added more Hebrew strings translate
* Tested up to WordPress v4.4

1.1.0 - 2016-02-07
* New! - Remember toolbar options

1.0.3 - 2016-01-27
* Fixed! - Issue with sidebar in Resize text
* Tweak! - Added more string fields for WPML/Polylang plugins

1.0.2 - 2015-12-08
* Tweak! - Fixed Hebrew translate

1.0.1 - 2015-11-17
* New! - Added distance from top toolbar, in Desktop/Mobile devices
* Fixed! - Skip to content in Chrome

1.0.0 - 2015-10-29
* Initial Public Release!
