
-- CREACION DE TABLAS

CREATE TABLE `user` (
    `user_id` int NOT NULL AUTO_INCREMENT,
    `email` varchar(255) NOT NULL,
    `apple_id` varchar(255) DEFAULT NULL,
    `password` varchar(255) NOT NULL,
    `phone` varchar(255) DEFAULT NULL,
    `direccion` varchar(255) DEFAULT NULL,
    `poblacion` varchar(255) DEFAULT NULL,
    `ciudad` varchar(255) DEFAULT NULL,
    `date_modification` datetime NOT NULL,
    `date_creation` datetime NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    `surname_1` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`user_id`)
)

CREATE TABLE `administrator` (
    `admin_id` int NOT NULL AUTO_INCREMENT,
    `user_id` int NOT NULL,
    PRIMARY KEY (`admin_id`),
    CONSTRAINT `fk_user_admin` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
)

CREATE TABLE `category` (
    `category_id` int NOT NULL AUTO_INCREMENT,
    `nameCategory` varchar(255) DEFAULT NULL,
    `date_creation` datetime DEFAULT NULL,
    PRIMARY KEY (`category_id`)
)

CREATE TABLE `product` (
    `product_id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) DEFAULT NULL,
    `description` varchar(255) DEFAULT NULL,
    `imageURL` varchar(255) DEFAULT NULL,
    `price` double DEFAULT NULL,
    `category_id` int DEFAULT NULL,
    `date_creation` datetime NOT NULL,
    PRIMARY KEY (`product_id`),
    CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
)

CREATE TABLE `ingredient` (
    `ingredient_id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) DEFAULT NULL,
    `precio` double DEFAULT NULL,
    PRIMARY KEY (`ingredient_id`)
)

CREATE TABLE `promotion` (
    `promotion_id` int NOT NULL AUTO_INCREMENT,
    `name_discount` varchar(255) DEFAULT NULL,
    `description` varchar(255) DEFAULT NULL,
    `date_ini` datetime NOT NULL,
    `date_fin` datetime NOT NULL,
    `porcentaje` double DEFAULT NULL,
    `date_creation` datetime NOT NULL,
    `imageURL` varchar(255) DEFAULT NULL,
    `promotion_code` VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`promotion_id`)
)

CREATE TABLE `pedido` (
    `pedido_id` int NOT NULL AUTO_INCREMENT,
    `cliente_id` int NOT NULL,
    `metodo_envio` varchar(255) DEFAULT NULL,
    `estado` varchar(255) DEFAULT NULL,
    `date_creation` datetime NOT NULL,
    `discount_id` int DEFAULT NULL,
    `subtotal` double DEFAULT NULL,
    `tax` double DEFAULT NULL,
    `price_total` double DEFAULT NULL,
    `name` varchar(255) DEFAULT NULL,
    `surname` varchar(255) DEFAULT NULL,
    `address` varchar(255) DEFAULT NULL,
    `cod_postal` int DEFAULT NULL,
    `city` varchar(255) DEFAULT NULL,
    `phone` int DEFAULT NULL,
    PRIMARY KEY (`pedido_id`),
    CONSTRAINT `fk_user` FOREIGN KEY (`cliente_id`) REFERENCES `user` (`user_id`),
    CONSTRAINT `fk_promotion` FOREIGN KEY (`discount_id`) REFERENCES `promotion` (`promotion_id`)
)

CREATE TABLE `pedidoProducto` (
    `pedido_item_id` int NOT NULL AUTO_INCREMENT,
    `pedido_id` int DEFAULT NULL,
    `producto_id` int DEFAULT NULL,
    `cantidad` int DEFAULT NULL,
    `precio` double DEFAULT NULL,
    `precio_total` double DEFAULT NULL,
    PRIMARY KEY (`pedido_item_id`),
    CONSTRAINT `fk_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`pedido_id`),
    CONSTRAINT `fk_producto` FOREIGN KEY (`producto_id`) REFERENCES `product` (`product_id`)
)


CREATE TABLE `product_ingredient` (
    `product_ingredient_id` int NOT NULL AUTO_INCREMENT,
    `product_id` int NOT NULL,
    `ingredient_id` int DEFAULT NULL,
    `is_base` tinyint(1) NOT NULL,
    `is_extra` tinyint(1) NOT NULL,
    `cantidad` int DEFAULT NULL,
    PRIMARY KEY (`product_ingredient_id`),
    CONSTRAINT `fk_product_ingredient_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
    CONSTRAINT `fk_product_ingredient_ingredient` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ingredient_id`)
)

CREATE TABLE `producto_promocion` (
    `producto_promocion_id` int NOT NULL AUTO_INCREMENT,
    `promotion_id` int DEFAULT NULL,
    `product_id` int DEFAULT NULL,
    PRIMARY KEY (`producto_promocion_id`),
    CONSTRAINT `fk_promotion_product` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`promotion_id`),
    CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
)



CREATE TABLE `valoration` (
    `valoration_id` int NOT NULL AUTO_INCREMENT,
    `user_id` int DEFAULT NULL,
    `product_id` int DEFAULT NULL,
    `puntuación` int DEFAULT NULL,
    `description` varchar(255) DEFAULT NULL,
    `date_creation` datetime DEFAULT NULL,
    PRIMARY KEY (`valoration_id`),
    CONSTRAINT `fk_user_val` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
    CONSTRAINT `fk_product_val` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
)

CREATE TABLE `history_log` (
    `log_id` int NOT NULL AUTO_INCREMENT,
    `date_creation` datetime DEFAULT NULL,
    `name` VARCHAR(255) DEFAULT NULL,
    `description` VARCHAR(255) DEFAULT NULL,
    `user_id` int DEFAULT NULL,
    PRIMARY KEY (`log_id`)
)
