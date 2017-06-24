## MySQL 101

Login to MySQL: `mqsql -u root -p password`
Output: `mysql>`

Showing Databases: `show databases;`
Output: `it will show all databases.`

creating Database: `create database mytodo;`
Output: `Query Ok, 1 row affected`

Using mytodo Database: `use mytodos;`
Output: `Database changed`

Showing tables: `show tables;`
Output: `Empty set (0.00 sec)`

Creating table in `mytodos` database: `create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);`
Output: `Query Ok, 0 rows affected (0.01 sec)`

Describing created tables: `describe todos;`
Output: `It will show schema of todos table.`

Delete table in `mytodo` database: `drop table todos;`
Output: `Query Ok, 0 rows affected (0.00 sec)`

insert into `todos` table: `insert into todos (description, completed) values('Go to the store', false);`
Output: `Query Ok, 1 row affected (0.00 sec)`

View data from `todos` table: `select * from todos;`
Output: `It will show todos data.`
