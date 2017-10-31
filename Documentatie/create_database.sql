SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+02:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS rias_sleutelhangers DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE rias_sleutelhangers;

CREATE TABLE Adres (
Adres_id mediumint unsigned NOT NULL AUTO_INCREMENT,
Straatnaam  varchar(100) NOT NULL,
Huisnummer smallint unsigned NOT NULL,
Toevoeging varchar(25),
Postcode char(6) NOT NULL,
Plaats varchar(75) NOT NULL,
PRIMARY KEY (Adres_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Klant (
Klant_id mediumint unsigned NOT NULL AUTO_INCREMENT,
Email varchar(100) NOT NULL UNIQUE,
Wachtwoord varchar(50) NOT NULL,
Aanhef set('Heer', 'Mevrouw') NOT NULL,
Voornaam varchar(255) NOT NULL,
Tussenvoegsel varchar(25),
Achternaam varchar (255) NOT NULL,
Geboortedatum date,
Telefoon varchar(30),
Mobiel varchar(30),
Adres_id mediumint unsigned NOT NULL,
Rechten varchar(1) DEFAULT '1', 
PRIMARY KEY (Klant_id),
FOREIGN KEY (Adres_id) REFERENCES Adres(Adres_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Categorie (
Categorie_id mediumint unsigned NOT NULL AUTO_INCREMENT,
Categorie_naam varchar(75) NOT NULL,
PRIMARY KEY (Categorie_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Product (
Product_id mediumint unsigned NOT NULL AUTO_INCREMENT,
Naam_product varchar(50) NOT NULL,
Categorie_id mediumint unsigned NOT NULL,
Beschrijving varchar(255),
Gewicht smallint unsigned,
Vraagprijs float(3,2) NOT NULL,
FOREIGN KEY (Categorie_id) REFERENCES Categorie(Categorie_id),
PRIMARY KEY (Product_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE Bestelling (
Bestelling_id mediumint unsigned NOT NULL AUTO_INCREMENT,
Klant_id mediumint unsigned NOT NULL,
Tijd_Bestelling datetime,
FOREIGN KEY (Klant_id) REFERENCES Klant(Klant_id),
PRIMARY KEY (Bestelling_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE BestellingProduct (
Bestelling_id mediumint unsigned NOT NULL,
Product_id mediumint unsigned NOT NULL UNIQUE,
FOREIGN KEY (Bestelling_id) REFERENCES Bestelling(Bestelling_id),
FOREIGN KEY (Product_id) REFERENCES Product(Product_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
