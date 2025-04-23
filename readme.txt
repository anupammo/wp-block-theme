=== Your Block Theme ===
Contributors: yourname
Tags: full-site editing, block theme, modern, accessible, responsive, custom patterns
Requires at least: 6.0
Tested up to: 6.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Your Block Theme is a modern, fully featured WordPress theme built for Full Site Editing (FSE). It offers a highly customizable design with a focus on interactive UI/UX, clean typography, and an accessible layout. With a rich set of block patterns, custom block styles, and comprehensive theme customization through theme.json, this theme empowers users to create beautiful websites quickly and intuitively.

== Features ==
* **Full Site Editing (FSE):** Seamless integration with WordPress’s block editor, allowing complete site customization.
* **Modern Design:** Emphasis on interactive UI/UX, with a carefully selected color scheme and typography.
* **Reusable Block Patterns:** Pre-built headers, footers, archives, single post layouts, and more to jumpstart your design.
* **Theme Customization:** Easily adjust global styles, spacing, colors, and typography via the theme.json file.
* **Responsive & Accessible:** Designed with a mobile-first approach and compatibility with WCAG guidelines.
* **Developer Friendly:** Provides hooks, filters, and a clear file structure for customization and extension.
* **Internationalization:** Translation-ready with a .pot file included for localization.

== Installation ==
1. Download the latest version of Your Block Theme.
2. In your WordPress admin dashboard, navigate to **Appearance > Themes > Add New**.
3. Click **Upload Theme** and choose the downloaded .zip file.
4. Install and activate the theme.
5. For full FSE functionality, ensure you are running WordPress 6.0 or later.

== Customization ==
Your Block Theme is built with flexibility in mind:
- **Global Styles:** Edit the `theme.json` file to modify color palettes, typography, spacing, and layout widths. These changes are reflected both in the editor and on the live site.
- **Block Patterns:** Use the pre-registered block patterns from the Block Editor under the category “Your Theme Patterns.” Customize these patterns in the editor or extend them via child themes.
- **Editor Styles:** Editor styles are pre-enqueued (assets/css/editor-style.css) to provide a WYSIWYG experience within the backend.
- **Navigation & Widgets:** Register and customize navigation menus and widget areas via the included functions. Legacy support via fallback widget areas is also provided.

== Best Practices ==
- **Accessibility:** Follow semantic HTML practices. The theme ensures proper use of ARIA roles and focus indicators.
- **Performance:** Use optimized image formats, minified CSS/JS, and the latest browser caching techniques.
- **Security:** Properly sanitize inputs and escape outputs everywhere in your custom code. Regularly update the theme for compatibility with the latest WordPress security standards.
- **Translation & RTL Support:** Update the .pot file as needed, and the CSS includes provisions for right-to-left languages.
- **Documentation:** Please refer to the `/docs/` folder for detailed developer documentation and helpful guides on theme customization and troubleshooting.

== Developer Documentation ==
For further customization and development:
* **Hooks & Filters:** Consult `/docs/hooks-and-filters.txt` for a comprehensive list of available hooks and filters.
* **Custom Block Patterns:** See `/docs/block-patterns.md` for guidelines on creating and extending block patterns.
* **Troubleshooting & FAQ:** Detailed guides addressing common issues, performance tips, and best practices are available in the `/docs/` folder.

== Frequently Asked Questions ==
Q: *What is Full Site Editing (FSE)?*  
A: FSE allows you to edit every part of your site using blocks, including headers, footers, and content areas—empowering you with complete design control.

Q: *How can I customize colors and typography?*  
A: Modify the `theme.json` file to update the color palette and font settings. These changes affect both backend and frontend views.

Q: *Is the theme translation-ready?*  
A: Yes. All strings are translatable, and a .pot file is included for localization. RTL styling is also supported.

== Changelog ==
= 1.0.0 =
* Initial release.
* Introduced FSE support with custom block patterns and editor customization.
* Enhanced design with a modern, responsive, and accessible layout.

== License ==
This theme is distributed under the GNU General Public License v2 or later.
