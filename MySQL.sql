CASREAT DATABASE CARE;
USE CARE;
CREATE TABLE Brands (
 	id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name_ar VARCHAR(255) NOT NULL,
    name_en VARCHAR(255) NOT NULL,
    image TEXT NOT NULL
);

SHOW TABLES; 
بيجيبلى الجداول الى فالداتا بيز دى
 SHOW DATABASES;
 بيجيبلى كل الداتا بيزس بتاعتى
 DISCRIPE Brands;
 هيوصف الجدول ده فيه اى وكده
 USE CARE;
CREATE TABLE CATEGORIES (
 	id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name_ar VARCHAR(255) NOT NULL,
    name_en VARCHAR(255) NOT NULL
);

USE CARE;
CREATE TABLE Products (
 	id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name_ar VARCHAR(255) NOT NULL,
    name_en VARCHAR(255) NOT NULL,
    price DECIMAL(7,2) NOT NULL,
 	quantity SMALLINT(7) NOT NULL,
    image TEXT NOT NULL,
    brand_id INT(10) UNSIGNED NOT NULL,
    category_id INT(100) UNSIGNED NOT NULL, هنا هشيل ال null لو كنت مختاره فا فورن كاى set null
    FOREIGN KEY(category_id) REFERENCES categories(id) ON DELETE RESTRICT ON UPDATE CASCADE, لو عملت هنا set null يبقى هشيل null الى عندها فوق
    FOREIGN KEY(brand_id) REFERENCES brands(id) ON DELETE RESTRICT ON UPDATE CASCADE,
);
on delet :
restrict  لو حطتيتها هيمسح الى متعلق بالبروضكت دى بس
CASCADE
set null

CREATE TABLE Users (
 	id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name_ar VARCHAR(255) NOT NULL,
    name_en VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    state VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    type TINYINT(1) NOT NULL
);
لو عايزه اضيفحاجه ع الجددول نسيتها مثلا
ALTER TABLE users
ADD COLUMN credet_card_number VARCHAR(255);

USE CARE;
CREATE TABLE favorite(
 	id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_id INT(100) NOT NULL,
    product_id INT(100) NOT NULL,
    FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(product_id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE
);