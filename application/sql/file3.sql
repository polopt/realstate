


CREATE TABLE `searches_categories` (
  `category_id` int(10) unsigned NOT NULL,
  `search_id` mediumint(10) unsigned NOT NULL,
  PRIMARY KEY (`category_id`,`search_id`),
  KEY `search_id` (`search_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `searches` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `total_items` smallint(5) unsigned NOT NULL,
  `page` smallint(5) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `with_image` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `min_price` mediumint(8) unsigned DEFAULT NULL,
  `max_price` mediumint(8) unsigned DEFAULT NULL,
  `min_shipping` mediumint(8) unsigned DEFAULT NULL,
  `max_shipping` mediumint(8) unsigned DEFAULT NULL,
  `raw_material` smallint(5) unsigned DEFAULT NULL,
  `gender` smallint(5) unsigned DEFAULT NULL,
  `order` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;


ALTER TABLE `searches`
  ADD CONSTRAINT `searches_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `searches_categories`
  ADD CONSTRAINT `searches_categories_ibfk_2` FOREIGN KEY (`search_id`) REFERENCES `searches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `searches_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

