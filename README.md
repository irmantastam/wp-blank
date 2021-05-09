<h1> WP-blank </h1>
<h2> Blank easy to use Wordpress theme based on Webpack</h2>
<p>
  If you want to build your Wordpress theme from scratch using modern day front-end standarts this is a right tool.
  Theme is designed to be as minimal as possible with freedom to modify it to the way you need. Use it as a starter
  for building custom UI.
</p>

![Ecma script 6](/src/screenshot.png?raw=true "Blank wordpress theme for development from scratch")

<h2> What's included? </h2>
<ul>
  <li><strong>Webpack</strong></li>
  <li><strong>Babel</strong></li>
  <li><strong>SASS</strong></li>
  <li><strong>PostCSS</strong></li>
  <li><strong>Stylelint</strong></li>
  <li><strong>Eslint</strong></li>
</ul>

## Getting Started

* Clone this repository into your wordpress project themes directory `.../wp-content/themes`.
* Navigate to the theme's root directory `.../wp-content/themes/es-blank`.
* Execute the following commands:
* `npm install`
* `npm run watch` - to activate development mode.
* `npm run build` - to build production bundles.

## The build
<p>
  It will build css and js bundles into theme's <code>/src/dist</code> directory based on sources inside <code>/src/js/main.js</code> for javascript and <code>/src/assets/styles/main.scss</code> for styles.
  Compiled bundles are already registered in theme's functions.php file so no additional configuration is needed!
  You can modify templates for your own projects in a way you need and start focusing on building your theme imediately.
</p>
