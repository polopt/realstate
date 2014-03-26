# Shindig Blogging

Shindig is a blogging module for the Kohana Framework v3.x.

## Installation

First, add the shindig submodule to your Git application:

    git submodule add git://github.com/kerkness/shindig.git modules/shindig

You will also need the [Pagination](http://github.com/kohana/pagination), [Database](http://github.com/kohana/database) and [Sprig](http://github.com/shadowhand/sprig) modules. Add them the same way, then initialize all the submodules:

    git submodule update --init

Then enable the modules in `application/bootstrap.php`:

    Kohana::modules(array(
        ...
        'modules/pagination' => MODPATH.'pagination', // Paging of results
        'modules/database'   => MODPATH.'database',   // Database access
        'modules/sprig'      => MODPATH.'sprig',      // Sprig modeling system
        'modules/shindig'    => MODPATH.'shindig',    // Shindig blogging
        ...
    ));

Now install the database schema:

    CREATE TABLE `posts` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `post_content` text,
      `post_excerpt` text,
      `title` varchar(255) NOT NULL,
      `status` enum('draft','review','publish','archive') NOT NULL DEFAULT 'publish',
      `slug` varchar(200) NOT NULL,
      `created_on` int(10) unsigned DEFAULT NULL,
      `updated_on` int(10) unsigned DEFAULT NULL,
      `type` varchar(20) NOT NULL DEFAULT 'post',
      `author` int(10) unsigned DEFAULT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `uniq_slug` (`slug`),
      KEY `fk_author` (`author`),
      KEY `idx_title` (`title`),
      KEY `idx_status` (`status`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

    CREATE TABLE `posts_tags` (
      `shindig_post_id` int(10) unsigned NOT NULL,
      `shindig_tag_id` int(10) unsigned NOT NULL,
      PRIMARY KEY (`shindig_post_id`,`shindig_tag_id`),
      KEY `shindig_tag_id` (`shindig_tag_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE `tags` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `tag` varchar(50) NOT NULL,
      `slug` varchar(50) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `uniq_slug` (`slug`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE `users` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `username` varchar(50) NOT NULL,
      `password` varchar(50) NOT NULL,
      `last_login` int(10) unsigned DEFAULT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `uniq_username` (`username`),
      KEY `idx_last_login` (`last_login`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

    CREATE TABLE `widgets` (
      `id` int(10) unsigned NOT NULL,
      `route` varchar(50) NOT NULL,
      `uri` varchar(255) DEFAULT NULL,
      `sidebar` varchar(50) NOT NULL DEFAULT 'default',
      PRIMARY KEY (`id`),
      KEY `idx_route` (`route`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;


    ALTER TABLE `posts`
      ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL;

    ALTER TABLE `posts_tags`
      ADD CONSTRAINT `posts_tags_ibfk_2` FOREIGN KEY (`shindig_tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
      ADD CONSTRAINT `posts_tags_ibfk_1` FOREIGN KEY (`shindig_post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

Create a user:

    INSERT INTO `users` (`username`, `password`) VALUES ('admin', SHA1('secret'))

Now open your browser and go to `shindig/admin` to create your first post!
