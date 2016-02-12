use hackathon;
SET sql_safe_updates=0;
drop database hackathon;
insert into doenca(idDoenca,nomeDoenca,categoria)
	values(1,'Cancro do Estomago','Gastrica'),(2,'Cancro dos Pulmões','Pulmonar'),(3,'Alzheimer','Mental'),(4,'Anorexia','Mental'),(5,'Asma','Respiratorio'),(6,'Botulismo','Estomago'),
		   (7,'Bronquite Aguda','Pulmoes'),(8,'Cirrose','Hepatica'),(9,'Cancro da Mama','Ocologica'),(10,'Cancro da Prostata','Ocologica'),
		   (11,'Cistite','Urinaria'),(12,'Dengue','Viral'),(13,'Diabetes','Matabolica'),(14,'Ejaculação Precoce','Urinario'),(15,'Esclerose Múltipla','Inflmatoria'),
		   (16,'Febre Reumática'),(17,'Glaucoma'),(18,'Gripe'),(19,'Hepatite Viral'),(20,'Hipertensão'),
		   (21,'Hipotiroidismo'),(22,'HIV'),(23,'Impotência'),(24,'Leucemia'),(25,'Meningite'),(26,'Osteoporose'),
		   (27,'Parkinson'),(28,'Prostatite'),(29,'Sarampo'),(30,'Sífilis'),(31,'Sinusite'),(32,'Tétano'),
		   (33,'Transtorno dissociativo de identidade'),(34,'Doença de Fabry'),(35,'Síndrome de Doege-Potter'),
		   (36,'Síndrome de Von Hippel-Lindau'),(37,'Quimerismo'),(38,'Síndrome de Munchausen'),(39,'Sexsomnia')
           (40,'Zika'),(41,'Dengue'),(42,'Hepatite'),(43,'Amigdalite'),(44,'Otite'),();
		   
select * from doenca;


