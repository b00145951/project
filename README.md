// README

Database Name: College

Description:
The main purpose of the database is for students and lecturers to be able to input their personal information with an emphasis on studentid and lecturerid. 

1. Student and Lecturer Information:
   - Users can input their personal details with an emphasis studentid and lecturerid.
   - The database provides tables that show students and lecturers based on their inputted information.

2. Course Form:
   - Students and lecturers can fill out a course form, providing either studentid or lecturerid.
   - Results display the firstname and surname of the inserted ID.

3. Course ID Form:
   - Students and lecturers can enter their unique IDs.
   - For students, it shows all lecturers on their chosen course.
   - For lecturers, it shows all students on their course.

4. Registered Users:
   - Registered users can log in to the system.
   - The system verifies that the password is correct and then redirects users if their password is incorrect.
   
5. Course
   -Users can input their course number and course name and it takes note of this.
   -The courses are all numbered with an id and coursename.

How it was created:
1. Create a new database named college using Heidi SQL.

2. Inserted the provided dbconn file into the files related to the database. The database connection details in 'dbconn.php' were matched up with the database.

3. Queries and tables were then created. Php files and html files were also created.

4. Ensured that Laragon is running to serve up the files.

5. Opened the web browser to the local host to serve up the files. 

Tables:
1. Student Table
Columns:
  - studentid: Student ID
  - firstName: First Name
  - surName: Surname
  - email: Email Address
  - dob: Date of Birth
  - phone: Phone Number
  - courseid: Course ID
  - coursename: Course Name

2. Lecturer Table
Columns:
  - lecturerid: Lecturer ID
  - firstname: First Name
  - surname: Surname
  - email: Email Address
  - phone: Phone Number
  - salary: Salary
  - courseid: Course ID
  - coursename: Course Name

3. Registereduser Table
Columns: 
  - regUserID: Registered User ID
  - firstName: First Name
  - surName: Surname
  - userName: Username
  - pwd: Password
  
4. Course Table
Columns:
  - courseid: Course ID
  - coursename: Course Name

Queries:

1. Get all students:
SELECT * FROM student;

2. Get all lecturers:
SELECT * FROM lecturer;

3. Insert a new student:
INSERT INTO student (studentid, firstName, surName, email, dob, phone, courseid, coursename)
values ('b015252', 'Sophie', 'Daly', 'sophie@tudublin.ie', '2002-04-01', '0876463643', '1', 'Computer Science');

4. Insert a new lecturer:
INSERT INTO lecturer (lecturerid, firstname, surname, email, phone, salary, courseid, coursename) 
values ('463425', 'John', 'Smith', 'john@gmail.com', '086475354', '100,000', '2', 'Arts')

5. Register User:
INSERT INTO registeredUser (firstName, surName, userName, pwd) 
values ('Sophie', 'Daly','sophied','password')
