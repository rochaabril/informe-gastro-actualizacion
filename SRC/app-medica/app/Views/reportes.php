<?php include('header.php'); ?>

<style>
    /* Contenedor principal para centrar la tabla debajo del header */
    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        margin-top: 20px; /* Espacio entre el header y la tabla */
    }

    .container {
        width: 222%;
        max-width: 1081px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border: 1px solid #ddd;
        text-align: center;
        margin: auto; /* Centra horizontalmente */
    }

    h2 {
        color: #007bbd;
        margin-bottom: 43px;
    }

    form {
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        gap: 10px;
        flex-direction: row;
        align-items: center;
    }

    /* Estilo para los inputs y botones */
    input[type="date"], input[type="text"], button {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    button {
        background-color: #007bbd;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #005f99;
    }

    /* Estilización de la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #007bbd;
        color: white;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Estilo para la lupa */

    /* Estilización de la caja de búsqueda */
.search-container {
    position: relative;
    display: flex;
    align-items: center;
    width: 19%;
}

input[type="text"] {
    padding: 8px 30px 8px 10px; /* Ajuste para dar espacio al icono */
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    width: 81%; /* Hace que el input ocupe todo el espacio disponible */
}

/* Estilo para el icono */
.search-icon {
    position: absolute;
    right: 10px; /* Posiciona el icono a la derecha */
    color: #007bbd;
    font-size: 20px; /* Tamaño adecuado del icono */
    cursor: pointer;
}
    /* Paginador */
    .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.pagination button {
    background-color: #007bbd;
    color: white;
    border: none;
    padding: 10px 15px;
    margin: 0 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background 0.3s;
}

.pagination button:hover {
    background-color: #005f8a;
}

.pagination span {
    font-size: 16px;
    font-weight: bold;
}
td button {
    background-color: #007bbd;
    border: none;
    color: white;
    padding: 6px 8px;
    margin-right: 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

td button:hover {
    background-color: #005f99;
}

.material-icons {
    vertical-align: middle;
}
.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltip-text {
    visibility: hidden;
    width: 160px;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 8px;
    border-radius: 6px;
    font-size: 16px;
    position: absolute;
    z-index: 1;
    bottom: 125%; /* Muestra el tooltip arriba del botón */
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip:hover .tooltip-text {
    visibility: visible;
    opacity: 1;
}
.pagination button:disabled {
    background-color: #007bbda8;
    cursor: not-allowed;
    opacity: 0.7;
}
/* Estilos para el fondo oscuro del modal */
#modal-editar {
    display: none; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 999;
    padding: 20px 0; 
    box-sizing: border-box; 
    display: flex; 
    justify-content: center; 
    align-items: flex-start; 
}

/* Estilo del contenido del modal */
#modal-editar .modal-content {
    background-color: white;
    padding: 18px;
    border-radius: 15px;
    width: 59%;
    max-height: 86vh;
    overflow-y: auto;
    overflow-x: hidden; 
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    text-align: left;
    margin-top: 5vh; 
    margin-bottom: 5vh;
    box-sizing: border-box; 
}
/* Encabezado del modal */
#modal-editar h3 {
    margin-top: 0;
    color: #007bbd;
    font-size: 20px;
    text-align: justify;
}
#modal-editar .titulos {
    color: #007bbd;
    width: 100%;
    text-align: center;
}
/* Inputs del formulario */
#modal-editar input {
    width: 12rem;
    padding: 10px;
    /* margin-top: 5px; */
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
}
#modal-editar select {
    width: 13.5rem;
    padding: 10px;
    /* margin-top: 5px; */
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
}
#modal-editar textarea {
    width: 45rem;
    max-width:45rem;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
}
/* Botones del modal */
#modal-editar button {
    padding: 10px 15px;
    margin-right: 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    transition: background 0.3s ease;
}

#modal-editar button[type="submit"] {
    background-color: #007bbd;
    color: white;
}

#modal-editar button[type="submit"]:hover {
    background-color: #005f8a;
}

#modal-editar button[type="button"] {
    background-color: #ff5a5a;
}

#modal-editar button[type="button"]:hover {
    background-color: #ff5a5ab5;
}
.grupointputs {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    gap: 3rem;
}
.grupotexarea {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
}
.intputs {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    flex-wrap: nowrap;

}
.datos {
    display:flex;
    flex-direction: column;
    align-items: flex-start;
}
.modal-close {
    display: flex;
    width: 100%;
    flex-direction: column;
}
.close {
    text-align: end;
    color: #007bbd;
    font-size: x-large;
    cursor: pointer;
}
.alert {
        padding: 15px;
        margin-top: 20px;
        border-radius: 8px;
        text-align: center;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .alert.success {
        background-color: #d4edda;
        color: #155724;
    }

    .alert.error {
        background-color: #f8d7da;
        color: #721c24;
    }

    .alert.hidden {
        display: none;
    }
    .spin {
    animation: spin 1s linear infinite;
    display: inline-block;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
#close-alert {
    margin-left: 10px;
    font-size: 18px;
}
</style>


<div id="mensaje-alerta" class="alert hidden">
    <span id="close-alert" style="float:right; cursor:pointer; font-weight: bold;">&times;</span>
    <span id="alert-text"></span>
    </div>
<div class="content">
    <div class="container">
        <h2>Reportes</h2>

        <!-- Formulario para seleccionar el rango de fechas -->
        <form id="filterForm">
            <div class="search-container">
                <!-- <label for="nombre">Nombre:</label> -->
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">
                <span class="material-icons search-icon" id="search-icon" >search</span>
            </div>
            <div class="search-container">
                
                <input type="text" name="cobertura" id="cobertura" placeholder="Ingrese cobertura">
                <span class="material-icons search-icon" id="search-icon" >search</span>
            </div>
            <div>
                <label for="fecha_desde">Desde:</label>
                <input type="date" name="fecha_desde" id="fecha_desde">

                <label for="fecha_hasta">Hasta:</label>
                <input type="date" name="fecha_hasta" id="fecha_hasta">

                <button type="submit">Filtrar</button>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Fecha</th>
                    <th>Mail</th>
                    <th>Tipo</th>
                    <th>Cobertura</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="4">Cargando datos...</td></tr>
            </tbody>
        </table>
        <!-- Paginación -->
        <div class="pagination">
            <button id="prevPage"  disabled>Anterior</button>
            <span id="pageNumber">1</span>
            <button id="nextPage" disabled>Siguiente</button>
        </div>
        <div>
            <button>Descargar Reportes</button>
        </div>
    </div>
</div>
<!-- Modal para editar reporte -->
<div id="modal-editar">
    <div class="modal-content">
        <div class="modal-close">
            <span class="close" onclick="cerrarModal()">&times;</span>
        </div>
            <h3>Editar Reporte</h3>
            <form id="formEditarReporte" style="display: flex;flex-direction: column;align-items: stretch;">
        <div class="datos">
               <div class="titulos">
                  <h4>Datos del Paciente</h4>
               </div>
               
              <div class="grupointputs">
                <input type="hidden" id="edit-id">
                <div class="intputs">
                    <label for="edit-nombre">Nombre:</label>
                    <input type="text" id="edit-nombre" required>
                </div>
                <div class="intputs">
                 <label for="edit-fechanacimiento">Fecha de nacimiento:</label>
                 <input type="date" id="edit-fechanacimiento" required>
                </div>
                <div class="intputs">
                     <label for="edit-edad">Edad:</label>
                     <input type="number" id="edit-edad" required>
                 </div>
              </div>
              <div class="grupointputs">
                <div class="intputs">
                    <label for="edit-tipoco">Tipo de cobertura :</label>
                    <select id="cobertura" name="id_cobertura" class="required-field">
                        
                    </select>
                </div>
                <div class="intputs">
                 <label for="edit-numeroAfiliado">Número de afiliado:</label>
                 <input type="number" id="edit-numeroAfiliado" required>
                </div>
                <div class="intputs">
                     <label for="edit-mail">Mail:</label>
                     <input type="email" id="edit-mail" required>
                 </div>
              </div>
              <div class="grupointputs">
                
                <div class="intputs">
                    <label for="edit-medico">Médico que envía el estudio:</label>
                    <input type="text" id="edit-medico" required>
                </div>
                <div class="intputs">
                 <label for="edit-motivo">Motivo del estudio:</label>
                 <input type="text" id="edit-motivo" required>
                </div>
               
              </div>
              <div class="titulos">
                  <h4>Informe del estudio</h4>
             </div>
             <div class="grupotexarea">
                <div class="intputs">
                    <label for="edit-esofago">Esófago:</label>
                    <textarea type="text" name="esofago" ></textarea>
                </div>
                <div class="intputs">
                   <label for="edit-estomago">Estómago:</label>
                   <textarea type="text" name="estomago" ></textarea>
                </div>
                <div class="intputs">
                    <label for="edit-duodeno">Duodeno:</label>
                    <textarea type="text" name="duodeno" ></textarea>
                </div>
                <div class="intputs">
                   <label for="edit-informe">Informe:</label>
                   <textarea type="text" name="informe" ></textarea>
                </div>
                <div class="intputs">
                   <label for="edit-conclusion">Conclusión:</label>
                   <textarea type="text" name="conclusion" ></textarea>
                </div>
              </div>
              <div class="grupointputs">
                <div class="intputs">
                    <label for="edit-terapeutica">¿Se efectuó terapéutica?:</label>
                    <select name="terapeutico" id="edit-terapeutica">
                        <option value="NO">NO</option>
                        <option value="SI">SI</option>
                    </select>
                </div>
                <div class="intputs">
                 <label for="edit-cual">¿Cuál?:</label>
                 <input type="text" id="edit-cual" required>
                </div>
                
                
              </div>
              <div class="grupointputs">
                <div class="intputs">
                    <label for="edit-biopsia">¿Se efectuó biopsia?:</label>
                    <select name="biopsia" id="edit-biopsia" >
                        <option value="NO">NO</option>
                        <option value="SI">SI</option>
                    </select>
                </div>
                <div class="intputs">
                 <label for="edit-frascos">Cantidad de frascos:</label>
                 <input type="number" id="edit-frascos" required>
                </div>
                
                
              </div>
        </div>
        <div style="display: flex; justify-content: flex-end;">
            <button type="button" onclick="cerrarModal()">Cancelar</button>
            <button type="submit">Guardar</button>
        </div>
        </form>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {
    fetchInformes();

    // Eventos para la búsqueda por nombre
    document.getElementById("search-icon").addEventListener("click", function () {
        filtrarTabla();
    });

    document.getElementById("nombre").addEventListener("keyup", function () {
        filtrarTabla();
    });

    // Evento para el botón de filtrar por fecha
    document.getElementById("filterForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Evita recargar la página
        filtrarTabla();
    });

    // Paginación
    document.getElementById("prevPage").addEventListener("click", function() {
        changePage(-1);
    });

    document.getElementById("nextPage").addEventListener("click", function() {
        changePage(1);
    });
});

let reportes = [];
let currentPage = 1; // Cambia este valor para ajustar la cantidad de elementos por página
let totalPages = 1;
let itemsPerPage = 20;
function fetchInformes() {
    const params = new URLSearchParams({
        page: currentPage,
        per_page: itemsPerPage
    });

    fetch(`<?= site_url('informes-paginado'); ?>?${params.toString()}`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    })
    .then(response => response.json())
    .then(data => {
        reportes = data.data;
        currentPage = parseInt(data.meta.pagina_actual);
        totalPages = parseInt(data.meta.total_paginas);
        updatePagination();
    })
    .catch(error => console.error("Error en la solicitud:", error));
}

function updatePagination() {
    document.getElementById("pageNumber").textContent = currentPage;

    // Deshabilitar botones si estamos en el inicio o final
    document.getElementById("prevPage").disabled = currentPage === 1;
    document.getElementById("nextPage").disabled = currentPage === totalPages;

    mostrarPagina();
}
function mostrarPagina() {
    let tbody = document.querySelector("table tbody");
    tbody.innerHTML = "";

    if (reportes.length === 0) {
        tbody.innerHTML = `<tr><td colspan="7">No hay reportes disponibles.</td></tr>`;
        return;
    }

    reportes.forEach(reporte => {
        let fila = `
            <tr>
                <td>${reporte.nombre_paciente || ""}</td>
                <td>${reporte.dni_paciente || ""}</td>
             <td>${formatearFecha(reporte.fecha) || ""}</td>
                <td>${reporte.mail_paciente || ""}</td>
                <td>${reporte.tipo_informe || ""}</td>
                <td>${reporte.nombre_cobertura || ""}</td>
                <td>
                    <div class="tooltip">
                        <button onclick="descargarReporte('${reporte.url_archivo}')">
                            <span class="material-icons">download</span>
                        </button>
                        <div class="tooltip-text">Descargar Reporte</div>
                    </div>
                    <div class="tooltip">
                        <button onclick="reenviarReporte(${reporte.id_informe}, this)">
                            <span class="material-icons">send</span>
                        </button>
                        <div class="tooltip-text">Reenviar Reporte</div>
                    </div>
                    <div class="tooltip">
                        <button onclick='abrirModalEditar(${JSON.stringify(reporte)})'>
                            <span class="material-icons">edit</span>
                        </button>
                        <div class="tooltip-text">Editar Reporte</div>
                    </div>
                </td>
            </tr>
        `;
        tbody.innerHTML += fila;
    });
}

// Función para cambiar de página
function changePage(direction) {
    if ((direction === -1 && currentPage > 1) || (direction === 1 && currentPage < totalPages)) {
        currentPage += direction;
        fetchInformes();
    }
}

// 🔹 Función para filtrar la tabla por nombre y rango de fecha
function filtrarTabla() {
    const nombre = document.getElementById("nombre").value;
    const startDate = document.getElementById("fecha_desde").value;
    const endDate = document.getElementById("fecha_hasta").value;
    const params = new URLSearchParams({
        page: 1,
        per_page: itemsPerPage
    });
    // Armamos la URL con los parámetros (puedes usar POST si prefieres)
    
    if (nombre) params.append("nombre", nombre);
    if (startDate) params.append("fecha_desde", startDate);
    if (endDate) params.append("fecha_hasta", endDate);

    fetch(`<?= site_url('informes-paginado'); ?>?${params.toString()}`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    })
    .then(response => response.json())
    .then(data => {
        reportes = data.data;
        currentPage = parseInt(data.meta.pagina_actual);
        totalPages = parseInt(data.meta.total_paginas);
        updatePagination();
    })
    .catch(error => console.error("Error al filtrar:", error));
}

function descargarReporte(rutaRelativa) {
    const baseUrl = "<?= site_url('descargar-archivo') ?>";
    const url = `${baseUrl}?ruta=${encodeURIComponent(rutaRelativa)}`;

    fetch(url)
        .then(response => {
            if (!response.ok) {
                return response.text().then(texto => {
                    mostrarMensaje("error", "Error al descargar: " + texto);
                });
            }
            return response.blob().then(blob => {
                const urlBlob = window.URL.createObjectURL(blob);

                // Extraer carpetas intermedias
                const partes = rutaRelativa.split('/');
                const nombreDescarga = `${partes[1]}-${partes[2]}.pdf`;

                const a = document.createElement('a');
                a.href = urlBlob;
                a.download = nombreDescarga;
                document.body.appendChild(a);
                a.click();
                a.remove();
                window.URL.revokeObjectURL(urlBlob);
            });
        })
        .catch(error => {
            mostrarMensaje("error", "Ocurrió un error al intentar descargar el archivo.");
            console.error("Error:", error);
        });
}



function reenviarReporte(id, buttonElement) {
    const url = '<?= site_url('/reenviar-informe/'); ?>' + id;

    // Obtener el ícono dentro del botón
    const icon = buttonElement.querySelector('span');

    // Guardar el ícono original
    const originalIcon = icon.innerHTML;

    // Mostrar spinner y desactivar botón
    icon.innerHTML = 'autorenew'; // spinner material icon
    icon.classList.add('spin'); // aplicamos clase CSS para rotar
    buttonElement.disabled = true;

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({})
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            mostrarMensaje("success", "Se reenvió el informe correctamente");
        } else {
            mostrarMensaje("error", "Error: " + data.message);
        }
    })
    .catch(error => {
        console.error(error);
        mostrarMensaje("error", "Error al reenviar el informe");
    })
    .finally(() => {
        // Restaurar estado original
        icon.innerHTML = originalIcon;
        icon.classList.remove('spin');
        buttonElement.disabled = false;
    });
}


function abrirModalEditar(reporte) {
    console.log('REPORTE DATOS:', reporte)
    document.getElementById('edit-id').value = reporte.id_informe;
    document.getElementById('edit-nombre').value = reporte.nombre_paciente || '';
    document.getElementById('edit-mail').value = reporte.mail_paciente || '';
    
 

    document.getElementById('modal-editar').style.display = 'flex';
}

function cerrarModal() {
    document.getElementById('modal-editar').style.display = 'none';
}
document.getElementById("formEditarReporte").addEventListener("submit", function (e) {
    e.preventDefault();

    const id = document.getElementById("edit-id").value;
    const nombre = document.getElementById("edit-nombre").value;
    const mail = document.getElementById("edit-mail").value;

    const datos = {
        nombre_paciente: nombre,
        mail_paciente: mail,
    };

    fetch(`<?= site_url('informe/editar/'); ?>${id}`, {

        method: "PUT",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(datos),
    })
    .then(response => response.json())
    .then(result => {
        if (result.status === "success") {
            // alert("Reporte actualizado correctamente");
            cerrarModal();
            fetchInformes(); // Vuelve a cargar los datos
            mostrarMensaje("success", "Reporte actualizado correctamente");
        } else {
            mostrarMensaje("error", "Error al actualizar: " + result.message);
        }
    })
    .catch(error => {
        mostrarMensaje("error", "Ocurrió un error en la solicitud.");
    });
});

function mostrarMensaje(tipo, mensaje) {
    const alerta = document.getElementById('mensaje-alerta');
    const texto = document.getElementById('alert-text');
    const cerrar = document.getElementById('close-alert');

    alerta.classList.remove('hidden', 'success', 'error');
    alerta.classList.add(tipo); // success o error
    texto.innerText = mensaje;

    // Mostrar el botón de cerrar solo si es error
    cerrar.style.display = tipo === 'error' ? 'inline' : 'none';

    if (tipo === 'success') {
        setTimeout(() => {
            alerta.classList.add('hidden');
        }, 10000); // 10 segundos
    }
}

// Permitir cerrar manualmente el mensaje
document.getElementById('close-alert').addEventListener('click', () => {
    document.getElementById('mensaje-alerta').classList.add('hidden');
});

function formatearFecha(fechaOriginal) {
  if (!fechaOriginal) {
    return "";
  }

  const partesFecha = fechaOriginal.split('-');
  if (partesFecha.length !== 3) {
    console.error("Error: Formato de fecha inválido:", fechaOriginal);
    return fechaOriginal;
  }

  const anio = partesFecha[0];
  const mes = partesFecha[1];
  const dia = partesFecha[2];

  return `${dia}-${mes}-${anio}`;
}


</script>