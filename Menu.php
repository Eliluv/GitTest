<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta title="Menú">
    <style>
        nav     {
            width:180px;
            background-color:#6589ff;
            font-family:Arial;font-size:0.8em;
            color:#ccc;
        }
        nav ul  {list-style:none;padding-left:0px;}
        nav li  {padding:2px 0px;border-bottom:1px solid #c3c3c3;}
        nav ul li  {padding-left:10px;}
 
        nav a   {text-decoration:none;color:#fff;}
        nav a:hover li   {background-color:#3a68ff;}
 
        .submenu {padding-left:20px;}
    </style>
</head>
<body>
<h1><center>Menú Principal</center></h1>
<?php
# definimos el array de valores para el menu y submenus
$menu=array(
    array(
        'titulo'            => 'Página inicial',
        'enlace'            => 'index1.php',
        'subcategoria'      => array(
            array(
                'id'        => 'index1a',
                'titulo'    => 'Clientes',
                'enlace'    => 'index1a.php',
            ),
            array(
                'id'        => 'index1b',
                'titulo'    => 'Proveedores',
                'enlace'    => 'index1b.php',
            ),
        ),
    ),
    array(
        'titulo'            => 'Comerciales',
        'enlace'            => 'index2.php',
        'subcategoria'      => array()
    ),
    array(
        'titulo'            => 'Listados',
        'enlace'            => '', # Esta opcion de menu no dispone de enlace
        'subcategoria'      => array(
            array(
                'id'        => 'index3a',
                'titulo'    => 'Listado de Clientes',
                'enlace'    => 'index3a.php',
            ),
            array(
                'id'        => 'index3a',
                'titulo'    => 'Listado de Proveedores',
                'enlace'    => 'index3b.php',
            ),
            array(
                'id'        => 'index3a',
                'titulo'    => 'Listado de Comerciales',
                'enlace'    => 'index3c.php',
            ),
        ),
    ),
    array(
        'titulo'            => 'Contactar',
        'enlace'            => 'index4.php',
        'subcategoria'      => array()
    )
);
 
/**
 * Funcion para mostrar los enlaces
 * Tiene que recibir el array de valores y la clase a asignar que puede ser:
 *  menu o submenu
 */
function mostrarEnlace($menu,$class)
{
    if($menu['enlace'])
    {
        echo "<div align='center'><a href='".$menu['enlace']."'></div>";
    }
 
    echo "<li class='".$class."'>";
        echo $menu['titulo'];
    echo "</li>";
 
    if($menu['enlace'])
    {
        echo "</a>";
    }
}
 
echo "<nav>";
    echo "<ul>";
    # recorremos todo el array de valores
    for($i = 0; $i < count($menu); $i++)
    {
        mostrarEnlace($menu[$i],"menu");
 
        # Si dispone de subcategorias, las mostramos
        if(count($menu[$i]["subcategoria"])>0)
        {
            for ($j=0;$j<count($menu[$i]["subcategoria"]);$j++)
            {
                mostrarEnlace($menu[$i]["subcategoria"][$j], "submenu");
            }
        }
    }
    echo "<ul>";
echo "</nav>";
?>
</body>
</html>