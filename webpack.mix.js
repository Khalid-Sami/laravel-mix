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

mix.js('resources/vue-app/dashboard/app.js', 'public/js')
    .webpackConfig(webpack =>{
        return {
            module: {
                rules: [
                    {
                        test: /\.js$/,
                        exclude: /node_modules/,
                        loader: 'babel-loader',
                        include: [path.resolve('resources/vue-app/assets'), path.resolve('node_modules/webpack-dev-server/client')]
                    },
                ]
            },
            plugins: [
                new webpack.ProvidePlugin({
                    $: 'jquery',
                    jQuery: 'jquery',
                    'window.jQuery': 'jquery',
                    Popper: ['popper.js', 'default'],
                })
            ],
            resolve: {
                extensions: ['.js', '.vue', '.json'],
                alias: {
                    'vue$': 'vue/dist/vue.esm.js',
                    '@': path.resolve('resources/vue-app/assets'),
                }
            }
        }

    });
