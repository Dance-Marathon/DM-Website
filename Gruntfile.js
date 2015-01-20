/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*!\n * <%= pkg.title || pkg.name %> - v<%= pkg.version %> ' +
      '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
      '<%= pkg.homepage ? " * " + pkg.homepage + "\\n" : "" %>' +
      ' * Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;\n' +
      ' */',
    runtime: (new Date).getTime(),
    uglify: {
      options: {
        banner: '<%= banner %>',
        sourceMap: true,
        mangle: true,
        report: 'min'
      },
      files: {
        src: ['lib/*.js', 'js/*.js'],
        dest: 'dist/<%= runtime %>/js/<%= pkg.name %>.min.js'
      }

    },
    cssmin: {
      files: {
        src: ['css/icomoon.css', 'css/flipclock.css', 'css/superfish.css', 'css/style.css'],
        dest: 'dist/<%= runtime %>/css/<%= pkg.name %>.min.css'
      }
    },
    injector: {
      options: {
        template: 'includes/head.php.template',
        destFile: 'includes/head.php'
      },
      dev: {
        files: {
          src: ['<%= uglify.files.src %>', '<%= cssmin.files.src %>']
        }
      },
      prod: {
        files: {
          src: ['<%= uglify.files.dest %>', '<%= cssmin.files.dest %>']
        }
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-injector');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task.
  grunt.registerTask('dev', ['injector:dev']);
  grunt.registerTask('prod', ['uglify', 'cssmin', 'injector:prod']);

};
