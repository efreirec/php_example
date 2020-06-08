<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos</title>
</head>
<body>
<form method="post" action="">
    Ingrese su nombre:
    <input type="text" name="name">
    <br>
    Ingrese su RUT (sin puntos ni guión):
    <input type="number" name="rut">
    <br>
    Ingrese su direccion:
    <input type="text" name="addr">
    <br>
    Seleccione su comuna:
    <select name="comu">
      <option value="">Elija una comuna</option>
      <option value="Santiago">Santiago</option>
      <option value="Macul">Macul</option>
      <option value="Puente Alto">Puente Alto</option>
      <option value="Maipu">Maipu</option>
      <option value="Quilicura">Quilicura</option>
      <option value="Las Condes">Las Condes</option>
    </select>
    <br>
    Ingrese su correo:
    <input type="text" name="email">
    <br>
    Seleccione sus intereses:
    <input type="checkbox" name="info">Informatica 
    <input type="checkbox" name="auto">Automoviles
    <input type="checkbox" name="depo">Deportes
    <input type="checkbox" name="cine">Cine
    <br>
    Ingrese su sexo:
    <input type="radio" name="sexo" value="Masculino">Masculino
    <input type="radio" name="sexo" value="Femenino">Femenino
    <input type="radio" name="sexo" value="Otro">Otro
    <br>
    Ingrese su estado civil:
    <input type="radio" name="eciv" value="Soltero(a)">Soltero(a)
    <input type="radio" name="eciv" value="Casado(a)">Casado(a)
    <input type="radio" name="eciv" value="Viudo(a)">Viudo(a)
    <input type="radio" name="eciv" value="Divorciado(a)">Divorciado(a)
    <br>
    <br>
    <input type="submit" value="confirmar">
    <br>
    <br>
    <a href=index.php> Volver al inicio</a>
    <br>
    <br>
  </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "El formulario fue enviado mediante: ";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    if (!empty($_REQUEST['name'])) {
        echo "El nombre ingresado es: ";
        echo $_REQUEST['name'];
    } else {
        echo "No ingresó nombre";
    }
    echo "<br>";
    if (!empty($_REQUEST['rut'])) {
        echo "El RUT ingresado es: ";
        echo $_REQUEST['rut'];
    } else {
        echo "No ingresó RUT";
    }
    echo "<br>";
    if (!empty($_REQUEST['addr'])) {
        echo "La dirección ingresada es: ";
        echo $_REQUEST['addr'];
    } else {
        echo "No ingresó dirección";
    }
    echo "<br>";
    if (!empty($_REQUEST['comu'])) {
        echo "La comuna seleccionada es: ";
        echo $_REQUEST['comu'];
    } else {
        echo "No seleccionó comuna";
    }
    echo "<br>";
    if (!empty($_REQUEST['email'])) {
        echo "El correo electrónico ingresado es: ";
        echo $_REQUEST['email'];
    } else {
        echo "No ingresó correo electrónico";
    }
    echo "<br>";
    if (isset($_REQUEST['info']) or isset($_REQUEST['auto']) or isset($_REQUEST['depo']) or isset($_REQUEST['cine'])) {
        echo "Sus intereses son: ";
        if (isset($_REQUEST['info'])) {
            echo "Informatica ";
        } if (isset($_REQUEST['auto'])) {
            echo "Automóviles ";
        } if (isset($_REQUEST['depo'])) {
            echo "Deportes ";
        } if (isset($_REQUEST['cine'])) {
            echo "Cine";
        }
    } else {
        echo "No seleccionó intereses";
    }
    echo "<br>";
    if (isset($_REQUEST['sexo'])) {
        echo "Su sexo es: ";
        echo $_REQUEST['sexo'];
    } else {
        echo "No seleccionó sexo";
    }
    echo "<br>";
    if (isset($_REQUEST['eciv'])) {
        echo "Su estado civil es: ";
        echo $_REQUEST['eciv'];
    } else {
        echo "No seleccionó estado civil";
    }
    echo "<br>";
    }
    
    ?>
</body>
</html>
