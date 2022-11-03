USE site_db;

DROP TABLE IF EXISTS t5_product;
-- Product Table
CREATE TABLE IF NOT EXISTS t5_product(
    product_ID INT PRIMARY KEY,
    our_price DECIMAL(6,2),
    color SET('white', 'black', 'gray', 'red', 'beige', 'orange', 'yellow', 'green', 'blue', 'purple'),
    quantity INT,
    shoe_cond enum('Grade A', 'Grade B', 'Grade C', 'Grade D', 'Grade F'),
    size DECIMAL(2,1),
    brand enum('Nike', 'Jordan', 'Adidas', 'Converse', 'Reebok', 'New Balance', 'Vans', 'Puma', 'Yeezy'),
    style_num INT,
    listing_price DECIMAL(6,2),
    deleted enum("y", "n"),
    supplier varchar(100));

DROP TABLE IF EXISTS t5_supplier;
-- Supplier Table
CREATE TABLE IF NOT EXISTS t5_supplier (
    supplier_id INT PRIMARY KEY,
    supName VARCHAR(100),
    supAddress VARCHAR(100),
    number_of_sales INT,
    supEmail VARCHAR(100),
    supPhone_num CHAR(10),
    deleted enum("y", "n"));

DROP TABLE IF EXISTS t5_customer;
-- Customer Table
CREATE TABLE IF NOT EXISTS t5_customer(
    customer_id INT PRIMARY KEY,
    last_name VARCHAR(100),
    first_name VARCHAR(100),
    cus_address VARCHAR(100),
    cus_email VARCHAR(100),
    deleted ENUM("y", "n"));

DROP TABLE IF EXISTS t5_user;
-- User Table
CREATE TABLE IF NOT EXISTS t5_user(
    username VARCHAR(100) PRIMARY KEY,
    passwrd VARCHAR(100),
    passwrd_reset DATE,
    title Enum('Stakeholder', 'Employee', 'Admin/IT', 'Customer'),
    monthly_report BLOB,
    deleted enum("y", "n"),
    email varchar(100),
    lastchanged date,
    password_type enum("hashed", "text"));

DROP TABLE IF EXISTS t5_orders;
-- Orders Table
CREATE TABLE IF NOT EXISTS t5_orders(
    order_num INT PRIMARY KEY,
    customer_id INT,
    product_id INT,
    order_status Enum('Processing','Shipped', 'Delivered'),
    deleted enum("y", "n"));
    
    
insert into t5_supplier VALUES (111, 'John Adams', '1519 Homes Ave', 14, 'jadams@gmail.com', '2420908954', 'n');
insert into t5_supplier VALUES (112, 'Josh Peters', '35 Center St.', 55, 'joshpeters@gmail.com', '3145647227', 'n');
insert into t5_supplier VALUES (113, 'Valerie Hanks', '55 Rays Ct. ', 30, 'valhanks@yahoo.com', '4139059090', 'n');
insert into t5_supplier VALUES (114, 'Alex Ams', '8952 Barker St.', 1, 'aams@gmail.com', '2139490004', 'n');
insert into t5_supplier VALUES (115, 'Sarah Vars', '22 Main St.', 3, 'sarah111@yahoo.com', '1245436754', 'y');

INSERT INTO t5_user VALUES('ML2495', 'g0hf45!', CURDATE(), 'Employee', 'N/A', 'n', 'masielong@gmail.com', '2022-10-02', 'hashed');
INSERT INTO t5_user VALUES('HB6583', 'Ke4H8y!', '2023-01-09', 'Customer', 'N/A', 'n', 'eric6875@gmail.com', '2022-10-10', 'hashed');
INSERT INTO t5_user VALUES('SA85h4', 'heJ78ke', '2023-01-11', 'Admin/IT', 'N/A', 'n', 'nancy89746@gmail.com', '2022-09-12', 'hashed');
INSERT INTO t5_user VALUES('89JK76', '1985hwu', '2023-01-13', 'Stakeholder', 'N/A', 'n', 'susanbridges9@gmail.com', '2022-08-17', 'hashed');
INSERT INTO t5_user VALUES('73WX8f', '00yu54#', '2023-02-01', 'Customer', 'N/A', 'n', 'mikemarsh@gmail.com', '2022-06-05', 'hashed');
INSERT INTO t5_user VALUES('SW5862', '64Jjuq3', '2023-12-05', 'Employee', 'N/A', 'n', 'katebrown@gmail.com', '2022-10-05', 'hashed');
