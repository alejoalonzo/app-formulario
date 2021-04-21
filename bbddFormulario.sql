-- si existe que la borre
DROP DATABASE IF EXISTS bbddFormulario;

-- creo la bbdd
CREATE DATABASE bbddFormulario;

use bbddFormulario;


-- creo la tabla con los campos
CREATE TABLE bbddFormulario.usuarios ( id INT NOT NULL AUTO_INCREMENT ,  
                                        nombre    VARCHAR(100) NOT NULL , 
                                        apellidos VARCHAR(100) NOT NULL , 
                                        email     VARCHAR(100) NOT NULL ,  
                                        telefono  INT(12) NOT NULL ,
                                        direcion  VARCHAR(400) NOT NULL ,    
                                        PRIMARY KEY  (id)) ENGINE = InnoDB;