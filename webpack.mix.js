const mix                    = require('laravel-mix').mix,
      postCssDiscardComments = require('postcss-discard-comments')

mix.setPublicPath('dist')
   .js('resources/js/field.js', 'js')
   .version()
    //.sourceMaps()
    //.disableNotifications()
