Description
===========

Uses php solr client library, Solarium, to index and search FDA Maude and anti-Lasik Petition data

Setup
=====

    $ sudo composer create-project laravel/laravel php-solarium 4.2 --prefer-dist
    $ cd  php-solarium
    $ sudo composer require 'solarium/solarium:3.3.0' --prefer-dist

Directories within the **storage** and the **bootstrap/cache** directories should be writable by your web server.
