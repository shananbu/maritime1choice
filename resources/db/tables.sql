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
  constraint pk5 primary key(id)
 );

insert into AdminLogin (firstName, designation, userName, password, createdDate) values ('Administrator', 'Admin','admin','admin123', now());

-- drop table category;
create table Category (
	id bigint auto_increment,
	name varchar(25),
	status bit,
	createdDate datetime,
	updatedDate datetime,
	constraint pk1 primary key(id)
);