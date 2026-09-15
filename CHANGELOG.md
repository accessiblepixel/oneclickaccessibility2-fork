## Changelog

#### 2.2.8 - 2026-08-10
* **Chore:** Tested with WordPress 7.0.3 and 7.1 and confirmed support. No code changes. I won't be packaging a new release until there are actual changes, but this update confirms that WP 7.0 and WP 7.1 is supported until that happens.
* **Chore:** Update readme and fixed typos.

#### 2.2.7 - 2026-04-01
* **Improved:** - Developer quality of life feature request, allow text input for picking colours. [#3](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/3)
* **Improved:** - Now you can specify the size (in px) of the toolbar. Recommended settings are 160-300px. It will let you use a silly value though, so test something sensible. Defaults to the original size of 180px [#12](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/12)

#### 2.2.6 - 2026-03-29
* Fixed: If text zoom steps haven't been set, now it works at it should, and defaults to the maximum. [#8](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/8)

#### 2.2.5 - 2025-10-23
* Fixed: Incorrect alignment of underlined links in the menu [#9](https://github.com/accessiblepixel/oneclickaccessibility2-fork/issues/9)

#### 2.2.4 - 2025-09-21
* **Improved:** Added serialisation and sanitisation to the new option to control font size, it wasn't being validated.
* **Improved:** Made the SVG icons have a description that's the same as a title. The way I've done it is a bit of a bodge and in future may want to add a separate field to admin to have a different description to title. Thanks @mve83 on [e#72](https://github.com/elementor/one-click-accessibility/issues/72) for pointing this out.
* **Improved:** Made the steps for text size make more intuitive sense, and moved to 'Toolbar' page near the relevant option.

#### 2.2.3 - 2025-09-20
* **Improved:** Control maximum zoom levels on site, thanks to [e#103](https://github.com/elementor/one-click-accessibility/pull/103) by @vishal-neochrome
* New: Added new Visual Handicap SVG graphic option, thanks to [e#92](https://github.com/elementor/one-click-accessibility/pull/92) and [#94](https://github.com/elementor/one-click-accessibility/pull/94) - with a bit of fix up - thanks @T-I-G-I
* **Improved:** Improved support for HTML5 and fixing some issues with validation, thanks to [e#55](https://github.com/elementor/one-click-accessibility/pull/55) and [e#56](https://github.com/elementor/one-click-accessibility/pull/56) thanks @julego

#### 2.2.2 - 2025-09-20
* **Fix::** Grayscale mode is now working correctly, thanks to ivcreative leaving a pull request [e#39](https://github.com/elementor/one-click-accessibility/pull/63) thank you for the fixes and thank you to @rainbowforgedev for getting me to check old pull requests that got closed as "deprecated" on Elementor's repo =D


#### 2.2.1 - 2025-09-13
* **Improved:** Removed nag to install Elementor plugin when activating One Click Accessibility for the first time.

#### 2.2.0 - 2025-05-16
* **Fix:** Backported the fixes from Elementor's "Legacy" version to this version
  Mainly the XSS admin vulnerability, reported ([here](https://patchstack.com/database/wordpress/plugin/pojo-accessibility/vulnerability/wordpress-one-click-accessibility-plugin-3-1-0-cross-site-scripting-xss-vulnerability))
* **Changed:** Changed plugin name, directory, and links to disconnect it from the WordPress Plugins Repository so it can't be auto updated
* **New:** Support for the OpenDyslexic font, rather than the 'Readable Font' from earlier, to better support those with dyslexia.
* **Not tested:** I'm not sure what version of PHP is required. I tested it with PHP 8.2 and WordPress 6.8.1, so I updated the tested to version, but didn't touch the minimum or required PHP version.

#### 2.1.0 - 2022-12-18
* New: Added custom element ID for "Skip Content" link ([e#35](https://github.com/elementor/one-click-accessibility/issues/35)), ([e#36](https://github.com/elementor/one-click-accessibility/issues/36))
* **Tweak:** Added title for all SVG icons ([e#30](https://github.com/elementor/one-click-accessibility/issues/35))
* **Tweak:** Add `role="button"` to the toggle ([e#57](https://github.com/elementor/one-click-accessibility/issues/57))
* **Tweak:** Changed the default icon to "One Click"
* **Fix:** Remove extra quote ([Topic](https://wordpress.org/support/topic/bug-317/))
* **Fix:** High Contrast and Negative Contrast still appear after disabled from the settings ([e#39](https://github.com/elementor/one-click-accessibility/issues/39))
* **Fix:** Added compatibility with Twenty Twenty theme

#### 2.0.3 - 2018-05-28
* **Fix:** Toolbar settings panel empty in non-English sites
* **Fix:** Avoid showing Help & Feedback links if not defined ([e#27](https://github.com/elementor/one-click-accessibility/issues/#27))

#### 2.0.2 - 2018-05-03
* **Fix:** - Added default settings for toolbar title
* **Fix:** - Print CSS rules before code to fix responsive issues
* **Fix:** - Added visibility CSS to fix dependency issues

#### 2.0.1 - 2018-05-02
* **Fix:** - Increased icon size in the toolbar
* **Tweak:** - Restored `sr-only` class for smooth update

#### 2.0.0 - 2018-05-01
* **Tweak:** - Renamed plugin to One Click Accessibility
* **Tweak:** - Added an option to select a toolbar icon
* **Tweak:** - Split Settings Panel to Settings and Toolbar
* **Tweak:** - Removed FontAwesome dependency
* **Tweak:** - Removed Bootstrap dependency
* **Tweak:** - Removed Pojo Framework dependency

#### 1.1.6 - 2017-10-26
* **Fix:** - Border with RGBA is hidden in high contrast mode

#### 1.1.5 - 2016-03-09
* **Tweak:** - Fix minor style issue

#### 1.1.4 - 2016-02-23
* **Fixed:** - tabindex on custom links issue

#### 1.1.3 - 2016-02-21
* **Tweak:** - Resolve the focus issues by another way

#### 1.1.2 - 2016-02-10
* **Fixed:** - Triggering blur after focus to avoid autofocus by browser on tab reactivated

#### 1.1.1 - 2016-02-08
* **Tweak:** - Added more Hebrew strings translate
* Tested up to WordPress v4.4

#### 1.1.0 - 2016-02-07
* **New:** - Remember toolbar options

#### 1.0.3 - 2016-01-27
* **Fixed:** - Issue with sidebar in Resize text
* **Tweak:** - Added more string fields for WPML/Polylang plugins

#### 1.0.2 - 2015-12-08
* **Tweak:** - Fixed Hebrew translate

#### 1.0.1 - 2015-11-17
* **New:** - Added distance from top toolbar, in Desktop/Mobile devices
* **Fixed:** - Skip to content in Chrome

#### 1.0.0 - 2015-10-29
* Initial Public Release!
