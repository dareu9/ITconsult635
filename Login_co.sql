use itconsult635;
drop table if exists `Login`;
create table `Login` (
  userID int(10) primary key not null auto_increment,
  username varchar(255),
  password varchar(255),
  usertype enum('manager','seeker')
);

insert into `Login` (
  userID,
  username,
  password,
  usertype)
values(
  "1",
  "am925",
  "admin", 
  "manager"
);

insert into `Login` (
  userID,
  username,
  password,
  usertype)
values(
  "2",
  "am924",
  "user", 
  "seeker"
);