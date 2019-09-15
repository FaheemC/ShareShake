DROP DATABASE IF EXISTS SHARESHAKE;

CREATE DATABASE IF NOT EXISTS SHARESHAKE;
USE SHARESHAKE;
grant all on SHARESHAKE.* to 'admin'@'localhost' identified by 'admin';

CREATE TABLE `USERS` (
  `id` int(11) AUTO_INCREMENT NULL PRIMARY KEY,
  `firstname` varchar(255),
  `lastname` varchar(255),
  `email` varchar(255),
  `paypal` varchar(255),
  `password` varchar(255),
  `address` varchar(255),
  `credit_rating` int(11)
);

CREATE TABLE `location` (
  `location_ID` int(11) AUTO_INCREMENT PRIMARY KEY,
  `description` varchar(255)
);

CREATE TABLE `category` (
  `category_ID` int(11) AUTO_INCREMENT PRIMARY KEY,
  `description` varchar(255)
);
 
CREATE TABLE `posting` (
  `post_ID` int(11) NOT NULL PRIMARY KEY,
  `poster_ID` int(11),
  `item_title` varchar(255),
  `date` varchar(255),
  `rate` varchar(255),
  `description` varchar(255),
  `condition` varchar(255),
  `period` varchar(255),
  `location_ID` int(11),
  `category_ID` int(11),
  `views` int(11),
  `img_URL` varchar(255),
  FOREIGN KEY(poster_ID) REFERENCES USERS(id),
  FOREIGN KEY(location_ID) REFERENCES LOCATION(location_ID),
  FOREIGN KEY(category_ID) REFERENCES CATEGORY(category_ID)
);

CREATE TABLE `confirmation` (
  `conf_ID` int(11) AUTO_INCREMENT PRIMARY KEY,
  `posting_ID` int(11),
  `user_ID` int(11),
  FOREIGN KEY(posting_ID) REFERENCES POSTING(post_id),
  FOREIGN KEY(user_ID) REFERENCES USERS(id)
);

CREATE TABLE `contact` (
  `contact_ID` int(11) AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(255),
  `message` longtext
  );


INSERT INTO USERS (firstname, lastname, email, paypal, password, address, credit_rating) VALUES
('test1', 'test1', 'admin@domain.ca', 'paypal@paypal.com', 'test1', 'test address', 'test credit');
