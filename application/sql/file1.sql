ALTER TABLE `product_orders` ADD `state` TINYINT UNSIGNED NOT NULL DEFAULT '1' COMMENT '1 - Pendente; 2 - Em processamento; 3 - Enviada; 4 - Finalizada';

ALTER TABLE `orders` DROP `state`;