create table users(
    id int not null primary key auto_increment,
    email varchar(255) not null,
    password varchar(255) not null,
    image varchar(255)
);

create table products(
    id int not null primary key auto_increment,
    name varchar(255) not null,
    slug varchar(255) not null,
    image varchar(255),
    description text,
    sell_price int not null,
    list_price int,
    category_id int not null
);


create table categories(
    id int not null primary key auto_increment,
    name varchar(255) not null,
    slug varchar(255) not null,
    image varchar(255),
    description text,
    parent_id int not null default(0)
);

create table suppliers(
    id int not null primary key auto_increment,
    name varchar(255) not null,
    slug varchar(255) not null,
    image varchar(255),
    description text
);

insert into users(email, password) values('admin@gmail.com', '123456');
insert into users(email, password) values('toan@gmail.com', md5('123456'));
insert into users(email, password) values('hai@gmail.com', sha1('123456'));

INSERT INTO users SET email = 'letoan', password = '123456';


UPDATE users SET email ='newName@gmail.com' WHERE id = 1;
DELETE FROM users WHERE id < 2;
INSERT INTO products(name, slug, sell_price, category_id) VALUES('iphone 5', 'iphone-5', 1200, 1);
INSERT INTO products(name, slug, sell_price, category_id) VALUES('iphone 6s', 'iphone-6s', 1500, 1);
INSERT INTO products(name, slug, sell_price, category_id) VALUES('iphone 5', 'iphone-5', 1200, 1);
INSERT INTO products(name, slug, sell_price, category_id) VALUES('iphone 5', 'iphone-5', 1200, 1);
INSERT INTO products(name, slug, sell_price, category_id) VALUES('samsung galaxy', 'samsung-galaxy', 1200, 1);
 select *, sell_price*stock as total_in_stock, 3*9 from products;

 INSERT INTO suppliers(name, slug) VALUES('Apple', 'apple');
 INSERT INTO suppliers(name, slug) VALUES('Samsung', 'samsung');
 select *, if(stock>0, 'con hang', 'het hang') as stock_status from products;

SELECT OrderID, Quantity,
CASE
    WHEN Quantity > 30 THEN "The quantity is greater than 30"
    WHEN Quantity = 30 THEN "The quantity is 30"
    ELSE "The quantity is under 30"
END
FROM OrderDetails;

SELECT * FROM products WHERE id > 0 GROUP BY supplier_id;

SELECT *, sum(stock) as total_in_stock FROM products WHERE id > 0 GROUP BY supplier_id;
-- GROUP BY --> Having
select * from products where name like '%iphone%';
select * from products limit 1 offset 2;
select * from products where stock = (select max(stock) from products);

create table countries(
    id int not null primary key auto_increment,
    name varchar(255) not null,
    slug varchar(255) not null,
    image varchar(255),
    description text
);


select categories.id as category_id, categories.name as category_name, products.id as product_id, products.name as product_name, products.sell_price 
from categories left join products on categories.id = products.category_id
where categories.id = 1;

select c.id as category_id, c.name as category_name, p.id as product_id, p.name as product_name, p.sell_price 
from categories as c left join products as p on c.id = p.category_id
where c.id = 1;

select c.id as category_id, c.name as category_name, p.id as product_id, p.name as product_name, p.sell_price 
from categories c left join products p on c.id = p.category_id
where c.id = 1;

select c.id as country_id, c.name as country_name, s.id as supplier_id, s.name as supplier_name, p.id as product_id, p.name as product_name, p.sell_price as product_price
from countries as c 
left join suppliers as s on s.country_id = c.id
left join products as p on p.supplier_id = s.id
where c.id < 3; 


select c.id as country_id, c.name as country_name, s.id as supplier_id, s.name as supplier_name, p.id as product_id, p.name as product_name, p.sell_price as product_price
from countries as c 
inner join suppliers as s on s.country_id = c.id
inner join products as p on p.supplier_id = s.id
where c.id < 3; 
