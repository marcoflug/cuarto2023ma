<html>
    <head>
        <title>UTA</title>
        <meta charset="UTF-8">
        <title>UTA ESTUDIANTES</title>
        <link rel="stylesheet" type="text/css" href="jquery/themes/gray/easyui.css">
        <link rel="stylesheet" type="text/css" href="jquery/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="jquery/themes/color.css">
        <script type="text/javascript" src="jquery/jquery.min.js"></script>
        <script type="text/javascript" src="jquery/jquery.easyui.min.js"></script>
        
    </head>

    <body><!–
        
    <table id="dg" title="Agenda" class="easyui-datagrid" style="width:700px;height:250px"
            url="models/cargar.php"
            toolbar="#toolbar"
            rownumbers="true"fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="NOM_EST" width="50">NOMBRE</th>
                <th field="TEL_EST" width="50">TELEFONO</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Agregar</a> 
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="reportes()">Reporte</a>
       <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="buscar()">Buscar</a>
        <input name="busqueda" id="bus" type="text" placeholder="cedula">
    </div>
    <br>
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3>Informacion</h3><br>
            <div style="margin-bottom:10px">
                <input id="nombre" name="NOM_EST" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="TEL_EST" class="easyui-textbox" required="false" label="Telefono:" style="width:100%">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>
    <script type="text/javascript">
        var url;

        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Nuevo');
            $('#fm').form('clear');
            url = 'models/guardar.php';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Editar Estudiante');
                $('#fm').form('load',row);
                url = 'models/editar.php?id='+row.id;
            }
        }
        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                iframe: false,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirmar','Estas seguro que quieres eliminar?',function(r){
                    if (r){
                        $.post('models/borrar.php',{CED_EST:row.CED_EST},function(result){
                                $('#dg').datagrid('reload');    // reload the user data
                        },'json');
                    }
                });
            }
        }
    </script>
     ––>
    </body>
</html>