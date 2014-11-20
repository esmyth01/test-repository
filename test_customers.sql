/*
our first version of a table test_customers.sql
*/

drop table if exists test_customers;

create table test_customers
( CustomerID int unsigned not null auto_increment primary key,
LastName varchar(50),
FirstName varchar(50),
Email varchar(80)
);


insert into test_customers values (NULL,"Smith","Bob","bob@example.com");
insert into test_customers values (NULL,"Jones","Bill","bill@example.com");
insert into test_customers values (NULL,"Doe","John","john@example.com");
insert into test_customers values (NULL,"Rules","Ann","ann@example.com");
