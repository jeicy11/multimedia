<h2>
[F2 - P2]
Verificación de Datos Académicos
</h2>

<p>
Kardex verifica la información académica del estudiante.
</p>

<form method="POST">

    <label>Estado Académico:</label>

    <br>

    <select
        name="estado"
        required
    >

        <option value="">
            -- Seleccionar --
        </option>

        <option>Regular</option>

        <option>Con Observaciones</option>

        <option>Pendiente de Documentación</option>

    </select>

    <br><br>

    <label>Revisión de Notas:</label>

    <br>

    <input
        type="checkbox"
        name="notas"
        checked
    >

    Verificado

    <br><br>

    <label>Revisión de Historial:</label>

    <br>

    <input
        type="checkbox"
        name="historial"
        checked
    >

    Verificado

    <br><br>

    <label>Observaciones:</label>

    <br>

    <textarea
        name="observaciones"
        rows="6"
        cols="60"
        placeholder="Escriba observaciones académicas">
    </textarea>

    <br><br>

    <button
        type="submit"
        name="Siguiente"
        style="
        padding:10px 20px;
        background:#008CBA;
        color:white;
        border:none;
        cursor:pointer;
        ">

        Enviar a Director 1

    </button>

</form>