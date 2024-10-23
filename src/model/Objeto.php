<?php

    require_once "../src/model/Database.php";
    
    class Objeto extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
        function getAllObjetos() {
            
            $sql = $this -> db->prepare('SELECT o.RegistroNº, o.Imagen, o.Nombre, o.Titulo,
                                                    a.Nombre as Autor,
                                                    u.Nombre as Ubicacion,
                                                    d.descripcion as Datacion 
                                                FROM Objetos o
                                                LEFT JOIN Autors a ON o.AutorID = a.AutorID
                                                LEFT JOIN Ubicaciones u ON o.UbicacionActualID = u.UbicacionID 
                                                LEFT JOIN Datacion d ON o.DatacionID = d.id');

                                                // WHERE o.RegistroNº LIKE %'
                                                //. $q .'% OR o.Imagen LIKE %'
                                                //. $q .'% OR o.Nombre LIKE %'
                                                // . $q .'% OR o.Titulo LIKE %'
                                                // . $q .'% OR a.Nombre LIKE % '
                                                // . $q .'% OR u.Nombre LIKE % '
                                                // . $q .'% OR d.descripcion
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
        function afegirBensObj() {
            
                                            $sql = $this -> db->prepare('SELECT o.RegistroNº, o.Imagen, o.Nombre, o.Titulo,
                                            a.Nombre as Autor,
                                            u.Nombre as Ubicacion,
                                            d.descripcion as Datacion 
                                                FROM Objetos o
                                                LEFT JOIN Autors a ON o.AutorID = a.AutorID
                                                LEFT JOIN Ubicaciones u ON o.UbicacionActualID = u.UbicacionID 
                                                LEFT JOIN Datacion d ON o.DatacionID = d.id');

                                                // WHERE o.RegistroNº LIKE %'
                                                //. $q .'% OR o.Imagen LIKE %'
                                                //. $q .'% OR o.Nombre LIKE %'
                                                // . $q .'% OR o.Titulo LIKE %'
                                                // . $q .'% OR a.Nombre LIKE % '
                                                // . $q .'% OR u.Nombre LIKE % '
                                                // . $q .'% OR d.descripcion            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }

        function fitxesMostrar($id){
            $sql = $this -> db->prepare('SELECT 
            o.RegistroNº,
            o.Imagen,
            o.Nombre,
            o.Titulo,
            o.ColeccionProcedencia,
            o.Altura,
            o.Anchura,
            o.Profundidad,
            o.NumeroEjemplares,
            o.FechaRegistro,
            o.FechaIngreso,
            o.FuenteIngreso,
            o.FechaBaja,
            o.PersonaAutorizadaBaja,
            o.LugarEjecucion,
            o.LugarProcedencia,
            o.NumeroTiraje,
            o.OtrosNrosIdentificacion,
            o.ValoracionEconomica,
            o.Bibliografia,
            o.Descripcion,
            o.HistoriaObjeto,
            a.Nombre as AutorNombre,
            c.valor as ClasificacionGenerica,
            m.valor as MaterialNombre,
            t.valor as TecnicaNombre,
            u.Nombre as UbicacionNombre,
            e.valor as EstadoConservacionNombre,
            mu.Nombre as MuseoNombre,
            d.descripcion as DatacionDescripcion,
            b.valor as BajaValor,
            cb.valor as CausaBajaValor,
            fi.valor as FormaIngresoValor
        FROM Objetos o
        LEFT JOIN Autors a ON o.AutorID = a.AutorID
        LEFT JOIN Classificacion c ON o.ClasificacionGenericaID = c.id
        LEFT JOIN Material m ON o.MaterialID = m.id
        LEFT JOIN Tecnica t ON o.TecnicaID = t.id
        LEFT JOIN Ubicaciones u ON o.UbicacionActualID = u.UbicacionID
        LEFT JOIN EstadoConservacion e ON o.EstadoConservacionID = e.id
        LEFT JOIN Museos mu ON o.MuseoID = mu.MuseoID
        LEFT JOIN Datacion d ON o.DatacionID = d.id
        LEFT JOIN Baja b ON o.BajaID = b.id
        LEFT JOIN CausaBaja cb ON o.CausaBajaID = cb.id
        LEFT JOIN FormaIngreso fi ON o.FormaIngresoID = fi.id
        WHERE o.ObjetoID = :id');

            $sql->bindParam(':id', $id, PDO::PARAM_INT);

            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }