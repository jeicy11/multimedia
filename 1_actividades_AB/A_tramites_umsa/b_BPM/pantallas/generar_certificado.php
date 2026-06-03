<h2>
[F2 - P6]
Generación Oficial del Certificado
</h2>

<p>
Kardex genera y registra el certificado académico digital.
</p>

<form method="POST">

    <label>Código del Certificado:</label>

    <br>

    <input
        type="text"
        name="codigo"
        required
        placeholder="CERT-2026-001"
        style="width:300px;"
    >

    <br><br>

    <label>Tipo de Certificado:</label>

    <br>

    <select name="tipo">

        <option>Certificado de Notas</option>
        <option>Certificado de Egreso</option>
        <option>Certificado de Conclusión</option>

    </select>

    <br><br>

    <label>Fecha de Emisión:</label>

    <br>

    <input
        type="date"
        name="fecha"
        required
    >

    <br><br>

    <label>Responsable de Emisión:</label>

    <br>

    <input
        type="text"
        name="responsable"
        value="Kardex UMSA"
        readonly
        style="width:300px;"
    >

    <br><br>

    <label>Observaciones:</label>

    <br>

    <textarea
        name="observaciones"
        rows="5"
        cols="60"
        placeholder="Observaciones adicionales del certificado">
    </textarea>

    <br><br>

    <button type="submit"
            name="Siguiente"
            style="
            padding:10px 20px;
            background:green;
            color:white;
            border:none;
            cursor:pointer;
            ">

        Generar Certificado

    </button>

</form>