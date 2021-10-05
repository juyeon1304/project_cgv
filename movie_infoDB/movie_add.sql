CREATE DATABASE movie;

  USE movie;
  
  create table Movie_info (  
  M_idx int auto_increment primary key,
  M_Code varchar(100) unique not null, -- 영화코드(index key)
  M_Picture_Code varchar(200), -- 영화 관련 사진
  M_Title nvarchar(300) not null, -- 영화제목
  E_M_Title nvarchar(300), -- 영화 영문 제목
  M_Genre_Code varchar(100), -- 영화 장르 코드 - 장르 테이블에서 코드 삽입, 장르 코드 앞에 #을 삽입하여 구분, 장르를 저장하는 Table은 따로 관리 하지 않음
  M_Rel_Date varchar(50), -- 영화 개봉일
  M_Summary nvarchar(200), -- 영화 줄거리
  Dircetor_code varchar(100), -- 감독이름- 감독 테이블에서 코드 삽입
  Actor_Code varchar(100) -- 출연배우 이름 - 배우 테이블에서 코드 삽입 
  );
  
  DESC Movie_info;
  
  INSERT INTO Movie_info (
  M_Code, M_Picture_Code,
  M_Title, E_M_Title,
  M_Genre_Code,
  M_Rel_Date,
  M_Summary,
  Dircetor_code,
  Actor_Code)
  VALUES ('00001', 'null', '블랙위도우', 'Black Widow', 'Fantasy', '2021-09-29',  '어벤져스의 히어로 …', '케이트 쇼트랜드', '스칼렛 요한슨');  
  
  SELECT * FROM Movie_info;