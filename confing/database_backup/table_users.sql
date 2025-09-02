--create data users
create table users(
             id bigserial primary key,
             firstname varchar(30)not null,
             lastname varchar(30) not null,
             mobile_number varchar(20) not null,
             ide_number varchar(15) null,
             address text null,
             birthday date null,
             email varchar(200) not null unique,
             password text not null,
             status boolean not null default true,
created_at timestamptz not null default now(),
updated_at timestamptz not null default now(),
deleted_at timestamptz not null 
);
--insert into table user 
insert into users (
firstname,
lastname,
mobile_number,
email,
password
)
values(
       'maria',
       'guerra',
       '3876984562',
       'mariaguerra2326@gmail.com',
       '1234', 
);
 
 