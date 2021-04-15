<div id="mod" class="modal">
    <div class="modal-content">
        <input id="hidden" type="text" value="" hidden>
        <a id="edit">Editar</a>
        <a id="del">Eliminar</a>
        <a id="exit">Salir</a>
    </div>
</div>

<script>
    document.getElementById("exit").onclick = function() {
        document.getElementById("mod").style.display = "none"
    }

    document.getElementById("edit").onclick = function() {
        document.getElementById("mod").style.display = "none"
        document.getElementById("mod-edit").style.display = "block"
    }

    document.getElementById("del").onclick = function() {
        let lote = document.getElementById("hidden").value
        let xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
                var ajax = new Ajax()
                ajax.fillTable("/inventario/controlador/controlador.php?s=1")
            }
        }
        xmlhttp.open("GET", "/inventario/controlador/controlador.php?del=" + lote)
        xmlhttp.send()
    }
</script>