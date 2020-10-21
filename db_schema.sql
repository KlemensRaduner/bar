drop database if exists  bar;
create database bar CHARACTER SET utf8;
use bar;


create table users(
    id int auto_increment primary key,
    username varchar(255) not null,
    password varchar(255) not null
) engine=innodb;


create table course(
    id int auto_increment primary key,
    name varchar(255) not null,
    description varchar(1023),
    open bool default true,
    space int default 20 not null,
    date datetime,
    price numeric
) engine=innodb;


create table course_users(
    users_id int not null,
    course_id int not null,
    foreign key (users_id) references users(id),
    foreign key (course_id) references course(id)
) engine=innodb;

ALTER TABLE course_users
  ADD CONSTRAINT uq_course_users UNIQUE(users_id, course_id);

insert into course (name, description, space, date, price) values ('Whiskey Cola', 'Lernen Sie den Umgang mit Whisky und Cola', 20, '2020-10-22 20:00:00.000', 50),
                                                           ('Gin für Anfänger', 'Gin gin gin', 10, '2020-11-05 19:00:00.000', 30),
                                                           ('Bierbrauen', 'Hier können Sie ihr eigens Bier brauen', 30, '2020-11-01 18:00:00.000', 20);

insert into users(username, password) values('klemens' , '$2y$10$oDYplKae89zjEsis5bZn3OUh9TfaAK3ZH4pCRU1shnZ860IEDWGza');