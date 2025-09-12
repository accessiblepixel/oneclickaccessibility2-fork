## One Click Accessibility 2 Fork

**Contributors:** jcx, pojo.me, KingYes, ariel.k, jzaltzberg, bainternet, elementor  
**Tags:** Accessibility, A11y, Toolbar, Tools, wcag, accessible  
**Requires at least:** 4.1  
**Tested up to:** 6.8  
**Requires PHP:** 5.4  
**Stable tag:** 2.2.0  
**License:** GPLv2 or any later version.

---

The 'One Click Accessibility' fork without the online account and GDPR implications of the Elementor version. Designed help you make your WordPress website more accessible, without sacrificing privacy.

This fork is looked after by jcx and is currently available online at https://jcx.life/oneclickaccessibility-2-fork

----

#### Why Fork?

I started this fork because OCA2 did everything I wanted it to, and Elementor have not only required an account to use their later changes, it also requires making additional changes to your terms and conditions to incorporate Elementor's processing of your user's data.

In my opinion, they bought or otherwise acquired a popular WordPress plugin and used it as a means to acquire more users for their service(s). I do not believe that an accessibility function should be tied into a separate entity's analytics and limited by page views or requests. For a time it also included Google Fonts, which is troublesome in the EU, though this may have changed in newer versions. The original, and this fork, do not.

Since the Elementor version still includes (what they call the 'Legacy' version) the original code which can be used until a site admin is nagged enough to upgrade and make an account, it was possible to backport the security fixes from it and refactor the code to match their "legacy" version, minus the extra namespace stuff they added to separate the module from their new version with anti-features.

I also added the OpenDyslexic font, a free font that makes things more readable for those with dyslexia. I just felt it was a better feature than the "readble font". I don't have dyslexia but I've heard from many people that say that the font being available is transformative to their experience.

I will do my best to keep the plugin updated, but this is the first proper fork I've managed so contributions and suggestions are welcome.

----

### Details

While most accessibility issues can’t be addressed without directly changing your content, One Click Accessibility adds a number of helpful accessibility features with the minimum amount of setup and without the need for expert knowledge.

##### Accessibility Toolbar:

Add a toolbar toggling hat allows you to set:

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
* Add outline focus for focusable elements
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


#### Upgrade from the old 2.1.0 version (or later Elementor version if still in 'Legacy mode')
Upgrading should be fairly simple. Deactivate the existing plugin, and follow either of the installation methods. Then activate the fork version, and make sure your settings are still correct - It should use existing settings from the old version.

**Easy Installation**
1. Download the ZIP file, (either from the [website](https://jcx.life/oneclickaccessibility-2-fork/), or as a [GitHub code download](https://github.com/accessiblepixel/oneclickaccessibility2-fork/archive/refs/heads/main.zip))
2. Go to plugins > Add New > Upload ZIP
3. Navigate to where you downloaded the zip version  and upload it.
4. Activate the plugin through the 'Plugins' menu in WordPress
5. Go to the plugin page (under Dashboard > Accessibility)
6. Enjoy!

**Manual Installation**
1. Download the ZIP file, (either from the [website](https://jcx.life/oneclickaccessibility-2-fork/), or as a [GitHub code download](https://github.com/accessiblepixel/oneclickaccessibility2-fork/archive/refs/heads/main.zip))
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
2.2.0 - 2025-05-16
* Fix: Backported the fixes from Elementor's "Legacy" version to this version  
  Mainly the XSS admin vulnerability, reported ([here](https://patchstack.com/database/wordpress/plugin/pojo-accessibility/vulnerability/wordpress-one-click-accessibility-plugin-3-1-0-cross-site-scripting-xss-vulnerability))
* Changed: Changed plugin name, directory and links to disconnect it from the WordPress Plugins Repository so it can't be auto updated
* New: Support for the OpenDyslexic font, rather than the 'Readable Font' from earlier, to better support those with dyslexia.
* Not tested: I'm not sure what version of PHP is required. I tested it with PHP8.2 and WordPress 6.8.1, so I updated the tested to version, but didn't touch the minimum or required php version.

2.1.0 - 2022-12-18
* New: Added custom element ID for "Skip Content" link ([#35](https://github.com/elementor/one-click-accessibility/issues/35)), ([#36](https://github.com/elementor/one-click-accessibility/issues/36))
* Tweak: Added title for all SVG icons ([#30](https://github.com/elementor/one-click-accessibility/issues/35))
* Tweak: Add `role="button"` to the toggle ([#57](https://github.com/elementor/one-click-accessibility/issues/57))
* Tweak: Changed the default icon to "One Click"
* Fix: Remove extra quote ([Topic](https://wordpress.org/support/topic/bug-317/))
* Fix: High Contrast and Negative Contrast still appear after disabled from the settings ([#39](https://github.com/elementor/one-click-accessibility/issues/39))
* Fix: Added compatibility with Twenty Twenty theme

2.0.3 - 2018-05-28
* Fix: Toolbar settings panel empty in non-English sites
* Fix: Avoid showing Help & Feedback links if not defined ([#27](https://github.com/elementor/one-click-accessibility/issues/#27))

2.0.2 - 2018-05-03
* Fix! - Added default settings for toolbar title
* Fix! - Print CSS rules before code to fix responsive issues
* Fix! - Added visibility CSS to fix dependency issues

2.0.1 - 2018-05-02
* Fix! - Increased icon size in the toolbar
* Tweak! - Restored `sr-only` class for smooth update

2.0.0 - 2018-05-01
* Tweak! - Renamed plugin to One Click Accessibility
* Tweak! - Added an option to select an toolbar icon
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
* Fixed! - Triggering blur after focus to avoid auto-focus by browser on tab reactivated

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
