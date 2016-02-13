use hackathon;
SET sql_safe_updates=0;
drop database hackathon;
insert into doenca(id_doenca,nome,categoria)
	values(1,'Cancro do Estomago','Gastrica'),(2,'Cancro dos Pulmões','Pulmonar'),(3,'Alzheimer','Mental'),
		(4,'Anorexia','Mental'),(5,'Asma','Respiratorio'),(6,'Botulismo','Estomago'),(7,'Bronquite Aguda','Pulmoes'),
        (8,'Cirrose','Hepatica'),(9,'Cancro da Mama','Ocologica'),(10,'Cancro da Prostata','Ocologica'),
		(11,'Cistite','Urinaria'),(12,'Dengue','Viral'),(13,'Diabetes','Matabolica'),
        (14,'Ejaculação Precoce','Urinaria'),(15,'Esclerose Múltipla','Inflmatoria'),
		(16,'Febre Reumática','Inflamatoria '),(17,'Glaucoma','Ocular'),(18,'Gripe','Viral'),
        (19,'Hepatite','Viral'),(20,'Hipertensão','Vascular'),(21,'Hipotiroidismo','Hormonal'),
        (22,'HIV','Viral'),(23,'Impotência','Sexual'),(24,'Leucemia','Sanguineo'),(25,'Meningite','Nervoso'),
        (26,'Osteoporose','Ossea'),(27,'Parkinson','Neuronal'),(28,'Prostatite','Inflamatoria'),
        (29,'Sarampo','Viral'),(30,'Sífilis','Bacteriana'),(31,'Sinusite','Inflamatoria'),(32,'Tétano','Infecciosa'),
		(33,'Transtorno dissociativo de identidade','Mental'),(34,'Doença de Fabry','Genetica'),
        (35,'Síndrome de Doege-Potter','Tomoral'),(36,'Síndrome de Von Hippel-Lindau','Genetica'),
        (37,'Pneumonia','yuy'),(38,'Síndrome de Munchausen','Mental'),(39,'Sexsomnia','Mental'),
		(40,'Zika','Viral'),(41,'Doenca Cardiaca','Cardiovascular'),(42,'Pneumonia','Pulmonar'),
        (43,'Amigdalite','Inflamacao'),(44,'Otite','Inflamatoria'),(45,'Gastroenterite','Inflamação')
        (46,'Cálculo Biliar','Digestiva'),(47,'Cálculo Renal','Urinaria'),(48,'Hérnia','Muscular'),(49,'Anemia','Sanguineo'),(50,'Enxaqueca','neurologico'),(51,'Febre Tifóide','Bacteriana'),(52,'Poliomielite','Nervosa');
		   
-- delete from doenca;
insert into causa(id_Causa,designacao)
		values(1,'Tumor maligno que se desenvolve na mama como consequência alterações genéticas num conjunto de 
        células na mama, que se dividem descontroladamente'),(2,'Inflamação aguda que compromete 
        os orgãos do sistema gastrointestinal'),(3,'Hepatite Qualquer degeneração do fígado por causas diversas, 
        principalmente pelos vírus do tipo A, B e C e abuso de cosumo de álcool ou outras substâncias');
-- delete from causa;
select * from causa;
insert into doenca_causa(doenca,causa)
	values(9,1),(45,2),(19,3); 
-- delete from doenca_causa;
