<h2>
[F1 - P2]
Validación de Requisitos
</h2>

<p>
Kardex revisa prerequisitos y estado académico.
</p>

<form method="POST">

    <label>Estado de Requisitos:</label>

    <br>

    <select name="estado">

        <option>Aprobado</option>
        <option>Observado</option>

    </select>

    <br><br>

    <label>Observaciones:</label>

    <br>

    <textarea
        name="observaciones"
        rows="5"
        cols="50">
    </textarea>

    <br><br>

    <button type="submit" name="Siguiente">
        Enviar a Director 1
    </button>

</form>