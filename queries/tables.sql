CREATE DATABASE IF NOT EXISTS cineteca;

CREATE TABLE IF NOT EXISTS cineteca.peliculas(
   id          INTEGER  NOT NULL PRIMARY KEY 
  ,nombre      VARCHAR(44) NOT NULL
  ,director    VARCHAR(16) NOT NULL
  ,rating      VARCHAR(4) NOT NULL
  ,puntaje_rt  INTEGER  NOT NULL
  ,recaudacion VARCHAR(12) NOT NULL
  ,mes         VARCHAR(9) NOT NULL
  ,anio        INTEGER  NOT NULL
);

INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (1,'Avengers: Endgame','Joe Russo','PG13',94,'$858,373,000','April',2019);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (2,'Star Wars: Episode VII - The Force Awakens','J.J. Abrams','PG13',93,'$936,662,225','December',2015);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (3,'Jurassic World','Colin Trevorrow','PG13',59,'$652,270,625','June',2015);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (4,'The Lion King','Jonathan Favreau','PG',52,'$543,638,043','July',2019);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (5,'Harry Potter and the Deathly Hallows: Part 2','David Yates','PG13',96,'$381,011,219','July',2011);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (6,'The Hunger Games: Catching Fire','Francis Lawrence','PG13',90,'$424,668,047','November',2013);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (7,'Spider-Man 3','Samuel Raimi','PG13',63,'$336,530,303','May',2007);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (8,'Finding Dory','Andrew Stanton','PG',94,'$486,295,561','June',2016);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (9,'Frozen II','Jennifer Lee','PG',77,'$130,263,358','November',2019);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (10,'The Secret Life of Pets','Chris Renaud','PG',73,'$368,384,330','July',2016);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (11,'Zootopia','Byron Howard','PG',98,'$341,268,248','March',2016);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (12,'Despicable Me 3','Pierre Coffin','PG',58,'$264,624,300','June',2017);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (13,'Beauty and the Beast','Bill Condon','PG',71,'$504,014,165','March',2017);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (14,'Pirates of the Caribbean: At World''s End','Gore Verbinski','PG13',44,'$309,420,425','May',2007);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (15,'Inside Out','Peter Docter','PG',98,'$356,461,711','June',2015);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (16,'Thor: Ragnarok','Taika Waititi','PG13',93,'$315,058,289','November',2017);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (17,'Monsters University','Dan Scanlon','G',80,'$268,492,764','June',2013);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (18,'The Lego Movie','Chris Miller','PG',96,'$257,760,692','February',2014);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (19,'Ice Age: The Meltdown','Carlos Saldanha','PG',57,'$195,330,621','March',2006);
INSERT INTO cineteca.peliculas(id,nombre,director,rating,puntaje_rt,recaudacion,mes,anio) VALUES (20,'Aquaman','James Wan','PG13',65,'$335,061,807','December',2018);
