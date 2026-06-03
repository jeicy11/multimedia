<h2>
[F2 - P5]
Pago por Emisión de Certificado
</h2>

<p>
Caja registra el pago correspondiente al trámite.
</p>

<form method="POST">

    <label>Monto a Cancelar (Bs.):</label>

    <br>

    <input
        type="number"
        name="monto"
        value="25"
        required
        style="width:200px;"
    >

    <br><br>

    <label>Método de Pago:</label>

    <br>

    <select
        name="metodo"
        required
    >

        <option value="">
            -- Seleccionar --
        </option>

        <option>Efectivo</option>

        <option>QR</option>

        <option>Transferencia Bancaria</option>

        <option>Tarjeta</option>

    </select>

    <br><br>

    <label>Número de Recibo:</label>

    <br>

    <input
        type="text"
        name="recibo"
        required
        placeholder="REC-2026-001"
        style="width:300px;"
    >

    <br><br>

    <label>Observaciones:</label>

    <br>

    <textarea
        name="observaciones"
        rows="5"
        cols="60"
        placeholder="Detalle adicional del pago">
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

        Confirmar Pago

    </button>

</form>