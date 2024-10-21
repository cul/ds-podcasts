# CUL Podcast Child Theme

This is a WordPress child theme for the Checathlon theme. Designed specifically for the Columbia University Libraries podcast website. 

## Modifications

- **widget-areas/sidebar-footer.php** — this removes the left column where the site title and tagline are displayed when 'Display Site Title and Tagline' is selected under Appearance > Customize > Site Identity. We'll be using this space to display a widget that includes CUL branding and other journal info. 
- **archive-podcast.php** — changes page title to "Episodes" (instead of "Podcasts") for this custom post type archive page only. The custom post type is created by the Seriously Simple Podcasts plugin.
- **footer.php** — replaces colophon with hard link to the podcast multisite homepage
- **functions.php** — registers child theme and adds custom color picker for link colors
- **style.css** — changes page title font to match body text font, modifies layout for footer widget area and blog feed, hide svg icon from widget area and featured images from post pages
