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
 
 
 insert into prevencao(id_prevencao,descricao)
		values(1,'Doença Cardíaca Alimentação saudável com pouco sal, açucar e pouca gordura. Prática de exercício físico'),
        (2,'Gastroenterite Lavar as mãos cuidadosamente, lavagem das frutas e vegetais antes do consumo. Conservação adequada
        dos alimentos'),
        (3,'Otite Prevenir gripes, evitar fumo passivo, lavar as mãos frequentemente. Em caso de bebés, evitar dar a chupeta, fazer a
        mamentação e discotir possível vacinação com o médico'),
        (4,'Amigdalite Lavar as mãos frequantemente, evitar compartilhar itens de uso pessoal como por exemplo talheres e escovas de dentes.
        Preoteger-se do frio e mudanças de temperatura'),
        (5,'Cirrose Moderar o consumo de álcool e prevenir a aquisição da hepatite'),
        (6,'Hepatite Moderar o consumo de álcool e outras substâncias tóxicas (remédios), evitar comportamentos sexuais de risco, melhorar condições
        de saneamento básico e higiene, vacinação, não compartilhae lâminas de barbear e escovas de dentes, triagem dos bancos de sangue e centrais de
        doação de sêmen, de modo a evitar a distribuição de material infetado'),
        (7,'Pneumonia Lavar as mãos com frequência, não fumar, vacinação'),
        (8,'Cálculo Biliar Não saltar refeições, manter um peso saudável, evitar perdas de peso bruscas'),
        (9,'Cálculo Renal Beber muita água durante o dia, evitar comidas ricas em oxalato (espinafres, nozes, batata doce e espinafre), reduzir quantidades
        de sal e proteínas nas refeições e manter níveis de cálcio no sangue estáveis'),
        (10,'Hérnia Utilizar técnicas correctas de levantamento de pesos, emagrecer no caso de excesso de peso, aliviar ou evitar constipação
        comendo alimentos ricos em fibras e bebendo muitos líquidos'),
        (11,'Catarata Fazer exames oftalmológicos regualares, parar de fumar, reduzir o consumo de álcool, usar óculos de sol, monitorizar a glaucoma e diabetes,
        manter o peso ideal e manter uma dieta saudável'),
        (12,'Anemia Fazer uma alimentação rica em ferro, cozinhar em panelas de ferro, ingerir vitamina C em abundancia, tomar suplementos de ferro,
        evitar certos medicamentos, comer alimentos com vitamina B12'),
        (13,'Enxaqueca Evitar stress e ansiedade, identificar situações que desencadeiam a enxaqueca e evitá-los'),
        (14, 'Febre Tifóide Ferver ou filtar a água antes do consumo, prevenir-se com higiene pessoal e saneamento básico, preparação adqueada dos
        alimentos e vacianção'),
        (15,'Poliomielite Vacinação'),
        (16,'Bronquite Não fumar, vacinação, reduzir exposição à poluição e agentes químicos que possam irritar os pulmões e lavar as mãos frequantemtente'),
        (17,'Cancro da Mama Adoção de hábitos saudáveis e realizar exames de rastreio'),
        (18,'Cancro da próstata Realização do toque retal e dosagem do PSA a todos os homens acima dos 50 anos. Para aqueles com historial familiar com cancro
        da próstata, recomenda-se realização desses exames a partir dos 45 anos. Alimentação saudável, não fumar, ser fisicamente ativo e visitar regularmente
        o médico'),
        (19,'Cistite Beber mais água e outros líquidos, esvaziar toda a bexiga no acto de urinar, urinar imediatamente após a relação sexual, evitar uso de preservativos
        revestidos com espermicida'),
        (20,'Dengue Tentar evitar focos de reprodução dos mosquito Aedes Aegypti, evitando acumulação de água e colocando areia nos vasos de plantas'),
        (21,'Diabetes Manter o peso normal, não fumar, controlar a pressão arterial, evitar medicamentos que agridam o pâncreas e praticar atividade 
        física regularmente'),
        (22,'Ejaculação Precoce Comunicação aberta entre os parceiros, evitar pressões psicológicas'),
        (23,'Esclerose Múltipla Não é possível prevenir. No entanto o diagnóstico precoce pode facilitar conviver com a doença'),
        (24,'Febre Reumática Tratar infeções de garganta causadas pela bacteria do estreptococo'),
        (25,'Glaucoma Diagnóstico precoce e cuidados meticulosos com a doença são essenciais para prevenir a cegueira. Realização de exames de prevençao'),
        (26,'Gripe Vacinação, evitar mudanças de temperatura e lavar muitas vezes as mãos'),
        (27,'Hipertensão Evitar o sedentarismo, evitar bebidas alcoólicas, tentar levar uma vida tranquila, manter o peso saudável, ter uma alimentação equilibrada, diminuir
        a quantidade de sal'),
        (28,'Hipotireoidismo Não existe meios de prevenção. Realizar testes de rotina'),
        (29, 'HIV Uso de preservativo durante a relação sexual, evitar partilhar seringas e agulhas'),
        (30,'Imputência Realizar exercício físico com regularidade, boa alimentação, dormir bem, evitar stress e moderar o consumo de alcoól'),
        (31,'Leucemia Evitar exposição à radiação ionizante, controlar a dose de alguns agentes quimioterápicos, evitar exposição ao benzeno'),
        (32,'Meningite Evitar contacto com pessoas contagiadas, lavar sempre as mãos, não compartilhar itens de uso pessoal, permanecer saudável 
        com sistema imunológico a funcionar correctamente, tapar a boca ao tossir ou espirrar'),
        (33,'Osteoprose Seguir uma dieta equilibrada com as quantidades de cálcio e vitamina D adequadas, evitar consumo de alcoól em excesso, não fumar, praticar exercício
        físico regularmente, fazer reposição hormonal quando indicado e fazer densitometria óssea anualmente a partir dos 50 anos'),
        (34,'Parkinson Não há tratamento preventivo'),
        (35,'Prostatite Hábitos de higiene corretos, usar preservativos e limitar o numero de parceiros sexuais, dieta equilibrada, exercício físico regular e visita regular
        ao médico'),
        (36,'Sarampo Vacinação e evitar contacto com pessoas infetadas'),
        (37,'Sífilis Limitar o número de parceiros sexuais, usar preservativo'),
        (38,'Sinusite Manter a mucosa nasal hidratada, tratar rinite alérgica, manter uma alimentação saudável, evitar o jejum, beber água, lavar as mãos, fazer testes paras 
        as alergias, ser vacinado contra a gripe, evitar cheiros fortes, agasalhar-se, não fumar, praticar exercício físico'),
        (39,'Tétano Vacinação, limpar bem todas a feridas e ferimentos e reomover tecidos mortos ou muito danificados'),
        (40,'Transtorno dissociativo de indentidade Evitar cenários problemáticos familiares e reconhecimento dos traços da doença o mais cedo possível'),
        (41,'Doença de Fabry Não existe prevenção. Deve realizar exames regulares de modo a haver um diagnóstico precoce'),
        (42,'Sídrome de Doege-Potter Não existe prevenção. Deve realizar exames regulares de modo a haver um diagnóstico precoce'),
        (43,'Sídrome de Von Hippel Lindau Não existe prevenção. Deve realizar exames regulares de modo a haver um diagnóstico precoce'),
        (44,'Sídrome de Munchausen Não existe prevenção. Deve realizar exames regulares de modo a haver um diagnóstico precoce'),
        (45,'Sexomnia Não existe prevenção'),
        (46,'Zika Tentar evitar focos de reprodução dos mosquito Aedes Aegypti, evitando acumulação de água e colocando areia nos vasos de plantas, usar repelentes'),
        (47,'Alzheimer Fazer diariamente jogos de estratégia, praticar 30 minutos de exercício por dia, adoptar uma dieta mediterrânea, beber uma taça de vinho tinto por dia,
        dormir 8 horas por noite e manter a pressão arterial controlada'),
        (48,'Asma Emcapar colchões e travesseiros, lavar semanalmente as roupas da cama, retirar cortinas, tapetes e carpetes, evitar animais domésticos e promover a ventilação do ambiente'),
        (49,'Anorexia reduzir os factores de stress, sentir-se bem psicologicamente, conciliar o descanso com a escola/trabalho, desenvolver amizades, cultivar
        uma imagem positiva do corpo, ter conhecimento e hábitos alimentares saudáveis'),
        (50,'Botulismo Dieta equilibrada e bem preparada, com alimentos em bom estado de conservação, manter a higiene na cozinha'),
        (51,'Cacro do Estomago Hábitos alimentares saudáveis, evitar consumo de tabaco'),
        (52, 'Cancro dos pulmões Evitar fumar e frequentar ambientes de fumo, evitar substâncias com beta-caroteno');
