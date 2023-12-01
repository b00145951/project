CREATE TABLE lecturer_course (
	lecturerid INT,
	courseid INT,
	PRIMARY KEY (lecturerid, courseid),
	FOREIGN KEY (lecturerid) REFERENCES lecturer(lecturerid),
	FOREIGN KEY (courseid) REFERENCES course(courseid)
	);