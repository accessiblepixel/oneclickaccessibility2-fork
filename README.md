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
