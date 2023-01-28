<x-doctype label="Регистрация"/>
<body>

  <div class="aut-body">
    <div class="aut-block">
        <form action="{{ route('page.regist') }}" method="POST" >
            @csrf
            <div class="logo">
                <a href="">
                    <img src="{{ asset('storage/images/logo/logo.svg')}}" alt="Formulas">
                </a>
            </div>
            <p class="aut-block__text">
                Зарегистрироваться
            </p>              
                <label class="aut-inp__text" for="inp1">Придумайте никнейм</label>
                <input type="text" name="name" id="inp1" class="aut-block__inp">

                <label class="aut-inp__text" for="inp2">Придумайте пароль</label>
                <input type="password" name="password" id="inp2" class="aut-block__inp">

                <button class="aut-btn" type="submit">Отправить</button>
            </form>
    </div>
  </div>
  <x-header />
</body>
</html>

