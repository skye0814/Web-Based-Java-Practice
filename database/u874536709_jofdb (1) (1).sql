-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2023 at 01:55 PM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u874536709_jofdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules_db`
--

CREATE TABLE `modules_db` (
  `id` int(11) NOT NULL,
  `topic_name` varchar(500) NOT NULL,
  `module_name` varchar(500) NOT NULL,
  `topic_level` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules_db`
--

INSERT INTO `modules_db` (`id`, `topic_name`, `module_name`, `topic_level`) VALUES
(35, 'Data Types and Variables', 'Variables Easy_ Medium_.pdf', 'Easy'),
(36, 'Data Types and Variables', 'Variables Easy_ Medium_.pdf', 'Medium'),
(37, 'Data Types and Variables', 'Variables Hard module.pdf', 'Hard'),
(38, 'String Methods - Switch', 'Switch Easy_ Medium_.pdf', 'Easy'),
(39, 'String Methods - Switch', 'Java Switch Hard Module.pdf', 'Hard'),
(40, 'Syntax, Output, Comment', 'Java Output Easy_ Medium_.pdf', 'Easy'),
(41, 'Syntax, Output, Comment', 'Java Output Easy_ Medium_.pdf', 'Medium'),
(42, 'Syntax, Output, Comment', 'Java Output Hard Module.pdf', 'Hard'),
(43, 'Java Arrays', 'Java Arrays (Easy&Medium).pdf', 'Easy'),
(44, 'Java Arrays', 'Java Arrays (Easy&Medium).pdf', 'Medium'),
(45, 'Java Arrays', 'Java Arrays (Hard).pdf', 'Hard'),
(46, 'Java While Loop', 'Java While Loop (easy&medium).pdf', 'Easy'),
(47, 'Java While Loop', 'Java While Loop (easy&medium).pdf', 'Medium'),
(48, 'Java While Loop', 'Java While Loop (hard).pdf', 'Hard'),
(49, 'Java Method Parameters', 'Java Methods (Easy&Medium).pdf', 'Easy'),
(50, 'Java Method Parameters', 'Java Method Parameters (easy&medium).pdf', 'Medium'),
(51, 'Java Method Parameters', 'Java Method Parameters (Hard).pdf', 'Hard'),
(52, 'Java Methods', 'Java Methods (Easy&Medium).pdf', 'Easy'),
(53, 'Java Methods', 'Java Methods (Easy&Medium).pdf', 'Medium'),
(54, 'Java Methods', 'Java Methods (Hard).pdf', 'Hard'),
(55, 'Java Method Overloading', 'Java Method Overloading (easy&medium).pdf', 'Easy'),
(56, 'Java Method Overloading', 'Java Method Overloading (easy&medium).pdf', 'Medium'),
(57, 'Java Method Overloading', 'Java Method Overloading (hard).pdf', 'Hard'),
(58, 'Java Break and Continue', 'Java Break and Continue (hard).pdf', 'Hard'),
(59, 'Java Break and Continue', 'Java Break and Continue (easy&medium).pdf', 'Medium'),
(60, 'Java Break and Continue', 'Java Break and Continue (easy&medium).pdf', 'Easy'),
(61, 'Java Arrays Loop', 'Java Arrays Loop (Hard).pdf', 'Hard'),
(62, 'Java Arrays Loop', 'Java Arrays Loop (Easy&Medium).pdf', 'Medium'),
(63, 'Java Arrays Loop', 'Java Arrays Loop (Easy&Medium).pdf', 'Easy'),
(64, 'JAVA OOP ', 'Java OOP Module (Hard).pdf', 'Hard'),
(65, 'JAVA OOP ', 'JAVA OOP Module (Easy&Medium).pdf', 'Medium'),
(66, 'JAVA OOP ', 'JAVA OOP Module (Easy&Medium).pdf', 'Easy'),
(67, 'JAVA CLASSES AND OBJECTS ', 'Java Classes and Objects Module (Hard).pdf', 'Hard'),
(68, 'JAVA CLASSES AND OBJECTS ', 'JAVA CLASSES AND OBJECT MODULE (EASY & MEDIUM).pdf', 'Medium'),
(69, 'JAVA CLASSES AND OBJECTS ', 'JAVA CLASSES AND OBJECT MODULE (EASY & MEDIUM).pdf', 'Easy'),
(70, 'JAVA CLASS METHODS', 'JAVA CLASS METHODS MODULE (HARD).pdf', 'Hard'),
(71, 'JAVA CLASS METHODS', 'JAVA CLASS METHODS MODULE (EASY & MEDIUM).pdf', 'Medium'),
(72, 'JAVA CLASS METHODS', 'JAVA CLASS METHODS MODULE (EASY & MEDIUM).pdf', 'Easy'),
(73, 'JAVA CLASS ATTRIBUTES', 'Java Class Attributes Module (HARD).pdf', 'Hard'),
(74, 'JAVA CLASS ATTRIBUTES', 'Java Class Attributes Module (EASY&MEDIUM).pdf', 'Medium'),
(75, 'JAVA CLASS ATTRIBUTES', 'Java Class Attributes Module (EASY&MEDIUM).pdf', 'Easy'),
(76, 'Java Modifiers', 'Java Modifiers hard.pdf', 'Hard'),
(77, 'Java Modifiers', 'Java modifiers easy&medium.pdf', 'Medium'),
(78, 'Java Modifiers', 'Java modifiers easy&medium.pdf', 'Easy'),
(79, 'Java Inheritance', 'java inheritance hard.pdf', 'Hard'),
(80, 'Java Inheritance', 'Java inheritance easy and medium.pdf', 'Medium'),
(81, 'Java Inheritance', 'Java inheritance easy and medium.pdf', 'Easy'),
(82, 'Java Encapsulation', 'java encapsulation Hard.pdf', 'Hard'),
(83, 'Java Encapsulation', 'Java Encapsulation easy&medium.pdf', 'Medium'),
(84, 'Java Encapsulation', 'Java Encapsulation easy&medium.pdf', 'Easy'),
(85, 'Java Constructors', 'Java Constructors Hard.pdf', 'Hard'),
(88, 'Java Constructors', 'Java Constructors easy&medium.pdf', 'Medium'),
(89, 'Java Constructors', 'Java Constructors easy&medium.pdf', 'Easy');

-- --------------------------------------------------------

--
-- Table structure for table `question_db`
--

CREATE TABLE `question_db` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(500) NOT NULL,
  `opt2` varchar(500) NOT NULL,
  `opt3` varchar(500) NOT NULL,
  `opt4` varchar(500) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL,
  `topic` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_db`
--

INSERT INTO `question_db` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `level`, `topic`) VALUES
(160, '_______ used to store multiple values in a single variable. ', 'Java', 'String', 'Arrays', 'None of the above', '3', 'Easy', 'Java Arrays'),
(161, 'To declare an array, define the variable type with ________. ', 'Parenthesis', 'Square Brackets', 'Comma', 'None of the above', '2', 'Easy', 'Java Arrays'),
(162, 'You can access an array element by referring to the ________ number. ', 'Index', 'Elements', 'Value', 'None of the above', '1', 'Easy', 'Java Arrays'),
(163, 'To change the value of a specific element, you need to ________ the index number. ', 'Declare', 'Decline', 'Initialize', 'None of the above', '4', 'Easy', 'Java Arrays'),
(164, 'To find out how many elements an array has, use the length ________. ', 'Measure', 'Property', 'Output', 'None of the above', '2', 'Easy', 'Java Arrays'),
(165, 'Determine what is the correct way to create an array of integers. ', 'int[] myNum - {10, 20, 30, 40};', 'int[] myNum = {10, 20, 30, 40};', 'int myNum = {10, 20, 30, 40};', 'int[] myNum = {10, 20 30, 40};', '2', 'Medium', 'Java Arrays'),
(166, 'You can loop through the array elements with the _______. ', 'Length', 'Outputs', 'For Loop', 'None of the above', '1', 'Medium', 'Java Arrays'),
(167, 'It is used exclusively to loop through elements in arrays.', 'For-each loop', 'For each loop', 'For each-loop', 'None of the above', '1', 'Medium', 'Java Arrays'),
(168, 'It is an array of arrays. ', 'Multidimensional Array', 'Set of Array', 'Loop', 'None of the above', '1', 'Medium', 'Java Arrays'),
(169, 'Length property specify how many times the loop should _______. ', 'Run', 'Execute', 'Loop', 'None of the above', '1', 'Medium', 'Java Arrays'),
(170, 'Determine what is the correct example of Loop Through an Array ', 'String[] cars = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"}; <br> for (int i = 0; i < cars.length; i++) { <br>System.out.println(cars[i]); }', 'String[] cars = {\"Volvo\" \"BMW\", \"Ford\", \"Mazda\"}; <br> for (int i = 0; i < cars.length; i++) { <br> System.out.println(cars[i]); }', 'String[] cars = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"}; <br> for (int i = 0; i < cars.length; i++) { <br> System.out.println(Cars[i]); }', 'String() cars = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"}; <br> for (int i = 0; i < cars.length; i++) { <br> System.out.println(cars[i]); }', '1', 'Hard', 'Java Arrays'),
(171, 'What are the outputs in this sample code? <br> int i = 0; <br> while (i < 10) { <br> System.out.println(i);  <br>  i++;   if (i == 8) { <br> break; <br> { <br> {', '1, 2, 3, 4, 5, 6, 7, 8', '0, 1, 2, 3, 4, 5, 6, 7', '1, 2, 3, 4, 5, 6, 7, 9', '0, 1, 2, 3, 4, 5, 6, 8', '2', 'Hard', 'Java Arrays'),
(172, 'What is the output in this sample code <br> int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7,8} }; <br> myNumbers[1][2] = 10; <br> System.out.println(myNumbers[1][3]);', '8', '7', '10', 'None of the above', '4', 'Hard', 'Java Arrays'),
(173, 'What is the correct code to have the output of 4? ', 'String[] cars = {\"Honda\", \"BMW\", \"Ford\", \"Mazda\", “Toyota”}; <br> System.out.println(cars.length);', 'String[] Cars = {\"Honda\", \"BMW\", \"Ford\", \"Mazda\"};  <br> System.out.println(cars.length);', 'String[] cars = {\"Honda\", \"BMW\", \"Ford\", \"Toyota\"}; <br> System.out.println(cars.length);', 'String[][] cars = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"}; <br> System.out.println(cars.length);', '3', 'Hard', 'Java Arrays'),
(174, 'What will be the output in this sample code? <br> int i = 0; <br> while (i < 10) { <br>  if (i == 7) { <br> i++; <br> continue; <br> } <br> System.out.println(i); <br> i++; <br> } <br>', '1, 2, 3, 4, 5, 6, 7', '0, 1, 2, 3, 4, 5, 6', '1, 2, 3, 4, 5, 6, 8, 9, 10', '0, 1, 2, 3, 4, 5, 6, 8, 9', '4', 'Hard', 'Java Arrays'),
(175, '_______ can execute a block of code as long as a specified condition is reached. ', 'Loops', 'Condition', 'Objects', 'None of the above', '1', 'Easy', 'Java While Loop'),
(176, 'Loops are handy because they ______, ______, ________. ', 'Save time', 'Reduce Errors', 'Makes Code Readable', 'All of the above', '4', 'Easy', 'Java While Loop'),
(177, 'The while loop loops through a block of code as long as a specified condition is _______.', 'Initialize', 'Specified', 'True', 'None of the above', '3', 'Easy', 'Java While Loop'),
(178, 'This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true. ', 'Loops', 'Do/While Loop', 'For Loop', 'All of the above', '2', 'Easy', 'Java While Loop'),
(179, 'It is also possible to place a loop inside another loop.', 'For Loop', 'Nested Loop', 'Iteration', 'None of the above', '2', 'Easy', 'Java While Loop'),
(180, 'What is the output in this sample code? <br> for (int i = 0; i <= 10; i = i + 5) { <br> System.out.println(i); <br> }', '5', '6', '0, 5, 10', 'None of the above', '3', 'Medium', 'Java While Loop'),
(181, 'The \"inner loop\" will be executed one time for each iteration of the _______. ', 'Another Loop', 'For Loop', 'Outer Loop', 'None of the above', '3', 'Medium', 'Java While Loop'),
(182, ' If the condition is _______, the loop will start over again, if it is false, the loop will end. ', 'False', 'Block', 'True', 'All of the above', '3', 'Medium', 'Java While Loop'),
(183, 'When you know exactly how many times you want to loop through a block of code, use the _______.  ', 'While Loop', 'For Loop', 'Return Loop', 'None of the above', '2', 'Medium', 'Java While Loop'),
(184, '________ is a variant of the while loop. ', 'Do/While Loop', 'For Loop', 'Do Loop', 'None of the above', '1', 'Medium', 'Java While Loop'),
(185, 'What are the values of the output in this sample code? <br>   public class Main { <br> public static void main(String[] args) { <br> int i = 0; <br> while (i < 5) { <br> System.out.println(i); <br> i++; <br> }  <br> } <br> }', '1, 2, 3, 4,5', '0, 1, 2, 3, 4', '0, 1, 2, 3, 4, 5', 'None of the above', '1', 'Hard', 'Java While Loop'),
(186, 'What are the values of the output in this sample code? <br>  public class Main { <br> public static void main(String[] args) { <br> for (int i = 0; i <= 10; i = i + 2) { <br> System.out.println(i); <br> }  <br> } <br> } ', '0, 2, 4, 5, 6, 8', '0, 2, 4, 6, 8, 10', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10', 'None of the above', '2', 'Hard', 'Java While Loop'),
(187, 'What are the values of outputs in this sample code? <br>   public class Main { <br> public static void main(String[] args) { <br> // Outer loop. <br> for (int i = 1; i <= 5; i++) { <br> System.out.println(\"Outer: \" + i); // Executes 2 times <br>  // Inner loop <br> for (int j = 1; j <= 2; j++) { <br> System.out.println(\" Inner: \" + j); // Executes 6 times (2 * 3) <br> } <br> } <br> } <br> }', 'Outer: 1 <br> Inner: 1 <br>  Inner: 2 <br> Outer: 2 <br>  Inner: 1 <br>  Inner: 2 <br> Outer: 3 <br>  Inner: 1 <br>  Inner: 2 <br> Outer: 4 <br>  Inner: 1 <br>  Inner: 2 <br> Outer: 5 <br>  Inner: 1 <br>  Inner: 2 ', 'Outer: 1 <br> Inner: 1 <br>  Inner: 2 <br>  Outer: 2 <br>  Inner: 1 <br>  Inner: 2 <br> Outer: 3 <br>  Inner: 1 <br>  Inner: 2 ', 'Outer: 1 <br> Inner: 1 <br>   Inner: 2 <br> Outer: 2 <br>  Inner: 1 <br>  Inner: 2 <br> Inner: 1 <br>  Inner: 2 <br> Outer: 5 <br>  Inner: 1 <br>  Inner: 2 ', 'All of the above', '1', 'Hard', 'Java While Loop'),
(188, 'What are the outputs in this sample code?  <br>  public class Main { <br>  public static void main(String[] args) { <br> String[] things = {\"Phone\", \"Mouse\", \"Board\", \"Cars\"}; <br> for (String i : things) { <br> System.out.println(i); <br> } <br> } <br> }', 'Phone <br> Mouse <br> Board <br> Cars ', 'Mouse <br> Board <br> Cars ', 'Volvo <br> Ford <br> BMW <br> Honda', 'All of the above', '1', 'Hard', 'Java While Loop'),
(189, 'What are the values of outputs in this sample code? <br>  public class Main { <br> public static void main(String[] args) { <br> int i = 0; <br> do { <br> System.out.println(i); <br> i++; <br> } <br> while (i < 10);  <br> } <br> }', '1, 2, 4, 5, 6, 7, 8, 9, 10', '1, 2, 3, 5, 6, 7, 8, 9, 10', '0, 1, 2, 3, 4, 5, 6, 7, 8, 9', 'None of the above', '3', 'Hard', 'Java While Loop'),
(190, 'Is a block of code which only runs when it is called. ', 'Value', 'Variable', 'Method', 'None of the above', '1', 'Easy', 'Java Methods'),
(191, 'Methods are used to perform certain actions, and they are also known as ________. ', 'Actions', 'Functions ', 'Parameters', 'None of the above', '2', 'Easy', 'Java Methods'),
(192, 'To reuse code: define the ______ once, and use it multiple times. ', 'Code', 'Value', 'Method', 'All of the above', '1', 'Easy', 'Java Methods'),
(193, 'You can pass data, known as _______, into a method. ', 'Code', 'Block', 'Parameters', 'None of the above', '3', 'Easy', 'Java Methods'),
(194, 'A method must be declared within a _______. ', 'Action', 'Code', 'Main', 'None of the above', '4', 'Easy', 'Java Methods'),
(195, 'What is the correct code for creating a method inside Main? ', 'public class Main { <br> static void myMethod() {<br> }', 'public class Main { <br> static void myMethod[] { <br> } <br> }', 'public class Main { <br> Static void myMethod() { <br> } <br> }', 'public class Main { <br> static void myMethod() { <br> } <br> }', '4', 'Medium', 'Java Methods'),
(196, 'What is a sample of a pre-defined methods in Java? ', 'System.out.println()', 'Method', 'Class', 'Main', '1', 'Medium', 'Java Methods'),
(197, 'What is a sample for the name of a method?', 'Public class Main()', 'myMethod', 'my-Methods{}', 'None of the above', '4', 'Medium', 'Java Methods'),
(198, 'A method can also be called ________.', 'One time', 'Multiple times', 'Two times', 'None of the above', '2', 'Medium', 'Java Methods'),
(199, 'What are the outputs in this sample code? <br>  public class Main { <br> static void myMethod() { <br> System.out.println(\"1\"); <br> } <br> public static void main(String[] args) {  <br> myMethod(); <br> } <br> } ', 'myMethod', '1', '1, 1, 1', 'None of the above', '2', 'Hard', 'Java Methods'),
(200, 'What are the output values in this sample code? <br>  public class Main { <br> static void myMethod() { <br> System.out.println(\"100\"); <br> } <br>  public static void main(String[] args) {  <br> myMethod(); <br> myMethod();<br>  myMethod();<br> }  <br> }', '100', '300', '100, 100, 100', '1000', '3', 'Hard', 'Java Methods'),
(201, '  What is missing to make the code run?  <br> public class Main { <br> static void ______Method() {  <br> System.out.println(\"Hello World\");  <br>  }  <br>   public static void main(String[] args) {  <br>  myMethod(); <br>  myMethod(); <br>  myMethod(); <br>  }  <br>  }', 'Method', 'my ', '()', 'None of the above', '2', 'Hard', 'Java Methods'),
(202, 'What are the outputs in this sample code?  <br> public class Main {  <br>  static void myMethod() { <br>  System.out.println(\"Enjoy learning?\"); <br>  }  <br>   public static void(String[] args) {  <br>  myMethod(); <br>  myMethod(); <br>  myMethod(); <br>  }  <br>  }', 'myMethod, myMethod, myMethod', 'Enjoy leaning?, Enjoy leaning?, Enjoy leaning?', 'Error', 'Well done', '2', 'Hard', 'Java Methods'),
(203, 'What do you call this sample code? <br> public class Main { <br>  static void myMethod() { <br>  System.out.println(\"Enjoy learning?\"); <br>  } <br>   public static void(String[] args) { <br>  myMethod();<br>  myMethod();<br> myMethod();<br>  } <br>  }', 'Variable', 'Java Methods', 'Code', 'None of the above', '2', 'Hard', 'Java Methods'),
(204, 'It acts as variables inside the method. ', 'Variables', 'Information', 'Parameters', 'None of the above', '3', 'Easy', 'Java Method Parameters'),
(205, 'When a parameter is passed to the method, it is called an _______. ', 'Argument', 'Method', 'Parenthesis', 'None of the above', '1', 'Easy', 'Java Method Parameters'),
(206, 'It indicates that the method should not return a value.', 'Void keyword', 'Return Keyword', 'Data type', 'None of the above', '1', 'Easy', 'Java Method Parameters'),
(207, 'You can store the result in a _______.', 'Main', 'Variable', 'Example', 'None of the above', '2', 'Easy', 'Java Method Parameters'),
(208, 'Multiple __ can have the same name with different parameters.', 'Method', 'Java', 'Variable', 'None of the above', '1', 'Easy', 'Java Method Parameters'),
(209, 'What are the outputs in this sample code? <br>  public class Main {  <br> static void myMethod(String fname) { <br> System.out.println(fname + \" Good\"); <br> } <br>  public static void main(String[] args) { <br>  myMethod(\"Liam\"); <br> myMethod(\"Jenny\"); <br>  myMethod(\"Anja\"); <br> } <br> }', 'Liam, Jenny, Anja', 'Good, Good, Good', 'Liam Good, Jenny Good, Anja Good', 'None of the above', '3', 'Medium', 'Java Method Parameters'),
(210, 'Can be used when you want the method return a value. ', 'Primitive Data Type', 'Keyword', 'Method', 'None of the above', '1', 'Medium', 'Java Method Parameters'),
(211, 'Multiple methods can have the same name as long as the _______ or type of parameters are different. ', 'Digits', 'Numbers', 'Method', 'None of the above', '2', 'Medium', 'Java Method Parameters'),
(212, 'What are the outputs in this sample code? <br> public class Main {  <br> static void myMethod(String fname, int age) {  <br> System.out.println(fname + \" is \" + age); <br> }  <br>  public static void main(String[] args) {  <br> myMethod(\"Liam\", 10); <br> myMethod(\"Jenny\", 7); <br> myMethod(\"Anja\", 13); <br>  } <br> }', '10, 7, 13', 'Liam, Jenny, Anja', 'Anja, Jenny, Liam', 'Liam is 10, Jenny is 7, Anja is 13', '4', 'Medium', 'Java Method Parameters'),
(213, 'You can add as many parameters as you want, just separate them with a _______.', 'Dot', 'Comma', 'Parenthesis', 'None of the above', '2', 'Medium', 'Java Method Parameters'),
(214, 'What is the correct code to have the output of  <br> Liam Good  <br> Jenny Good  <br> Anja Good ', 'public class Main {  <br> static void myMethod(String fname) {  <br> System.out.println(fname  \" Good\");  <br> }  <br> public static void main(String[] args) {  <br> myMethod(\"Liam\");  <br> myMethod(\"Jenny\");  <br>  myMethod(\"Anja\"); <br> }  <br> } ', 'public class Main {  <br> static void myMethod(String fname) {  <br> System.out.println(fname + \" Good\");  <br> }  <br>  public static void main(String[] args) {  <br> myMethod(\"Liam\");  <br> myMethod(\"Jenny\");  <br> myMethod(\"Anja\");  <br> }  <br> }', 'public class Main {  <br> static void myMethod(String fname) {  <br> System.out.println(fname + \" Good\");  <br> }  <br>  public static void main(String[] Args) {  <br> myMethod(\"Liam\");  <br> myMethod(\"Jenny\");  <br> myMethod(\"Anja\");  <br> }  <br> }', 'public class Main {  <br> statics void myMethod(String fname) {  <br> System.out.println(fname + \" Good\");  <br> }  <br>  public static void main(String[] args) {  <br> myMethod(\"Liam\");  <br> myMethod(\"Jenny\");  <br> myMethod(\"Anja\");  <br> }  <br> }', '2', 'Hard', 'Java Method Parameters'),
(215, ' What is the output in this sample code? <br> public class Main {  <br> static int myMethod(int x) {  <br> return 5 + y; <br> }  <br>  public static void main(String[] args) {  <br> System.out.println(myMethod(3)); <br> }  <br> }', '5', '3', '5+3', 'None of the above', '4', 'Hard', 'Java Method Parameters'),
(216, 'What is the output in this sample code? <br>  public class Main {  <br> static int myMethod(int x, int y) {  <br> return x + y; <br> }  <br>  public static void main(String[] args) {  <br> System.out.println(myMethod(5, 3)); <br> }  <br> }', '5', '8', '5+3', 'None of the above', '2', 'Hard', 'Java Method Parameters'),
(217, 'What are the outputs in this sample code? <br> static int plusMethod(int x, int y) {  <br> return x + y; <br> }  <br>  static double plusMethod(double x, double y) {  <br> return x + y; <br> }  <br>  public static void main(String[] args) {  <br> int myNum1 = plusMethod(10, 5); <br> double myNum2 = plusMethod(3.9, 6.26); <br> System.out.println(\"int: \" + myNum1); <br> System.out.println(\"double: \" + myNum2); <br> }', 'int: 15  <br> double: 10.11', 'int: 10 <br> double: 10.16', 'int: 15  <br> double: 10.16', 'None of the above', '3', 'Hard', 'Java Method Parameters'),
(218, 'What are the outputs in this sample code? <br> static int plusMethodInt(int x, int y) {  <br> return x + y; <br> }  <br>  static double plusMethodDouble(double x, double y) {  <br> return x + y; <br> }  <br>  public static void main(String[] args) {  <br> int myNum1 = plusMethodInt(8, 11); <br> double myNum2 = plusMethodDouble(4.3, 7.86); <br> System.out.println(\"int: \" + myNum1); <br> System.out.println(\"double: \" + myNum2); <br> }', 'int: 19  <br> double: 12', 'int: 11  <br> double: 7.86', 'int: 19  <br> double: 12.16', 'None of the above', '3', 'Hard', 'Java Method Parameters'),
(219, 'Name the data type: \"true\"', 'boolean', 'char', 'String', 'double', '1', 'Easy', 'Data Types and Variables'),
(220, 'Name the data type: 1.0', 'double', 'int', 'char', 'boolean', '1', 'Easy', 'Data Types and Variables'),
(221, 'Name the data type: 3', 'int', 'char', 'String', 'None of the above', '1', 'Easy', 'Data Types and Variables'),
(222, 'Name the data type: false', 'String', 'boolean', 'int', 'None of the above', '2', 'Easy', 'Data Types and Variables'),
(223, 'What data type would you use for storing the number of students in a class?', 'boolean', 'String', 'double', 'int', '4', 'Easy', 'Data Types and Variables'),
(224, 'What data type would you use for storing the average test score in a class?', 'double', 'String', 'int', 'char', '1', 'Medium', 'Data Types and Variables'),
(225, 'What data type would you use for storing letter grades (without - or +) for students in a class?', 'String', 'char', 'int', 'boolean', '2', 'Medium', 'Data Types and Variables'),
(226, 'What data type would you use to store names of students?', 'String', 'char', 'boolean', 'None of these', '1', 'Medium', 'Data Types and Variables'),
(227, 'How would you declare a variable storing a persons name?', 'string name = \"Jeff\";', 'name String = \"Jeff\";', 'String name = Jeff;', 'String name = \"Jeff\";', '4', 'Medium', 'Data Types and Variables'),
(228, 'How would you declare a variable storing the tax rate?', 'int taxRate = 5.1;', 'taxRate = \"5.1\";', 'double taxRate = 5.1;', 'double taxRate = \"5.1\";', '3', 'Medium', 'Data Types and Variables'),
(229, 'In Java is a symbol that is used to perform operations. For example: +, -, *, / etc.', 'Operator', 'Unicode', 'Java', 'none of the above', '1', 'Hard', 'Data Types and Variables'),
(230, 'What is Java Operator Precedence for Logical And.', '&&', '<> ', '||', 'None of the above', '1', 'Hard', 'Data Types and Variables'),
(231, 'What is Java Operator Precedence for Tenary?', '? :', '<> ', '||', 'none of the above', '1', 'Hard', 'Data Types and Variables'),
(232, 'What is Java Operator Precedence for Logical OR.', '? :', '<> ', '||', 'none of the above', '3', 'Hard', 'Data Types and Variables'),
(233, 'The values involved in any mathematical operations are known as ____________', 'Operators', 'Operands', 'Symbols', 'Tokens', '2', 'Hard', 'Data Types and Variables'),
(234, 'what is Java? ', 'A mediator between you and your computer', 'A programming language', 'An island', 'A video game console', '2', 'Easy', 'Syntax, Output, Comment'),
(235, 'Which of this command is the correct way of printing in Java?', 'System.Out.print', 'System.out.Print', 'System.out.print', 'system.out.print', '3', 'Easy', 'Syntax, Output, Comment'),
(236, 'Which of this command has no errors? ', 'System.out.print(\"Hello World\")', 'System.out.print(Hello World);', 'System.out.Print(\"Hello World);', 'System.out.print(\"Hello World\");', '4', 'Easy', 'Syntax, Output, Comment'),
(237, ' Which of the followings is Java code that starts from the main() method as a mandatory part of every program', 'public void static main(String args [])', 'public void main static (args[] String)', 'public static void main (String args[])', 'public static void main [String [] Args]', '3', 'Easy', 'Syntax, Output, Comment'),
(238, 'It is an optional statement used to describe what a program or a line of program is doing.', 'tag', 'command', 'code', 'comment', '4', 'Easy', 'Syntax, Output, Comment'),
(239, 'Which of the following primitive data type is a 1-bit and has only two values: true and false', 'char', 'string', 'int', 'boolean', '4', 'Medium', 'Syntax, Output, Comment'),
(240, 'What data type is classified as a sequenced of characters with double quotes.', 'Char', 'String', 'boolean', 'Float', '2', 'Medium', 'Syntax, Output, Comment'),
(241, 'A data type which is typical in form and make use of digits and a decimal point', 'integer', 'float', 'char', 'boolean', '2', 'Medium', 'Syntax, Output, Comment'),
(242, 'Keywords like final cannot be used as identifiers because they are the reserved keywords. True or False?', 'True', 'False', 'None of the above', 'A and B', '1', 'Medium', 'Syntax, Output, Comment'),
(243, 'Identifiers can start with a number. True or False?', 'True', 'False', 'None of the above', 'A and B', '2', 'Medium', 'Syntax, Output, Comment'),
(244, '/* What is output? */ <br> System.out.print(', 'Lets get this victory royale! ', 'Lets get this <br> victory royale!', 'Victory Royale ', 'Lets get thistvictory royale!', '1', 'Hard', 'Syntax, Output, Comment'),
(245, '/* What is output? */ <br> System.out.println(\"This question\"); <br> System.out.println(\"is easy!\");', 'This question <br> Is easy!', 'This question is easy', 'This Question Is Easy', 'None of the above', '1', 'Hard', 'Syntax, Output, Comment'),
(246, ' /* What is output? */<br> System.out.print(\"\"\\\\\"\"\");', '\"\\\\\"\"', '\"\\\"\"', '\"\"\\\\\"\"\"', '\"\\\"\"', '2', 'Hard', 'Syntax, Output, Comment'),
(247, '/* What is output? */ <br> System.out.println(\"”Don’t cheat while answering\");', '“ “', 'Don’t cheat while answering', '“Don’t cheat while answering”', '“Don’t cheat while answering', '4', 'Hard', 'Syntax, Output, Comment'),
(248, 'Code for this output <br> The quick brown fox <br> Jumed over the lazy dog', ' System.out.print(“The quick brown fox\njumped over the lazy dog.”);', 'System.out.println(“The quick brown fox”); <br>       System.out.print(“jumped over the lazy dog.”);', 'System.out.print(“The quick brown fox”); <br>  System.out.println(“jumped over the lazy dog.”);', 'System.out.print(“The quick brown fox\rjumped over the lazy dog.”);', '1', 'Hard', 'Syntax, Output, Comment'),
(249, 'What is the first step to making a switch statement', 'Break;', 'Case();', 'Cheeseburger', 'Name the statementjava.util', '4', 'Easy', 'String Methods - Switch'),
(250, ' Should you declare a data type for a Switch Loop?', 'Yes', 'No', 'Maybe', 'None of the mentioned', '1', 'Easy', 'String Methods - Switch'),
(251, 'The _____ in switch statement is used to terminate the current sequence.', 'default', 'goto', 'break', 'jump', '3', 'Easy', 'String Methods - Switch'),
(252, 'What is the start of a different instance in a switch', 'BReaK;', 'Case()', 'START', 'Im tired', '2', 'Easy', 'String Methods - Switch'),
(254, 'What is the output of following program? class string_class{  <br> public static void main(String args[]){ <br> String obj = \"hello\";  <br> String obj1 = \"world\";  <br> String obj2 = obj; <br> obj2 = \" world\";  <br> System.out.println(obj + \" \" + obj2); <br> }  <br> }', 'hello hello', 'world world', 'hello world', 'world hello', '3', 'Medium', 'String Methods - Switch'),
(255, 'toString() method is defined in', 'java.lang.String', 'java.lang.Object', 'java.lang.util', 'None of these', '2', 'Medium', 'String Methods - Switch'),
(256, 'The String method compareTo() returns', 'true', 'false', 'an int value', '1', '3', 'Medium', 'String Methods - Switch'),
(257, 'The class string belongs to ................. package.', 'java.awt', 'java.lang', 'java.applet', 'java.string', '2', 'Medium', 'String Methods - Switch'),
(258, 'Which method to use to find length of a string?', 'length()', 'size()', 'long()', 'count()', '1', 'Medium', 'String Methods - Switch'),
(259, 'What value is assigned to discount ? <br> double discount; <br> char code = “C”; <br> switch ( code ) <br> {  <br> case “A”: <br> discount = 0.0; <br> break; <br> case “B”: <br> discount = 0.1; <br> break; <br> case “C”: <br> discount = 0.2; <br> break; <br> default: <br> discount = 0.3; <br> } ', '0.0', '0.1', '0.2', '0.3', '3', 'Hard', 'String Methods - Switch'),
(260, ' What value is assigned to discount ? <br> double discount; <br> char code = “C” ; <br> switch ( code ) <br> {  <br> case “A”: <br> discount = 0.0; <br> case “B”: <br> discount = 0.1; <br> case “C”: <br> discount = 0.2; <br> default: <br> discount = 0.3; <br> }', '0.0', '0.1', '0.2', '0.3', '4', 'Hard', 'String Methods - Switch'),
(261, 'What value is assigned to discount ? <br>  double discount; <br> char code = “b” ; <br> switch ( code ) <br> {  <br> case “a”: <br> case “A”: <br> discount = 0.0; <br> break; <br> case “b”: <br> case “B”: <br> discount = 0.1; <br> break; <br> case “c”: <br> case “C”: <br> discount = 0.2; <br> break; <br> default: <br> discount = 0.3; <br> }', '0.0', '0.1', '0.2', '0.3', '2', 'Hard', 'String Methods - Switch'),
(262, 'The code will not compile because there are missing statements. <br> What value is assigned to discount ? <br> double discount; <br> String code = \"A\" ; <br> switch ( code ) <br> {  <br> case “A”: <br>  discount = 0.0; <br> break; <br> case “B”: <br> discount = 0.1; <br> break; <br> case “C”: <br> discount = 0.2; <br> break; <br> default: <br> discount = 0.3; <br> }', '0.0', '0.1', '0.2', 'The program will not compile because code is the wrong type.', '4', 'Hard', 'String Methods - Switch'),
(263, 'What value is assigned to discount ? <br> double discount; <br> char code = “X” ; <br> switch ( code ) <br> {  <br> case “A”: <br> discount = 0.0; <br> break; <br> case “B”: <br> discount = 0.1; <br> break; <br> case “C”: <br> discount = 0.2; <br> break; <br> default: <br> discount = 0.3; <br> }', '0.0', '0.1', '0.2', '0.3', '4', 'Hard', 'String Methods - Switch'),
(274, 'OOP is faster and easier to?', 'Execute', 'Block', 'Manipulate', 'Learn', '1', 'Hard', 'JAVA OOP'),
(275, 'OOP provides a clear structure for the?', 'People', 'Program', 'Java', 'Class and Object', '2', 'Hard', 'JAVA OOP'),
(276, 'OOP helps to keep the Java code DRY \"Dont Repeat Yourself\",  and makes the code easier to maintain, ____________ .', 'Modify and Debug', 'Modify and Reuse', 'Modify and Choose', 'Modify and Create', '1', 'Hard', 'JAVA OOP'),
(277, 'OOP makes it possible to create full reusable applications with less code and  _________ development time.', 'Longer', 'Shorter', 'Exact', 'Same', '2', 'Hard', 'JAVA OOP'),
(278, 'Is about reducing the repetition of code.', 'DRY', 'OOP', 'Code', 'None of the above', '1', 'Hard', 'JAVA OOP'),
(295, 'Is a block of code which only runs when it is called.', ' Class', 'Method', 'Object', 'None of the above', '2', 'Easy', 'JAVA CLASS METHODS'),
(296, 'Methods are used to perform certain actions.', 'Funtions', 'Method', 'Class', 'Object', '1', 'Easy', 'JAVA CLASS METHODS'),
(297, 'You can pass data, known as?', ' Class', 'Object', 'Parameters', 'None of the above', '3', 'Easy', 'JAVA CLASS METHODS'),
(298, 'It can be invoked without reference to any object instance', 'Class', 'Method', 'Object', 'None of the above', '2', 'Easy', 'JAVA CLASS METHODS'),
(299, 'The term method usually refers to an __________ .', 'Instance Method', 'Class Method', 'Object Method', 'None of the above', '1', 'Easy', 'JAVA CLASS METHODS'),
(300, 'A method must be declared within a?', 'Program', 'Class', 'Object', 'None of the above', '2', 'Medium', 'JAVA CLASS METHODS'),
(301, 'It is defined with the name of the method, followed by __________.', 'dot (.)', 'semicolon (;)', 'parentheses ()', 'None of the above', '3', 'Medium', 'JAVA CLASS METHODS'),
(302, 'myMethod() - is the name of the ________.', 'Class', 'Method', 'Object', 'None of the above', '2', 'Medium', 'JAVA CLASS METHODS'),
(303, 'Means that the method belongs to the Main class and not an object of the Main class. ', 'Static ', ' Void', 'Method', 'None of the above', '1', 'Medium', 'JAVA CLASS METHODS'),
(304, 'Means that this method does not have a return value. ', ' Static ', 'Void', ' Method', 'None of the above', '2', 'Medium', 'JAVA CLASS METHODS'),
(305, 'Choose the right output of the codes below. <br>  public class Driver { <br>  	public static void printName(String name) { <br>  		System.out.println(\"Hi, I am \" + name + \"!\"); <br> 	} <br>  	public static void main(String[] args) { <br>  		String name = \"Mary\"; <br> 		printName(name); <br>   		String name1 = \"Lucy\"; <br> 		printName(name1); <br>  } <br> }', 'Hi, I am Mary! And Hi, I am Lucy! ', 'Hi, I am Mary! <br>  Hi, I am Lucy!', 'Hi, I am Mary! <br> Hi, I am Lucy!', 'Hi, I am Mary! <br> Hi, I am Lucy!', '2', 'Hard', 'JAVA CLASS METHODS'),
(306, 'Choose the right output of the codes below. <br>  public class Driver { <br>  	static int add(int x, int y) { <br>  		int sum = x + y; <br> 		return sum; <br> 	} <br>  	public static void main(String[] args) { <br>  		int x = 10; <br> 		int y = 20; <br> 		int z = add(x, y); <br> 		System.out.println(x + \" + \" + y + \" = \" + z); <br>', '10 + 20 = 30', '10+20=30', '30', 'None of the above', '1', 'Hard', 'JAVA CLASS METHODS'),
(307, 'Can we overload the main in Java?', 'Yes', 'No', 'I don’t know', 'None of the above', '1', 'Hard', 'JAVA CLASS METHODS'),
(308, 'Can we override main in Java?', 'Yes', 'No', 'I don’t know', 'None of the above', '2', 'Hard', 'JAVA CLASS METHODS'),
(309, 'Can we make the main synchronized in Java?', 'Yes', 'No', 'I don’t know', 'None of the above', '1', 'Hard', 'JAVA CLASS METHODS'),
(310, 'You can access attributes by creating an object of the class, and by using the?', 'Semicolon', 'Dot', 'Two Parenthesis', 'None of the above', '2', 'Easy', 'JAVA CLASS ATTRIBUTES'),
(311, 'You can _______ Attributes by using the dot syntax.', 'Access', 'Modify', 'Object', 'None of the above', '1', 'Easy', 'JAVA CLASS ATTRIBUTES'),
(312, 'Another term for class attributes?', 'Block', 'Fields', 'State', 'Modify', '2', 'Easy', 'JAVA CLASS ATTRIBUTES'),
(313, 'If you dont want the ability to override existing values, declare the attribute as?', 'Last', 'First', ' Final', 'Start', '3', 'Easy', 'JAVA CLASS ATTRIBUTES'),
(314, 'The _____ keyword is useful when you want a variable to always store the same value.', 'Last', 'First', 'Final', 'Start', '3', 'Easy', 'JAVA CLASS ATTRIBUTES'),
(315, 'The final keyword is called?', 'Modifier', 'Satisfier', 'Modern', 'None of the above', '1', 'Medium', 'JAVA CLASS ATTRIBUTES'),
(316, 'If you create multiple objects of one class, you can change the attribute values in one ________ ?', ' Class', 'Object', 'Modify', 'None of the above', '2', 'Medium', 'JAVA CLASS ATTRIBUTES'),
(317, 'The term \"variable\" use for x in the example, it is actually an  _______ of the class.', 'Class', 'Object', 'Attribute', 'None of the above', '3', 'Medium', 'JAVA CLASS ATTRIBUTES'),
(318, 'You can specify as many ________ as you want.', 'Class', 'Object', 'Attribute', 'None of the above', '3', 'Medium', 'JAVA CLASS ATTRIBUTES'),
(319, 'Predict the output of this code <br>  public class Main { <br>   final int x = 10; <br>    public static void main(String[] args) { <br>     Main myObj = new Main(); <br>     myObj.x = 25; // will generate an error: cannot assign a value to a final variable <br>     System.out.println(myObj.x); <br>   } <br> }', 'Run', 'Error', 'Compiler Error', 'None of the above', '2', 'Medium', 'JAVA CLASS ATTRIBUTES'),
(320, 'Predict the output of the code below. <br>  public class Main { <br>   int x = 10; <br>    public static void main(String[] args) { <br>     Main myObj = new Main(); <br>     myObj.x = 25; // x is now 25 <br>     System.out.println(myObj.x); <br>   } <br> }', ' 10', '25', '35', 'None of the above', '2', 'Hard', 'JAVA CLASS ATTRIBUTES'),
(321, 'Predict the output of the code below. <br>  public class Main { <br>   int x; <br>    public static void main(String[] args) { <br>     Main myObj = new Main(); <br>     myObj.x = 40; <br>     System.out.println(myObj.x); <br>   } <br> }', '10', '35', '40', 'None of the above', '3', 'Hard', 'JAVA CLASS ATTRIBUTES'),
(322, 'Predict the output of the code below. <br>   public class Main {<br>   int x = 5; <br>    public static void main(String[] args) { <br>     Main myObj = new Main(); <br>     System.out.println(myObj.x); <br>   } <br> }', '6', '5', '4', 'None of the above', '2', 'Hard', 'JAVA CLASS ATTRIBUTES'),
(323, 'How do you insert COMMENTS in Java code?', '# This is a comment', '/* This is a comment', '// This is a comment', 'None of the above', '3', 'Hard', 'JAVA CLASS ATTRIBUTES'),
(324, 'How do you create a variable with the numeric value 5?', 'int x = 5;', 'float x = 5;', 'x = 5;', 'num x = 5', '1', 'Hard', 'JAVA CLASS ATTRIBUTES'),
(340, 'What is encapsulation in Java?', 'The process of hiding implementation details of an object from other objects.', 'The process of hiding the existence of an object from other objects.', ' The process of hiding both implementation details and the existence of an object from other objects.', 'None of the above.', '1', 'Easy', 'Java Encapsulation'),
(341, 'Which access modifier is used to make a class accessible only within the same package?', 'public', 'private', 'protected', 'default', '4', 'Easy', 'Java Encapsulation'),
(342, 'Which access modifier is used to make a class accessible from anywhere in the program?', 'public', 'private', 'protected', 'default', '1', 'Easy', 'Java Encapsulation'),
(343, 'Which access modifier is used to make a class accessible only within the same class?', 'public', 'private', 'protected', 'default', '2', 'Easy', 'Java Encapsulation'),
(344, 'Which access modifier is used to make a class accessible within the same package and to all subclasses?', 'public', 'private', 'protected', 'default', '3', 'Easy', 'Java Encapsulation'),
(350, 'Which keyword is used to declare a method as private?', 'public', 'private', 'protected', 'default', '2', 'Hard', 'Java Encapsulation'),
(351, 'Which keyword is used to declare a method as public?', 'public', 'private', 'protected', 'default', '1', 'Hard', 'Java Encapsulation'),
(352, 'Which keyword is used to declare a method as protected?', 'public', 'private', 'protected', 'default', '3', 'Hard', 'Java Encapsulation'),
(353, ' Which keyword is used to declare a method as not accessible outside the class?', 'public', 'private', 'protected', 'default', '2', 'Hard', 'Java Encapsulation'),
(354, 'Which keyword is used to declare a method as accessible from anywhere in the program?', 'public', 'private', 'protected', 'default', '1', 'Hard', 'Java Encapsulation'),
(385, 'How to call a method?', 'Write the methods name followed by three parentheses and a semicolon', 'Write the methods value followed by two parentheses and a semicolon', 'Write the methods name followed by two parentheses and a colon', 'Write the methods name followed by three parentheses and a semicolon', '4', 'Medium', 'Java Methods'),
(386, 'What is something you do not want want to do in a switch statement?', 'Include comments', 'Include Breaks', 'Use curly braces to open and close each case', 'Name your switch loop', '3', 'Easy', 'String Methods - Switch'),
(387, 'What is an example of a jump statement?', 'Loops', 'Breaks Statement', 'Continue Statement', 'All of the above', '3', 'Easy', 'Java Break and Continue'),
(388, 'It was used to _______ of a statement.', 'Break', 'Continue', 'Jump Out', 'None of the above', '3', 'Easy', 'Java Break and Continue'),
(389, 'It breaks one iteration in the loop.', 'Continue', 'Break', 'Skip', 'None of the above', '1', 'Easy', 'Java Break and Continue'),
(390, 'Is used to terminate from the loop immediately.', 'Loop Statement', 'Continue Statement', 'Skip', 'None of the above', '4', 'Easy', 'Java Break and Continue'),
(391, 'Is used to skip the current iteration of a loop.', 'Do-While Loop', 'Continue Statement', 'Break', 'None of the above', '2', 'Easy', 'Java Break and Continue'),
(392, 'These statements can be used inside any loops.', 'Break and Continue Statements', 'While and Do-While Loop', 'Loop Statements', 'None of the above', '1', 'Medium', 'Java Break and Continue'),
(393, 'Used in situations when we are not sure about the actual number of iterations for the loop.', 'Break', 'Skip', 'Continue', 'None of the above', '1', 'Medium', 'Java Break and Continue'),
(394, 'Used in the situations when we want to continue the loop.', 'Skip', 'Continue', 'Break', 'None of the above', '2', 'Medium', 'Java Break and Continue'),
(395, 'What is the syntax for Break Statement?', 'Break:', 'break;', 'Break;', 'None of the above', '2', 'Medium', 'Java Break and Continue'),
(396, 'What is the syntax for Continue Statement?', 'continue', 'continue:', 'continue;', 'None of the above', '3', 'Medium', 'Java Break and Continue'),
(397, 'What is the output in this code? <br> for (int i = 0; i < 6; i++) { <br>   if (i == 5) { <br>     break; <br>   } <br>   System.out.println(i); <br> } ', '1, 2, 3, 4, 5, 6', '1, 2, 3, 5, 6', '0, 1, 2, 3, 4, 6', ' None of the above', '3', 'Hard', 'Java Break and Continue'),
(398, 'What is the output in this code?  <br> for (int i = 0; i < 3; i++) { <br>   if (i == 5) { <br>     break; <br>   } <br>   System.out.println(i); <br> } ', '0, 1, 2, 4, 5', '0, 1, 2, 3, 4, 5', '1, 2, 3, 4, 5', 'None of the above', '4', 'Hard', 'Java Break and Continue'),
(399, 'What will be the output in this code?  <br> for (int i = 0; i < 7; i++) { <br>   if (i == 6) { <br>     continue; <br>   } <br>   System.out.println(i); <br> }', '0, 1, 2, 3, 4, 5, 7', '1, 2, 3, 4, 5, 6, 7', '0, 1, 2, 3, 4, 5, 6, 7', 'None of the above', '1', 'Hard', 'Java Break and Continue'),
(400, 'What is the output in this code?  <br> for (int i = 0; i < 3; i++) { <br>   if (i == 7) { <br>     continue; <br>   } <br>   System.out.println(i); <br> }', '1, 2, 3, 4, 5, 6, 7', '0, 1, 2, 4, 5, 6', '0, 1, 2, 3, 4, 5, 6', 'None of the above', '2', 'Hard', 'Java Break and Continue'),
(401, 'What is the output in this code?  <br> int i = 0; <br> while (i < 10) { <br>   System.out.println(i); <br>   i++; <br>   if (i == 5) { <br>     break; <br>   } <br> }', '1, 2, 3, 4, 5', '0, 1, 2, 3, 4, 5', '0, 1, 2, 3, 4', 'None of the above', '3', 'Hard', 'Java Break and Continue'),
(402, 'You can loop through the array elements with the _______.', 'Length', 'Loop', 'For-Loop', 'None of the above', '3', 'Easy', 'Java Arrays Loop'),
(403, 'It is used exclusively to loop.', 'For-Loop', 'For-Each Loop', 'Array', 'None of the above', '2', 'Easy', 'Java Arrays Loop'),
(404, 'An array can include many ________.', 'Data', 'Code', 'Data-Entries', 'None of the above', '3', 'Easy', 'Java Arrays Loop'),
(405, 'It runs a function on each indexed element in an array.', 'foREach', 'for Each', 'foreach()', 'None of the above', '4', 'Easy', 'Java Arrays Loop'),
(406, 'Used to specify how many loops should run.', 'Length Property', 'Array', 'Elements', 'None of the above', '1', 'Easy', 'Java Arrays Loop'),
(407, 'What is the syntax for for-each loop?', 'for(type variable : arrayname) { <br>   ...<br> }', 'for (type variable : arrayname)) {<br>   ...<br> }', 'for (type variable ; arrayname) {<br>   ...<br> }', ' None of the above', '4', 'Medium', 'Java Arrays Loop'),
(408, 'Select one of the outputs in this code. <br> String[] cars = {\"Volvo\", \"BMW\", \"Ford\", \"Mazda\"}; <br> for (int i = 0; i < cars.length; i++) { <br>   System.out.println(cars[i]); <br> }', '1', 'Mazda', 'Bmw', 'None of the above', '2', 'Medium', 'Java Arrays Loop'),
(409, 'Starting at index[0] a function will get called on? ', 'Index[0]', 'Index[1]', 'Index[2]', ' None of the above', '1', 'Medium', 'Java Arrays Loop'),
(410, 'The data type of the array. ', 'datatype', ' Array', 'Loop', 'None of the above', '1', 'Medium', 'Java Arrays Loop'),
(411, ' It is the collection assigned to this variable. ', 'Value', 'Run', 'Item', 'None of the above', '3', 'Medium', 'Java Arrays Loop'),
(412, 'What is the output in this code?  <br> int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };  <br> System.out.println(myNumbers[0][2]);  <br>', '7', '3', '1', 'None of the above', '2', 'Hard', 'Java Arrays Loop'),
(413, 'What is the output in this code?   <br> int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };  <br> System.out.println(myNumbers[0][1]);  <br>', '2', '4', '6', 'None of the above', '1', 'Hard', 'Java Arrays Loop'),
(414, 'What is the output in this code?   <br> int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };  <br> myNumbers[1][2] = 10;  <br> System.out.println(myNumbers[1][2]);  ', '1', '6', '3', 'None of the above', '4', 'Hard', 'Java Arrays Loop'),
(415, 'What is the output in this code? <br> public class Main { <br>   public static void main(String[] args) { <br>     int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} }; <br>     for (int i = 1; i < myNumbers.length; ++i) { <br>       for(int j = 0; j < myNumbers[i].length; ++j) { <br>         System.out.println(myNumbers[i][j]); <br>       } <br>     } <br>   } <br> }', '1, 2, 3, 4', '1, 3, 5, 7', '5, 6, 7', 'None of the above', '3', 'Hard', 'Java Arrays Loop'),
(416, 'What is the output in this code?  <br> public class Main { <br>   public static void main(String[] args) { <br>     int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} }; <br>     for (int i = 1; i < myNumbers.length; ++i) { <br>       for(int j = 2; j < myNumbers[i].length; ++j) { <br>         System.out.println(myNumbers[i][j]); <br>       } <br>     } <br>   } <br> }', '1, 2, 3, 4', '7', '5, 6, 7', 'None of the above', '2', 'Hard', 'Java Arrays Loop'),
(417, 'Two or more methods may have the same name if they differ in ___', 'Numbers', 'Parameters', 'Java', 'None of the above', '2', 'Easy', 'Java Method Overloading'),
(418, 'Depending upon the argument passed, one of the _______ methods is called.', 'Overloaded', 'Run', 'Loop', 'None of the above', '1', 'Easy', 'Java Method Overloading'),
(419, 'With method overloading, multiple methods can have the _______ name with different parameters.', 'Different', 'Changed', 'Same', 'None of the above', '3', 'Easy', 'Java Method Overloading'),
(420, 'It can have the same name as long as the number and/or type of parameters are different.', 'Methods', 'Arguments Methods', 'Class', 'None of the above', '4', 'Easy', 'Java Method Overloading'),
(421, 'This helps to increase the _______ of the program.', 'Readability', 'Argument', 'Parameters', 'None of the above', '1', 'Easy', 'Java Method Overloading'),
(422, 'In method overloading, there must be differences in the _______ of parameters.', 'Count', 'Number', 'Method', 'None of the above', '2', 'Medium', 'Java Method Overloading'),
(423, 'Two or more methods can have the same _______ inside the same class if they accept different arguments.', 'Number', 'Count', 'Name', 'None of the above', '3', 'Medium', 'Java Method Overloading'),
(424, 'Method overloading is achieved by?', 'Changing the number of arguments', 'Changing the count of arguments', 'Changing the names of arguments', 'None of the above', '1', 'Medium', 'Java Method Overloading'),
(425, 'What is an example of method overloading?', 'int myMethod(int 100)', 'int myMethod(int: x)', 'int myMethod(int 0)', 'None of the above', '4', 'Medium', 'Java Method Overloading'),
(426, 'Which is not an example of method overloading?', 'int myMethod(int x)', 'float myMethod(float x)', 'double myMethod(double a, double b)', 'None of the above', '4', 'Medium', 'Java Method Overloading'),
(427, 'What is the output in this code? <br> static int plusMethodInt(int x, int y) { <br>   return x + y; <br> } <br>   static double plusMethodDouble(double x, double y) { <br>   return x + y; <br> } <br>   public static void main(String[] args) { <br>   int myNum1 = plusMethodInt(19, 23); <br>   double myNum2 = plusMethodDouble(12.7, 6.91); <br>   System.out.println(\"int: \" + myNum1); <br>   System.out.println(\"double: \" + myNum2); <br> }', 'int: 42 <br> double: 19.61', '42 <br> 19.61', 'int: 19 <br> double: 12.7', 'None of the above', '1', 'Hard', 'Java Method Overloading'),
(428, 'What is the output in this code?  <br> static int plusMethod(int x, int y) { <br>   return x + y; <br> } <br> static double plusMethod(double x, double y) { <br>   return x + y; <br> } <br> public static void main(String[] args) { <br>   int myNum1 = plusMethod(8, 5); <br>   double myNum2 = plusMethod(4.3, 6.26); <br>   System.out.println(', 'int: 8 <br> double: 6.26', 'int: 13 <br> double; 10.559999999999999', ' int: 13 <br> double: 10.559999999999999', 'None of the above', '3', 'Hard', 'Java Method Overloading'),
(429, 'What is the output in this code?  <br> static int plusMethodInt(int x, int y) { <br>   return x + y; <br> } <br> static double plusMethodDouble(double x, double y) { <br>   return x + y; <br> } <br> public static void main(String[] args) { <br>   int myNum1 = plusMethodInt(8, 3); <br>   double myNum2 = plusMethodDouble(15.2, 46.16); <br>   System.out.println(\"int: \" + myNum1); <br>   System.out.println(\"double: \" + myNum2); <br> } ', 'int; 8 <br> double; 6.26', 'int: 8 <br> double: 15.2', 'int: 8 <br> double: 46.16', 'None of the above', '4', 'Hard', 'Java Method Overloading'),
(430, 'What is the output in this code?  <br> static int plusMethodInt(int x, int y) { <br>   return x + y; <br> } <br>   static double plusMethodDouble(double x, double y) { <br>   return x + y; <br> } <br>   public static void main(String[] args) { <br>   int myNum1 = plusMethodInt(6, 11); <br>   double myNum2 = plusMethodDouble(2.2, 1.0); <br>   System.out.println(\"int: \" + myNum1); <br>   System.out.println(\"double: \" + myNum2); <br> }', 'int: 17 <br> double: 3.2', 'int: 6 <br> double: 2.2', 'int: 11 <br> double: 1.0', 'None of the above', '1', 'Hard', 'Java Method Overloading'),
(431, 'What is missing in this code to run?  <br> static int plusMethodInt(int x, int y) { <br>   return x + y; <br> } <br> static double plusMethodDouble(double x, double y) { <br>   return x + y; <br> } <br> public static void main(String[] args) { <br>   int myNum1 = plusMethodInt(8, 3); <br>   double myNum2 = plusMethodDouble(15.2 46.16); <br>   System.out.println(\"int: \" + myNum1); <br>   System.out.println(\"double: \" + myNum2); <br> }', ':', '.', ', ', 'None of the above', '3', 'Hard', 'Java Method Overloading'),
(432, 'Is a set of object which shares common characteristics/ behavior and common properties/attributes.', 'Class', 'Real-world entity', 'Memory', 'None of the above', '1', 'Easy', 'JAVA CLASSES AND OBJECTS'),
(433, 'Class is not a ___________. It is just a template or blueprint or prototype from which objects are created.', 'Class', 'Real-world entity', 'Memory', 'None of the above', '2', 'Easy', 'JAVA CLASSES AND OBJECTS'),
(434, 'Class does not occupy memory.', 'Class', 'Real-world entity', 'Memory', 'None of the above', '3', 'Easy', 'JAVA CLASSES AND OBJECTS'),
(435, 'Class is a group of variables of different data types and a group of _________.', 'Methods', 'Data types', 'Object', 'None of the above', '1', 'Easy', 'JAVA CLASSES AND OBJECTS'),
(436, 'A class in java can contain:', 'Method', 'Interface', 'Constructor', 'All of the above', '4', 'Easy', 'JAVA CLASSES AND OBJECTS'),
(437, 'It is a basic unit of Object-Oriented Programming and represents real-life entities.', 'Object', 'State', 'Behavior', 'None of the above', '1', 'Medium', 'JAVA CLASSES AND OBJECTS'),
(438, 'It is represented by attributes of an object. It also reflects the properties of an object.', 'Object', 'State', 'Behavior', 'None of the above', '2', 'Medium', 'JAVA CLASSES AND OBJECTS'),
(439, 'It is represented by the methods of an object. It also reflects the response of an object with other objects.', 'Object', 'State', 'Behavior', 'None of the above', '3', 'Medium', 'JAVA CLASSES AND OBJECTS'),
(440, 'It gives a unique name to an object and enables one object to interact with other objects.', 'Identity', 'State', 'Behavior', 'None of the above', '1', 'Medium', 'JAVA CLASSES AND OBJECTS'),
(441, 'An example of object.', 'Dog', 'Bark', 'Sleep', 'All of the above', '1', 'Medium', 'JAVA CLASSES AND OBJECTS'),
(442, 'Predict the output of following Java program? <br>  class Test { <br>   int i; <br> }  <br> class Main { <br>    public static void main(String args[]) {  <br>      Test t;  <br>      System.out.println(t.i);  <br> }  ', '0', ' Runtime Error', 'Compiler Error', 'Garbage Value', '3', 'Hard', 'JAVA CLASSES AND OBJECTS'),
(443, 'Predict the output of following Java program  <br>  class Test { <br>   int i; <br> }  <br> class Main { <br>   public static void main(String args[]) {  <br>       Test t = new Test();  <br>       System.out.println(t.i); <br>    }  <br> }', '0', 'Runtime Error', 'Compiler Error', 'Garbage Value', '1', 'Hard', 'JAVA CLASSES AND OBJECTS'),
(444, 'Predict the output of following Java program  <br>  class demo  <br> { <br>     int a, b; <br>           demo() <br>     { <br>         a = 10; <br>         b = 20; <br>     } <br>           public void print() <br>     { <br>         System.out.println (\"a = \" + a + \" b = \" + b + \"n\"); <br>     } <br> } <br>   class Test <br> { <br>       public static void main(String[] args) <br>     { <br>         demo obj1 = new demo(); <br>         demo obj2 = obj1; <br>           obj1.a += 1; <br>        ', 'Compile error', 'values of obj1:   <br> a = 11 b = 21 <br> values of obj2:  <br> a = 11 b = 21', 'values of obj1:  <br> a = 11 b = 21 <br> values of obj2:  <br> a = 10 b = 20', 'values of obj1:  <br> a = 11 b = 20 <br> values of obj2:  <br> a = 10 b = 21', '2', 'Hard', 'JAVA CLASSES AND OBJECTS');
INSERT INTO `question_db` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `level`, `topic`) VALUES
(445, 'Predict the output of following Java program. <br>  class demoClass <br> { <br>     int a = 1; <br>       void func() <br>     { <br>         demo obj = new demo(); <br>         obj.display(); <br>     } <br>         class demo <br>     { <br>         int b = 2; <br>           void display() <br>         { <br>             System.out.println(\"na = \" + a); <br>         } <br>     } <br>       void get() <br>     { <br>         System.out.println(\"nb = \" + b); <br>     } <br> } <br>     class Test', 'a = 1 <br> b = 2', 'b = 2 <br> a = 1', 'Compilation error', 'None of the above', '3', 'Hard', 'JAVA CLASSES AND OBJECTS'),
(446, 'Predict the output of the following program. <br>  class First <br> { <br>       void display() <br>     { <br>         System.out.println(\"Inside First\"); <br>     } <br> } <br>   class Second extends First <br> { <br>       void display() <br>     { <br>         System.out.println(\"Inside Second\"); <br>     } <br> } <br>     class Test <br> { <br>       public static void main(String[] args) <br>     { <br>         First obj1 =  new First(); <br>         Second obj2 =  new Second(); <br>      ', ' Compilation Error', 'Inside First <br> Inside Second', 'Inside First <br> Inside First', 'Runtime Error', '2', 'Hard', 'JAVA CLASSES AND OBJECTS'),
(447, 'Any entity that has state and behavior is known as an?', 'Object', 'Class', 'Inheritance', 'None of the above', '1', 'Easy', 'JAVA OOP'),
(448, 'Collection of objects is called?', 'Object', 'Class', 'Inheritance', 'None of the above', '2', 'Easy', 'JAVA OOP'),
(449, 'When one object acquires all the properties and behaviors of a parent object, it is known as?', 'Object', 'Class', 'Inheritance', 'None of the above', '3', 'Easy', 'JAVA OOP'),
(450, 'If one task is performed in different ways, it is known as?', 'Polymorphism', 'Abstraction', 'Inheritance', 'None of the above', '1', 'Easy', 'JAVA OOP'),
(451, 'Hiding internal details and showing functionality is known as?', 'Polymorphism', 'Abstraction', 'Inheritance', 'None of the above', '2', 'Easy', 'JAVA OOP'),
(452, 'Binding (or wrapping) code and data together into a single unit are known as?', 'Encapsulation', 'Coupling', 'Cohesion', 'None of the above', '1', 'Medium', 'JAVA OOP'),
(453, 'Refers to the knowledge or information or dependency of another class.', 'Encapsulation', 'Coupling', 'Cohesion', 'None of the above', '2', 'Medium', 'JAVA OOP'),
(454, 'Refers to the level of a component which performs a single well- defined task.', 'Encapsulation', 'Coupling', 'Cohesion', 'None of the above', '3', 'Medium', 'JAVA OOP'),
(455, 'Represents the relationship between the objects.', 'Association', 'Aggregation', 'Inheritance', 'None of the above', '1', 'Medium', 'JAVA OOP'),
(456, 'Represents the relationship where one object contains other objects as a part of its state.', 'Association', 'Aggregation', 'Inheritance', 'None of the above', '2', 'Medium', 'JAVA OOP'),
(457, 'Which of the following is a special method used to initialize an object of a class?', 'finalize()', 'constructor()', 'start()', 'stop()', '2', 'Easy', 'Java Constructors'),
(458, 'Which of the following is true about constructors in Java?', 'A class can have multiple constructors with different parameter lists', 'Constructors must have a return type', 'Constructors can be inherited from a superclass', 'Constructors are only used to create objects of an abstract class', '1', 'Easy', 'Java Constructors'),
(459, 'Which of the following keywords is used to call a constructor from another constructor in the same class?', 'new', 'super', 'this', 'constructor', '3', 'Easy', 'Java Constructors'),
(460, 'Which of the following is true about the default constructor in Java?', 'It is always provided by the compiler if no other constructors are defined', 'It can be called explicitly by the programmer', 'It can be overloaded with additional parameters', 'It can be inherited by a subclass', '1', 'Easy', 'Java Constructors'),
(461, 'Which of the following is an advantage of using constructors in Java?', 'Constructors can be used to modify the behavior of existing methods in a class', 'Constructors make it easier to create objects with default values', 'Constructors can be used to change the access modifiers of a class&#39;s variables', 'Constructors can be used to create static objects that can be accessed from anywhere in the program', '2', 'Easy', 'Java Constructors'),
(462, 'Which of the following is true about constructors in Java?', 'Constructors have a return type', 'Constructors can be declared as static', 'Constructors are called explicitly by the programmer', 'Constructors are used to create objects', '4', 'Medium', 'Java Constructors'),
(463, 'Which of the following statements is true about constructors?', 'A class can have more than one constructor', 'Constructors can be inherited from a superclass', 'Constructors can have access modifiers like public or private', 'All of the above', '4', 'Medium', 'Java Constructors'),
(464, 'What is the purpose of a parameterized constructor?', 'To initialize the object with default values', 'To provide a default constructor for the class', 'To initialize the object with user-defined values', 'To create a new instance of the class', '3', 'Medium', 'Java Constructors'),
(465, 'Which of the following statements is true about constructors?', 'Constructors can be declared as final', 'Constructors can be declared as abstract', 'Constructors can be overloaded', 'Constructors can be declared as synchronized', '3', 'Medium', 'Java Constructors'),
(466, 'Which of the following is a valid constructor declaration?', 'public constructor MyClass() {}', 'private MyClass(int x) {}', 'protected void MyClass() {}', 'static MyClass() {}', '2', 'Medium', 'Java Constructors'),
(467, 'Predict the output? <br>  package main; <br> class T { <br>   int t = 20; <br> } <br> class Main { <br>    public static void main(String args[]) { <br>       T t1 = new T(); <br>       System.out.println(t1.t); <br>    } <br> }', '20', '0', 'Compile Error', 'None of the above', '3', 'Hard', 'Java Constructors'),
(468, 'Predict the output of following Java program  <br> class T { <br>   int t = 20; <br>   T() { <br>     t = 40; <br>   } <br> } <br> class Main { <br>    public static void main(String args[]) { <br>       T t1 = new T(); <br>       System.out.println(t1.t); <br>    } <br> }', '20', '40', 'Compile Error', 'None of the above', '2', 'Hard', 'Java Constructors'),
(469, 'Is there any compiler error in the below Java program? <br> class Point { <br>     int m_x, m_y;  <br>     public Point(int x, int y) {    m_x = x;    m_y = y;  } <br>     public static void main(String args[])  <br>     { <br>       Point p = new Point(); <br>     } <br> }', 'Yes', 'No', 'Maybe', 'None of the above', '2', 'Hard', 'Java Constructors'),
(470, 'Output of following Java program <br> class Point { <br>   int m_x, m_y; <br>       public Point(int x, int y) { m_x = x; m_y = y; } <br>   public Point() { this(10, 10); } <br>   public int getX() { return m_x; } <br>   public int getY() { return m_y; } <br>       public static void main(String args[]) { <br>     Point p = new Point(); <br>     System.out.println(p.getX()); <br>   } <br> } ', '10', '0', 'Compile Error', 'None of the above', '1', 'Hard', 'Java Constructors'),
(471, 'What is the output. <br> final class Complex { <br>     private  double re,  im; <br>     public Complex(double re, double im) { <br>         this.re = re; <br>         this.im = im; <br>     } <br>     Complex(Complex c) <br>     { <br>       System.out.println(\"Copy constructor called\"); <br>       re = c.re; <br>       im = c.im; <br>     } <br>                 public String toString() { <br>         return \"(\" + re + \" + \" + im + \"i)\"; <br>     } <br>             } <br> class Main { <br>    ', 'Copy constructor called  <br> (10.0 + 15.0i)', 'Copy constructor called  <br> (0.0 + 0.0i)', '(10.0 + 15.0i)', 'None of the above', '1', 'Hard', 'Java Constructors'),
(487, 'Which keyword is used to create a subclass in Java?', 'extends', 'implements', 'class', 'interface', '1', 'Easy', 'Java Inheritance'),
(488, 'Which method is called when an object of a subclass is created?', 'The constructor of the superclass', 'The constructor of the subclass', 'The main() method of the superclass', 'The finalize() method of the superclass', '2', 'Easy', 'Java Inheritance'),
(489, 'Which type of inheritance involves creating a new class by combining multiple existing classes?', 'Single inheritance', 'Multiple inheritance', 'Hierarchical inheritance', 'Hybrid inheritance', '2', 'Easy', 'Java Inheritance'),
(490, 'Which access modifier is used to allow a subclass to access a method or variable of its superclass?', 'public', 'private', 'protected', 'default', '3', 'Easy', 'Java Inheritance'),
(491, 'Which method is used to call a method of a superclass from a subclass?', 'super()', 'super.methodName()', 'this()', 'this.methodName()', '2', 'Easy', 'Java Inheritance'),
(492, 'In Java, which keyword is used to indicate inheritance?', 'parent', 'extends', 'inherit', 'derived', '2', 'Medium', 'Java Inheritance'),
(493, 'What is inheritance in Java?', 'A way to hide the implementation details of a class', 'A way to create objects from an abstract class', 'A way to create a new class by inheriting the properties of an existing class', 'A way to implement multiple interfaces in a single class', '3', 'Medium', 'Java Inheritance'),
(494, 'Which of the following is not a type of inheritance in Java?', 'Single inheritance', 'Multiple inheritance', 'Hierarchical inheritance', 'Hybrid inheritance', '4', 'Medium', 'Java Inheritance'),
(495, 'In Java, a subclass inherits:', 'all the fields and methods of the superclass', 'only the public fields and methods of the superclass', 'only the private fields and methods of the superclass', 'none of the fields and methods of the superclass', '1', 'Medium', 'Java Inheritance'),
(496, 'Which of the following statements about inheritance in Java is true?', 'A subclass can override the methods of the superclass', 'A superclass can override the methods of the subclass', 'A subclass can access the private members of the superclass', 'A superclass can directly access the members of the subclass', '1', 'Medium', 'Java Inheritance'),
(497, 'Output of following Java Program? <br> class Base { <br>     public void show() { <br>        System.out.println(\"Base::show() called\"); <br>     } <br> } <br>    class Derived extends Base { <br>     public void show() { <br>        System.out.println(\"Derived::show() called\"); <br>     } <br> } <br>    public class Main { <br>     public static void main(String[] args) { <br>         Base b = new Derived();; <br>         b.show(); <br>     } <br> }', 'Derived::show() called', ' Base::show() called', 'Derived::show called', 'None of the above', '1', 'Hard', 'Java Inheritance'),
(498, 'What is the output?  <br> class Base { <br>     final public void show() { <br>        System.out.println(\"Base::show() called\"); <br>     } <br> } <br>    class Derived extends Base { <br>     public void show() { <br>        System.out.println(\"Derived::show() called\"); <br>     } <br> } <br>    class Main { <br>     public static void main(String[] args) { <br>         Base b = new Derived();; <br>         b.show(); <br>     } <br> } ', 'Base::show() called', 'Derived::show() called', 'Compiler Error', 'None of the above', '3', 'Hard', 'Java Inheritance'),
(499, 'What is the output?  <br> class Base { <br>     public static void show() { <br>        System.out.println(\"Base::show() called\"); <br>     } <br> } <br>    class Derived extends Base { <br>     public static void show() { <br>        System.out.println(\"Derived::show() called\"); <br>     } <br> } <br>    class Main { <br>     public static void main(String[] args) { <br>         Base b = new Derived(); <br>         b.show(); <br>     } <br> }', 'Base::show() called', 'Derived::show() called', 'Compiler Error', 'None of the above', '1', 'Hard', 'Java Inheritance'),
(500, 'Which of the following is true about inheritance in Java?  <br> 1) Private methods are final. <br> 2) Protected members are accessible within a package and  <br>    inherited classes outside the package. <br> 3) Protected methods are final. <br> 4) We cannot override private methods. <br>', ' Only 1 and 2', '1, 2 and 4', '1, 2 and 3', 'None of the above', '2', 'Hard', 'Java Inheritance'),
(501, 'Output of following Java program?  <br> class Base { <br>     public void Print() { <br>         System.out.println(\"Base\"); <br>     } <br>          } <br>   class Derived extends Base {   <br>       public void Print() { <br>         System.out.println(\"Derived\"); <br>     } <br> } <br>   class Main{ <br>     public static void DoPrint( Base o ) { <br>         o.Print();    <br>     } <br>     public static void main(String[] args) { <br>         Base x = new Base(); <br>         Base y = new ', 'Base <br> Derived <br> Derived', 'Base <br> Base <br> Derived', 'Base <br> Derived <br> Base', 'None of the above', '1', 'Hard', 'Java Inheritance'),
(502, 'Which keyword is used to define a method or class that cannot be subclassed?', 'final', 'static', 'private', 'abstract', '1', 'Easy', 'Java Modifiers'),
(503, 'Which access modifier is used to allow access to a class member within the same package and its subclasses?', 'private', 'public', 'protected', 'default', '3', 'Easy', 'Java Modifiers'),
(504, 'Which of the following is not a Java modifier?', 'static', 'final', 'constant', 'abstract', '3', 'Easy', 'Java Modifiers'),
(505, 'What is the default access modifier in Java?', 'public', 'private', 'protected', 'default', '4', 'Easy', 'Java Modifiers'),
(506, 'Which modifier is used to allow a method to be accessed without instantiating an object of the class?', 'static', 'final', 'final', 'synchronized', '1', 'Easy', 'Java Modifiers'),
(507, 'In Java, which of the following access modifiers allows a class to be accessed by any other class in the same package?', 'public', 'private', 'protected', 'package-private (default)', '4', 'Medium', 'Java Modifiers'),
(508, 'Which of the following access modifiers makes a method or field visible only to the class in which it is declared?', 'public', 'private', 'protected', 'package-private (default)', '2', 'Medium', 'Java Modifiers'),
(509, 'Which of the following is not an access modifier in Java?', 'public', 'protected', 'package-private', 'local', '4', 'Medium', 'Java Modifiers'),
(510, 'Which of the following access modifiers allows a subclass in a different package to access a method or field of its superclass?', 'public', 'private', 'protected', 'package-private (default)', '3', 'Medium', 'Java Modifiers'),
(511, 'Which of the following modifiers can be applied to a class in Java?', 'public', 'private', 'final', 'All of the above', '4', 'Medium', 'Java Modifiers'),
(512, 'What will be the output of the following code? <br>  import java.util.Arrays; <br> import java.util.Comparator; <br> public class ComparatorTest { <br> public static void main(String args[]) <br> { <br> String[] ar= {“c”,”d”,”b”,”a”,”e”}; <br> InnerClass in=new InnerClass(); <br> Arrays.parallelSort(ar, in); <br> for(String str : ar) <br> System.out.println(str +””); <br> System.out.println(Arrays.binarySearch(ar, “b”)); <br> } <br> static class InnerClass implements Comparator<String> <br> { <b', 'e d c b a -1', 'a b c 0 e d', 'd b c e a 1', 'None of the above', '1', 'Hard', 'Java Modifiers'),
(513, 'Can you create a sub class to the following class?  <br> class A <br> { <br>     private A() <br>     { <br>         First Constructor <br>     } <br>           private A(int i) <br>     { <br>         Second Constructor <br>     } <br> }', 'Yes', 'No', 'Maybe', 'None of the above', '2', 'Hard', 'Java Modifiers'),
(514, 'Does field ‘i’ of Class A be inherited to Class B in the below code?  <br> class A <br> { <br>     protected int i; <br> } <br>   class B extends A <br> { <br> } <br>', 'Yes', 'No', 'Maybe', 'None of the above', '1', 'Hard', 'Java Modifiers'),
(515, 'Is the below code written correctly?  <br> package pack1; <br>   class A <br> { <br>       } <br>   package pack2; <br>   class B extends A <br> { <br>       } ', 'Yes', 'No', 'Maybe', 'None of the above', '2', 'Hard', 'Java Modifiers'),
(516, 'What will be the outcome of the below program? <br> package pack1; <br>   public class A <br> { <br>     private int methodOne(int i) <br>     { <br>         return ++i; <br>     } <br>           public int methodTwo(int i) <br>     { <br>         return methodOne(++i); <br>     } <br> } <br>   package pack2; <br>   import pack1.A; <br>   class B extends A <br> { <br>     int methodOne(int i) <br>     { <br>         return methodTwo(++i); <br>     } <br> } <br>   public class MainClass <br> { <b', '105', '102', '104', 'None of the above', '3', 'Hard', 'Java Modifiers'),
(518, 'Which of the following is true about encapsulation in Java?', 'Encapsulation is the process of hiding data and methods within a class', ' Encapsulation is the process of making data and methods accessible to other classes', 'Encapsulation is not supported in Java', 'Encapsulation is used to create static variables', '1', 'Medium', 'Java Encapsulation'),
(519, 'Which of the following access modifiers is used to achieve encapsulation in Java?', 'public', 'private', 'protected', 'static', '2', 'Medium', 'Java Encapsulation'),
(520, 'What is the main benefit of encapsulation in Java?', ' It makes it easier to access class members from outside the class', ' It prevents other classes from accessing and modifying the class internal data', 'It allows multiple classes to access the same data at the same time', 'It reduces the size of the compiled code', '2', 'Medium', 'Java Encapsulation'),
(521, 'Which of the following is an example of encapsulation in Java?', 'Using a public static variable to store a password', 'Using private instance variables and public accessor methods to access them', 'Using public instance variables to store data and accessing them directly from other classes', 'Using protected instance variables to store data and accessing them directly from subclasses', '2', 'Medium', 'Java Encapsulation'),
(522, 'Which of the following is not a characteristic of encapsulation in Java?', 'Information hiding', 'Data abstraction', 'Access control', 'Multiple inheritance', '4', 'Medium', 'Java Encapsulation');

-- --------------------------------------------------------

--
-- Table structure for table `topics_db`
--

CREATE TABLE `topics_db` (
  `id` int(11) NOT NULL,
  `topic_name` varchar(100) NOT NULL,
  `Qtr` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics_db`
--

INSERT INTO `topics_db` (`id`, `topic_name`, `Qtr`) VALUES
(20, 'Java Arrays', '2nd Quarter'),
(21, 'Java While Loop', '2nd Quarter'),
(22, 'Java Methods', '2nd Quarter'),
(23, 'Java Method Parameters', '2nd Quarter'),
(24, 'Data Types and Variables', '1st Quarter'),
(25, 'Syntax, Output, Comment', '1st Quarter'),
(26, 'String Methods - Switch', '1st Quarter'),
(27, 'JAVA OOP ', '3rd Quarter'),
(28, 'JAVA CLASSES AND OBJECTS ', '3rd Quarter'),
(29, 'JAVA CLASS METHODS', '3rd Quarter'),
(30, 'JAVA CLASS ATTRIBUTES', '3rd Quarter'),
(31, 'Java Constructors', '4th Quarter'),
(32, 'Java Encapsulation', '4th Quarter'),
(33, 'Java Inheritance', '4th Quarter'),
(34, 'Java Modifiers', '4th Quarter'),
(35, 'Java Method Overloading', '2nd Quarter'),
(36, 'Java Break and Continue', '2nd Quarter'),
(37, 'Java Arrays Loop', '2nd Quarter');

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE `users_db` (
  `id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL DEFAULT '0',
  `2ndQtr` varchar(500) NOT NULL DEFAULT 'locked',
  `3rdQtr` varchar(500) NOT NULL DEFAULT 'locked',
  `4thQtr` varchar(500) NOT NULL DEFAULT 'locked',
  `user_type` varchar(50) NOT NULL DEFAULT 'user',
  `isactive` TINYINT(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`id`, `username`, `email`, `password`, `score`, `2ndQtr`, `3rdQtr`, `4thQtr`, `user_type`) VALUES
('1678677695640e96bf6f6ab', 'admin', 'admin@gmail.com', 'b1473439aa22e8d7c8fafad8b63201a1', '0', 'locked', 'locked', 'locked', 'admin'),
('168942652864b29a60b0b29', 'frpnzxxx', 'francesredleene@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 'locked', 'locked', 'locked', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_topic_status`
--

CREATE TABLE `user_topic_status` (
  `id` int(120) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `progress` varchar(150) NOT NULL DEFAULT '0',
  `Qtr` varchar(5000) NOT NULL,
  `topicStatus` varchar(500) NOT NULL DEFAULT 'false',
  `medium` varchar(50) NOT NULL DEFAULT '0',
  `hard` varchar(50) NOT NULL DEFAULT '0',
  `attempts` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_topic_status`
--

INSERT INTO `user_topic_status` (`id`, `userID`, `topic_name`, `progress`, `Qtr`, `topicStatus`, `medium`, `hard`, `attempts`) VALUES
(2754, '168942652864b29a60b0b29', 'Java Arrays', '0', '2nd Quarter', 'false', '0', '0', 0),
(2755, '168942652864b29a60b0b29', 'Java While Loop', '0', '2nd Quarter', 'false', '0', '0', 0),
(2756, '168942652864b29a60b0b29', 'Java Methods', '0', '2nd Quarter', 'false', '0', '0', 0),
(2757, '168942652864b29a60b0b29', 'Java Method Parameters', '0', '2nd Quarter', 'false', '0', '0', 0),
(2758, '168942652864b29a60b0b29', 'Data Types and Variables', '40', '1st Quarter', 'false', '0', '0', 3),
(2759, '168942652864b29a60b0b29', 'Syntax, Output, Comment', '0', '1st Quarter', 'false', '0', '0', 0),
(2760, '168942652864b29a60b0b29', 'String Methods - Switch', '0', '1st Quarter', 'false', '0', '0', 0),
(2761, '168942652864b29a60b0b29', 'JAVA OOP ', '0', '3rd Quarter', 'false', '0', '0', 0),
(2762, '168942652864b29a60b0b29', 'JAVA CLASSES AND OBJECTS ', '0', '3rd Quarter', 'false', '0', '0', 0),
(2763, '168942652864b29a60b0b29', 'JAVA CLASS METHODS', '0', '3rd Quarter', 'false', '0', '0', 0),
(2764, '168942652864b29a60b0b29', 'JAVA CLASS ATTRIBUTES', '0', '3rd Quarter', 'false', '0', '0', 0),
(2765, '168942652864b29a60b0b29', 'Java Constructors', '0', '4th Quarter', 'false', '0', '0', 0),
(2766, '168942652864b29a60b0b29', 'Java Encapsulation', '0', '4th Quarter', 'false', '0', '0', 0),
(2767, '168942652864b29a60b0b29', 'Java Inheritance', '0', '4th Quarter', 'false', '0', '0', 0),
(2768, '168942652864b29a60b0b29', 'Java Modifiers', '0', '4th Quarter', 'false', '0', '0', 0),
(2769, '168942652864b29a60b0b29', 'Java Method Overloading', '0', '2nd Quarter', 'false', '0', '0', 0),
(2770, '168942652864b29a60b0b29', 'Java Break and Continue', '0', '2nd Quarter', 'false', '0', '0', 0),
(2771, '168942652864b29a60b0b29', 'Java Arrays Loop', '0', '2nd Quarter', 'false', '0', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modules_db`
--
ALTER TABLE `modules_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_db`
--
ALTER TABLE `question_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_db`
--
ALTER TABLE `topics_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_topic_status`
--
ALTER TABLE `user_topic_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modules_db`
--
ALTER TABLE `modules_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `question_db`
--
ALTER TABLE `question_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=523;

--
-- AUTO_INCREMENT for table `topics_db`
--
ALTER TABLE `topics_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_topic_status`
--
ALTER TABLE `user_topic_status`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2772;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


