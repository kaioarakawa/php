<?php include_once "src/partials/_head1.php"; ?>
<?php include_once "src/partials/_header.php"; ?>

    <body>

    <section class="col-md-12">
        <div class="container" id="asd">
            <form method="GET" action=/src/login.php>
                    <div class="form-group row">
                        <label for="Usuario" class="col-md-2 col-form-label">Usuario: </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Usuario" name="Usuario" required />
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="Senha" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="Senha" name="Senha"  required />
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        
                        </div>
                    </div>
            </form>
        </div>
        <img src="img/yakibox.png" class="img-responsive" alt="erro ao abrir">
    </section>   
    </body>
    <div class="linha">
        <hr style="height:2px; border:none; color:#000; background-color:white; margin-top: 0px; margin-bottom: 0px;"/>
    </div>
<?php include_once "src/partials/_footer.php"; ?>

</html>






