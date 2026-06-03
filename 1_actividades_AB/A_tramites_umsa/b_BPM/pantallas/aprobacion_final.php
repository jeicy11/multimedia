<h2>
[F2 - P4]
Aprobación Final del Certificado
</h2>

<p>
Director Académico 2 realiza la validación final
para la emisión oficial del certificado.
</p>

<form method="POST">

    <label>Estado de Aprobación:</label>

    <br>

    <select
        name="estado"
        required
    >

        <option value="">
            -- Seleccionar --
        </option>

        <option>Aprobado</option>

        <option>Observado</option>

        <option>Rechazado</option>

    </select>

    <br><br>

    <label>Validación de Firmas:</label>

    <br>

    <input
        type="checkbox"
        name="firmas"
        checked
    >

    Firmas verificadas

    <br><br>

    <label>Autorización Institucional:</label>

    <br>

    <input
        type="checkbox"
        name="autorizacion"
        checked
    >

    Autorizado

    <br><br>

    <label>Observaciones:</label>

    <br>

    <textarea
        name="observaciones"
        rows="6"
        cols="60"
        placeholder="Ingrese observaciones o comentarios">
    </textarea>

    <br><br>

    <button
        type="submit"
        name="Siguiente"
        style="
        padding:10px 20px;
        background:green;
        color:white;
        border:none;
        cursor:pointer;
        ">

        Enviar a Caja

    </button>

</form>