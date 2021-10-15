use cgv;


drop TABLE theater_info;

CREATE TABLE theater_info (
		theater_idx int auto_increment primary key,
        theater_name varchar(20) not null,
        theater_zipcode varchar(10) not null,
        theater_addr1 varchar(100) not null,
        theater_addr2 varchar(100),
        theater_addr3 varchar(100),
        theater_tel varchar(20) not null
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
    
    select * from theater_info;
    
    
    
    DESC theater_info;
    
   
    