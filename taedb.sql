CREATE TABLE elemento ( 
`cod_item` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY ,  
`fecha_ingreso` DATE NOT NULL 
) ENGINE = InnoDB

CREATE TABLE multimedia ( 
`cod_item` INT(10) NOT NULL,  
`nombre` VARCHAR(30) NOT NULL ,
`duracion` TIME NULL,
PRIMARY KEY (cod_item),
FOREIGN KEY (cod_item) REFERENCES elemento(cod_item)
) ENGINE = InnoDB

CREATE TABLE audio ( 
`cod_item` INT(10) NOT NULL,  
`tipo` VARCHAR(20) NULL,
PRIMARY KEY (cod_item),
FOREIGN KEY (cod_item) REFERENCES multimedia(cod_item)
) ENGINE = InnoDB

CREATE TABLE video ( 
`cod_item` INT(10) NOT NULL,
`locacion` VARCHAR(20) NULL,  
`fecha_creacion` DATE NULL,
PRIMARY KEY (cod_item),
FOREIGN KEY (cod_item) REFERENCES multimedia(cod_item)
) ENGINE = InnoDB

CREATE TABLE document ( 
`cod_item` INT(10) NOT NULL,  
`titulo` VARCHAR(30) NOT NULL ,
`nropag` INT(10) NULL ,
`idioma` VARCHAR(20) NULL ,
PRIMARY KEY (cod_item),
FOREIGN KEY (cod_item) REFERENCES elemento(cod_item)
) ENGINE = InnoDB

CREATE TABLE libreto ( 
`cod_item` INT(10) NOT NULL,  
`fecha_creacion` DATE NULL ,
`tipo` VARCHAR(20) NULL ,
PRIMARY KEY (cod_item),
FOREIGN KEY (cod_item) REFERENCES document(cod_item)
) ENGINE = InnoDB

CREATE TABLE revista ( 
`cod_item` INT(10) NOT NULL,  
`editorial` VARCHAR(20) NULL ,
`fecha_publicacion` DATE NULL ,
PRIMARY KEY (cod_item),
FOREIGN KEY (cod_item) REFERENCES document(cod_item)
) ENGINE = InnoDB

CREATE TABLE libro ( 
`cod_item` INT(10) NOT NULL,  
`pais` VARCHAR(20) NULL ,
`editorial` VARCHAR(20) NULL ,
`fecha_publicacion` DATE NULL ,
PRIMARY KEY (cod_item),
FOREIGN KEY (cod_item) REFERENCES document(cod_item)
) ENGINE = InnoDB

