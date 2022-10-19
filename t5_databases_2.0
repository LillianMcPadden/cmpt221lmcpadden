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
    listing_price DECIMAL(6,2));
    deleted enum("y", "n");
    supplier varchar(100);

DROP TABLE IF EXISTS t5_supplier;
-- Supplier Table
CREATE TABLE IF NOT EXISTS t5_supplier (
    supplier_id INT PRIMARY KEY,
    supName VARCHAR(100),
    supAddress VARCHAR(100),
    number_of_sales INT,
    supEmail VARCHAR(100),
    supPhone_num CHAR(10));
    deleted enum("y", "n");

DROP TABLE IF EXISTS t5_customer;
-- Customer Table
CREATE TABLE IF NOT EXISTS t5_customer(
    customer_id INT PRIMARY KEY,
    last_name VARCHAR(100),
    first_name VARCHAR(100),
    cus_address VARCHAR(100),
    cus_email VARCHAR(100));
    deleted enum("y", "n");

DROP TABLE IF EXISTS t5_user;
-- User Table
CREATE TABLE IF NOT EXISTS t5_user(
    username VARCHAR(100) PRIMARY KEY,
    passwrd VARCHAR(100),
    passwrd_reset DATE,
    title Enum('Stakeholder', 'Employee', 'Admin/IT', 'Customer'),
    monthly_report BLOB);
    deleted enum("y", "n");
    email varchar(100);
    lastchanged date;
    password_type enum("hashed", "text");

DROP TABLE IF EXISTS t5_orders;
-- Orders Table
CREATE TABLE IF NOT EXISTS t5_orders(
    order_num INT PRIMARY KEY,
    customer_id INT,
    product_id INT,
    order_status Enum('Processing','Shipped', 'Delivered'));
    deleted enum("y", "n");
