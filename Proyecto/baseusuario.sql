CREATE  database Usuarios
go


CREATE table datos_usuario
( idUsuario smallint not null identity(1,1),
  nombre    varchar(30),
  apPaterno varchar(30),
  apMaterno varchar(30),
  telefono  char(10),
  email   varchar (40),
  edad       char(3),
  l_ogin     varchar(10),
  p_assword  varchar(32),
  PRIMARY KEY(idUsuario)
  )

insert into datos_usuario (nombre,apPaterno,apMaterno,telefono,email,edad,l_ogin,p_assword)
values ('Juan Carlos ','Peralta','Mena', '8671234567','elcharly98@live.com','21','peraltrox','123456789');   

--insert into datos_usuario (nombre,apPaterno,apMaterno,telefono,email,edad,l_ogin,p_assword)
--values ('Saul Adrian','Garcia','Aranda', '8677894452','saulGaranda@outlook.com','21','Saulelgrande','963258741');  
insert into datos_usuario (nombre,apPaterno,apMaterno,telefono,email,edad,l_ogin,p_assword)
values ('Irving ','Jimenez','morales', '8674568975','IrvingjimM@gmail.com','22','Irving777','abcd123');  
insert into datos_usuario (nombre,apPaterno,apMaterno,telefono,email,edad,l_ogin,p_assword)
values ('Ulises ','Perez','Hernandez', '8679632574','berryboy66@hotmail.com','23','BerryBoy','123yutil');  
insert into datos_usuario (nombre,apPaterno,apMaterno,telefono,email,edad,l_ogin,p_assword)
values ('Saul ','Garcia','Aranda', '8677894452','saulgaranda@outlook.com','22','Saulelgrande','963258741');

insert into datos_usuario (nombre,apPaterno,apMaterno,telefono,email,edad,l_ogin,p_assword)
values ('raul ','Gomez','perez', '8674568971','raulsssw54@gmail.com','21','elpaton','963258741');

    SELECT * from datos_usuario 
