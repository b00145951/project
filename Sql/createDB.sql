drop table is exists registeredUser;
create table registeredUser
(
        regUserID int auto_increment,
        firstName varchar(20),
        surName varchar (20),
        userName varchar (20),
        pwd varchar(20),
        primary key (regUserID)
);
insert into registeredUser (firstName, surName, userName, pwd) values ('Sophie', 'Daly','sophied','password')
insert into registeredUser (firstName, surName, userName, pwd) values ('Louise', 'Smith','louises','mypassword')