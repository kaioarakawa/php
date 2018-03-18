<?php include_once "src/partials/_head.php"; ?>
<?php include_once "src/partials/_header.php"; ?>
<body>
<section id="as" class="col-md-12">
    


    <form method="GET" action=/src/editar.php>
        <div class="container">
            <div class="form-group row">
                <label for="Nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Nome" name="Nome" required />
                    </div>
            </div>
            <div class="form-group row">
                <label for="preço" class="col-sm-2 col-form-label">Preço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="preço" name="preço" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$ ', pos: ''})" required />
                    </div>
            </div>
            <div class="form-group row">
                <label for="CodigodeBarras" class="col-sm-2 col-form-label">Codigo de Barras</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="codigodebarras" name="codigodebarras" required >
                    </div>
            </div>
            <div class="form-group row">
                <label for="quantidade" class="col-sm-2 col-form-label">Quantidade</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="quantidade" name="quantidade" required >
                    </div>
            </div>
            <div class="form-group row">
                <label for="Lote" class="col-sm-2 col-form-label">Lote</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lote" name="lote" onkeyup="this.value=this.value.toUpperCase()" required >  
                    </div>
            </div>
            <div class="form-group row">
                <label for="Validade" class="col-sm-2 col-form-label">Validade</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="validade" name="validade"  required >
                    </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                
                </div>
            </div>
        </div>
        </form>        
</section>
</body>
<?php include_once "src/partials/_footer.php"; ?>
</html>
