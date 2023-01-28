<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <div class="footer-company">
                <div class="logo">
                    <img src="assets/img/logo/logo.svg" alt="">
                </div>

                <p class="footer-company__copyright">
                    Copyright 2023. Formulas.org
                </p>

                <p class="footer-company__text">
                    Все права защищены
                </p>

                <div class="social-icons footer-social-icons">
                    <a href="https://t.me/Olegg_z" class="telegram-footer">
                        <img src="{{asset( 'storage/images/icons/telegram.svg' )}}" alt="telegram">
                    </a>

                    <a href="https://t.me/Olegg_z" class="whatsapp-footer">
                        <img src="{{asset( 'storage/images/icons/whatsapp.svg' )}}" alt="whatsapp">
                    </a>
                </div>
            </div>
            
            <div class="footer-contacts">
                <h4 class="footer-contacts__title">
                    Контакты
                </h4>

                <a href="tel:+7 977 966 1409" class="footer-contacts__inf">
                    +7 977 966 1409
                </a>

                <p class="footer-contacts__inf">
                    г.Москва Школа Дмитровский
                </p>

                <a href="mailto:formulas@awesome.com" class="footer-contacts__inf">
                    formulas@awesome.com
                </a>
            </div>

            <div class="footer-nav">
                <h4 class="footer-nav__title">
                    Навигация
                </h4>

                <ul class="footer-nav__list">
                    <li>
                        <a href="{{ route('page.index') }}" class="footer-nav__list__item">
                            Главная
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('page.all') }}" class="footer-nav__list__item">
                            Все формулы
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('page.favorites')}}" class="footer-nav__list__item">
                            Избранное
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Modal Window start -->
<div class="register-modal-window">
    
</div>