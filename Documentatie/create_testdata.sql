SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+02:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

USE rias_sleutelhangers;

INSERT INTO adres (Straatnaam, Huisnummer, Toevoeging, Postcode, Plaats) VALUES
('Lijndenweg', 74, NULL, '1951NC', 'Velsen-Noord'),
('Rijksweg', 178, NULL, '2071CW', 'Santpoort-Noord'),
('Lange Jufferstraat', 176, NULL, '3512ED', 'Utrecht'),
('Van Dusseldorpstraat', 172, NULL, '4461LV', 'Goes'),
('Doctor Colijnstraat', 114, 'A', '2982AC', 'Ridderkerk');

INSERT INTO klant (Email, Wachtwoord, Aanhef, Voornaam, Tussenvoegsel, Achternaam, Geboortedatum, Telefoon, Mobiel, Adres_id) VALUES
('Blas1984@superrito.com', 'test123', 'Heer', 'Henk', NULL, 'Blas', '1990-12-15', '0524-135231', '06-39252532', 1),
('Hans281@superrito.com', 'wachtwoordvergeten', 'Heer', 'Hans', 'De', 'Worst', NULL, NULL, NULL, 2),
('Superburrito@superrito.com', 'geenidee', 'Mevrouw', 'Simone', NULL, 'Klein', '1994-09-13', NULL, NULL, 3),
('test123@gmail.com', 'AbCdEfG', 'Heer', 'Michiel', NULL, 'Bruinsma', '1988-06-10', NULL, NULL, 4),
('test123@outlook.com', '01823213', 'Mevrouw', 'Jannie', 'Van', 'Jas', '1966-06-06', NULL, '06-3829599', 5);

INSERT INTO categorie (Categorie_naam) VALUES
('Dieren'),
('Vlaggen'),
('Stripfiguren'),
('TV-series'),
('Automerken');

INSERT INTO product (Naam_product, Categorie_id, Beschrijving, Gewicht, Vraagprijs) VALUES
('BMW logo', 5, 'Sleutelhanger van het merk BMW, afmetingen: 10x10cm', 20, 2.00),
('Aap met gouden stropdas', 1, 'Aap met gouden stropdas, zo goes als nieuw, afmeting: 5x10cm', 25, 2.50),
('Suske en Wiske (van hout)', 3, 'Suske en wiske sleutelhanger. Helemaal van hout, gemaakt in 1989', NULL, 5.00),
('Walter White (hoofdpersoon Breaking Bad)', 4, NULL, NULL, 3.50),
('Vlag van Groningen (gemaakt in 1959)', 2, NULL, 50, 6.50),
('Mercedes logo', 5, 'Sleutelhanger van het merk Mercedes, afmetingen: 10x10cm', 20, 2.00),
('Aap met zilveren stropdas', 1, 'Aap met zilveren stropdas, zo goes als nieuw, afmeting: 5x10cm', 25, 2.50),
('Suske en Wiske (van ijzer)', 3, 'Suske en wiske sleutelhanger. Helemaal van ijzer, gemaakt in 1989', NULL, 5.00),
('Jesse Pinkman (hoofdpersoon Breaking Bad)', 4, NULL, NULL, 3.50),
('Vlag van Drenthe (gemaakt in 1959)', 2, NULL, 50, 6.50);

INSERT INTO bestelling (Klant_id, Tijd_Bestelling) VALUES
(1, now()),
(4, now()),
(2, now()),
(5, now()),
(3, now());

INSERT INTO bestellingproduct (Bestelling_id, Product_id) VALUES
(1, 4),
(1, 7),
(1, 8),
(2, 1),
(2, 3),
(3, 6),
(4, 10),
(5, 2),
(5, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
