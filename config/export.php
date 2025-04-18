<?php

return [
    /*
     * The base URL of the site, used to prefix links in the exported files.
     */
    'base_url' => 'https://jackson77.github.io/aboutme',
  

    /*
     * If true, the exporter will crawl through your site's pages to determine
     * the paths that need to be exported.
     */
    'crawl' => true,

    /*
     * Add additional paths to be added to the export here.
     */
    'paths' => [],

    /*
     * Files and folders that should be included in the build.
     */
    'include_files' => [
        'public' => '',
    ],

    /*
     * File patterns that should be excluded from the included files.
     */
    'exclude_file_patterns' => [
        '/\.php$/',
        '/mix-manifest\.json$/',
    ],

    /*
     * Whether or not the destination folder should be emptied before starting
     * the export.
     */
    'clean_before_export' => true,
    'disk' => null,
    'before' => [],
    'after' => [],

    /*
     * If set, the site will be exported to this disk.
     */
    'disk' => null,

    /*
     * Shell commands to run before the export.
     */
    'before' => [],

    /*
     * Shell commands to run after the export.
     */
    'after' => [],
];