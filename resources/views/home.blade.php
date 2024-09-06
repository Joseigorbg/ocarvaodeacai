<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carvão de Açaí</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-[#668146] text-white font-sans">

    <!-- Header -->
    <header class="bg-gray-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4 md:px-0">
            <a href="index.html">
                <img src="images/LOGO.png" alt="logo starset" class="w-20 md:w-24">
            </a>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="menu-button text-white text-2xl">☰</button>
            </div>
            <!-- Nav Menu -->
            <nav class="nav-menu hidden md:flex space-x-6">
                <a href="inicio.html" class="hover:text-primary">Início</a>
                <a href="produtos.html" class="hover:text-primary">Produtos</a>
                <a href="sobre.html" class="hover:text-primary">Sobre</a>
                <a href="privacidade.html" class="hover:text-primary">Privacidade</a>
            </nav>
            <a href="https://wa.me/5596981102560" target="_blank" class="hidden md:block">
                <button class="bg-green-700 hover:bg-buttonHoverBg text-white py-2 px-4 rounded">Contato</button>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Section: Topo do Site -->
        <section class="text-center py-16">
            <h1 class="text-4xl font-bold text-primary mb-4">CARVÃO <span class="text-white">SUSTENTÁVEL</span></h1>
            <p class="text-lg text-white max-w-2xl mx-auto mb-8">Produzimos carvão de forma sustentável, reduzindo o dióxido de carbono e ajudando no combate ao efeito estufa.</p>
            <a href="https://wa.me/5596981102560" target="_blank">
                <button class="bg-green-700 hover:bg-buttonHoverBg text-white py-2 px-6 rounded">Entre em Contato</button>
            </a>
        </section>

        <!-- Section: Especialidades -->
        <section class="py-12">
            <h2 class="text-3xl font-bold text-center text-primary mb-8">NOSSAS <span class="text-white">ESPECIALIDADES</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Box 1 -->
                <div class="text-center p-6 bg-white shadow-lg rounded">
                    <i class="bi bi-tree text-5xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Carvão Ecológico</h3>
                    <p class="text-gray-700">Produção ecologicamente correta, sem toxinas.</p>
                </div>

                <!-- Box 2 -->
                <div class="text-center p-6 bg-white shadow-lg rounded">
                    <i class="bi bi-fire text-5xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Benefícios</h3>
                    <p class="text-gray-700">Carvão sustentável, eficiente e emite menos poluentes.</p>
                </div>

                <!-- Box 3 -->
                <div class="text-center p-6 bg-white shadow-lg rounded">
                    <i class="bi bi-cash-coin text-5xl text-primary mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Impacto Econômico</h3>
                    <p class="text-gray-700">Redução do desmatamento e geração de empregos.</p>
                </div>
            </div>
        </section>

        <!-- Section: Vídeo -->
        <section class="py-12">
            <h2 class="text-3xl font-bold text-center text-primary mb-8">Assista ao Nosso Vídeo</h2>
            <div class="w-full h-64 md:h-96">
                <iframe class="w-full h-full rounded shadow-lg" src="https://www.youtube.com/embed/Vp60wmCT2tI" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <!-- Section: Sobre -->
        <section class="py-12">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1">
                    <img src="images/imagem.png" alt="Carvão" class="w-full h-auto object-cover rounded shadow-lg">
                </div>
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-primary mb-4">A <span class="text-white">CARVÃO DE AÇAÍ</span> NÃO VENDE CARVÃO</h2>
                    <p class="text-lg text-white mb-4">Proporcionamos momentos únicos para você e quem você ama.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/carvao_acai/">
                            <button class="text-3xl text-primary"><i class="bi bi-instagram"></i></button>
                        </a>
                        <a href="https://www.youtube.com/@Carv%C3%A3odea%C3%A7a%C3%AD">
                            <button class="text-3xl text-primary"><i class="bi bi-youtube"></i></button>
                        </a>
                        <a href="https://www.linkedin.com/in/carv%C3%A3o-de-a%C3%A7a%C3%AD-3758b9300/">
                            <button class="text-3xl text-primary"><i class="bi bi-linkedin"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Parceiros -->
        <section class="py-12">
            <h2 class="text-3xl font-bold text-center text-primary mb-8">PARCEIROS</h2>
            <div class="relative overflow-hidden w-full bg-white">
                <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                    <img src="images/LOGOS/AMAPATEC.png" alt="Parceiro 1" class="w-full h-28 object-cover rounded shadow-lg">
                    <img src="images/LOGOS/tucujuvalley-logo.png" alt="Parceiro 2" class="w-full h-28 object-cover rounded shadow-lg">
                    <img src="images/LOGOS/Sebrae.svg.png" alt="Parceiro 3" class="w-full h-28 object-cover rounded shadow-lg">
                    <img src="images/LOGOS/starset_brand_kzl2k24-04.png" alt="Parceiro 4" class="w-full h-28 object-cover rounded shadow-lg">
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <img src="images/LOGO.png" alt="Carvão de Açaí Logo" class="mx-auto w-20 md:w-24 mb-4">
            <p>Carvão de Açaí &copy; 2024. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="{{ asset('js/home/carrosel.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
