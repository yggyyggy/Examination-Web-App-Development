create table employees(
	ID int not null,
	Name varchar(50),
	Date_Hired datetime,
	foreign key fk_departmentid(Department_ID) references departments(ID),
	foreign key fk_salaryid(Salary_ID) references salary(ID),
	primary key (ID)
	);
	
insert into employees(ID, Name, Date_Hired)
values (1, 'Employee1', '2017-10-07 00:00:00');

insert into employees(ID, Name, Date_Hired)
values (2, 'Employee2', '2012-10-08 00:00:00');

insert into employees(ID, Name, Date_Hired)
values (3, 'Employee3', '2016-08-10 00:00:00');

insert into employees(ID, Name, Date_Hired)
values (4, 'Employee4', '2018-08-10 00:00:00');

select max(salary)
from salary; 

select * from employees
where Date_Hired between '2017-10-07 00:00:00' and '2018-08-10 00:00:00';

select Name from employees
where Date_Hired <= '2018-08-10 00:00:00'
inner join deparments on employees.id = department 'IT';
