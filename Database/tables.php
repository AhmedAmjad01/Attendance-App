<?php

$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . "/Attendance-App/database/database.php";
function clearTable($dbo, $tabName)
{
  $c = "delete from ".$tabName;
  $s = $dbo->conn->prepare($c);
  try {
    $s->execute();
    echo($tabName." cleared");
  } catch (PDOException $oo) {
    echo($oo->getMessage());
  }
}
$dbo = new Database();
$c = "create table student_details
(
    id int auto_increment primary key,
    roll_no varchar(20) unique,
    name varchar(100),
    email_id varchar(100)
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>student_details created");
} catch (PDOException $o) {
  echo ("<br>student_details not created");
}

$c = "create table course_details
(
    id int auto_increment primary key,
    code varchar(20) unique,
    title varchar(50),
    credit int
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>course_details created");
} catch (PDOException $o) {
  echo ("<br>course_details not created");
}


$c = "create table faculty_details
(
    id int auto_increment primary key,
    user_name varchar(100) unique,
    name varchar(100),
    password varchar(50)
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>faculty_details created");
} catch (PDOException $o) {
  echo ("<br>faculty_details not created");
}


$c = "create table session_details
(
    id int auto_increment primary key,
    year int,
    term varchar(50),
    unique (year,term)
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>session_details created");
} catch (PDOException $o) {
  echo ("<br>session_details not created");
}



$c = "create table course_registration
(
    student_id int,
    course_id int,
    session_id int,
    primary key (student_id,course_id,session_id)
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>course_registration created");
} catch (PDOException $o) {
  echo ("<br>course_registration not created");
}
clearTable($dbo, "course_registration");

$c = "create table course_allotment
(
    faculty_id int,
    course_id int,
    session_id int,
    primary key (faculty_id,course_id,session_id)
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>course_allotment created");
} catch (PDOException $o) {
  echo ("<br>course_allotment not created");
}
clearTable($dbo, "course_allotment");

$c = "create table attendance_details
(
    faculty_id int,
    course_id int,
    session_id int,
    student_id int,
    on_date date,
    status varchar(10),
    primary key (faculty_id,course_id,session_id,student_id,on_date)
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>attendance_details created");
} catch (PDOException $o) {
  echo ("<br>attendance_details not created");
}
clearTable($dbo, "attendance_details");

$c = "create table sent_email_details
(
    faculty_id int,
    course_id int,
    session_id int,
    student_id int,
    on_date date,
    id int auto_increment primary key,
    message varchar(200),
    to_email varchar(100)
)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
  echo ("<br>sent_email_details created");
} catch (PDOException $o) {
  echo ("<br>sent_email_details not created");
}
clearTable($dbo, "sent_email_details");

clearTable($dbo, "student_details");
$c = "insert into student_details
(id,roll_no,name,email_id)
values
(1,'2022063','Ahmed Amjad','u2022063@giki.edu.pk'),
(2,'2022566','Haris Shah','u2022566@giki.edu.pk'),
(3,'2022000','Aqib','2022000@giki.edu.pk'),
(4,'2022001','Mursaleen','2022001@giki.edu.pk'),

(5,'2020003','Senior','u2020003@giki.edu.pk'),
(6,'2022359','Muhammed Bilal','u2022359@giki.edu.pk'),
(7,'2022004','Haya Khan','u2022004@giki.edu.pk'),
(8,'2022005','Hassan Shah','u2022005@giki.edu.pk'),


(9,'2021335','Ahmed Naveed Qazi','u2021335@giki.edu.pk'),
(10,'2022107','Areeb Majeed','u2022107@giki.edu.pk'),
(11,'2022438','Muhammad Shoaib','u2022438@giki.edu.pk'),
(12,'2022538','Shaheer Naveed','u2022538@giki.edu.pk'),

(13,'2019095','Awaiz Adnan','u2019095@giki.edu.pk'),
(14,'2020901','Basil Shaqeeq','u2020901@giki.edu.pk'),
(15,'2021020','Abdul Rafay','u2021020@giki.edu.pk'),
(16,'2021204','Haris Ahmed','u2021204@giki.edu.pk'),
(17,'2021500','Musaab Ali','u2021500@giki.edu.pk'),
(18,'2022039','Abu Bakr Mazhar','u2022039@giki.edu.pk'),
(19,'2022279','Manal Ahsan','u2022279@giki.edu.pk'),
(20,'2022349','Muhammad Aqeeb','u2022349@giki.edu.pk'),
(21,'2022905','Syed Ahmer Hussain','u2022905@giki.edu.pk'),

(22,'2021016','Abdul Moiz Javed','u2021016@giki.edu.pk'),
(23,'2021414','Muhammad Mashood Malik','u2021414@giki.edu.pk'),
(24,'2022185','Haider Ali Khan Babar','u2022185@giki.edu.pk'),
(25,'2022259','Lov Aashram','u2022259@giki.edu.pk'),
(26,'2022267','Mahad Azhar Sheikh','u2022267@giki.edu.pk'),
(27,'2022647','Muhammad Shumail Amir','u2022647@giki.edu.pk'),
(28,'2023222','Hamza Saeed','u2023222@giki.edu.pk'),
(29,'2023287','Mahad Ismail','u2023287@giki.edu.pk'),
(30,'2023696','Syed Rayyan Hussain','u2023696@giki.edu.pk')";


$s = $dbo->conn->prepare($c);
try {
  $s->execute();
} catch (PDOException $o) {
  echo ("<br>duplicate entry");
}

clearTable($dbo, "faculty_details");
$c = "insert into faculty_details
(id,user_name,password,name)
values
(1,'Musadiq_Mansoor','123','Musadiq Mansoor'),
(2,'Shahab_Uddin_Ansari','123','Shahab Uddin Ansari'),
(3,'Abdullah_Bin_Zarshad','123','Abdullah Bin Zarshad'),
(4,'TA','123','Teachers Assisstant'),
(5,'Faheem_Ur_Rehman','123','Faheem Ur Rehman')";

$s = $dbo->conn->prepare($c);
try {
  $s->execute();
} catch (PDOException $o) {
  echo ("<br>duplicate entry");
}

clearTable($dbo, "session_details");
$c = "insert into session_details
(id,year,term)
values
(1,2024,'SUMMER SEMESTER'),
(2,2024,'FALL SEMESTER'),
(3,2025,'SPRING SEMESTER'),
(4,2025,'SUMMER SEMESTER')";

$s = $dbo->conn->prepare($c);
try {
  $s->execute();
} catch (PDOException $o) {
  echo ("<br>duplicate entry");
}

clearTable($dbo, "course_details");
$c = "insert into course_details
(id,title,code,credit)
values
  (1,'Database management system lab','CS232',3),
  (2,'Signals & Systems','CE341',3),
  (3,'Computer Communication & Network','CE213',3),
  (4,'THEORY OF Dynamics','ME212',3),
  (5,'OOP Lab','CS112L',3)";
$s = $dbo->conn->prepare($c);
try {
  $s->execute();
} catch (PDOException $o) {
  echo ("<br>duplicate entry");
}

//if any record already there in the table delete them
clearTable($dbo, "course_registration");
$c = "insert into course_registration
  (student_id,course_id,session_id)
  values
  (:sid,:cid,:sessid)";
$s = $dbo->conn->prepare($c);
//iterate over all the 24 students
//for each of them chose max 3 random courses, from 1 to 6

for ($i = 1; $i <= 30; $i++) {
  for ($j = 0; $j < 2; $j++) {
    $cid = rand(1, 5);
    //insert the selected course into course_registration table for 
    //session 1 and student_id $i
    try {
      $s->execute([":sid" => $i, ":cid" => $cid, ":sessid" => 1]);
    } catch (PDOException $pe) {
    }

    //repeat for session 2
    $cid = rand(1, 4);
    //insert the selected course into course_registration table for 
    //session 2 and student_id $i
    try {
      $s->execute([":sid" => $i, ":cid" => $cid, ":sessid" => 2]);
    } catch (PDOException $pe) {
    }

    /*repeat for session 3
    $cid = rand(1, 6);
    //insert the selected course into course_registration table for 
    //session 2 and student_id $i
    try {
      $s->execute([":sid" => $i, ":cid" => $cid, ":sessid" => 3]);
    } catch (PDOException $pe) {
    }*/
  }
}


//if any record already there in the table delete them
clearTable($dbo, "course_allotment");
$c = "insert into course_allotment
  (faculty_id,course_id,session_id)
  values
  (:fid,:cid,:sessid)";
$s = $dbo->conn->prepare($c);
//iterate over all the 6 teachers
//for each of them chose max 2 random courses, from 1 to 6

for ($i = 1; $i <= 5; $i++) {
  for ($j = 0; $j < 1; $j++) {
    $cid = rand(1, 5);
    //insert the selected course into course_allotment table for 
    //session 1 and fac_id $i
    try 
    {
      $s->execute([":fid" => $i, ":cid" => $cid, ":sessid" => 1]);
    } catch (PDOException $pe) 
    {
    }

    /*repeat for session 2
    $cid = rand(1, 6);
    //insert the selected course into course_allotment table for 
    //session 2 and student_id $i
    try {
      $s->execute([":fid" => $i, ":cid" => $cid, ":sessid" => 2]);
    } catch (PDOException $pe) {
    }

    //repeat for session 3
    $cid = rand(1, 6);
    //insert the selected course into course_allotment table for 
    //session 2 and student_id $i
    try {
      $s->execute([":fid" => $i, ":cid" => $cid, ":sessid" => 3]);
    } catch (PDOException $pe) {
    }*/
  }
}