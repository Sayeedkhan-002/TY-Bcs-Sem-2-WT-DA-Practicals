[root@master ~]# su postgres
bash-4.2$ psql
could not change directory to "/root"
psql (9.2.24)
Type "help" for help.

postgres=# create database event
postgres-# ;
CREATE DATABASE

postgres=# \c event;
You are now connected to database "event" as user "postgres".
event=# create table event(eno int primary key,title varchar(20),date date);
NOTICE:  CREATE TABLE / PRIMARY KEY will create implicit index "event_pkey" for table "event"
CREATE TABLE
event=# create table committee(cno int primary key,name varchar(10),head varchar(10),from_time int,to_time int,status varchar(10));
NOTICE:  CREATE TABLE / PRIMARY KEY will create implicit index "committee_pkey" for table "committee"
CREATE TABLE
event=# create table eve_com(eno int references event(eno),cno int references committee(cno));
CREATE TABLE
event=# ^C
event=# insert into event values(1,'workshop','1/2/2021');
INSERT 0 1
event=# insert into event values(2,'seminar','3/2/2021');
INSERT 0 1
event=# insert into event values(3,'seminar','4/2/2021');
INSERT 0 1
event=# insert into committee values(11,'cultural','Prof.Ajay Patil',1,5);
ERROR:  value too long for type character varying(10)
event=# insert into committee values(11,'cultural','Ajay',1,5,'pending');
INSERT 0 1
event=# insert into committee values(12,'student dev.','Vishal',2,5,'pending');
ERROR:  value too long for type character varying(10)
event=# insert into committee values(12,'stud dev.','Vishal',2,5,'pending');
INSERT 0 1
event=# insert into committee values(13,'bahishal ','Umesh',2,5,'working');
INSERT 0 1
event=# insert into eve_com values(1,11);
INSERT 0 1
event=# insert into eve_com values(3,11);
INSERT 0 1
event=# insert into eve_com values(2,12);
INSERT 0 1
event=# insert into eve_com values(2,13);
INSERT 0 1
event=# ^C
event=# 

