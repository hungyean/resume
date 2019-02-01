const mix = require('laravel-mix');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

var dirPath = {
    publicFolder: './public',
};
var proxyPath = __dirname;

mix.disableSuccessNotifications()
    .browserSync({
        browser: "chrome",
        minify: false,
        proxy: generateURL(proxyPath, dirPath.publicFolder),
        port: 8410,
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'resources/js/app.js',
            'resources/sass/app.scss',
        ],
    })
    .setPublicPath(dirPath.publicFolder)
    // .js('resources/assets/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css/custom.css', {
        // outputStyle: 'compressed',
    })
    .options({
        autoprefixer: {
            options: {
                browsers: [
                    'last 6 versions',
                ]
            }
        },
        postCss: [require('cssnano')],
    });


function generateURL(urlpath, dirPath) {

    var path = urlpath;
    var publicfolder = dirPath;

    var strpos = path.search("www");
    var replace = path.substring(0, strpos + 3);

    var n = publicfolder.lastIndexOf("\\");
    var publicfoldername = publicfolder.substring(n + 1, publicfolder.length);
    return path.replace(replace, "localhost") + "/" + publicfoldername;
}
