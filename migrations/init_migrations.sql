-- CREATE TABLE "students" -------------------------------------
CREATE TABLE `students`(
                           `name` VarChar( 255 ) NOT NULL,
                           `surname` VarChar( 255 ) NOT NULL,
                           `gender` VarChar( 255 ) NOT NULL,
                           `age` TinyInt( 255 ) NOT NULL,
                           `groupnumber` VarChar( 255 ) NOT NULL,
                           `mail` VarChar( 255 ) NOT NULL,
                           `score` Smallint( 255 ) NOT NULL,
                           `dob` VarChar (255) NOT NULL,
                           `islocal` TinyInt NOT NULL,
                           `id` Int AUTO_INCREMENT NULL,
                           CONSTRAINT `unique_mail` UNIQUE( `mail` ),
                           CONSTRAINT `unique_id` UNIQUE( `id` ) )
    ENGINE = InnoDB;
-- -------------------------------------------------------------


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

