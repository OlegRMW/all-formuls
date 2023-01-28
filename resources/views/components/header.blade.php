<nav class="navbar-top">
    <div class="container">
        <div class="navbar-row">
            <div class="logo">
                <a href="{{ route('page.index') }}">
                    <img src="{{ asset('storage/images/logo/logo.svg')}}" alt="Formulas">
                </a>
            </div>

            <ul class="navbar-list">
                <li>
                    <a class="navbar-list__item" href="{{ route('page.all') }}">
                        Все формулы
                    </a>
                </li>
              
               
               @if(session('status')==True)
               <li>
                    <a href="{{ route('page.favorites')}}" class="navbar-list__item">
                        Избранное
                    </a>
                </li>
               @endif               
            </ul>

            <div class="login-group">
                <div class="sing-in__btn">
                    <a href="{{ route('page.auth')}}" class="navbar-list__item">
                    Войти                   
                </div>

                <div class="register__btn">
                    <a href="{{ route('page.reg')}}" class="navbar-list__item">
                    Зарегистрироваться
                </div>
            </div>
        </div>
    </div>
</nav>