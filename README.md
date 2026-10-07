# REIGN Child

The official child theme for the [Reign](https://reigntheme.com/) WordPress theme. Put your custom CSS, PHP and template overrides here so they survive Reign updates.

## Download

Get the ready-to-upload zip from the [latest release](https://github.com/wbcomdesigns/reign-child-theme/releases/latest). Use the `reign-child-theme.zip` asset, not GitHub's "Source code" archives.

Direct link: https://github.com/wbcomdesigns/reign-child-theme/releases/latest/download/reign-child-theme.zip

## Install

1. Install and activate the Reign parent theme.
2. **Appearance > Themes > Add New > Upload Theme**, choose `reign-child-theme.zip`, **Install Now**, then **Activate**.
3. Your Customizer and Reign Settings choices carry over automatically.

## Where things go

| You want to | Do this |
|---|---|
| Add CSS | Edit `style.css`. It loads after Reign's stylesheet. |
| Add PHP | Add it at the end of `functions.php`, below the marked line. |
| Change a template | Copy the file from `reign-theme` into this folder at the same path, then edit the copy. |

Keep `Theme Name: REIGN Child` in `style.css`: Reign uses that name to copy your settings into the child theme when you switch to it.

Full guide: https://reigntheme.com/docs/developer-guide/child-theme/

## Requirements

Reign 8, WordPress 6.5+, PHP 8.0+.
