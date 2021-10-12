use cgv;

CREATE TABLE tb_theater (
		theater_idx int auto_increment primary key,
        theater_name varchar(20) not null,
        theater_zipcode char(5), 
        theater_addr1 varchar(100),
        theater_addr2 varchar(100),
        theater_addr3 varchar(100),
        theater_tel varchar(20) not null
    );
    
    select * from tb_theater;
    
    DESC tb_theater;