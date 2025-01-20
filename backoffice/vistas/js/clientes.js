/*=============================================
TABLA CLIENTES
=============================================*/
$(document).ready(function() {
    
    // Función para recargar la tabla
    function recargarTabla() {
        $('.tablaClientes').DataTable().ajax.reload();
    }
    
    $('.tablaClientes').DataTable({
        "ajax": {
            "url": "ajax/tabla-clientes.ajax.php",
            "type": "POST",
            "dataSrc": function(json) {
                if(json.error) {
                    Swal.fire({
                        icon: "error",
                        title: "Error al cargar los datos",
                        text: json.mensaje,
                        confirmButtonText: "Cerrar"
                    });
                    return [];
                }
                return json.data;
            },
            "error": function(xhr, error, thrown) {
                console.error("Error en la petición AJAX:", error, thrown);
                Swal.fire({
                    icon: "error",
                    title: "Error al cargar los datos",
                    text: "Hubo un problema al obtener los clientes. Por favor, recarga la página.",
                    confirmButtonText: "Recargar",
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            }
        },
        "deferRender": true,
        "retrieve": true,
        "processing": true,
        "serverSide": false,
        "order": [[0, "desc"]],
        "pageLength": 10,
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
        "columnDefs": [
            {
                "targets": [4, 5, 6, 7, 8, 9, 10], // Columnas que pueden ser largas
                "className": "text-truncate",
                "render": function(data, type, row) {
                    if (type === 'display' && data && data.length > 20) {
                        return '<span title="' + data + '">' + data.substr(0, 20) + '...</span>';
                    }
                    return data;
                }
            }
        ],
        "dom": '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' +
               '<"row"<"col-sm-12"tr>>' +
               '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        },
        "responsive": true,
        "autoWidth": false
    });

    // Manejar el envío del formulario
    $('#formAgregarCliente').on('submit', function(e) {
        e.preventDefault();
        
        $.ajax({
            url: "ajax/clientes.ajax.php",
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(respuesta) {
                if(respuesta.ok) {
                    Swal.fire({
                        icon: "success",
                        title: "¡Cliente agregado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then((result) => {
                        if(result.value) {
                            $('#modalAgregarCliente').modal('hide');
                            recargarTabla();
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: respuesta.mensaje || "Hubo un error al crear el cliente",
                        confirmButtonText: "Cerrar"
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Hubo un error al procesar la solicitud",
                    confirmButtonText: "Cerrar"
                });
            }
        });
    });

    // Limpiar modal al cerrarlo
    $('#modalAgregarCliente').on('hidden.bs.modal', function () {
        $(this).find('form')[0].reset();
    });
});