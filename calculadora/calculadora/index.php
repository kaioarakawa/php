<?php include_once "src/partials/_head.php";?>
<?php include_once "src/partials/_header.php";?>
    
    <section class="col-md-12">
    <form method="GET" action=/calcula2.php>
        <div class="form-group row">
            <label for="Numero1" class="col-sm-2 col-form-label">Numero 1</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="Numero1" name="numero1" >
            </div>
        </div>
        <div class="form-group row">
            <label for="n2" class="col-sm-2 col-form-label">Numero 2</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="n2" name="numero2">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Operações</legend>
            <div class="col-sm-10">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="operacao" id="soma" value="+" checked>
                <label class="form-check-label" for="soma">
                    + (Somar)
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="operacao" id="sub" value="-">
                <label class="form-check-label" for="sub">
                    - (subtratir)
                </label>
                </div>
                <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="operacao" id="multi" value="*" >
                <label class="form-check-label" for="multi">
                    *(Multiplicar)
                </label>
                </div>
                    <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="operacao" id="dividir" value="/">
                    <label class="form-check-label" for="dividir">
                        /(Dividir)
                    </label>
                    </div>
            </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </form>
        </section>
</body>
</html>