CREATE TABLE IF NOT EXISTS think_user
(
    username varchar(50) primary key,
    password char(32) not null,
    userability int not null,
    userscore int not null,
    reg_time int not null
)ENGINE=MyISAM DEFAULT CHARSET=gbk;

CREATE TABLE IF NOT EXISTS think_shopcar
(
	goods_num varchar(14), 
	username varchar(50),
	number int not null,
	add_time int not null,
	primary key(goods_num,username),
	FOREIGN KEY (goods_num) REFERENCES think_goods(goods_num)
	ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (username) REFERENCES think_users(username)
	ON DELETE CASCADE
    ON UPDATE CASCADE
)ENGINE=MyISAM DEFAULT CHARSET=gbk;

CREATE TABLE IF NOT EXISTS think_goods
(
	goods_num varchar(14),
	goods_name varchar(100) not null,
	goods_type varchar(20) not null,
	goods_new varchar(20) not null,
	goods_service char(4) not null,
	goods_desc text,
	goods_para varchar(255) not null,
	goods_pic varchar(255) not null,
	disc_pic  varchar(255),
	shelf_time int not null,
	goods_state varchar(8) not null,
	goods_inventory int not null,
    primary key(goods_num)	
	
)ENGINE=MyISAM DEFAULT CHARSET=gbk;

CREATE TABLE IF NOT EXISTS think_sale_goods
(
	goods_num varchar(14),
	sale_price decimal(7,2) not null,
	market_price decimal(7,2) not null,
    primary key(goods_num),
    FOREIGN KEY (goods_num) REFERENCES think_goods(goods_num)
	ON DELETE CASCADE
    ON UPDATE CASCADE
	
)ENGINE=MyISAM DEFAULT CHARSET=gbk;

CREATE TABLE IF NOT EXISTS think_rent_goods
(
	goods_num varchar(14),
	hour_price decimal(7,2) not null,
	day_price decimal(7,2) not null,
	month_price decimal(7,2) not null,
    primary key(goods_num),	
    FOREIGN KEY (goods_num) REFERENCES think_goods(goods_num)
	ON DELETE CASCADE
    ON UPDATE CASCADE
	
)ENGINE=MyISAM DEFAULT CHARSET=gbk;


CREATE TABLE IF NOT EXISTS think_order
(
    order_num varchar(14) primary key,
    customer_name varchar(20) not null,
    address varchar(255) not null,
    mobile varchar(22) not null,
    email  varchar(50) not null,
    postal_code varchar(10) not null,
    trade_time int not null,
    pay_way varchar(16) not null,
    trans_fee decimal(7,2) not null,
    discount decimal(7,2) not null,
    order_state varchar(16) not null,
    note text
)ENGINE=MyISAM DEFAULT CHARSET=gbk;

CREATE TABLE IF NOT EXISTS think_user_order
(
    goods_num varchar(14), 
	username varchar(50),
	score decimal(1,1) not null,
	comments text,
	primary key(goods_num,username),
	FOREIGN KEY (goods_num) REFERENCES think_goods(goods_num)
	ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (username) REFERENCES think_users(username)
	ON DELETE CASCADE
    ON UPDATE CASCADE
)ENGINE=MyISAM DEFAULT CHARSET=gbk;
CREATE TABLE IF NOT EXISTS think_order_goods
(
    goods_num varchar(14) primary key, 
	order_num varchar(14) not null,
	number int not null,
	FOREIGN KEY (goods_num) REFERENCES think_goods(goods_num)
	ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (order_num) REFERENCES think_order(order_num)
	ON DELETE CASCADE
    ON UPDATE CASCADE
)ENGINE=MyISAM DEFAULT CHARSET=gbk;

