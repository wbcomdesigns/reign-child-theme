=== REIGN Child ===

Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 8.0
Version: 5.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

The official child theme for the Reign WordPress theme.

== Description ==

Anything you edit inside the Reign theme folder is replaced the next time Reign
updates. This child theme is a separate folder that loads on top of Reign, so
your custom CSS, PHP and template changes survive every update.

Your Customizer and Reign Settings choices are kept when you switch to the
child theme. You do not need to set anything up again.

== Installation ==

1. Install and activate the Reign parent theme first. The child theme does not
   work on its own.
2. Go to Appearance > Themes > Add New > Upload Theme, choose
   reign-child-theme.zip and select Install Now.
3. Select Activate.
4. Go to Reign Settings > Tools. The System status card should show Child theme:
   Yes, and the Home checklist marks the Child theme step as done.

== Using the child theme ==

* Custom CSS: add it to style.css in this folder. It loads after Reign's own
  stylesheet, so your rules win when they are equally specific. For a few quick
  rules, Appearance > Customize > Additional CSS works too.
* Custom PHP: add it to the end of functions.php, below the marked line.
* Template changes: copy the file you want to change from the reign-theme folder
  into this folder at the same path, then edit the copy.

Keep the theme name "REIGN Child" in style.css. Reign looks for that name to
copy your settings across when you switch to the child theme.

Full guide: https://reigntheme.com/docs/developer-guide/child-theme/

== Changelog ==

= 5.0.0 - October 2026 =

Updated for Reign 8: your CSS now reliably wins over Reign's.

* Improve  - Browsers pick up edits to style.css immediately, because its version follows the file's last change.
* Improve  - Clear comments in style.css and functions.php show where to add CSS, PHP and template overrides.
* Fix      - Child theme CSS now loads after all of Reign's stylesheets, including the critical stylesheet Smart Performance adds, so your rules win at equal specificity.
* Fix      - Removed the request for Reign's style.css, which holds only the theme header and no styles.
* Dev      - Function names are prefixed with reign_child_ to avoid clashes with plugins and snippets.
* Dev      - Added translation loading for the reign-child text domain.
* Compat   - Requires Reign 8, WordPress 6.5 and PHP 8.0. Tested up to WordPress 7.1.

= 3.0.0 =

* Fix      - Updated theme mods handling.

= 1.0.0 =

* New      - Initial release.
