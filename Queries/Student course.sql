CREATE TABLE student_course (
	studentid INT, 
	courseid INT, 
	PRIMARY KEY (studentid, courseid),
	FOREIGN KEY (studentid) REFERENCES student(studentid),
	FOREIGN KEY (courseid) REFERENCES course(courseid)
	);