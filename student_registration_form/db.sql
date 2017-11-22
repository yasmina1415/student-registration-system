create DATABASE college_project1 ;
use college_project1;





   
	Create Table department(
		ID int Auto_Increment,
		name varchar(50) unique not null,
		PRIMARY key(ID)
	);
    
    
    
     Create Table form(
		ID int Auto_Increment,
        departmentId int(5),
		name varchar(50) unique not null,
		PRIMARY key(ID),
        Foreign key(departmentId) REFERENCES department(ID)

	);


	Create Table courses(
		ID int Auto_Increment,
		name varchar(50) not null,
        code varchar(10),
		PRIMARY key(ID),
        Foreign key(departmentId) REFERENCES department(ID)
	);
	
	INSERT into department (name ,code) values ("compucommunication","CCE");
	INSERT into department (name , code) values ("electromechanics","EME");
	INSERT into department (name , code) values ("construction and archetichture","ACE");
	INSERT into department (name , code) values ("petrochemicals","PCE");
    INSERT into department (name , code) values ("offshore","XXE");

	INSERT into courses (name , code , departmentId) values ("circuits","c","2"); 
    INSERT into courses (name , code , departmentId) values ("programming","p","1"); 
	INSERT into courses (name , code , departmentId) values ("material","ml","3"); 
	INSERT into courses (name , code , departmentId) values ("chemistry","cm","4"); 
	INSERT into courses (name , code , departmentId) values ("mechanics","mch","5"); 
	INSERT into courses (name , code , departmentId) values ("datastructure","ds","1"); 
	INSERT into courses (name , code , departmentId) values ("thermo dynamics","th","2"); 
	INSERT into courses (name , code , departmentId) values ("design","d","3"); 
	INSERT into courses (name , code , departmentId) values ("ships","s","5"); 
	INSERT into courses (name , code , departmentId) values ("gas","g","4"); 


CREATE TABLE instructor (

ID int (5) PRIMARY KEY AUTO_INCREMENT ,
    name varchar(30) Not Null,
   instructorId int(5),
    cridetH int(1) NOT NULL
)
;


ALTER TABLE courses ADD cdescription text(180);
ALTER TABLE courses ADD instructorId int(5);
Alter TABLE courses ADD Foreign key(instructorId) REFERENCES instructor(ID); 
update courses SET cridetH=3 ;
ALTER TABLE form ADD c1 int(5) NOT NULL;
ALTER TABLE form ADD FOREIGN KEY (c1) REFERENCES courses(ID);
ALTER TABLE form ADD c2 int(5) NOT NULL;
ALTER TABLE form ADD FOREIGN KEY (c2) REFERENCES courses(ID);
        
