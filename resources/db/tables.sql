create database maritime1stchoice;
use maritime1stchoice;

-- drop table AdminLogin
create table AdminLogin (
  id bigint auto_increment,
  firstName varchar(25),
  designation varchar(25),
  mailId varchar(25),
  phoneNumber varchar(20),
  DOJ datetime,
  DOR datetime,
  userName varchar(25),
  password varchar(25),
  createdDate datetime,
	updatedDate datetime,
  constraint pk1 primary key(id)
 );

insert into AdminLogin (firstName, designation, userName, password, createdDate) values ('Administrator', 'Admin','admin','admin123', now());

-- drop table Category;
create table Category (
	id bigint auto_increment,
	name varchar(25),
	status bit,
	createdDate datetime,
	updatedDate datetime,
	constraint pk2 primary key(id)
);

-- drop table BusinessService;
create table BusinessService (
	id bigint auto_increment,
	categoryId bigint,
	name varchar(100),
	description varchar(10000),
	status bit,
	createdDate datetime,
	updatedDate datetime,
	constraint pk3 primary key(id),
	constraint fk1 foreign key (categoryId) references Category(id)
);

-- drop table News;
create table News (
	id bigint auto_increment,
	title varchar(100),
	description varchar(10000),
	status bit,
	createdDate datetime,
	updatedDate datetime,
	constraint pk4 primary key(id)
);

-- drop table Careers;
create table Careers (
	id bigint auto_increment,
	title varchar(100),
	location varchar(100),
	qualification varchar(100),
	experience varchar(100),
	noofpositions varchar(100),
	validity datetime,
	description varchar(10000),
	status bit,
	createdDate datetime,
	updatedDate datetime,
	constraint pk5 primary key(id)
);
