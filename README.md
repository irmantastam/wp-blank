<h1> wp-blank </h1>
<h2> Blank WordPress theme for building custom front-end</h2>
<p>
  If you want to build your WordPress theme from scratch using your own HTML, CSS and Javascript, this is a right tool.
  Theme is designed to be as minimal as possible with freedom to modify it to the way you need. Use it as a starter pack
  for building custom front-end architecture of your project.
</p>

![WordPress logo](/src/screenshot.png "wp-blank WordPress theme")

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

* Clone this repository into your WordPress project themes directory `.../wp-content/themes`.
* Navigate to the theme's root directory `.../wp-content/themes/wp-blank`.
* Execute the following commands:
* `npm install`
* `npm run watch` - to watch for file changes and compile them on each save.
* `npm run build` - to build production bundles before deployment to server.

## The build
<p>
  It will build CSS and JS bundles into theme's <code>/src/dist</code> directory based on sources inside <code>/src/js/main.js</code> for Javascript and <code>/src/assets/styles/main.scss</code> for styles.
  Compiled bundles are already registered in theme's functions.php file, so no additional configuration is needed.
  You can modify templates for your own projects in a way you need and start focusing on building your theme immediately.
</p>
