ALTER TABLE `products` ADD `shipping_group` FLOAT( 2 ) UNSIGNED NULL DEFAULT NULL AFTER `shipping`;

ALTER TABLE `showcases` ADD `created` DATETIME NULL;

ALTER TABLE `showcases` ADD UNIQUE (
`year` ,
`week`
);