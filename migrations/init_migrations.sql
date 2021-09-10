
/* NEW TABLE*/
create table students_list
(
    name        varchar(255)  not null,
    surname     varchar(255)  not null,
    gender      varchar(255)  not null,
    age         tinyint(255)  not null,
    groupnumber varchar(255)  not null,
    mail        varchar(255)  not null,
    score       smallint(255) not null,
    dob         date          not null,
    islocal     bit           not null,
    id          int auto_increment,
    constraint unique_id
        unique (id),
    constraint unique_mail
        unique (mail)
);

alter table students_list
    add primary key (id);


CREATE TABLE IF NOT EXISTS `sessions`
(
    id        int auto_increment
        primary key,
    timestamp int unsigned null,
    data      mediumtext   null,
    StudentId int          null,
    constraint sessions_students_list_StudentId_fk
        foreign key (StudentId) references students_list (StudentId)
            on delete cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create index timestamp
    on sessions (timestamp);

