<form class="row g-3" action="gestion_formulario1.php" method="post">
    <span>Rellena el siguiente formulario para calcular el coste total del envio:</span>
    <br>
    <br>
    <div>
        <label>Precio</label>
        <input type="text" maxlength="5" name="precio">
    </div>
    <br>
    <div>
        <label>Cantidad</label>
        <input type="text" maxlength="5" name="cantidad">
    </div>
    <br>
    <div>
        <label>Descuento</label>
        <input type="text" maxlength="5" name="descuento">
    </div>
    <br>
    <div>
        <label>IVA</label>
        <input type="text" maxlength="3" name="iva">
        <span>%</span>
    </div>
    <br>
    <div>
        <label>Metodo de envio</label>
        <select id="inputState" class="form-select" name="opciones">
            <option selected value="0">Recoger en tienda</option>
            <option value="5">Correos</option>
            <option value="8">Seur</option>
        </select>
    </div>
    <br>
    <div>
        <button type="submit">Calcular el precio total</button>
    </div>

    <?php 
       echo phpinfo();
    ?>
</form>

<script>

    
</script>