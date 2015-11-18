
<div class="container">

    <form class="form-horizontal" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend>Contato</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Nome</label>
                <div class="col-md-4">
                    <input id="inputNome" name="nome" type="text" placeholder="preencha seu nome" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">E-mail</label>
                <div class="col-md-4">
                    <input id="inputEmail" name="email" type="email" placeholder="preencha seu email" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="assunto">Assunto</label>
                <div class="col-md-4">
                    <input id="inputAssunto" name="assunto" type="text" placeholder="preencha o assunto" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="inputMensagem" name="mensagem">preencha a mensagem</textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="enviar"></label>
                <div class="col-md-4">
                    <button id="buttonEnviar" name="submit" class="btn btn-primary" type="submit">enviar</button>
                </div>
            </div>

        </fieldset>
    </form>

<div class="alert-success">
    <?php
    if(isset($_POST['submit']))
    {
        echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou:<br/>";
        echo "<b>Nome: ".$_POST['nome']."</b><br/>";
        echo "<b>Email: ".$_POST['email']."</b><br/>";
        echo "<b>Assunto: ".$_POST['assunto']."</b><br/>";
        echo "<b>Mensagem: ".$_POST['mensagem']."</b><br/>";
    }
    ?>
</div>



</div> <!-- /container -->