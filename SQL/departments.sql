create table departments(
	foreign key fk_employeesid(ID) references employees(ID),
	department varchar(50) not null,
	primary key (department)
	);
	
insert into departments(department)
values ('Marketing');

insert into departments(department)
values ('Consultancy');

insert into departments(department)
values ('IT');