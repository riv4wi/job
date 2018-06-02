DROP TABLE IF EXISTS personas, paises;

CREATE TABLE `paises` (
  `idPais` varchar(2) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`idPais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `personas` (
  `idPersona` int (10) NOT NULL AUTO_INCREMENT ,
  `dni` varchar(20) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `edoCivil` enum('SOLTERO','CASADO','DIVORCIADO','VIUDO') NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `idPais` varchar(2) NOT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `calle` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idPersona`),
  INDEX (`idPais`),
  FOREIGN KEY (`idPais`) 
    REFERENCES paises(`idPais`)  
	ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `paises` VALUES('AF', 'Afganistán');
INSERT INTO `paises` VALUES('AX', 'Islas Gland');
INSERT INTO `paises` VALUES('AL', 'Albania');
INSERT INTO `paises` VALUES('DE', 'Alemania');
INSERT INTO `paises` VALUES('AD', 'Andorra');
INSERT INTO `paises` VALUES('AO', 'Angola');
INSERT INTO `paises` VALUES('AI', 'Anguilla');
INSERT INTO `paises` VALUES('AQ', 'Antártida');
INSERT INTO `paises` VALUES('AG', 'Antigua y Barbuda');
INSERT INTO `paises` VALUES('AN', 'Antillas Holandesas');
INSERT INTO `paises` VALUES('SA', 'Arabia Saudí');
INSERT INTO `paises` VALUES('DZ', 'Argelia');
INSERT INTO `paises` VALUES('AR', 'Argentina');
INSERT INTO `paises` VALUES('AM', 'Armenia');
INSERT INTO `paises` VALUES('AW', 'Aruba');
INSERT INTO `paises` VALUES('AU', 'Australia');
INSERT INTO `paises` VALUES('AT', 'Austria');
INSERT INTO `paises` VALUES('AZ', 'Azerbaiyán');
INSERT INTO `paises` VALUES('BS', 'Bahamas');
INSERT INTO `paises` VALUES('BH', 'Bahréin');
INSERT INTO `paises` VALUES('BD', 'Bangladesh');
INSERT INTO `paises` VALUES('BB', 'Barbados');
INSERT INTO `paises` VALUES('BY', 'Bielorrusia');
INSERT INTO `paises` VALUES('BE', 'Bélgica');
INSERT INTO `paises` VALUES('BZ', 'Belice');
INSERT INTO `paises` VALUES('BJ', 'Benin');
INSERT INTO `paises` VALUES('BM', 'Bermudas');
INSERT INTO `paises` VALUES('BT', 'Bhután');
INSERT INTO `paises` VALUES('BO', 'Bolivia');
INSERT INTO `paises` VALUES('BA', 'Bosnia y Herzegovina');
INSERT INTO `paises` VALUES('BW', 'Botsuana');
INSERT INTO `paises` VALUES('BV', 'Isla Bouvet');
INSERT INTO `paises` VALUES('BR', 'Brasil');
INSERT INTO `paises` VALUES('BN', 'Brunéi');
INSERT INTO `paises` VALUES('BG', 'Bulgaria');
INSERT INTO `paises` VALUES('BF', 'Burkina Faso');
INSERT INTO `paises` VALUES('BI', 'Burundi');
INSERT INTO `paises` VALUES('CV', 'Cabo Verde');
INSERT INTO `paises` VALUES('KY', 'Islas Caimán');
INSERT INTO `paises` VALUES('KH', 'Camboya');
INSERT INTO `paises` VALUES('CM', 'Camerún');
INSERT INTO `paises` VALUES('CA', 'Canadá');
INSERT INTO `paises` VALUES('CF', 'República Centroafricana');
INSERT INTO `paises` VALUES('TD', 'Chad');
INSERT INTO `paises` VALUES('CZ', 'República Checa');
INSERT INTO `paises` VALUES('CL', 'Chile');
INSERT INTO `paises` VALUES('CN', 'China');
INSERT INTO `paises` VALUES('CY', 'Chipre');
INSERT INTO `paises` VALUES('CX', 'Isla de Navidad');
INSERT INTO `paises` VALUES('VA', 'Ciudad del Vaticano');
INSERT INTO `paises` VALUES('CC', 'Islas Cocos');
INSERT INTO `paises` VALUES('CO', 'Colombia');
INSERT INTO `paises` VALUES('KM', 'Comoras');
INSERT INTO `paises` VALUES('CD', 'República Democrática del Congo');
INSERT INTO `paises` VALUES('CG', 'Congo');
INSERT INTO `paises` VALUES('CK', 'Islas Cook');
INSERT INTO `paises` VALUES('KP', 'Corea del Norte');
INSERT INTO `paises` VALUES('KR', 'Corea del Sur');
INSERT INTO `paises` VALUES('CI', 'Costa de Marfil');
INSERT INTO `paises` VALUES('CR', 'Costa Rica');
INSERT INTO `paises` VALUES('HR', 'Croacia');
INSERT INTO `paises` VALUES('CU', 'Cuba');
INSERT INTO `paises` VALUES('DK', 'Dinamarca');
INSERT INTO `paises` VALUES('DM', 'Dominica');
INSERT INTO `paises` VALUES('DO', 'República Dominicana');
INSERT INTO `paises` VALUES('EC', 'Ecuador');
INSERT INTO `paises` VALUES('EG', 'Egipto');
INSERT INTO `paises` VALUES('SV', 'El Salvador');
INSERT INTO `paises` VALUES('AE', 'Emiratos Árabes Unidos');
INSERT INTO `paises` VALUES('ER', 'Eritrea');
INSERT INTO `paises` VALUES('SK', 'Eslovaquia');
INSERT INTO `paises` VALUES('SI', 'Eslovenia');
INSERT INTO `paises` VALUES('ES', 'España');
INSERT INTO `paises` VALUES('UM', 'Islas ultramarinas de Estados Unidos');
INSERT INTO `paises` VALUES('US', 'Estados Unidos');
INSERT INTO `paises` VALUES('EE', 'Estonia');
INSERT INTO `paises` VALUES('ET', 'Etiopía');
INSERT INTO `paises` VALUES('FO', 'Islas Feroe');
INSERT INTO `paises` VALUES('PH', 'Filipinas');
INSERT INTO `paises` VALUES('FI', 'Finlandia');
INSERT INTO `paises` VALUES('FJ', 'Fiyi');
INSERT INTO `paises` VALUES('FR', 'Francia');
INSERT INTO `paises` VALUES('GA', 'Gabón');
INSERT INTO `paises` VALUES('GM', 'Gambia');
INSERT INTO `paises` VALUES('GE', 'Georgia');
INSERT INTO `paises` VALUES('GS', 'Islas Georgias del Sur y Sandwich del Sur');
INSERT INTO `paises` VALUES('GH', 'Ghana');
INSERT INTO `paises` VALUES('GI', 'Gibraltar');
INSERT INTO `paises` VALUES('GD', 'Granada');
INSERT INTO `paises` VALUES('GR', 'Grecia');
INSERT INTO `paises` VALUES('GL', 'Groenlandia');
INSERT INTO `paises` VALUES('GP', 'Guadalupe');
INSERT INTO `paises` VALUES('GU', 'Guam');
INSERT INTO `paises` VALUES('GT', 'Guatemala');
INSERT INTO `paises` VALUES('GF', 'Guayana Francesa');
INSERT INTO `paises` VALUES('GN', 'Guinea');
INSERT INTO `paises` VALUES('GQ', 'Guinea Ecuatorial');
INSERT INTO `paises` VALUES('GW', 'Guinea-Bissau');
INSERT INTO `paises` VALUES('GY', 'Guyana');
INSERT INTO `paises` VALUES('HT', 'Haití');
INSERT INTO `paises` VALUES('HM', 'Islas Heard y McDonald');
INSERT INTO `paises` VALUES('HN', 'Honduras');
INSERT INTO `paises` VALUES('HK', 'Hong Kong');
INSERT INTO `paises` VALUES('HU', 'Hungría');
INSERT INTO `paises` VALUES('IN', 'India');
INSERT INTO `paises` VALUES('ID', 'Indonesia');
INSERT INTO `paises` VALUES('IR', 'Irán');
INSERT INTO `paises` VALUES('IQ', 'Iraq');
INSERT INTO `paises` VALUES('IE', 'Irlanda');
INSERT INTO `paises` VALUES('IS', 'Islandia');
INSERT INTO `paises` VALUES('IL', 'Israel');
INSERT INTO `paises` VALUES('IT', 'Italia');
INSERT INTO `paises` VALUES('JM', 'Jamaica');
INSERT INTO `paises` VALUES('JP', 'Japón');
INSERT INTO `paises` VALUES('JO', 'Jordania');
INSERT INTO `paises` VALUES('KZ', 'Kazajstán');
INSERT INTO `paises` VALUES('KE', 'Kenia');
INSERT INTO `paises` VALUES('KG', 'Kirguistán');
INSERT INTO `paises` VALUES('KI', 'Kiribati');
INSERT INTO `paises` VALUES('KW', 'Kuwait');
INSERT INTO `paises` VALUES('LA', 'Laos');
INSERT INTO `paises` VALUES('LS', 'Lesotho');
INSERT INTO `paises` VALUES('LV', 'Letonia');
INSERT INTO `paises` VALUES('LB', 'Líbano');
INSERT INTO `paises` VALUES('LR', 'Liberia');
INSERT INTO `paises` VALUES('LY', 'Libia');
INSERT INTO `paises` VALUES('LI', 'Liechtenstein');
INSERT INTO `paises` VALUES('LT', 'Lituania');
INSERT INTO `paises` VALUES('LU', 'Luxemburgo');
INSERT INTO `paises` VALUES('MO', 'Macao');
INSERT INTO `paises` VALUES('MK', 'ARY Macedonia');
INSERT INTO `paises` VALUES('MG', 'Madagascar');
INSERT INTO `paises` VALUES('MY', 'Malasia');
INSERT INTO `paises` VALUES('MW', 'Malawi');
INSERT INTO `paises` VALUES('MV', 'Maldivas');
INSERT INTO `paises` VALUES('ML', 'Malí');
INSERT INTO `paises` VALUES('MT', 'Malta');
INSERT INTO `paises` VALUES('FK', 'Islas Malvinas');
INSERT INTO `paises` VALUES('MP', 'Islas Marianas del Norte');
INSERT INTO `paises` VALUES('MA', 'Marruecos');
INSERT INTO `paises` VALUES('MH', 'Islas Marshall');
INSERT INTO `paises` VALUES('MQ', 'Martinica');
INSERT INTO `paises` VALUES('MU', 'Mauricio');
INSERT INTO `paises` VALUES('MR', 'Mauritania');
INSERT INTO `paises` VALUES('YT', 'Mayotte');
INSERT INTO `paises` VALUES('MX', 'México');
INSERT INTO `paises` VALUES('FM', 'Micronesia');
INSERT INTO `paises` VALUES('MD', 'Moldavia');
INSERT INTO `paises` VALUES('MC', 'Mónaco');
INSERT INTO `paises` VALUES('MN', 'Mongolia');
INSERT INTO `paises` VALUES('MS', 'Montserrat');
INSERT INTO `paises` VALUES('MZ', 'Mozambique');
INSERT INTO `paises` VALUES('MM', 'Myanmar');
INSERT INTO `paises` VALUES('NA', 'Namibia');
INSERT INTO `paises` VALUES('NR', 'Nauru');
INSERT INTO `paises` VALUES('NP', 'Nepal');
INSERT INTO `paises` VALUES('NI', 'Nicaragua');
INSERT INTO `paises` VALUES('NE', 'Níger');
INSERT INTO `paises` VALUES('NG', 'Nigeria');
INSERT INTO `paises` VALUES('NU', 'Niue');
INSERT INTO `paises` VALUES('NF', 'Isla Norfolk');
INSERT INTO `paises` VALUES('NO', 'Noruega');
INSERT INTO `paises` VALUES('NC', 'Nueva Caledonia');
INSERT INTO `paises` VALUES('NZ', 'Nueva Zelanda');
INSERT INTO `paises` VALUES('OM', 'Omán');
INSERT INTO `paises` VALUES('NL', 'Países Bajos');
INSERT INTO `paises` VALUES('PK', 'Pakistán');
INSERT INTO `paises` VALUES('PW', 'Palau');
INSERT INTO `paises` VALUES('PS', 'Palestina');
INSERT INTO `paises` VALUES('PA', 'Panamá');
INSERT INTO `paises` VALUES('PG', 'Papúa Nueva Guinea');
INSERT INTO `paises` VALUES('PY', 'Paraguay');
INSERT INTO `paises` VALUES('PE', 'Perú');
INSERT INTO `paises` VALUES('PN', 'Islas Pitcairn');
INSERT INTO `paises` VALUES('PF', 'Polinesia Francesa');
INSERT INTO `paises` VALUES('PL', 'Polonia');
INSERT INTO `paises` VALUES('PT', 'Portugal');
INSERT INTO `paises` VALUES('PR', 'Puerto Rico');
INSERT INTO `paises` VALUES('QA', 'Qatar');
INSERT INTO `paises` VALUES('GB', 'Reino Unido');
INSERT INTO `paises` VALUES('RE', 'Reunión');
INSERT INTO `paises` VALUES('RW', 'Ruanda');
INSERT INTO `paises` VALUES('RO', 'Rumania');
INSERT INTO `paises` VALUES('RU', 'Rusia');
INSERT INTO `paises` VALUES('EH', 'Sahara Occidental');
INSERT INTO `paises` VALUES('SB', 'Islas Salomón');
INSERT INTO `paises` VALUES('WS', 'Samoa');
INSERT INTO `paises` VALUES('AS', 'Samoa Americana');
INSERT INTO `paises` VALUES('KN', 'San Cristóbal y Nevis');
INSERT INTO `paises` VALUES('SM', 'San Marino');
INSERT INTO `paises` VALUES('PM', 'San Pedro y Miquelón');
INSERT INTO `paises` VALUES('VC', 'San Vicente y las Granadinas');
INSERT INTO `paises` VALUES('SH', 'Santa Helena');
INSERT INTO `paises` VALUES('LC', 'Santa Lucía');
INSERT INTO `paises` VALUES('ST', 'Santo Tomé y Príncipe');
INSERT INTO `paises` VALUES('SN', 'Senegal');
INSERT INTO `paises` VALUES('CS', 'Serbia y Montenegro');
INSERT INTO `paises` VALUES('SC', 'Seychelles');
INSERT INTO `paises` VALUES('SL', 'Sierra Leona');
INSERT INTO `paises` VALUES('SG', 'Singapur');
INSERT INTO `paises` VALUES('SY', 'Siria');
INSERT INTO `paises` VALUES('SO', 'Somalia');
INSERT INTO `paises` VALUES('LK', 'Sri Lanka');
INSERT INTO `paises` VALUES('SZ', 'Suazilandia');
INSERT INTO `paises` VALUES('ZA', 'Sudáfrica');
INSERT INTO `paises` VALUES('SD', 'Sudán');
INSERT INTO `paises` VALUES('SE', 'Suecia');
INSERT INTO `paises` VALUES('CH', 'Suiza');
INSERT INTO `paises` VALUES('SR', 'Surinam');
INSERT INTO `paises` VALUES('SJ', 'Svalbard y Jan Mayen');
INSERT INTO `paises` VALUES('TH', 'Tailandia');
INSERT INTO `paises` VALUES('TW', 'Taiwán');
INSERT INTO `paises` VALUES('TZ', 'Tanzania');
INSERT INTO `paises` VALUES('TJ', 'Tayikistán');
INSERT INTO `paises` VALUES('IO', 'Territorio Británico del Océano Índico');
INSERT INTO `paises` VALUES('TF', 'Territorios Australes Franceses');
INSERT INTO `paises` VALUES('TL', 'Timor Oriental');
INSERT INTO `paises` VALUES('TG', 'Togo');
INSERT INTO `paises` VALUES('TK', 'Tokelau');
INSERT INTO `paises` VALUES('TO', 'Tonga');
INSERT INTO `paises` VALUES('TT', 'Trinidad y Tobago');
INSERT INTO `paises` VALUES('TN', 'Túnez');
INSERT INTO `paises` VALUES('TC', 'Islas Turcas y Caicos');
INSERT INTO `paises` VALUES('TM', 'Turkmenistán');
INSERT INTO `paises` VALUES('TR', 'Turquía');
INSERT INTO `paises` VALUES('TV', 'Tuvalu');
INSERT INTO `paises` VALUES('UA', 'Ucrania');
INSERT INTO `paises` VALUES('UG', 'Uganda');
INSERT INTO `paises` VALUES('UY', 'Uruguay');
INSERT INTO `paises` VALUES('UZ', 'Uzbekistán');
INSERT INTO `paises` VALUES('VU', 'Vanuatu');
INSERT INTO `paises` VALUES('VE', 'Venezuela');
INSERT INTO `paises` VALUES('VN', 'Vietnam');
INSERT INTO `paises` VALUES('VG', 'Islas Vírgenes Británicas');
INSERT INTO `paises` VALUES('VI', 'Islas Vírgenes de los Estados Unidos');
INSERT INTO `paises` VALUES('WF', 'Wallis y Futuna');
INSERT INTO `paises` VALUES('YE', 'Yemen');
INSERT INTO `paises` VALUES('DJ', 'Yibuti');
INSERT INTO `paises` VALUES('ZM', 'Zambia');
INSERT INTO `paises` VALUES('ZW', 'Zimbabue');