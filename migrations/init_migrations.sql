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
