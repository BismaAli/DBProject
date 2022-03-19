CREATE TABLE admin(
a_id int(20) PRIMARY key AUTO_INCREMENT,
a_email varchar(30) NOT null,
a_password varchar(30) not null
);

create TABLE category(
c_id int(20) primary KEY AUTO_INCREMENT,
c_name varchar(20) NOT null
);

create TABLE product(
p_id int(20) primary KEY AUTO_INCREMENT,
p_name varchar(20) DEFAULT null,
price NUMERIC(20) NOT null,
code int(20) NOT null,
brand varchar(50) DEFAULT null,
pic varchar(250) DEFAULT null,
details text (250) DEFAULT null,
c_id int(20),
FOREIGN KEY(c_id) REFERENCES category(c_id) ON DELETE SET null ON UPDATE CASCADE
);

create TABLE customer(
c_id int(20) primary KEY AUTO_INCREMENT,
c_name varchar(20) DEFAULT null,
c_email varchar(30) NOT null,
c_password varchar(20) NOT null,
c_address varchar(250) DEFAULT null,
c_number int(20) DEFAULT null,
city text(30) DEFAULT null,
country varchar(20) DEFAULT null,
zipCode int(10) DEFAULT null
);

create TABLE orders(
o_id int(20) primary KEY AUTO_INCREMENT,
o_date date NOT null,
quantity int(30) NOT null,
amount NUMERIC(20) NOT null,
details text(250) DEFAULT null,
c_id int(20) ,
FOREIGN KEY(c_id) REFERENCES customer(c_id) ON DELETE SET null ON UPDATE CASCADE
);
