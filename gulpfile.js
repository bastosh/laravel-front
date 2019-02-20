const gulp   = require('gulp');
const sherpa = require('style-sherpa');

function styleGuide(done) {
    sherpa('resources/styleguide/index.md', {
            output: 'resources/views/styleguide.blade.php',
        template: 'resources/styleguide/template.html'
    }, done);
}

gulp.task('default', gulp.series(styleGuide, watch));

function watch() {
    gulp.watch('resources/styleguide/**').on('all', gulp.series(styleGuide, watch));
}
