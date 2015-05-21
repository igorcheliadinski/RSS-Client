module.exports = function(grunt) {
    grunt.initConfig({
        watch: {
            livereload: true
        },
        scripts: {
            files: ['../lib/styles/*.css'],
            tasks: ['process']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');

    grunt.registerTask('process', ['newer:*', 'concat', 'uglify']);
    grunt.registerTask('default', ['concat', 'uglify', 'watch']);
};