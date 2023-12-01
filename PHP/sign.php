<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueBerryBear</title>
    <link rel="stylesheet" href="/CSS/sign.css">
    <script src="https://kit.fontawesome.com/21ee8a4c9a.js" crossorigin="anonymous" defer></script>
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
                            <input type="checkbox" required checked>Eu concordo com as <a href="#">condições e os termos de uso</a>.</label>
                        <!-- Botao para enviar -->
                        <div class="btn-submit">
                            <input type="submit" value="Enviar">
                        </div>
                    </fieldset>
                </form>
                <div class="link-login">
                    Já tens uma conta! clique para ir à página de <a href="/PHP/login.php">Login</a>.
                </div>
            </div>
        </div>
    </div>
    <div class="footerContainer">
        <!------------------------ social media icons  ----------------------------->
        <div class="socialIcon">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
        <!---------------------------- links to next pages -------------------------------->
        <div class="footerNav">
            <ul>
                <li> <a href="/PHP/index.php">Home</a></li>
                <li> <a href="/PHP/sobre.php">Sobre</a></li>
            </ul>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Criado por <span class="designer">Mateus</span></p>
        </div>
    </div>
</body>

</html>