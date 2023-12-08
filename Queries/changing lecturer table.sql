ALTER TABLE lecturer
ADD COLUMN staffid INT,
ADD FOREIGN KEY (staffid) REFERENCES staff(staffid);