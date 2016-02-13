use hackathon;
SET sql_safe_updates=0;
-- drop database hackathon;
insert into doenca(id_doenca,nome,categoria)
	values(1,'Cancro do Estomago','Gastrica'),(2,'Cancro dos Pulmões','Respiratória'),(3,'Alzheimer','Mental'),
		(4,'Anorexia','Mental'),(5,'Asma','Respiratória'),(6,'Botulismo','Estomago'),(7,'Bronquite Aguda','Respiratória'),
        (8,'Cirrose','Hepatica'),(9,'Cancro da Mama','Ocologica'),(10,'Cancro da Prostata','Ocologica'),
		(11,'Cistite','Urinaria'),(12,'Dengue','Viral'),(13,'Diabetes','Matabolica'),
        (14,'Ejaculação Precoce','Urinaria'),(15,'Esclerose Múltipla','Inflmatoria'),
		(16,'Febre Reumática','Inflamatoria '),(17,'Glaucoma','Ocular'),(18,'Gripe','Viral'),
        (19,'Hepatite','Viral'),(20,'Hipertensão','Vascular'),(21,'Hipotireoidismo','Hormonal'),
        (22,'HIV','Viral'),(23,'Impotência','Sexual'),(24,'Leucemia','Sanguineo'),(25,'Meningite','Nervoso'),
        (26,'Osteoporose','Ossea'),(27,'Parkinson','Neuronal'),(28,'Prostatite','Inflamatoria'),
        (29,'Sarampo','Viral'),(30,'Sífilis','Bacteriana'),(31,'Sinusite','Inflamatoria'),(32,'Tétano','Infecciosa'),
		(33,'Transtorno dissociativo de identidade','Mental'),(34,'Doença de Fabry','Genetica'),
        (35,'Síndrome de Doege-Potter','Tumoral'),(36,'Síndrome de Von Hippel-Lindau','Genetica'),
        (37,'Pneumonia','Respiratória'),(38,'Síndrome de Munchausen','Mental'),(39,'Sexsomnia','Mental'),
		(40,'Zika','Viral'),(41,'Doenca Cardiaca','Cardiovascular'),(42,'Cataratas','Ocular'),
        (43,'Amigdalite','Inflamatoria'),(44,'Otite','Inflamatoria'),(45,'Gastroenterite','Inflamatoria'),
        (46,'Cálculo Biliar','Digestiva'),(47,'Cálculo Renal','Urinaria'),(48,'Hérnia','Muscular'),(49,'Anemia','Sanguineo'),
        (50,'Enxaqueca','Neurologica'),(51,'Febre Tifóide','Bacteriana'),(52,'Poliomielite','Nervosa');
		   
 select count(*) from doenca;
 -- delete from doenca;
insert into causa(id_Causa,designacao)
		values(1,'Tumor maligno que se desenvolve na mama como consequência alterações genéticas num conjunto de 
        células na mama, que se dividem descontroladamente'),(2,'Inflamação aguda que compromete 
        os orgãos do sistema gastrointestinal'),(3,'Hepatite Qualquer degeneração do fígado por causas diversas, 
        principalmente pelos vírus do tipo A, B e C e abuso de cosumo de álcool ou outras substâncias'),(4,'Cardíaca Doença que afeta
        o sistema circulatório, isto é, os vasos sanguíneos e coração'),(5,'Otite Infeção do ouvido médio'),
        (6,'Amigdalite Inflamação e inchaço nas amígdalas'),(7,'Cirrose Formação nódulos e fibrose no fígado'),
        (8,'Pneumonia Infecção que se instala nos pulmões'),(9,'Cálculo Biliar Depósitos duros como cristais de rocha que se formam
        na vesícula biliar'),(10,'Cálculo renal Massa sólida formada por pequenos cristais, que podem ser encontrados quer nos 
        rins quer em outro orgão do sistema urinário'),(11,'Hérnia Deslocamento de parte do organismo através de orifícios 
        nas paredes fibrosas que separam diferentes cavidades e camadas no corpo, como tórax, abdómen ou camadas de
        gordura e músculo'),(12,'Catarata Opacidade da lente natural do olhos'),(13,'Anemia Condição na qual o conteúdo
        de hemoglomina no sangue está a baixo do normal como resultado da carência de um ou mais nutrientes essenciais'),
        (14,'Enxaqueca Tipo de cefaleia que se caracteriza por uma dor pulsátil num dos lados da cabeça'),
        (15,'Febre tifóide Doença associada a uma situação precária de saneamento básico, higiene pessoal e ambiental'),
        (16,'Poliomielite Doença viral que pode afetar os nervos e levar à paralisia parcial ou total'),
        (17,'Bronquite Inflamação das principais pqssagens de ar para os pulmões'),(18,'Cancro da próstata Tumor maligno
        que se desenvolve na próstata como consequência alterações genéticas num conjunto de 
        células na próstata, que se dividem descontroladamente'),
        (19,'Cistrite Infeção da bexiga'),(20,'Dengue Doença febril aguda causada por um virus'),
        (21,'Diabetes Sindrome matabólica decorrente da falta de insulina e/ou da incapacidade e esta exercer adquadamente
        os seus efeitos, levando a um aumento de glicose no sangue'),(22,'Ejaculação precoce Orgasmo masculino mais 
        cedo que o esperado durante a relação sexual'),(23,'Esclerose múltipla Doença autoimune que afeta o cérebro e a 
        medula espinal'),(24,'Febre reumática Doença inflamatória que se desenvolve após uma infeção anterior provocada 
        pela bactéria do estreptococo'),(25,'Glaucoma Grupo de doenças oculares que provoca danos irreparáveis no nervo
        óptico'),(26,'Gripe Infecção do sistema respiratório'),(27,'Hipertensão Doença caracterizada pela elevação dos 
        níveis tensionais no sangue'),(28,'Hipotireoidismo Problema no qual a glândula da tireoide não produz hormonas 
        suficientes para as necessidades do organismo'),(29,'HIV Doença que ataca o sistema imunológico pela destruição 
        dos glóbulos brancos'),(30,'Imputência Incapacidade de o homem iniciar ou manter uma erecção durante tempo suficiente
        para completar o contacto íntimo'),(31,'Leucemia Doença maligna dos glóbulos brancos'),(32,'Meningite Inflamação das
        membranas que envolvem o cérebro'),(33,'Osteoporose Doença metabólica que ataca todos os ossos'),(34,'Parkinson
        Doença progressiva do sistema neurológico que afeta principalmente o cérebro'),(35,'Prostatite Inflamação das 
        glândulas da próstata'),(36,'Sarampo Doença infeto-contagiosa causada por um virus designado Morbillivirus'),
        (37,'Sífilis Doença sexualmente transmissível causada pela bactéria Treponema pallidum'),(38,'Sinusite Inflamação
        da mucosa dos seios da façe, região do crânio formada por cavidades ósseas ao redor do nariz, maçãs do rosto e olhos'),
        (39,'Tétano Doença bacteriana que afeta o sistema neurológico e que pode levar à morte'),(40,'Transtorno dissociativo 
        de indentidade Condição mental grave e complexa cujos os sintomas instáveis e pungentes podem invadir o indivíduo
        de modo súbito, caótico, avassalador e desenfreado'),(41,'Doença de Fabry Doença rara crónica que leva a uma 
        interrupção cardíaca, cerebrovascular e especialmente renal'),(42,'Sindrome de Doege-Potter Síndrome paraneoplásica
        em que o quadro de hipoglicemia está ligado ao aparecimento de tumores fibrosos solitários, geralmente na pleura'),
        (43,'Síndrome de Von Hippel Lindau Rara desordem genética caracterizada pelo crescimento anormal de tumores, especialmente
        em regiões do organismo altamente irrigadas'),(44,'Síndrome de Munchausen Transtorno de ordem psiquiátrica na qual 
        os indivíduos simulam estarem enfermos ou com algum trauma pesicológico para consquistarem a atenção e simpatia dos
        que o rodeam'),(45,'Sexsomnia Transtorno caracterizado pela ânsia por sexo durante o sono'),(46,'Zika Infecção causada
        pelo vírus  Zikv transmitida por um mosquito Aedes aegypti, mesmo transmissor da dengue'),(47,'Alzheimer Doença neuro-degenerativa
        que provoca declínio das funções intlectuais, reduzindo capacidades de trabalho e relação social, interfereindo no comportamento
        e personalidade'),(48,'Cancro Pulmões Tumor maligno que se desenvolve nos pulmões como consequência alterações genéticas num conjunto de 
        células dos pulmões que se dividem descontroladamente'),(49,'Cancro Estômago Tumor maligno que se desenvolve no estômago como consequência
        alterações genéticas num conjunto de células no estômago, que se dividem descontroladamente'),(50,'Anorexia desturbio alimentar que
        provoca uma perda de peso acima do que é considerado saudável para a idade e altura'),(51,'Asma Doença inflamatória crónica 
        das vias aéreas'),(52,'Botulismo Doença bacteriana rara causada pela ingestão de alimentos contaminados');
        
        
 
 
 
 
 -- delete from causa;
 select count(*) from causa;
insert into doenca_causa(doenca,causa)
	values(9,1),(45,2),(19,3); 
 delete from doenca_causa;
