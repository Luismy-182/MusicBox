const { src, dest, watch, parallel } = require('gulp');
// Imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');


const paths = {
    imagenes: 'resources/img/**/*'
}


function imagenes() {
    return src(paths.imagenes)
        .pipe( cache(imagemin({ optimizationLevel: 3})))
        .pipe( dest('public/img'))
}

function versionWebp( done ) {
    const opciones = {
        quality: 50
    };
    src('resources/img/**/*.{png,jpg}')
        .pipe( webp(opciones) )
        .pipe( dest('public/img') )
    done();
}

function versionAvif( done ) {
    const opciones = {
        quality: 50
    };
    src('resources/img/**/*.{png,jpg}')
        .pipe( avif(opciones) )
        .pipe( dest('public/img') )
    done();
}

function dev(done) {

    watch( paths.imagenes, imagenes)
    watch( paths.imagenes, versionWebp)
    watch( paths.imagenes, versionAvif)
    done()
}




exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.dev = parallel( imagenes, versionWebp, versionAvif, dev);