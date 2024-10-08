CREATE DATABASE museu;
use museu;



-- Tabla: Museos
CREATE TABLE Museos (
    MuseoID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Fotografia TEXT
);

-- Tabla: Clasificaciones
CREATE TABLE Clasificaciones (
    ClasificacionID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
);

-- Tabla: Materiales
CREATE TABLE Materiales (
    MaterialID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
);

-- Tabla: Tecnicas
CREATE TABLE Tecnicas (
    TecnicaID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
);

-- Tabla: Autors
CREATE TABLE Autors (
    AutorID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
);

-- Tabla: EstadosConservacion
CREATE TABLE EstadosConservacion (
    EstadoConservacionID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
);

-- Tabla: Ubicaciones
CREATE TABLE Ubicaciones (
    UbicacionID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    FechaInicioUbicacion DATETIME,
    FechaFinUbicacion DATETIME,
    ComentarioUbicacion TEXT
);

-- Tabla: Objetos
CREATE TABLE Objetos (
    ObjetoID INT PRIMARY KEY,
    RegistroNº VARCHAR(6) NOT NULL UNIQUE, -- Generado por el sistema
    Imagen VARCHAR(255),
    Nombre VARCHAR(255) NOT NULL,
    ClasificacionGenericaID INT,
    ColeccionProcedencia VARCHAR(255),
    Altura DECIMAL(10,2),
    Anchura DECIMAL(10,2),
    Profundidad DECIMAL(10,2),
    MaterialID INT,
    TecnicaID INT,
    AutorID INT,
    Titulo VARCHAR(255),
    AnyInicial DATE,
    AnyFinal DATE,
    Datacion VARCHAR(255),
    UbicacionActualID INT,
    FechaRegistro DATETIME NOT NULL,
    NumeroEjemplares INT,
    FormaIngreso VARCHAR(255),
    FechaIngreso DATETIME,
    FuenteIngreso VARCHAR(255),
    Baja VARCHAR(255),
    CausaBaja VARCHAR(255),
    FechaBaja DATETIME,
    PersonaAutorizadaBaja VARCHAR(255),
    EstadoConservacionID INT,
    LugarEjecucion VARCHAR(255),
    LugarProcedencia VARCHAR(255),
    NumeroTiraje VARCHAR(255),
    OtrosNrosIdentificacion VARCHAR(255),
    ValoracionEconomica DECIMAL(10,2),
    CodigoRestauracion VARCHAR(255),
    FechaInicioRestauracion DATETIME,
    FechaFinRestauracion DATETIME,
    Bibliografia TEXT,
    Descripcion TEXT,
    HistoriaObjeto VARCHAR(255),
    MuseoID INT,

    FOREIGN KEY (ClasificacionGenericaID) REFERENCES Clasificaciones(ClasificacionID),
    FOREIGN KEY (MaterialID) REFERENCES Materiales(MaterialID),
    FOREIGN KEY (TecnicaID) REFERENCES Tecnicas(TecnicaID),
    FOREIGN KEY (AutorID) REFERENCES Autors(AutorID),
    FOREIGN KEY (UbicacionActualID) REFERENCES Ubicaciones(UbicacionID),
    FOREIGN KEY (EstadoConservacionID) REFERENCES EstadosConservacion(EstadoConservacionID),
    FOREIGN KEY (MuseoID) REFERENCES Museos(MuseoID)

);

-- Tabla: Exposiciones
CREATE TABLE Exposiciones (
    ExposicionID INT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    FechaInicio DATETIME,
    FechaFin DATETIME,
    TipoExposicion VARCHAR(255),
    LugarExposicion VARCHAR(255)
);

-- Tabla: Restauraciones
CREATE TABLE Restauraciones (
    RestauracionID INT PRIMARY KEY,
    ObjetoID INT,
    CodigoRestauracion VARCHAR(255),
    FechaInicio DATETIME,
    FechaFin DATETIME,
    ComentarioRestauracion TEXT,
    NombreRestaurador VARCHAR(255),
    
    FOREIGN KEY (ObjetoID) REFERENCES Objetos(ObjetoID)
)

-- Tabla: ObjetoExposicion
CREATE TABLE ObjetoExposicion (
    ObjetoExposicionID INT PRIMARY KEY,
    ObjetoID INT,
    ExposicionID INT,

    FOREIGN KEY (ObjetoID) REFERENCES Objetos(ObjetoID),
    FOREIGN KEY (ExposicionID) REFERENCES Exposiciones(ExposicionID)
);

--tabla usuarios
CREATE TABLE Usuarios (
    UsuarioID INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Contraseña  VARCHAR(255),
    Rol enum('admin','usuario','invitado')
);
INSERT  INTO Usuarios (UsuarioID, Nombre, Contraseña, Rol) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'usuario', '1234', 'usuario'),
(3, 'invitado', '1234', 'invitado')
;



INSERT INTO Ubicaciones (UbicacionID, Nombre, FechaInicioUbicacion, FechaFinUbicacion, ComentarioUbicacion) VALUES
(1, 'Sala 1', '2020-01-01', '2025-01-01', 'Sala principal del museo'),
(2, 'Sala 2', '2020-06-01', '2025-06-01', 'Sala de arte moderno'),
(3, 'Almacén 1', '2020-01-01', NULL, 'Almacén de objetos en restauración'),
(4, 'Sala 3', '2020-09-01', '2025-09-01', 'Sala de arte contemporáneo'),
(5, 'Depósito', '2020-01-01', NULL, 'Depósito de objetos en reserva');

INSERT INTO Autors (AutorID, Nombre) VALUES
(1, 'Pablo Picasso'),
(2, 'Salvador Dalí'),
(3, 'Joan Miró'),
(4, 'Francisco Goya'),
(5, 'El Greco');

INSERT INTO Objetos (
    ObjetoID, RegistroNº, Nombre, ClasificacionGenericaID, ColeccionProcedencia, 
    Altura, Anchura, Profundidad, MaterialID, TecnicaID, AutorID, Titulo, 
    AnyInicial, AnyFinal, Datacion, UbicacionActualID, FechaRegistro, NumeroEjemplares, 
    FormaIngreso, FechaIngreso, FuenteIngreso, Baja, CausaBaja, FechaBaja, 
    PersonaAutorizadaBaja, EstadoConservacionID, LugarEjecucion, LugarProcedencia, 
    NumeroTiraje, OtrosNrosIdentificacion, ValoracionEconomica, CodigoRestauracion, 
    FechaInicioRestauracion, FechaFinRestauracion, Bibliografia, Descripcion, 
    HistoriaObjeto, MuseoID
) VALUES
(
    4, '001004', 'Las Meninas', NULL, 'Colección Goya', 
    3.20, 6.50, 0.50, NULL, NULL, 4, 'Las Meninas', 
    NULL, NULL, 'Óleo sobre lienzo', 1, '2020-01-01', 1, 
    'Donación', '2020-01-01', 'Fundación Goya', NULL, NULL, NULL, 
    NULL, NULL, 'Madrid', 'España', NULL, NULL, 800000.00, NULL, 
    NULL, NULL, 'Bibliografía de Las Meninas', 'Descripción de Las Meninas', 
    'Historia de Las Meninas', NULL
),
(
    5, '001005', 'El caballero con la mano en el pecho', NULL, 'Colección El Greco', 
    1.80, 4.20, 0.50, NULL, NULL, 5, 'El caballero con la mano en el pecho', 
    NULL, NULL, 'Óleo sobre lienzo', 2, '2020-06-01', 1, 
    'Compra', '2020-06-01', 'Galería de arte antiguo', NULL, NULL, NULL, 
    NULL, NULL, 'Toledo', 'España', NULL, NULL, 300000.00, NULL, 
    NULL, NULL, 'Bibliografía de El caballero con la mano en el pecho', 
    'Descripción de El caballero con la mano en el pecho', 'Historia de El caballero con la mano en el pecho', NULL
),
(
    3, '001003', 'Las Meninas', NULL, 'Colección Goya', 
    3.20, 6.50, 0.50, NULL, NULL, 4, 'Las Meninas', 
    NULL, NULL, 'Óleo sobre lienzo', 1, '2020-01-01', 1, 
    'Donación', '2020-01-01', 'Fundación Goya', NULL, NULL, NULL, 
    NULL, NULL, 'Madrid', 'España', NULL, NULL, 800000.00, NULL, 
    NULL, NULL, 'Bibliografía de Las Meninas', 'Descripción de Las Meninas', 
    'Historia de Las Meninas', NULL
);
