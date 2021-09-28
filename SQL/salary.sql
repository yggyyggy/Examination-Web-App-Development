create table salary(
	foreign key fk_employeesid(ID) references employees(ID),
	salary int not null,
	primary key (salary)
	);
	
insert into salary(salary)
values(10000);

insert into salary(salary)
values(15000);

insert into salary(salary)
values(20000);