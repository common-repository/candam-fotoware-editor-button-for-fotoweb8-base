
=== CanDAM-CntrButFW8Base ===
Contributors: Philippe Menu/CanDAM, Jan-Vidar Bakke/Fotoware	
Tags: Fotoware, Fotoweb 8, Wordpress plugins, editor button plugin, CanDAM
Requires at least: 4.0
Tested up to: 4.7.2
Stable tag: 1.3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This WP editor button connector for Fotoware DAM allows to include images directly from the Fotoweb DAM into WordPress content.
== Description ==

The CanDAM WordPress editor button connector for Fotoware - Base - allows to include images directly from the Fotoweb DAM, into WordPress. 

In this base plugin version, only images are supported and they are not imported in the Wordpress Library, but stay in the Fotoweb repository at the desired dimensions and are referenced by the permalink of the Embedded export file into the Wordpress Editor.

The Pro version of the plugin also supports embedding thumbnails for documents and audio and video files, and allows to optionally import the file previews into the Wordpress Library, so that images and other referenced assets are always available in Wordpress, even if the link to the Fotoweb site is down.
This feature might be handy if for instance your Fotoweb DAM site is on a secured intranet while your WordPress site is public.
In addition, the Pro version of the plugin allows to include a block of preformatted text which may contain asset metadata. You may define up to 3 metadata text templates, and choose the text position (above, left, right or below the image or asset) right after you hit the Publish Button.


Note: To be able to use the Plugin, you minimally need to have a client access license for the selection widget and the Export module of Fotoweb 8. Additional requirements for licensing may exist both at the server and client level. Please verify the current licensing requirements directly from the Fotoware web site at http://www.fotoware.com or call-us for current requirements.
To enable the FancyBox popup window showing when you click an image to display a larger preview, you need to install the free WordPress plugin Easy FancyBox from RavenH.

The CanDAM WordPress editor button connector for Fotoware - Base edition- is a free plugin, but only basic support is included. If you wish to have timely support from CanDAM, you may purchase a support subscription from our web site or a pro plugin version with subscription. Please review the options at http://www.candam.com/shop/


The CanDAM WordPress editor button connector for Fotoware - Pro edition- allows to include images, documents with page preview, and audio and video files, and additionally allows to include a metadata text template.  The metadata text template can be configured in the settings section of the plugin to display pre-formatted metadata information from the original assets at various positions around the asset thumbnail. You may use this feature for instance to create catalogs, price lists, list presentations (such as a rentals property list for instance) or similar type of publications.


== Installation ==

1. Install by uploading the ZIP file. 
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. The plugin settings will be in the left column, under 'Settings' as a 'CanDAM Connector FW8-base' option.
1. And a button will be shown in the articles editor next to the traditional "Add Media" button, in the Tiny MCE page/post editor, which will fire the selection widget call in Fotoweb.


== Frequently Asked Questions ==

= Are the images in the WordPress media library? =
For this simple image plugin, there is no need to have the images imported to the Wordpress library, since Fotoweb already has a mechanism to distribute the exported images from its export module. As a result, the images are being referenced directly from the embed directory of the Fotoweb server, where they are cached by the server, which also ensures maximum performance. The Pro version of the plugin gives you the choice to import or not the images to the Wordpress library before referencing them. In this case, your image and other assets links will continue to work even if the Fotoweb web site is down, or behind a firewall, but this may impact the size of your Media library in the long run.

= Can I include metadata with my image? =

The base plugin version does not support this feature. The settings for the Pro version of the plugin allow to define up to 3 templates for the metadata fields you want to be displayed, along with your image previews. The metadata templates can also be left blank to include just the image preview of the asset, without any text, into the WordPress editor. Metadata templates can be very useful to display catalog type data underneath or alongside an image or video for instance.

= My Fotoweb DAM also supports Word, Powerpoint and PDF documents previews, can I include these document types in my Wordpress articles too with the plugin? 
No the Base edition of the plugin does not support these types of assets. You need to upgrade to the Pro version of the plugin to be able to include and preview thumbnails and larger size page previews or playable html5 previews for these types of documents.

= I have configured the host name, but nothing shows? =
First, be sure to use the latest version of the plugin.
Be sure to enter the proper http:// or https:// prefix in the host name settings. If your WordPress site is configured to use ssl encryption, you must use https:// also to access the Fotoweb DAM to avoid mixed content security blocking to affect the display of the selection widget.
Be sure to allow popup windows for the Wordpress site url you are accessing. The Javascript scripting must also be enabled for the site in your browser security configuration.
Verify the current license requirements for the use of the Fotoware Selection Widget. It could be that as a Fotoweb user, you may not have the licensing rights to use the Selection Widget.

== Screenshots ==

1. TinyMCE Editor button screen shot
2. Fotoweb selection widget screen shot: search, preview and select the file to include in your post.
3. Fotoweb Export Wizard screen shot: crop/resize your image for your Post, and click Publish when your are done.
4. Wordpress Post screen shot showing the final Post with included image from Fotoweb, including modification made in the export wizard.

== Changelog ==

= 1.2.1 =
* First beta version of the plugin.
= 1.3.0 =
* First distribution version of the plugin
= 1.3.5 =
* Tests with WP 4.7.2, ssl and cosmetic changes
= 1.3.6 =
* Test with WP 4.7.3, and production on Worpress.org site


== Upgrade Notice ==

= 1.3.6 =
Upgrade to this lastest version to allow to include images from a Fotoweb 8 DAM into your Wordpress articles on demand.  



