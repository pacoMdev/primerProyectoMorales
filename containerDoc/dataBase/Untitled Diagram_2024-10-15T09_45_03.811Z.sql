CREATE OR REPLACE TABLE "user" (
	"user_id" INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
	"email" VARCHAR(255) NOT NULL,
	"apple_id" VARCHAR(255) UNIQUE,
	"password" VARCHAR(255) NOT NULL,
	"phone" VARCHAR(255) NULL,
	"direccion" VARCHAR(255) NULL,
	"poblacion" VARCHAR(255) NULL,
	"ciudad" VARCHAR(255) NULL,
	"date_modification" DATETIME NOT NULL,
	"date_creation" DATETIME NOT NULL,
	"name" VARCHAR(255),
	"surname_1" VARCHAR(255),
	PRIMARY KEY("user_id")
);


CREATE OR REPLACE TABLE "product" (
	"product_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"name" VARCHAR(255),
	"description" VARCHAR(255),
	"imageURL" VARCHAR(255),
	"price" DOUBLE,
	"category_id" INTEGER,
	"dateCreation" DATE NOT NULL,
	"date_creation" DATETIME NOT NULL,
	PRIMARY KEY("product_id")
);


CREATE OR REPLACE TABLE "pedido" (
	"pedido_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"cliente_id" INTEGER NOT NULL,
	"metodoEnvio" VARCHAR(255),
	"estado" VARCHAR(255),
	"date_creation" DATETIME NOT NULL,
	"discount_id" INTEGER,
	"precio_base" DOUBLE,
	"impuestos" DOUBLE,
	"precio_total" DOUBLE,
	PRIMARY KEY("pedido_id", "cliente_id")
);


CREATE OR REPLACE TABLE "ingredient" (
	"ingredient_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"name" VARCHAR(255),
	"precio" DOUBLE,
	PRIMARY KEY("ingredient_id")
);


CREATE OR REPLACE TABLE "product_ingredient" (
	"product_ingredient_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"product_id" INTEGER NOT NULL,
	"ingredient_id" INTEGER,
	"is_base" BOOLEAN NOT NULL COMMENT 'según el producto tendrá un ingrediente base que si es:
- TRUE -> es base
- FALSE  -> no es base y es extra',
	"is_extra" BOOLEAN NOT NULL,
	"cantidad" INTEGER,
	PRIMARY KEY("product_ingredient_id", "product_id")
);


CREATE OR REPLACE TABLE "category" (
	"category_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"nameCategory" VARCHAR(255),
	"date_creation" DATETIME,
	PRIMARY KEY("category_id")
);


CREATE OR REPLACE TABLE "pedidoProducto" (
	"pedidoItem_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"pedido_id" INTEGER,
	"producto_id" INTEGER,
	"cantidad" INTEGER,
	"precio" DOUBLE,
	PRIMARY KEY("pedidoItem_id")
);


CREATE OR REPLACE TABLE "promoción" (
	"promotion_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"nameDiscount" VARCHAR(255),
	"description" VARCHAR(255),
	"date_ini" DATETIME NOT NULL,
	"date_fin" DATETIME NOT NULL,
	"porcentaje" DOUBLE,
	"date_creation" DATETIME NOT NULL,
	"imageURL" VARCHAR(255),
	"total" DOUBLE,
	PRIMARY KEY("promotion_id")
);


CREATE OR REPLACE TABLE "valoration" (
	"valoration_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"user_id" INTEGER,
	"product_id" INTEGER,
	"puntuación" INTEGER,
	"description" VARCHAR(255),
	"date_creation" DATETIME,
	PRIMARY KEY("valoration_id")
);


CREATE OR REPLACE TABLE "producto_promocion" (
	"producto_promocion_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"promoción_id" INTEGER,
	"product_id" INTEGER,
	PRIMARY KEY("producto_promocion_id")
);


CREATE OR REPLACE TABLE "administrator" (
	"admin_id" INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	"user_id" INTEGER,
	PRIMARY KEY("admin_id", "user_id")
);


ALTER TABLE "pedido"
ADD FOREIGN KEY("cliente_id") REFERENCES "user"("user_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "product"
ADD FOREIGN KEY("product_id") REFERENCES "pedidoProducto"("producto_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "product"
ADD FOREIGN KEY("category_id") REFERENCES "category"("category_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "pedidoProducto"
ADD FOREIGN KEY("pedidoItem_id") REFERENCES "pedido"("pedido_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "pedido"
ADD FOREIGN KEY("discount_id") REFERENCES "promoción"("promotion_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "valoration"
ADD FOREIGN KEY("user_id") REFERENCES "user"("user_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "valoration"
ADD FOREIGN KEY("product_id") REFERENCES "product"("product_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "product_ingredient"
ADD FOREIGN KEY("product_id") REFERENCES "product"("product_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "product_ingredient"
ADD FOREIGN KEY("ingredient_id") REFERENCES "ingredient"("ingredient_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "producto_promocion"
ADD FOREIGN KEY("promoción_id") REFERENCES "promoción"("promotion_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "producto_promocion"
ADD FOREIGN KEY("product_id") REFERENCES "product"("product_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE "administrator"
ADD FOREIGN KEY("user_id") REFERENCES "user"("user_id")
ON UPDATE NO ACTION ON DELETE NO ACTION;