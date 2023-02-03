<html>
    <head>
        <title>UTA</title>
        <meta charset="UTF-8">
        <title>UTA PRODUCTOS</title>
        <link rel="stylesheet" type="text/css" href="jquery/themes/gray/easyui.css">
        <link rel="stylesheet" type="text/css" href="jquery/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="jquery/themes/color.css">
        <script type="text/javascript" src="jquery/jquery.min.js"></script>
        <script type="text/javascript" src="jquery/jquery.easyui.min.js"></script>
        
    </head>

    <body>
    <h2>PRODUCTOS</h2>
    <br>
    <table id="dg" title="Productos" class="easyui-datagrid" style="width:700px;height:250px"
            url="models/cargarProducto.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="IDE_PRO" width="50">IDE</th>
                <th field="NOM_PRO" width="50">NOMBRE</th>
                <th field="DET_PRO" width="50">DETALLE</th>
                <th field="PRE_PRO" width="50">PRECIO</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="buscar()">Buscar</a>
        
        <input id="bus" type="text" placeholder="nombre">  
    </div>
    <script type="text/javascript">
        var url;

        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirmar','Estas seguro que quieres eliminar?',function(r){
                    if (r){
                        $.post('models/borrarProducto.php',{IDE_PRO:row.IDE_PRO},function(result){
                                $('#dg').datagrid('reload');    // reload the user data
                        },'json');
                    }
                });
            }
        }
    </script>
    <section>
        <p id="Total"></p>
    </section>
    </body>
</html>