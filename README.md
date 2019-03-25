# TravelAdvisor
Helps you figure out the fastest and most efficient ways of getting around the city using public transport

by 
Raunak Sengupta     (PES1201700072)
Aprameya Kulkarni   (PES1201701583)
Dev Bhartra         (PES1201700186)

Basic Queries:  (also found in the folder Phase 2):

select * from buses where dep_stn='Banashankari Bus Station';

transport=# select * from buses where type='AC' and busno like '500%';

select max(num_bookings) from users;
select fname,lname from users where num_bookings=50;

 select * from buses, users where fname='Samuel' and (home_stn=dep_stn or home_stn=des_stn);
 
select * from bookings as B, users as U where FROM='Kengeri TTMC' and U.userid=B.userid;

select sum(cost) from bookings;

 select * from buses where type='NORMAL' and des_stn='Maruthinagara';
 
select * from buses where des_stn='Kadugodi' and type='AC';


select userid, fname from users where num_bookings>10;
