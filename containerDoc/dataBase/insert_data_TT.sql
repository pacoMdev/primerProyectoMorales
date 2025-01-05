
-- CATEGORY
INSERT INTO `category` (`nameCategory`, `date_creation`) VALUES 
("Tacos", NOW()),
("Burritos", NOW()),
("Nachos", NOW()),
("Bebidas", NOW());

-- PRODUCTS

INSERT INTO `product` (`name`,`description`,`imageURL`,`price`,`category_id`,`date_creation`) VALUES 
('Quesadillas','tortillas rellenas de queso derretido, doradas a la perfección, irresistibles y perfectas','taco-de-queso.webp',8.75,1, NOW()),
('Tacos al pastor','carne marinada, asada al trompo, servida en tortillas con piña, cebolla y cilantro','tacos-al-pastor.webp',8.76,1, NOW()),
('Coca Cola','refresco clásico, burbujeante, dulce y refrescante, con un sabor único que despierta los sentidos','coca-cola.webp',2.31,4, NOW()),
('Nachos ','cubiertos con queso derretido, jalapeños, salsa y guacamole, perfectos para compartir','nachos-para-compartir.webp',13.75,3, NOW()),
('Burrito de pollo',' tortilla rellena de pollo sazonado, arroz, frijoles, queso y salsa fresca','burrito-de-pollo.webp',9.35,2, NOW()),
('Nestea','refresco de té helado, suave y refrescante, con un toque dulce y delicioso','nestea.webp',1.86,4, NOW()),
('Burrito de pollo y verduras','Pollo jugoso, acompañados de verduras frescas y sazonados con especias irresistibles','burrito-de-pollo-verduras.webp',9.86,2, NOW()),
('Corona','Suave, toques cítricos y perfecta para disfrutar en cualquier ocasión','corona.webp',2.43,4, NOW()),
('Burrito de cordero','Cordero tierno, sazonado con especias, acompañado de vegetales frescos y salsa cremosa','burrito-de-cordero.webp',10.67,2, NOW()),
('Burrito de pollo al pastor','Pollo al pastor, relleno de piña, especias, y acompañado de salsa irresistible','burrito-de-pollo-al-pastor.webp',11.22,2, NOW()),
('Fanta naranja','con burbujas vibrantes y un delicioso sabor cítrico lleno de energía','fanta-naranja.webp',11.22,4, NOW()),
('Taco Vegetal','Vegetal con frescas verduras, sazonadas con especias, servido en una tortilla suave','taco-vegetal.webp',11.22,1, NOW()),
('Taco Clasico','Clásico, relleno de carne sazonada, cebolla, cilantro y salsa fresca','taco-clasico.webp',11.22,1, NOW()),
('Taco de Carne','Carne jugosa, sazonada perfectamente, acompañada de cebolla, cilantro y salsa picante','taco-de-carne.webp',11.22,1, NOW());

-- INGREDIENTS

INSERT INTO `ingredient` (`name`, `precio`) VALUES
('Tortilla de maíz', 2.50),
('Carne asada', 15.00),
('Pollo', 12.00),
('Cochinita pibil', 18.00),
('Frijoles refritos', 8.00),
('Arroz', 6.50),
('Queso Oaxaca', 10.00),
('Queso fresco', 8.50),
('Aguacate', 12.00),
('Salsa verde', 5.00),
('Salsa roja', 5.00),
('Chile jalapeño', 3.50),
('Chile habanero', 4.00),
('Cilantro', 2.00),
('Cebolla', 2.50),
('Limón', 1.50),
('Nopal', 6.00),
('Chorizo', 10.50),
('Crema', 7.00),
('Elote', 5.50),
('Pico de gallo', 6.00),
('Guacamole', 15.00),
('Epazote', 1.50),
('Chile chipotle', 4.50),
('Rajas poblanas', 7.50),
('Flor de calabaza', 8.00),
('Champiñones', 9.00),
('Tinga de pollo', 14.00),
('Barbacoa', 20.00),
('Chile ancho', 4.00),
('Chile guajillo', 3.50),
('Achiote', 3.00),
('Huitlacoche', 16.00),
('Sopaipilla', 2.50);


--PROMOTIONs

INSERT INTO `promotion` (`name_discount`, `description`, `date_ini`, `date_fin`, `porcentaje`, `date_creation`, `imageURL`, `promotion_code`) VALUES 
('Discount chirsmas', 'Descuento navideño para todo el pedido', '2024-12-01 00:00:00', '2025-01-08 00:00:00', 2, NOW(), 'promo_1.webp', 'NAV24'),
('First Order', 'Descuento primer pedido en todo el pedido', '2024-12-10 16:02:35', '2026-12-10 16:02:35', 25, NOW(), 'promo_2.webp', 'FIRSTORD'), 
('50% en todos los Tacos', '50% en todos los tacos por tiempo limitado', '2024-12-06 00:00:00', '2024-12-27 00:00:00', 40, NOW(), 'promo_3.webp', '50%TAC');