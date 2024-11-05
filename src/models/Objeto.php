<?php
    
    class Objeto extends Database
    {
        function getAllObjetos() {
            
            $sql = $this -> db->prepare('SELECT o.RegistroNº, o.Imagen, o.Nombre, o.Titulo,
                                                    a.Nombre as Autor,
                                                    u.Nombre as Ubicacion,
                                                    d.descripcion as Datacion 
                                                FROM Objetos o
                                                LEFT JOIN Autors a ON o.AutorID = a.id
                                                LEFT JOIN Ubicaciones u ON o.UbicacionActualID = u.id 
                                                LEFT JOIN Datacion d ON o.DatacionID = d.id');

                                                // WHERE o.RegistroNº LIKE %' . :found .'% OR
                                                // o.Imagen LIKE %' . :found .'% OR 
                                                // o.Nombre LIKE %' . :found .'% OR
                                                // o.Titulo LIKE %' . $q .'% OR
                                                // a.Nombre LIKE %' . $q .'% OR
                                                // u.Nombre LIKE %' . $q .'% OR
                                                // d.descripcion LIKE %' . $q . '%
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
        function afegirBensObj($id) {
            
            $sql = $this -> db->prepare('SELECT o.ObjetoID, o.RegistroNº, o.Imagen, o.Nombre, o.Titulo, a.Nombre as Autor, u.Nombre as Ubicacion, d.descripcion as Datacion 
                                         FROM Objetos o LEFT JOIN Autors a ON o.AutorID = a.id 
                                         LEFT JOIN Ubicaciones u ON o.UbicacionActualID = u.id 
                                         LEFT JOIN Datacion d ON o.DatacionID = d.id 
                                         WHERE o.ObjetoID not in (SELECT o2.ObjetoID FROM Objetos o2 INNER JOIN ObjetoExposicion oe WHERE oe.ExposicionID = :id)');
                                         // WHERE o.RegistroNº LIKE %'
                                         //. $q .'% OR o.Imagen LIKE %'
                                         //. $q .'% OR o.Nombre LIKE %'
                                         // . $q .'% OR o.Titulo LIKE %'
                                         // . $q .'% OR a.Nombre LIKE % '
                                         // . $q .'% OR u.Nombre LIKE % '
                                         // . $q .'% OR d.descripcion    
            
            $sql->bindParam(':id', $id);

            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }

        function fitxesCreate($registroN, $usuarioID, $imagen, $nombre, $clasificacionGenericaID, $coleccionProcedencia, $altura, $anchura, $profundidad, $materialID, $tecnicaID, $autorID, $titulo, $datacionID, $ubicacionActualID, $fechaRegistro, $numeroEjemplares, $formaIngresoID, $fechaIngreso, $fuenteIngreso, $bajaID, $causaBajaID, $fechaBaja, $personaAutorizadaBaja, $estadoConservacionID, $lugarEjecucion, $lugarProcedencia, $numeroTiraje, $otrosNrosIdentificacion, $valoracionEconomica, $bibliografia, $descripcion, $historiaObjeto, $museoID, $activo){
            
            // Preparar la declaración
            $sql = $this-> db ->prepare('INSERT INTO Objetos (RegistroNº, UsuarioID, Imagen, Nombre, ClasificacionGenericaID, ColeccionProcedencia, Altura, Anchura, Profundidad, MaterialID, TecnicaID, AutorID, Titulo, DatacionID, UbicacionActualID, FechaRegistro, NumeroEjemplares, FormaIngresoID, FechaIngreso, FuenteIngreso, BajaID, CausaBajaID, FechaBaja, PersonaAutorizadaBaja, EstadoConservacionID, LugarEjecucion, LugarProcedencia, NumeroTiraje, OtrosNrosIdentificacion, ValoracionEconomica, Bibliografia, Descripcion, HistoriaObjeto, MuseoID, Activo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // Ejecutar la consulta pasando las variables en el mismo orden
            $sql->execute([
                $registroN, $usuarioID, $imagen, $nombre, $clasificacionGenericaID, $coleccionProcedencia, $altura, $anchura, $profundidad, $materialID, $tecnicaID, $autorID, $titulo, $datacionID, $ubicacionActualID, $fechaRegistro, $numeroEjemplares, $formaIngresoID, $fechaIngreso, $fuenteIngreso, $bajaID, $causaBajaID, $fechaBaja, $personaAutorizadaBaja, $estadoConservacionID, $lugarEjecucion, $lugarProcedencia, $numeroTiraje, $otrosNrosIdentificacion, $valoracionEconomica, $bibliografia, $descripcion, $historiaObjeto, $museoID, $activo
            ]);
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
            uo.FechaInicioUbicacion,
            uo.FechaFinUbicacion,
            uo.ComentarioUbicacion
            ec.valor as EstadoConservacionNombre,
            mu.Nombre as MuseoNombre,
            d.descripcion as DatacionDescripcion,
            d.any_inicial,
            d.any_final,
            b.valor as BajaValor,
            cb.valor as CausaBajaValor,
            fi.valor as FormaIngresoValor,
            r.FechaInicio as FechaInicioRestauracion,
            r.FechaFin as FechaFinRestauracion,
            r.CodigoRestauracion,
            r.NombreRestaurador,
            r.ComentarioRestauracion,
            e.Nombre as ExposicionNombre,
            e.FechaInicio as FechaInicioExposicion,
            e.FechaFin as FechaFinExposicion,
            e.LugarExposicion,
            te.valor as TipoExposicionNombre,
            u.Nombre as UsuarioNombre,
            o.Activo

        FROM Objetos o
        INNER JOIN Autors a ON o.AutorID = a.AutorID
        INNER JOIN Classificacion c ON o.ClasificacionGenericaID = c.id
        INNER JOIN Material m ON o.MaterialID = m.id
        INNER JOIN Tecnica t ON o.TecnicaID = t.id
        INNER JOIN Ubicaciones u ON o.UbicacionActualID = u.id
        INNER JOIN UbicacionObjeto uo ON  o.UbicacionActualID = uo.UbicacionID
        INNER JOIN EstadoConservacion ec ON o.EstadoConservacionID = ec.id
        INNER JOIN Museos mu ON o.MuseoID = mu.MuseoID
        INNER JOIN Datacion d ON o.DatacionID = d.id
        INNER JOIN Baja b ON o.BajaID = b.id
        INNER JOIN CausaBaja cb ON o.CausaBajaID = cb.id
        INNER JOIN FormaIngreso fi ON o.FormaIngresoID = fi.id
        INNER JOIN Restauraciones r ON r.ObjetoID = o.ObjetoID
        INNER JOIN ObjetoExposicion oe ON  o.ObjetoID = oe.ObjetoID
        INNER JOIN Exposiciones e ON  o. = e.ExposicionID = oe.ExposicionID
        INNER JOIN TipoExposicion te  ON e.TipoExposicionID = te.id
        INNER JOIN Usuarios u ON  o.UsuarioID = u.UsuarioID

        WHERE o.ObjetoID = :id');

            $sql->bindParam(':id', $id, PDO::PARAM_INT);

            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
        function fitxesUpdate($id){
            
    
            $sql = $this -> db->prepare('UPDATE Objetos SET 
                    RegistroNº = ?, 
                    UsuarioID = ?, 
                    Imagen = ?, 
                    Nombre = ?, 
                    ClasificacionGenericaID = ?, 
                    ColeccionProcedencia = ?, 
                    Altura = ?, 
                    Anchura = ?, 
                    Profundidad = ?, 
                    MaterialID = ?, 
                    TecnicaID = ?, 
                    AutorID = ?, 
                    Titulo = ?, 
                    DatacionID = ?, 
                    UbicacionActualID = ?, 
                    FechaRegistro = ?, 
                    NumeroEjemplares = ?, 
                    FormaIngresoID = ?, 
                    FechaIngreso = ?, 
                    FuenteIngreso = ?, 
                    BajaID = ?, 
                    CausaBajaID = ?, 
                    FechaBaja = ?, 
                    PersonaAutorizadaBaja = ?, 
                    EstadoConservacionID = ?, 
                    LugarEjecucion = ?, 
                    LugarProcedencia = ?, 
                    NumeroTiraje = ?, 
                    OtrosNrosIdentificacion = ?, 
                    ValoracionEconomica = ?, 
                    Bibliografia = ?, 
                    Descripcion = ?, 
                    HistoriaObjeto = ?, 
                    MuseoID = ?, 
                    Activo = ? 
                    WHERE ObjetoID = ?');
            
            $sql->execute([
                $registroN,
                $usuarioID,
                $imagen,
                $nombre,
                $clasificacionGenericaID,
                $coleccionProcedencia,
                $altura,
                $anchura,
                $profundidad,
                $materialID,
                $tecnicaID,
                $autorID,
                $titulo,
                $datacionID,
                $ubicacionActualID,
                $fechaRegistro,
                $numeroEjemplares,
                $formaIngresoID,
                $fechaIngreso,
                $fuenteIngreso,
                $bajaID,
                $causaBajaID,
                $fechaBaja,
                $personaAutorizadaBaja,
                $estadoConservacionID,
                $lugarEjecucion,
                $lugarProcedencia,
                $numeroTiraje,
                $otrosNrosIdentificacion,
                $valoracionEconomica,
                $bibliografia,
                $descripcion,
                $historiaObjeto,
                $museoID,
                $activo,
                $objetoID ]);
        }
        function fitxesDelete(){
            $sql = "DELETE FROM Objetos WHERE ObjetoID = :objetoID";

            $stmt = $db->prepare($sql);

            $stmt->bindParam(':objetoID', $objetoID, PDO::PARAM_INT);

            try {
                $stmt->execute();
                echo "Objeto eliminado con éxito";
            } catch(PDOException $e) {
                echo "Error al eliminar el objeto: " . $e->getMessage();
            }
        }
    }