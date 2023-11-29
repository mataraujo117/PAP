<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueBerryBear</title>
    <link rel="stylesheet" href="/CSS/sign.css">
</head>

<body>
    <div class="container">
        <div class="box1">
            <div class="logo">
                <div class="logo-img"><img src="/img/bear.png"></div>
                <div class="logo-name">BlueBerryBear</div>
            </div>
            <hr>
            <div class="box1-text">Estamos felizes por estar a juntar-se a nós!</div>
            <div class="happy-img">
                <img src="/img/undraw_happy_news_re_tsbd.svg">
            </div>
        </div>
        <div class="box2">
            <div class="transparency-div">
                <form action="#">
                    <fieldset>
                        <!-- Nome -->
                        <label for="nome">Nome de utilizador</label>
                        <input type="text" name="nome" id="nome" class="user">
                        <!-- Email -->
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="user">
                        <!-- Senha -->
                        <label for="psw">Senha</label>
                        <input type="password" class="user" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        <!-- Telefone -->
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" class="user" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="000-000-000">
                        <!-- Condições e Termos -->
                        <label id="checkbox-lbl">
                            <input type="checkbox" required checked>Eu concordo com as condições e os termos de uso.</label>
                        <!-- Botao para enviar -->
                        <div class="btn-submit">
                            <input type="submit" value="Enviar">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>