<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Facebook</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <header class="center">
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div>
            <form action="login" method="post" class="form-login">
                <div class="form-login">
                    <div class="form-element">
                        <p>E-mail ou Telefone</p>
                        <input type="email">
                    <div class="form-element">
                        <p>Senha</p>
                        <input type="password">
                    </div>
                    <div class="form-element">
                        <input type="button" value="Entrar">
                    </div>
                    <div class="clear"></div>
                </div>
            </form>
            </div>
            <div class="clear"></div>
        </div>
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="img1.png" alt="logo">
            </div>

            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será</h3>
                <form action="cadastrar" class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text" name="nome" id="nome">
                    </div>

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text" name="sobrenome" id="sobrenome">
                    </div>

                    <div class="w100">
                        <input placeholder="Email" type="email" name="email" id="email">
                    </div>

                    <div class="w100">
                        <input placeholder="Senha" type="password" name="senha" id="senha">
                    </div>

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="nascimento-dia" id="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <=31;$i++) {
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" id="nascimento-mes" class="nascimento">
                            <option value="0">Junho</option>
                        </select>
                        <select name="nascimento-ano" id="nascimento-ano" class="nascimento">
                        <?php
                                for($i = 1960; $i <=2018;$i++) {
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" id="sexo">
                            <h2>Masculino</h2>
                        </div>

                        <div class="input-radio">
                            <input type="radio" name="sexo" id="sexo">
                            <h2>Ferminino</h2>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <input type="submit" value="Cadastrar">
                    </div>

                    <div class="clear"></div>
                </form>
            </div>

            <div class="clear"></div>

        </div>
    </section>

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a class="selected-lingua" href="#">Português (BR)</a>
            <hr>

            <div class="center">
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
            <a href="#">Lorem ipsum</a>
        </div>
        </div>
    </section>
</body>
</html>