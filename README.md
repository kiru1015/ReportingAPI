# ReportingAPI

Getting Started

Install MySQL and MySQL workbench 

Create a schema/database named 'reporting' 

Execute the following SQLs to create the Tables. These were created through migrations during development

CREATE TABLE `property` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` int(11) NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FBD8E0F8549213EC` (`property_id`),
  CONSTRAINT `FK_FBD8E0F8549213EC` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

Update the DB server details in config/packages/doctrine.yaml

Install Symfony 6 if not already installed

Run symfony console server:start in the terminal

Open http://127.0.0.1:8000 in any web browser to check whether the server is up and running

Execute the attached Postman Collections to test the APIs 

