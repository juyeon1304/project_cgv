use cgv;


drop TABLE theater_info;

CREATE TABLE theater_info (
		theater_idx int auto_increment primary key,
        theater_name varchar(20) not null,
        theater_zipcode varchar(10) not null,
        theater_addr1 varchar(100) not null,
        theater_addr2 varchar(100) not null,
        theater_addr3 varchar(100) not null,
        theater_tel varchar(20) not null
    ) default character set utf8 collate utf8_general_ci;
    
    select * from theater_info;
    
    DESC theater_info;
    ALTER TABLE theater_info DROP theater_zipcode;
    ALTER TABLE theater_info ADD theater_zipcode varchar(10) not null;
   
    