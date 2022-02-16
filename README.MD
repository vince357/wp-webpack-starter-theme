## What is this?

This Wordpress theme works with webpack.

It uses WebPack as it was explained in this excellent article by Henner Setyono https://wptips.dev/webpack-in-wordpress/
Thanks to him!

## Installation

1. Clone this repository in your wordpress themes directory
You should have something like this

```
Your site root
├── …
├── wp-content
│   └── themes
│       ├── some-theme
│       └── wp-webpack-starter-theme
└── …
```

2. Go to the theme directory and launch
`$yarn install`

3. Edt line 9 of ./webpack.config.js and set your own localhost

4. `$yarn dev` or `$yarn prod`

The `dev` option will use Browsersync and HMR while webpack is watching SCSS and PHP files :)
Your site will be running at 
https://localhost:3000

The `prod` option will minify CSS and JS files

## Important

1. Don't forget to edit `./webpack.config.js` according to your own parameters. You can also add your own entry-points of course.

2. Also, be aware that in my configuration, the rendered CSS and JS files are located in the `./dist` folder. You can change these settings if you wish at lines 5 and below in the `webpack.config.js` file.