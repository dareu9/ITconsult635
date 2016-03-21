drop database if exists itconsult635;
create database itconsult635;
use itconsult635;
drop table if exists `profile`;
create table `profile`	(
  emp_no int(10) primary key not null auto_increment,
  co_name varchar(255),
  address varchar(255),
  email varchar(255),
  telephone varchar(12),
  revenue varchar(255)
);

insert into `profile`(
  emp_no,
  co_name,
  address,
  email,
  telephone,
  revenue)
values(
  "5",
  "NJIT",
  "Edison,NJ",
  "am925@njit.edu",
  "347-951-8523",
  "75million"
);

drop if exists `position`;
create table `position` (
  job_title varchar(255),
  salary varchar(255),
  status varchar(255),
  duration varchar(255),
  location varchar(255),
);

insert into `profile`(
  job_title,
  salary,
  status,
  duration,
  location)
values(
  "DBA",
  "$85,000",
  "Full-Time",
  "2yrs",
  "NY"
);