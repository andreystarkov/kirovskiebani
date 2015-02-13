module.exports = function(grunt) {


  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> | im@andreystarkov.ru */\n',
        mangle: true
      },
      build: {
        files: { 'src/js/dist/all.js': ['src/js/libs/*.js'], }
      }
    },
   cssmin: {
        add_banner: {
          options: {
            banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> | im@andreystarkov.ru */'
          },
          files: {
            'src/css/all.css': ['src/css/*.css']
          }
        }
      }
  });

  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
 // grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('default', ['uglify', 'cssmin']);

};