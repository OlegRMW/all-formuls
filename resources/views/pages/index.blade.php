<x-layout>
    <body>
    <x-slot:title>
		Главная
	</x-slot>
<!-- Navbar start -->
    
<!-- Navbar end -->

<!-- Header start -->
<header class="header">
    <div class="container header-container">
        <div class="header-text">
            <h1 class="header__title">
                Formulas.org - сервис помогающий <br> найти миллионы формул!
            </h1>

            <p class="header__subtitle">
                Формулы по математике, физике, химии и не только на нашем сайте
            </p>

            <div class="social-icons header-social-icons">
                <a href="https://t.me/Olegg_z" class="telegram">
                    <img src="{{asset( 'storage/images/icons/telegram.svg' )}}" alt="telegram">
                </a>

                <a href="https://t.me/Olegg_z" class="whatsapp">
                    <img src="{{asset( 'storage/images/icons/whatsapp.svg' )}}" alt="whatsapp">
                </a>
            </div>

            <div class="header-dec">
                <img src="{{asset( 'storage/images/header-bc/header-bc.png' )}}" alt="Задний фон">
            </div>
        </div>
    </div>
</header>
<!-- Header end -->

<!-- Main start -->
<main class="main">
    <!-- Section About start -->
    <x-about />
    <!-- Section About end -->
</main>
<!-- Main end -->

<!-- Footer start -->
<!-- Footer end -->

<!-- Modal Window start -->
<div class="register-modal-window">
    
</div>

<!-- Modal Window end -->
</x-layout>
</body>
</html>