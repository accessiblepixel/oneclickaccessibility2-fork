Changelog

## 2.2.8 - 2026-08-10

    Chore: Tested with WordPress 7.0.3 and 7.1 and confirmed support. No code changes. I won't be packaging a new release until there are actual changes, but this update confirms that WP 7.0 and WP 7.1 is supported until that happens.
    Chore: Update readme and fixed typos.

## 2.2.7 - 2026-04-01

    Improved - Developer quality of life feature request, allow text input for picking colours. #3
    Improved - Now you can specify the size (in px) of the toolbar. Recommended settings are 160-300px. It will let you use a silly value though, so test something sensible. Defaults to the original size of 180px #12

## 2.2.6 - 2026-03-29

    Fixed: If text zoom steps haven't been set, now it works at it should, and defaults to the maximum. #8

## 2.2.5 - 2025-10-23

    Fixed: Incorrect alignment of underlined links in the menu #9

## 2.2.4 - 2025-09-21

    Improved: Added serialisation and sanitisation to the new option to control font size, it wasn't being validated.
    Improved: Made the SVG icons have a description that's the same as a title. The way I've done it is a bit of a bodge and in future may want to add a separate field to admin to have a different description to title. Thanks @mve83 on e#72 for pointing this out.
    Improved: Made the steps for text size make more intuitive sense, and moved to 'Toolbar' page near the relevant option.

## 2.2.3 - 2025-09-20

    Improved: Control maximum zoom levels on site, thanks to e#103 by @vishal-neochrome
    New: Added new Visual Handicap SVG graphic option, thanks to e#92 and #94 - with a bit of fix up - thanks @T-I-G-I
    Improved: Improved support for HTML5 and fixing some issues with validation, thanks to e#55 and e#56 thanks @julego

## 2.2.2 - 2025-09-20

    Fix: Grayscale mode is now working correctly, thanks to ivcreative leaving a pull request e#39 thank you for the fixes and thank you to @rainbowforgedev for getting me to check old pull requests that got closed as "deprecated" on Elementor's repo =D

## 2.2.1 - 2025-09-13

    Improved: Removed nag to install Elementor plugin when activating One Click Accessibility for the first time.

## 2.2.0 - 2025-05-16

    Fix: Backported the fixes from Elementor's "Legacy" version to this version
    Mainly the XSS admin vulnerability, reported (here)
    Changed: Changed plugin name, directory, and links to disconnect it from the WordPress Plugins Repository so it can't be auto updated
    New: Support for the OpenDyslexic font, rather than the 'Readable Font' from earlier, to better support those with dyslexia.
    Not tested: I'm not sure what version of PHP is required. I tested it with PHP 8.2 and WordPress 6.8.1, so I updated the tested to version, but didn't touch the minimum or required PHP version.
