<!DOCTYPE html>
<?php 
include 'template.php';
?>
<html lang="pt-br">

<head>
    <link rel="icon" type="image/png" href="../assets/img/happen_simbol.png">
    <link rel="stylesheet" href="../assets/css/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Happen</title>
</head>

<body>
    <header>
        <a href="#" class="logo">Happen<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="#" onclick="toggleMenu();">Inicio</a></li>
            <li><a href="login.php" onclick="toggleMenu();">Login</a></li>
            <li><a href="#menu" onclick="toggleMenu();">Soluções</a></li>
            <li><a href="planos.php" onclick="toggleMenu();">Planos</a></li>
            <li><a href="#contact" onclick="toggleMenu();">Fale Conosco</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2>Academia Happen</h2>
            <p>Soluções para pessoas e empresas!!</p>
            <a href="cadastro.php" class="btn">Cadastre-se</a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText"><span>S</span>obre Nós</h2>
                <p>A Happen é uma startup que faz a análise e desenvolvimento de Soft e Digital Skills em organizações. 
                Nossas soluções são personalizadas para as necessidades específicas do seu time. 
                Com uma metodologia prática e mão na massa, já impactamos clientes em mais de 9 estados;
                Análise de Soft e Digital Skills é uma ferramenta que entrega um mapeamento técnico de habilidades socioemocionais dos colaboradores e times; 
                Essa é uma forma de entender as reais necessidades de capacitação de um time; 
                Essa ferramenta pode ser utilizada de diversas formas: em processos seletivos, 
                processos de capacitação internos e em conjunto com plano de carreiras;A Análise de Soft Skills entrega para gestores dados técnicos e específicos,
                ajudando times a tomarem decisões cada vez mais estratégias e alinhadas com os valores da organização; 
                Após a Análise do seu time, quer saber como desenvolver as principais habilidades para seus colaboradores? Conheça um pouco sobre as nossas capacitações;
                Nossas capacitações OnCompany acontecem em um formato que mistura conceitos, ferramentas e muita mão na massa; Os conteúdos desses momentos de aprendizagem 
                variam de acordo com a necessidade do time e sempre envolvem diferentes habilidades: resolução de problemas, inteligência emocional, pensamento ágil,
                 comunicação não violenta dentre outros; Utilizamos diversas metodologias de ensino inovadoras como Flipped Classroom e Gamificação que tornam o aprendizado muito dinâmico e prático; 
                 Não sabe qual a necessidade de capacitação do seu time? Conheça um pouco mais sobre a nossa Análise de Soft Skills;
                </p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="../assets/img/img1.jpg" </div>
                </div>
            </div>
    </section>

    <div class="menu" id="menu">
        <div class="title">
            <h2 class="titleText"><span>S</span>oluções</h2>
            <p>Conheca nossas principais Soluções.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="../assets/img/menu1.jpg">
                </div>
                <div class="text">
                    <h3>Criatividade</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../assets/img/menu2.jpg">
                </div>
                <div class="text">
                    <h3>Liderança e Gestão de Times</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../assets/img/menu4.png">
                </div>
                <div class="text">
                    <h3>Comunicação não agressiva</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../assets/img/menu5.jpg">
                </div>
                <div class="text">
                    <h3>Inteligência Emocional</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../assets/img/menu6.jpg">
                </div>
                <div class="text">
                    <h3>Gestão Agil</h3>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="#" class="btn">Ver Todos</a>
        </div>
        </section>

        <section class="expert" id="expert">
            <div class="title">
                <h2 class="titleText">Nossos <span>P</span>arceiros</h2>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/expert1.png">
                    </div>
                    <div class="text">
                        <h3>Iquine</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/expert2.jpg">
                    </div>
                    <div class="text">
                        <h3>Porto Digital</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/expert3.jpg">
                    </div>
                    <div class="text">
                        <h3>Grupo Ser Educacional</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/expert4.jpg">
                    </div>
                    <div class="text">
                        <h3>Rede Damas Educacional</h3>
                    </div>
                </div>
        </section>


        <section class="testimonials" id="testimonials">
            <div class="title white">
                <h2 class="titleText">O que nossos Clientes <span>P</span>ensam sobre Nós</h2>
                <p>Veja o que nossos clientes andam falando sobre a gente nas Redes</p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/testi1.jpg">
                    </div>
                    <div class="text">
                        <p>Foi sensacional, faria o curso mais umas 10 vezes pois clareou muita mais as minhas ideias e organizações, vai me ajudar muito na minha jornada</p>
                        <h3>Bianca Andrade</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/testi2.jpg">
                    </div>
                    <div class="text">
                        <p>Muito bom a experiência de aprender essas técnicas, irá influenciar e muito positivamente nas minhas atividades.</p>
                        <h3>Gustavo José</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="imgBx">
                        <img src="../assets/img/testi3.jpg">
                    </div>
                    <div class="text">
                        <p>O curso foi incrível, as aulas eram dinâmicas e todos participavam, se eu podesse faria novamente, amei a experiencia, pena que acabou.</p>
                        <h3>Gabriela Almeida</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="title">
                <h2 class="titleText"><span>C</span>onecte-se conosco</h2>
                <p>Receba a nossa Newsletter</p>
            </div>
            <div class="contactForm">
                <h3>Fale conosco</h3>
                <div class="inputBox">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Email">
                </div>
                <div class="inputBox">
                    <textarea placeholder="Digite sua mensagem"></textarea>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </section>

        <div class="copyrightText">
            <p>Copyright 2021 <a href="squad.php">Squad Dionisio</a>. All Right Reserved</p>
        </div>

        <script type="text/javascript">
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });

            function toggleMenu() {
                const menuToggle = document.querySelector('.menuToggle');
                const navigation = document.querySelector('.navigation');
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
        </script>
</body>

</html>