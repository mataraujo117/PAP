<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueBerryBear</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bubbles.css">
    <link rel="stylesheet" href="../CSS/cardSlider.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <script src="https://kit.fontawesome.com/21ee8a4c9a.js" crossorigin="anonymous" defer></script>
    <script src="/JS/script.js" defer></script>
    <script src="/JS/cardSlider.js" defer></script>
</head>

<body>

    <!----------------------------------- Navbar ------------------------------------>
    <div class="header">
        <!--------------- logo -------------------->
        <div class="logo">
            <img src="../img/bear.png">
            <div class="logo-name">BlueBerryBear</div>
        </div>
        <!---------------- Links ---------------->
        <div class="navbar">
            <a class="decoration" href="/PHP/index.php">Home</a>
            <a class="decoration" href="/PHP/sobre.php">Sobre</a>
            <a class="decoration" href="/PHP/sign.php">Entrar</a>
        </div>
    </div>

    <!------------------------------------ section 1 ------------------------------------->
    <div class="main-area">
        <!------------------------------- Texto ------------------------------------->

        <div class="container-1">
            <div class="box-1">Invista em Criptomoedas</div>
            <div class="box-2">Investir em criptomoedas tem se destacado como uma alternativa atrativa e inovadora no
                mundo financeiro contemporâneo. As criptomoedas, como o Bitcoin e o Ethereum, representam uma mudança
                significativa no paradigma tradicional de investimentos.</div>

            <div class="btn-investir">
                <!-- <a href="/PHP/sign.php"><input type="button" value="Investir"></a> -->
                <button id="btn-investir-id">Investir</button>
            </div>
        </div>

        <!-------------------------------------- Bolhas ----------------------------------------->
        <div class="circles">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!----------------------------------- Imagem --------------------------------------------->

        <div class="container-2">
            <img src="../img/cryptoPort.svg">
        </div>
    </div>

    <!------------------------------------------ section 2 --------------------------------------->
    <div class="section-2">
        <div class="sec2-box-1">Portfólios inteligentes</div>
        <div class="sec2-box-2">Com estratégias de investimento temáticas, através de uma exposição diversificada aos
            segmentos de mercado que moldarão as nossas vidas.</div>

        <!------------------------- Slider to go through boxes ---------------------------------->
        <!-- <div class="card-slider">
            <div class="sec2-text">
                Escolha criptomoedas sólidas com fundamentos robustos. Mantenha os ativos mesmo durante períodos de
                volatilidade e correções de mercado. Esta estratégia é baseada na crença de que, ao longo do tempo, o
                valor
                das criptomoedas tende a aumentar devido à adoção mais ampla e ao desenvolvimento contínuo da tecnologia
                blockchain.
            </div>
            <div class="sec2-img">
                <img src="/img/undraw_project_complete_lwss.svg" alt="">
            </div>
        </div>  -->


        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li class="card">
                    <p> Escolha criptomoedas sólidas com fundamentos robustos. Mantenha os ativos mesmo durante períodos de
                        volatilidade e correções de mercado. Esta estratégia é baseada na crença de que, ao longo do tempo, o
                        valor
                        das criptomoedas tende a aumentar devido à adoção mais ampla e ao desenvolvimento contínuo da tecnologia
                        blockchain.</p>
                    <div class="img"><img src="/IMG/undraw_project_complete_lwss.svg" alt="img" draggable="false"></div>
                </li>
                <li class="card">
                    <p> Realize negociações de curto prazo, aproveitando as flutuações de preços ao longo do dia. Isso requer análise técnica, gráficos de preços e acompanhamento constante do mercado. Tenha em mente que o day trading exige um entendimento aprofundado do mercado e habilidades técnicas, e os riscos de perdas também são significativos.</p>
                    <div class="img"><img src="/IMG/undraw_time_management_re_tk5w.svg" alt="img" draggable="false"></div>
                </li>
                <li class="card">
                    <p> Em vez de concentrar seus investimentos em uma única criptomoeda, diversifique em várias altcoins (criptomoedas alternativas ao Bitcoin). Pesquise projetos com fundamentos sólidos e potencial de crescimento. Esteja ciente de que as altcoins podem ser mais voláteis e arriscadas do que o Bitcoin.</p>
                    <div class="img"><img src="/IMG/undraw_screen_time_vkev.svg" alt="img" draggable="false"></div>
                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>

    </div>

    <!---------------------------------------- section 3 ------------------------------------------------>

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
    <script>
        document.getElementById('btn-investir-id').addEventListener('click', () => {
            window.location.href = '/PHP/sign.php';
        });
    </script>

</body>

</html>