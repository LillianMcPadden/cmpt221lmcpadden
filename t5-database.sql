USE site_db;

DROP TABLE IF EXISTS t5_product;
-- Product Table
CREATE TABLE IF NOT EXISTS t5_product(
    product_ID INT PRIMARY KEY,
    our_price DECIMAL(6,2),
    color SET('white', 'black', 'gray', 'red', 'beige', 'orange', 'yellow', 'green', 'blue', 'purple'),
    quantity INT,
    shoe_cond enum('Grade A', 'Grade B', 'Grade C', 'Grade D', 'Grade F'),
    size DECIMAL(4,1),
    brand enum('Nike', 'Jordan', 'Adidas', 'Converse', 'Reebok', 'New Balance', 'Vans', 'Puma', 'Yeezy'),
    style_num INT,
    listing_price DECIMAL(6,2),
    deleted enum('y', 'n'),
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
    deleted enum('y', 'n'));

DROP TABLE IF EXISTS t5_customer;
-- Customer Table
CREATE TABLE IF NOT EXISTS t5_customer(
    customer_id INT PRIMARY KEY,
    last_name VARCHAR(100),
    first_name VARCHAR(100),
    cus_address VARCHAR(100),
    cus_email VARCHAR(100),
    deleted enum('y', 'n'));

DROP TABLE IF EXISTS t5_user;
-- User Table
CREATE TABLE IF NOT EXISTS t5_user(
    username VARCHAR(100) PRIMARY KEY,
    passwrd VARCHAR(100),
    passwrd_reset DATE,
    title Enum('Stakeholder', 'Employee', 'Admin/IT', 'Customer'),
    monthly_report BLOB,
    email varchar(100),
    deleted enum('y','n'),
    lastchanged date,
    password_type enum('hashed', 'text'));

DROP TABLE IF EXISTS t5_orders;
-- Orders Table
CREATE TABLE IF NOT EXISTS t5_orders(
    order_num INT PRIMARY KEY,
    customer_id INT,
    product_id INT,
    order_status Enum('Processing','Shipped', 'Delivered'),
    deleted enum('y', 'n'));

insert into t5_supplier VALUES (111, 'John Adams', '1519 Homes Ave', 14, 'jadams@gmail.com', '2420908954', 'n');
insert into t5_supplier VALUES (112, 'Josh Peters', '35 Center St.', 55, 'joshpeters@gmail.com', '3145647227', 'n');
insert into t5_supplier VALUES (113, 'Valerie Hanks', '55 Rays Ct. ', 30, 'valhanks@yahoo.com', '4139059090', 'n');
insert into t5_supplier VALUES (114, 'Alex Ams', '8952 Barker St.', 1, 'aams@gmail.com', '2139490004', 'n');
insert into t5_supplier VALUES (115, 'Sarah Vars', '22 Main St.', 3, 'sarah111@yahoo.com', '1245436754', 'y');

insert into t5_supplier VALUES (116, 'Abby Smith', '11 Ann Drive', 2, 'abbysmith@gmail.com', '9087211898', 'y');
insert into t5_supplier VALUES (117, 'Kyra Paddock', '52 Bloomfield Road', 0, 'kyrapad@yahoo.com', '7326392361', 'n');
insert into t5_supplier VALUES (118, 'Fred Berbs', '25 Chaucer Road', 13, 'fredberbs3@gmail.com', '8455182354', 'n');
insert into t5_supplier VALUES (119, 'Morgan Chambers', '18 Ivanhoe Lane', 5, 'morgcham@yahoo.com', '5183721982', 'y');
insert into t5_supplier VALUES (120, 'Justin Jones', '15 Hospitality Way', 23, 'jjones221@gmail.com', '7324460049', 'y');
insert into t5_supplier VALUES (121, 'Griffin Carrey', '4 Hopi Court', 8, 'griffinator2@yahoo.com', '9085252337', 'n');
insert into t5_supplier VALUES (122, 'Ashley Scales', '5 Deerfield Street', 16, 'ashleys213@gmail.com', '5184579203', 'y');

INSERT INTO t5_user VALUES('ML2495', 'g0hf45!', CURDATE(), 'Employee', 'N/A', 'masielong@gmail.com', 'n', '2022-10-02', 'hashed');
INSERT INTO t5_user VALUES('HB6583', 'Ke4H8y!', '2023-01-09', 'Customer', 'N/A', 'eric6875@gmail.com', 'n', '2022-10-10', 'hashed');
INSERT INTO t5_user VALUES('SA85h4', 'heJ78ke', '2023-01-11', 'Admin/IT', 'N/A', 'nancy89746@gmail.com', 'n', '2022-09-12', 'hashed');
INSERT INTO t5_user VALUES('89JK76', '1985hwu', '2023-01-13', 'Stakeholder', 'N/A', 'susanbridges9@gmail.com', 'n','2022-08-17', 'hashed');
INSERT INTO t5_user VALUES('73WX8f', '00yu54#', '2023-02-01', 'Customer', 'N/A', 'mikemarsh@gmail.com', 'n', '2022-06-05', 'hashed');
INSERT INTO t5_user VALUES('SW5862', '64Jjuq3', '2023-12-05', 'Employee', 'N/A', 'katebrown@gmail.com', 'n', '2022-10-05', 'hashed');

INSERT INTO t5_user VALUES('LM1103', 'j4h6kl7', '2023-1-05', 'Customer', 'N/A', 'jeffmcpad@gmail.com', 'n', '2022-11-25', 'hashed');
INSERT INTO t5_user VALUES('FB0618', 'q0f6mr!', '2023-2-15', 'Admin/IT', 'N/A', 'walterhobbs@gmail.com', 'n', '2022-1-05', 'hashed');
INSERT INTO t5_user VALUES('KP0721', 'L94pfn#', '2023-3-10', 'Stakeholder', 'N/A', 'meridethgrey@gmail.com', 'n', '2022-12-07', 'hashed');
INSERT INTO t5_user VALUES('RO0704', 'ke26pd!', '2023-4-25', 'Employee', 'N/A', 'taylorswift@gmail.com', 'n', '2022-10-25', 'hashed');
INSERT INTO t5_user VALUES('JS0221', 's8b3mk2', '2023-5-20', 'Customer', 'N/A', 'joejonas@gmail.com', 'n', '2022-06-18', 'hashed');
INSERT INTO t5_user VALUES('CE0223', '1j03hdc', '2023-6-30', 'Stakeholder', 'N/A', 'kierascales@gmail.com', 'n', '2022-05-27', 'hashed');


INSERT INTO t5_product VALUES(1, 50.00, 'black', 2, 'Grade A', 7.0, 'Nike', 109, 40.00, 'y', 'John Adams');
INSERT INTO t5_product VALUES(2, 60.00, 'gray', 3, 'Grade B', 8.0, 'Jordan', 210, 50.00, 'n', 'Jane Doe');
INSERT INTO t5_product VALUES(3, 70.00, 'red', 1, 'Grade C', 9.0, 'Adidas', 321, 60.00, 'y', 'Bob Ross');
INSERT INTO t5_product VALUES(4, 80.00, 'orange', 4, 'Grade D', 10.0, 'Yeezy', 432, 70.00, 'n', 'Nick Smith');
INSERT INTO t5_product VALUES(5, 90.00, 'blue', 2, 'Grade F', 11.0, 'Vans', 543, 80.00, 'y', 'James Dean');
INSERT INTO t5_product VALUES(6, 100.00, 'beige', 5, 'Grade A', 12.5, 'Converse', 654, 90.00, 'n', 'Kevin Jonas');

INSERT INTO t5_product VALUES(7, 110.00, 'black', 5, 'Grade B', 12.0, 'Nike', 765, 100.00, 'y', 'Billie Eillish');
INSERT INTO t5_product VALUES(8, 120.00, 'gray', 2, 'Grade C', 11.5, 'Jordan', 876, 110.00, 'n', 'Lebron James');
INSERT INTO t5_product VALUES(9, 130.00, 'red', 4, 'Grade D', 11.0, 'Adidas', 987, 120.00, 'y', 'Kayne West');
INSERT INTO t5_product VALUES(10, 140.00, 'orange', 1, 'Grade F', 10.5, 'Yeezy', 102, 130.00, 'n', 'Kobe Bryant');
INSERT INTO t5_product VALUES(11, 150.00, 'blue', 3, 'Grade F', 10.0, 'Vans', 123, 140.00, 'y', 'Lizzy McAlpine');
INSERT INTO t5_product VALUES(12, 160.00, 'beige', 6, 'Grade A', 9.5, 'Converse', 234, 150.00, 'n', 'Taylor Swift');

INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(1, 'Jacob', 'Pink', '14 Homes Ave', 'jpink@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(2, 'James', 'Yellow', '16 Homes Ave', 'jyellow@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(3, 'Bob', 'Orange', '17 Detroit Ave', 'borange@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(4, 'John', 'Carl', '20 Detroit Ave', 'jcarl@gmail.com', 'n');

INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(5, 'Taylor', 'James', '20 Lasata Ave', 'jtaylor@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(6, 'Erdem', 'Lilly', '22 Lasata Ave', 'lerdem@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(7, 'Grey', 'Ellis', '2 Villanova St', 'egrey@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(8, 'Louderman', 'Taylor', '4 Villanova St', 'tloud@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(9, 'Miller', 'Nick', '17 North Road', 'nmill@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(10, 'Beer', 'Madison', '21 North Road', 'mbeer@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(11, 'Garfield', 'Andrew', '45 Monmouth St', 'agarfield@gmail.com', 'n');
INSERT INTO t5_customer (customer_id, last_name, first_name, cus_address, cus_email, deleted) VALUES(12, 'Wasowski', 'Mike', '48 Monmouth St', 'mwasowski@gmail.com', 'n');
