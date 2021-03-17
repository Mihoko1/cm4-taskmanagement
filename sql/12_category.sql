
CREATE TABLE IF NOT EXISTS category ( 
   id INT PRIMARY KEY AUTO_INCREMENT, 
   title varchar(250),
   description varchar(1000),
   created_date timestamp,
   poject_id int,
   creator_user_id int,
FOREIGN KEY (poject_id)
	REFERENCES project(id)
	ON DELETE SET NULL,		
FOREIGN KEY (creator_user_id)
	REFERENCES app_user(id)
	ON DELETE SET NULL
)


-- INSERT INTO category 
-- 	(title,description,created_date, poject_id, creator_user_id)
-- VALUES
-- 	('Task CRUD ','Implimnet CRUD for task',now(),1,1),