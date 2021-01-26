ALTER TABLE shop_tb ALTER COLUMN avarage_price set default 'なし';

ALTER TABLE shop_tb ALTER COLUMN avarage_price set default 'なし';



select * from ramenumashi.shop_tb;
select * from ramenumashi.user_tb where user_id = "7V2FpsoD0p";
select * from ramenumashi.reserve_tb;
select * from  ramenumashi.user_tb where email = "tsss@test.ne.jp";



delete from ramenumashi.migrations where migration="2020_12_22_131529_create_user_tb_table";
select * from ramenumashi.migrations;
show COLUMNS from ramenumashi.reserve_tb;
show COLUMNS from ramenumashi.shop_tb;
show COLUMNS from ramenumashi.user_tb;

select exists(select * from ramenumashi.reserve_tb where `reserve_time` = '2021-01-14 10:00' and `shop_id` = 'rBNlVdP3Sx' and `user_id` = 'mashmash!') as `exists`

select * from ramenumashi.reserve_tb where reserve_id = '2SEmYzEYig' and ;

ALTER TABLE shop_tb MODIFY COLUMN seat string(255);

alter table shop_tb modify seat varchar(255) not null;

ALTER TABLE shop_tb MODIFY COLUMN seat varcahr(255);


select * from user
use ramenumashi
show tables;


select rt.reserve_id ,rt.user_id,st.shop_name,rt.reserve_time,rt.dlflag  from ramenumashi.shop_tb as st ,
ramenumashi.user_tb as ut,
ramenumashi.reserve_tb as rt
where st.shop_id = rt.shop_id
and ut.user_id = rt.user_id
and rt.dlflag = 1;


select rt.reserve_id ,rt.user_id,st.shop_name,rt.reserve_time,rt.dlflag  from ramenumashi.shop_tb as st ,
ramenumashi.user_tb as ut,
ramenumashi.reserve_tb as rt
where st.shop_id = rt.shop_id
and ut.user_id = rt.user_id
and rt.dlflag = 1;




select * from ramenumashi.reserve_tb as rt inner join ramenumashi.shop_tb as rs
 on rt.`shop_id` = rs.`shop_id`
  inner join ramenumashi.user_tb as ru on rt.`user_id` = ru.`user_id`


select * from ramenumashi.user_tb where user_id="mashmash!";


select * from ramenumashi.shop_tb where shop_id = "rBNlVdP3Sx";

select `reserve_tb`.`reserve_id`, `reserve_tb`.`reserve_time`, `reserve_tb`.`dlflag` 
from `reserve_tb` inner join `shop_tb` on `reserve_tb`.`shop_id` = `shop_tb`.`shop_id` 
inner join `user_tb` on `reserve_tb`.`user_id` = `user_tb`.`user_id` where `reserve_tb`.`dlflag` = 1

select `reserve_tb`.`reserve_id`, `reserve_tb`.`reserve_time`, `reserve_tb`.`dlflag` 
from `reserve_tb` inner join `shop_tb` on `reserve_tb`.`shop_id` = `shop_tb`.`shop_id` inner join `user_tb` on `reserve_tb`.`user_id` = `user_tb`.`user_id` 
where `reserve_tb`.`dlflag` = 1 and `reserve_tb`.`user_id` = 'mashmash!';


drop table ramenumashi.shop_tb;
drop table ramenumashi.user_tb;
drop table ramenumashi.reserve_tb;