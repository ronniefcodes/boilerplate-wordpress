# boilerplate-wordpress
This is meant to be a very barebones starting point for WordPress themes.

Includes:
- Webpack configuration to output JS and CSS files from `/client`
- Built-in SASS functions and mixins for clearfix, getting font sizes and setting media breakpoints (with variable breakpoints)
- Adding functions to handle adding theme support
- Functions and example code for pre-populating pages and menu items
- Very, very basic templates (based on html5blank)

## How to use

1. Install WordPress normally
2. Clone repository onto base WordPress directory (wherever `wp-config.php` is located)
3. Run `npm install`
4. Run `npm run build` or `npm run watch`
5. Access WordPress instance normally and switch to Boilerplate theme
