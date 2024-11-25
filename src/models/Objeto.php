<?php
    
    class Objeto extends Database
    {
        function getObjetos($found) {
            try {
                $where = ($found == "") ? "" : " AND (o.RegistroNº LIKE '%' :found '%' OR o.Imagen LIKE '%' :found '%' OR o.Nombre LIKE '%' :found '%' OR o.Titulo LIKE '%' :found '%' OR a.Nombre LIKE '%' :found '%' OR u.Nombre LIKE '%' :found'%' OR d.descripcion LIKE '%' :found '%')";
                $sql = $this -> db->prepare("SELECT o.RegistroNº, o.Imagen, o.Nombre, o.Titulo, a.Nombre as autor, u.Nombre as ubicacion, d.descripcion FROM Objetos o LEFT JOIN Autors a ON o.AutorID = a.id LEFT JOIN UbicacionObjeto uo ON uo.ObjetoID = o.ObjetoID LEFT JOIN Ubicaciones u ON uo.UbicacionID = u.id LEFT JOIN Datacion d ON o.DatacionID = d.id WHERE o.Activo = true $where");
        
                if ($found != "") {
                    $sql->bindParam(':found', $found);
                }
        
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $result;
                
            } catch (PDOException $e) {
                return "An error occurred: " . $e->getMessage();
            }
        }
        function afegirBensObj($id) {
            
            $sql = $this -> db->prepare('SELECT o.ObjetoID, o.RegistroNº, o.Imagen, o.Nombre, o.Titulo, a.Nombre as Autor, u.Nombre as Ubicacion, d.descripcion as Datacion 
                                         FROM Objetos o LEFT JOIN Autors a ON o.AutorID = a.id 
                                         LEFT JOIN Ubicaciones u ON o.UbicacionActualID = u.id 
                                         LEFT JOIN Datacion d ON o.DatacionID = d.id 
                                         WHERE o.ObjetoID not in (SELECT oe.ObjetoID FROM ObjetoExposicion oe WHERE oe.ExposicionID = :id)');
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

        function fitxesMostrar($registroN){
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
                uo.ComentarioUbicacion,
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
                us.Nombre as UsuarioNombre,
                r.CodigoRestauracion,
                r.NombreRestaurador,
                r.ComentarioRestauracion,
                e.Nombre as ExposicionNombre,
                e.FechaInicio as FechaInicioExposicion,
                e.FechaFin as FechaFinExposicion,
                e.LugarExposicion,
                te.valor as TipoExposicionNombre,
                o.Activo
                FROM Objetos o
                LEFT JOIN Autors a ON o.AutorID = a.id
                LEFT JOIN Classificacion c ON o.ClasificacionGenericaID = c.id
                LEFT JOIN Material m ON o.MaterialID = m.id
                LEFT JOIN Tecnica t ON o.TecnicaID = t.id
                LEFT JOIN UbicacionObjeto uo ON o.ObjetoID = uo.ObjetoID
                LEFT JOIN Ubicaciones u ON uo.UbicacionID = u.id
                LEFT JOIN EstadoConservacion ec ON o.EstadoConservacionID = ec.id
                LEFT JOIN Museos mu ON o.MuseoID = mu.MuseoID
                LEFT JOIN Datacion d ON o.DatacionID = d.id
                LEFT JOIN Baja b ON o.BajaID = b.id
                LEFT JOIN CausaBaja cb ON o.CausaBajaID = cb.id
                LEFT JOIN FormaIngreso fi ON o.FormaIngresoID = fi.id
                LEFT JOIN Restauraciones r ON r.ObjetoID = o.ObjetoID
                LEFT JOIN Usuarios us ON us.UsuarioID = o.UsuarioID
                LEFT JOIN ObjetoExposicion oe ON  o.ObjetoID = oe.ObjetoID
                LEFT JOIN Exposiciones e ON oe.ExposicionID = e.ExposicionID
                LEFT JOIN TiposExposicion te  ON e.TipoExposicionID = te.id
                WHERE o.RegistroNº = :registroN AND uo.FechaFinUbicacion IS NULL');
        
            $sql->bindParam(':registroN', $registroN, PDO::PARAM_INT);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        function fitxesUpdate($registroN, $usuarioID, $imagen, $nombre, $clasificacionGenericaID, $coleccionProcedencia, $altura, $anchura, $profundidad, $materialID, $tecnicaID, $autorID, $titulo, $datacionID, $ubicacionActualID, $fechaRegistro, $numeroEjemplares, $formaIngresoID, $fechaIngreso, $fuenteIngreso, $bajaID, $causaBajaID, $fechaBaja, $personaAutorizadaBaja, $estadoConservacionID, $lugarEjecucion, $lugarProcedencia, $numeroTiraje, $otrosNrosIdentificacion, $valoracionEconomica, $bibliografia, $descripcion, $historiaObjeto, $museoID, $activo){
            
    
            $sql = $this -> db->prepare('UPDATE Objetos SET 
                    RegistroNº = ?, UsuarioID = ?, Imagen = ?, Nombre = ?, ClasificacionGenericaID = ?, ColeccionProcedencia = ?, Altura = ?, Anchura = ?, Profundidad = ?, MaterialID = ?, TecnicaID = ?, AutorID = ?, Titulo = ?, DatacionID = ?, UbicacionActualID = ?, FechaRegistro = ?, NumeroEjemplares = ?, FormaIngresoID = ?, FechaIngreso = ?, FuenteIngreso = ?, BajaID = ?, CausaBajaID = ?, FechaBaja = ?, PersonaAutorizadaBaja = ?, EstadoConservacionID = ?, LugarEjecucion = ?, LugarProcedencia = ?, NumeroTiraje = ?, OtrosNrosIdentificacion = ?, ValoracionEconomica = ?, Bibliografia = ?, Descripcion = ?, HistoriaObjeto = ?, MuseoID = ?, Activo = ? WHERE ObjetoID = ?');
            
            $sql->execute([
                $registroN, $usuarioID, $imagen, $nombre, $clasificacionGenericaID, $coleccionProcedencia, $altura, $anchura, $profundidad, $materialID, $tecnicaID, $autorID, $titulo, $datacionID, $ubicacionActualID, $fechaRegistro, $numeroEjemplares, $formaIngresoID, $fechaIngreso, $fuenteIngreso, $bajaID, $causaBajaID, $fechaBaja, $personaAutorizadaBaja, $estadoConservacionID, $lugarEjecucion, $lugarProcedencia, $numeroTiraje, $otrosNrosIdentificacion, $valoracionEconomica, $bibliografia, $descripcion, $historiaObjeto, $museoID, $activo 
            ]);
        }
        function fitxesDelete($registroN){

            $sql = $this -> db->prepare('DELETE FROM ObjetoExposicion WHERE ObjetoID = ( SELECT ObjetoID FROM Objetos WHERE RegistroNº = :registroN )');

            $sql->bindParam(':registroN', $registroN, PDO::PARAM_STR);
            
            $sql->execute();

            $sql = $this -> db->prepare('DELETE FROM Objetos WHERE RegistroNº = :registroN');

            $sql->bindParam(':registroN', $registroN, PDO::PARAM_STR);
            
            $sql->execute();
        }
        function fitxesDisable($registroN){

            $sql = $this -> db->prepare('DELETE FROM ObjetoExposicion WHERE ObjetoID = ( SELECT ObjetoID FROM Objetos WHERE RegistroNº = :registroN )');

            $sql->bindParam(':registroN', $registroN, PDO::PARAM_STR);
            
            $sql->execute();

            $sql = $this -> db->prepare('UPDATE Objetos SET Activo = 0 WHERE RegistroNº = :registroN');
            
            $sql->bindParam(':registroN', $registroN, PDO::PARAM_STR);
            
            $sql->execute();
        }

        function generarLlibre(){
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
                uo.ComentarioUbicacion,
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
                us.Nombre as UsuarioNombre,
                r.CodigoRestauracion,
                r.NombreRestaurador,
                r.ComentarioRestauracion,
                e.Nombre as ExposicionNombre,
                e.FechaInicio as FechaInicioExposicion,
                e.FechaFin as FechaFinExposicion,
                e.LugarExposicion,
                te.valor as TipoExposicionNombre,
                o.Activo
                FROM Objetos o
                LEFT JOIN Autors a ON o.AutorID = a.id
                LEFT JOIN Classificacion c ON o.ClasificacionGenericaID = c.id
                LEFT JOIN Material m ON o.MaterialID = m.id
                LEFT JOIN Tecnica t ON o.TecnicaID = t.id
                LEFT JOIN Ubicaciones u ON o.UbicacionActualID = u.id
                LEFT JOIN UbicacionObjeto uo ON  o.UbicacionActualID = uo.UbicacionID
                LEFT JOIN EstadoConservacion ec ON o.EstadoConservacionID = ec.id
                LEFT JOIN Museos mu ON o.MuseoID = mu.MuseoID
                LEFT JOIN Datacion d ON o.DatacionID = d.id
                LEFT JOIN Baja b ON o.BajaID = b.id
                LEFT JOIN CausaBaja cb ON o.CausaBajaID = cb.id
                LEFT JOIN FormaIngreso fi ON o.FormaIngresoID = fi.id
                LEFT JOIN Restauraciones r ON r.ObjetoID = o.ObjetoID
                LEFT JOIN Usuarios us ON us.UsuarioID = o.UsuarioID
                LEFT JOIN ObjetoExposicion oe ON  o.ObjetoID = oe.ObjetoID
                LEFT JOIN Exposiciones e ON oe.ExposicionID = e.ExposicionID
                LEFT JOIN TiposExposicion te  ON e.TipoExposicionID = te.id
                WHERE o.Activo = true');
        
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        
    }