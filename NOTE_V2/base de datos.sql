-- Eliminar la base de datos
DROP DATABASE IF EXISTS pp_note;

-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS pp_note; 
USE pp_note;

-- Crear tabla COMPUTADORA sin la tabla ESTADO y con el nuevo atributo 'estado'
CREATE TABLE COMPUTADORA ( 
    NOMBRE VARCHAR(50) PRIMARY KEY,  
    MARCA VARCHAR(50), 
    estado VARCHAR(50)  -- Nuevo atributo estado
);

-- Crear tabla usuario
CREATE TABLE usuario ( 
    id INT PRIMARY KEY, 
    nombre VARCHAR(255), 
    email VARCHAR(100), 
    contraseña VARCHAR(100), 
    division VARCHAR(100), 
    especialidad VARCHAR(100), 
    tipo_usuario ENUM('admin', 'profesor', 'alumno') DEFAULT 'alumno',  
    fecha DATE 
);

-- Crear tabla PRESTAMO
CREATE TABLE PRESTAMO ( 
    ID_PRESTAMO INT PRIMARY KEY, 
    FECHA_PRESTAMO DATE, 
    HORA_INICIO_PRESTAMO TIME, 
    HORA_FIN_PRESTAMO TIME, 
    ESTADO_PRESTAMO VARCHAR(50), 
    ID_USUARIO INT, 
    NOMBRE_COMPUTADORA VARCHAR(50),  
    FOREIGN KEY (ID_USUARIO) REFERENCES usuario(id), 
    FOREIGN KEY (NOMBRE_COMPUTADORA) REFERENCES COMPUTADORA(NOMBRE)  
);

-- Crear tabla HISTORIAL_PRESTAMO
CREATE TABLE HISTORIAL_PRESTAMO ( 
    ID_HISTORIAL INT PRIMARY KEY, 
    ID_PRESTAMO INT, 
    DESCRIPCION VARCHAR(255), 
    FOREIGN KEY (ID_PRESTAMO) REFERENCES PRESTAMO(ID_PRESTAMO) 
);

-- Crear tabla MANTENIMIENTO
CREATE TABLE MANTENIMIENTO ( 
    ID_MANTENIMIENTO INT PRIMARY KEY, 
    DESCRIPCION VARCHAR(255), 
    FECHA_MANTENIMIENTO DATE, 
    NOMBRE_COMPUTADORA VARCHAR(50),  
    FOREIGN KEY (NOMBRE_COMPUTADORA) REFERENCES COMPUTADORA(NOMBRE)  
);

-- Seleccionar todos los registros de la tabla usuario
SELECT * FROM usuario;

SELECT * FROM COMPUTADORA;

-- INGRESAR LA INFO A LAS COMPUTADORAS
-- Insertar computadoras de A hasta Z
INSERT INTO COMPUTADORA (NOMBRE, MARCA, estado) VALUES

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION A
('A01', 'BGH', 'Disponible'),
('A02', 'BGH', 'Disponible'),
('A03', 'BGH', 'Mantenimiento'),
('A04', 'BGH', 'Disponible'),
('A05', 'BGH', 'Disponible'),
('A06', 'BGH', 'Mantenimiento'),
('A07', 'BGH', 'Disponible'),
('A08', 'BGH', 'Ocupada'),
('A09', 'BGH', 'Disponible'),
('A10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION B
('B01', 'BGH', 'Ocupada'),
('B02', 'BGH', 'Disponible'),
('B03', 'BGH', 'Disponible'),
('B04', 'BGH', 'Disponible'),
('B05', 'BGH', 'Mantenimiento'),
('B06', 'BGH', 'Disponible'),
('B07', 'BGH', 'Ocupada'),
('B08', 'BGH', 'Mantenimiento'),
('B09', 'BGH', 'Mantenimiento'),
('B10', 'BGH', 'Disponible'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION C
('C01', 'BGH', 'Disponible'),
('C02', 'BGH', 'Ocupada'),
('C03', 'BGH', 'Disponible'),
('C04', 'BGH', 'Ocupada'),
('C05', 'BGH', 'Mantenimiento'),
('C06', 'BGH', 'Disponible'),
('C07', 'BGH', 'Disponible'),
('C08', 'BGH', 'Mantenimiento'),
('C09', 'BGH', 'Ocupada'),
('C10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION D
('D01', 'BGH', 'Ocupada'),
('D02', 'BGH', 'Ocupada'),
('D03', 'BGH', 'Disponible'),
('D04', 'BGH', 'Disponible'),
('D05', 'BGH', 'Ocupada'),
('D06', 'BGH', 'Mantenimiento'),
('D07', 'BGH', 'Disponible'),
('D08', 'BGH', 'Mantenimiento'),
('D09', 'BGH', 'Ocupada'),
('D10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION E
('E01', 'BGH', 'Ocupada'),
('E02', 'BGH', 'Ocupada'),
('E03', 'BGH', 'Ocupada'),
('E04', 'BGH', 'Disponible'),
('E05', 'BGH', 'Disponible'),
('E06', 'BGH', 'Disponible'),
('E07', 'BGH', 'Disponible'),
('E08', 'BGH', 'Disponible'),
('E09', 'BGH', 'Disponible'),
('E10', 'BGH', 'Mantenimiento'), 

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION F
('F01', 'BGH', 'Disponible'),
('F02', 'BGH', 'Disponible'),
('F03', 'BGH', 'Mantenimiento'),
('F04', 'BGH', 'Mantenimiento'),
('F05', 'BGH', 'Mantenimiento'),
('F06', 'BGH', 'Disponible'),
('F07', 'BGH', 'Disponible'),
('F08', 'BGH', 'Mantenimiento'),
('F09', 'BGH', 'Ocupada'),
('F10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION G
('G01', 'BGH', 'Disponible'),
('G02', 'BGH', 'Ocupada'),
('G03', 'BGH', 'Disponible'),
('G04', 'BGH', 'Disponible'),
('G05', 'BGH', 'Mantenimiento'),
('G06', 'BGH', 'Disponible'),
('G07', 'BGH', 'Disponible'),
('G08', 'BGH', 'Mantenimiento'),
('G09', 'BGH', 'Ocupada'),
('G10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION H
('H01', 'BGH', 'Disponible'),
('H02', 'BGH', 'Ocupada'),
('H03', 'BGH', 'Disponible'),
('H04', 'BGH', 'Disponible'),
('H05', 'BGH', 'Mantenimiento'),
('H06', 'BGH', 'Disponible'),
('H07', 'BGH', 'Disponible'),
('H08', 'BGH', 'Mantenimiento'),
('H09', 'BGH', 'Ocupada'),
('H10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION I
('I01', 'BGH', 'Disponible'),
('I02', 'BGH', 'Ocupada'),
('I03', 'BGH', 'Disponible'),
('I04', 'BGH', 'Disponible'),
('I05', 'BGH', 'Mantenimiento'),
('I06', 'BGH', 'Disponible'),
('I07', 'BGH', 'Disponible'),
('I08', 'BGH', 'Mantenimiento'),
('I09', 'BGH', 'Ocupada'),
('I10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION J
('J01', 'BGH', 'Disponible'),
('J02', 'BGH', 'Ocupada'),
('J03', 'BGH', 'Disponible'),
('J04', 'BGH', 'Disponible'),
('J05', 'BGH', 'Mantenimiento'),
('J06', 'BGH', 'Disponible'),
('J07', 'BGH', 'Disponible'),
('J08', 'BGH', 'Mantenimiento'),
('J09', 'BGH', 'Ocupada'),
('J10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION K
('K01', 'BGH', 'Disponible'),
('K02', 'BGH', 'Ocupada'),
('K03', 'BGH', 'Disponible'),
('K04', 'BGH', 'Disponible'),
('K05', 'BGH', 'Mantenimiento'),
('K06', 'BGH', 'Disponible'),
('K07', 'BGH', 'Disponible'),
('K08', 'BGH', 'Mantenimiento'),
('K09', 'BGH', 'Ocupada'),
('K10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION L
('L01', 'BGH', 'Disponible'),
('L02', 'BGH', 'Ocupada'),
('L03', 'BGH', 'Disponible'),
('L04', 'BGH', 'Disponible'),
('L05', 'BGH', 'Mantenimiento'),
('L06', 'BGH', 'Disponible'),
('L07', 'BGH', 'Disponible'),
('L08', 'BGH', 'Mantenimiento'),
('L09', 'BGH', 'Ocupada'),
('L10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION M
('M01', 'BGH', 'Disponible'),
('M02', 'BGH', 'Ocupada'),
('M03', 'BGH', 'Disponible'),
('M04', 'BGH', 'Disponible'),
('M05', 'BGH', 'Mantenimiento'),
('M06', 'BGH', 'Disponible'),
('M07', 'BGH', 'Disponible'),
('M08', 'BGH', 'Mantenimiento'),
('M09', 'BGH', 'Ocupada'),
('M10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION N
('N01', 'BGH', 'Disponible'),
('N02', 'BGH', 'Ocupada'),
('N03', 'BGH', 'Disponible'),
('N04', 'BGH', 'Disponible'),
('N05', 'BGH', 'Mantenimiento'),
('N06', 'BGH', 'Disponible'),
('N07', 'BGH', 'Disponible'),
('N08', 'BGH', 'Mantenimiento'),
('N09', 'BGH', 'Ocupada'),
('N10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION O
('O01', 'BGH', 'Disponible'),
('O02', 'BGH', 'Ocupada'),
('O03', 'BGH', 'Disponible'),
('O04', 'BGH', 'Disponible'),
('O05', 'BGH', 'Mantenimiento'),
('O06', 'BGH', 'Disponible'),
('O07', 'BGH', 'Disponible'),
('O08', 'BGH', 'Mantenimiento'),
('O09', 'BGH', 'Ocupada'),
('O10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION P
('P01', 'BGH', 'Disponible'),
('P02', 'BGH', 'Ocupada'),
('P03', 'BGH', 'Disponible'),
('P04', 'BGH', 'Disponible'),
('P05', 'BGH', 'Mantenimiento'),
('P06', 'BGH', 'Disponible'),
('P07', 'BGH', 'Disponible'),
('P08', 'BGH', 'Mantenimiento'),
('P09', 'BGH', 'Ocupada'),
('P10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION Q
('Q01', 'BGH', 'Disponible'),
('Q02', 'BGH', 'Ocupada'),
('Q03', 'BGH', 'Disponible'),
('Q04', 'BGH', 'Disponible'),
('Q05', 'BGH', 'Mantenimiento'),
('Q06', 'BGH', 'Disponible'),
('Q07', 'BGH', 'Disponible'),
('Q08', 'BGH', 'Mantenimiento'),
('Q09', 'BGH', 'Ocupada'),
('Q10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION R
('R01', 'BGH', 'Disponible'),
('R02', 'BGH', 'Ocupada'),
('R03', 'BGH', 'Disponible'),
('R04', 'BGH', 'Disponible'),
('R05', 'BGH', 'Mantenimiento'),
('R06', 'BGH', 'Disponible'),
('R07', 'BGH', 'Disponible'),
('R08', 'BGH', 'Mantenimiento'),
('R09', 'BGH', 'Ocupada'),
('R10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION S
('S01', 'BGH', 'Disponible'),
('S02', 'BGH', 'Ocupada'),
('S03', 'BGH', 'Disponible'),
('S04', 'BGH', 'Disponible'),
('S05', 'BGH', 'Mantenimiento'),
('S06', 'BGH', 'Disponible'),
('S07', 'BGH', 'Disponible'),
('S08', 'BGH', 'Mantenimiento'),
('S09', 'BGH', 'Ocupada'),
('S10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION T
('T01', 'BGH', 'Disponible'),
('T02', 'BGH', 'Ocupada'),
('T03', 'BGH', 'Disponible'),
('T04', 'BGH', 'Disponible'),
('T05', 'BGH', 'Mantenimiento'),
('T06', 'BGH', 'Disponible'),
('T07', 'BGH', 'Disponible'),
('T08', 'BGH', 'Mantenimiento'),
('T09', 'BGH', 'Ocupada'),
('T10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION U
('U01', 'BGH', 'Disponible'),
('U02', 'BGH', 'Ocupada'),
('U03', 'BGH', 'Disponible'),
('U04', 'BGH', 'Disponible'),
('U05', 'BGH', 'Mantenimiento'),
('U06', 'BGH', 'Disponible'),
('U07', 'BGH', 'Disponible'),
('U08', 'BGH', 'Mantenimiento'),
('U09', 'BGH', 'Ocupada'),
('U10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION V
('V01', 'BGH', 'Disponible'),
('V02', 'BGH', 'Ocupada'),
('V03', 'BGH', 'Disponible'),
('V04', 'BGH', 'Disponible'),
('V05', 'BGH', 'Mantenimiento'),
('V06', 'BGH', 'Disponible'),
('V07', 'BGH', 'Disponible'),
('V08', 'BGH', 'Mantenimiento'),
('V09', 'BGH', 'Ocupada'),
('V10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION W
('W01', 'BGH', 'Disponible'),
('W02', 'BGH', 'Ocupada'),
('W03', 'BGH', 'Disponible'),
('W04', 'BGH', 'Disponible'),
('W05', 'BGH', 'Mantenimiento'),
('W06', 'BGH', 'Disponible'),
('W07', 'BGH', 'Disponible'),
('W08', 'BGH', 'Mantenimiento'),
('W09', 'BGH', 'Ocupada'),
('W10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION X
('X01', 'BGH', 'Disponible'),
('X02', 'BGH', 'Ocupada'),
('X03', 'BGH', 'Disponible'),
('X04', 'BGH', 'Disponible'),
('X05', 'BGH', 'Mantenimiento'),
('X06', 'BGH', 'Disponible'),
('X07', 'BGH', 'Disponible'),
('X08', 'BGH', 'Mantenimiento'),
('X09', 'BGH', 'Ocupada'),
('X10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION Y
('Y01', 'BGH', 'Disponible'),
('Y02', 'BGH', 'Ocupada'),
('Y03', 'BGH', 'Disponible'),
('Y04', 'BGH', 'Disponible'),
('Y05', 'BGH', 'Mantenimiento'),
('Y06', 'BGH', 'Disponible'),
('Y07', 'BGH', 'Disponible'),
('Y08', 'BGH', 'Mantenimiento'),
('Y09', 'BGH', 'Ocupada'),
('Y10', 'BGH', 'Mantenimiento'),

-- VALORES PARA LAS COMPUTADORAS DE LA SECCION Z
('Z01', 'BGH', 'Disponible'),
('Z02', 'BGH', 'Ocupada'),
('Z03', 'BGH', 'Disponible'),
('Z04', 'BGH', 'Disponible'),
('Z05', 'BGH', 'Mantenimiento'),
('Z06', 'BGH', 'Disponible'),
('Z07', 'BGH', 'Disponible'),
('Z08', 'BGH', 'Mantenimiento'),
('Z09', 'BGH', 'Ocupada'),
('Z10', 'BGH', 'Mantenimiento');
