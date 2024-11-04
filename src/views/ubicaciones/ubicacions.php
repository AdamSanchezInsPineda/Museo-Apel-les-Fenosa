<!-- vista.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Árbol de Ubicaciones</title>
    <style>
        #tree-container ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        #tree-container li {
            margin: 5px 0;
        }
        
        #tree-container div {
            display: flex;
            align-items: center;
        }

        .location-item {
            padding: 5px;
            border-radius: 3px;
            cursor: pointer;
        }

        .location-item:hover {
            background-color: #f0f0f0;
        }

        .toggle-icon {
            margin-right: 5px;
            font-size: 12px;
            width: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require "resources/components/header.php" ?>

    <div id="tree-container"></div>

    <script>
        // Aquí va el código JavaScript que proporcioné anteriormente
        
        // Añadir evento de selección
        function selectLocation(locationId) {
            // Aquí puedes añadir la lógica para cuando se selecciona una ubicación
            console.log('Ubicación seleccionada:', locationId);
        }
    </script>
</body>
</html>