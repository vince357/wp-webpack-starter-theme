## What is this?

This Wordpress child theme is based on any theme you like.

It uses WebPack as it was explained in this (also excellent) article by Henner Setyono https://wptips.dev/webpack-in-wordpress/
Thanks to him!

## Installation

1. Clone this repository in your wordpress themes directory
You should have something like this

```
Your site root
├── …
├── wp-content
│   └── themes
│       ├── your-parent-theme
│       └── wordpress-child-theme-with-webpack
└── …
```

3. Go to the child theme directory and launch
$yarn install

4. `$yarn run dev`
or `$yarn run prod`

The `dev` option will use Browsersync and HMR while webpack is watching :)
Your site will be running at 
https://localhost:3000

## Important

1. You have to edit `./style.css` line 4 replacing the string `your-parent-theme-directory-name` by the name of your parent theme directory name (caution, directory name may be different from the theme name itsself, it is actually the folder name you have to enter there).

2. Don't forget to edit `wordpress-child-theme-with-webpack/webpack.config.js` according to your own parameters. You can also add your own entry-points of course.

3. Also, be aware that in my configuration, the rendered CSS and JS files are located in the `wordpress-child-theme-with-webpack/dist` folder. You can change these settings if you wish at lines 5 and below in the `webpack.config.js` file.