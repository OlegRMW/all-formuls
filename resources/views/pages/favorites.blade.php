<x-layout>
<body>
  <x-slot:title>
		Избранное
	</x-slot>
<!-- Main start -->
<main class="main">
  <!-- Section formulas start -->
  <section class="favorites section-padding">
    <div class="container">
      <h1 class="hello-text section__title">
        Привет, {{ session('user_name') }}!
      </h1>

      <h1 class="section__title text-center formulas-title">
        Избранное
      </h1>

      <div class="formulas-cards">
        @foreach($user[0]->formuls as $favorites)
       <x-card :card="$favorites"/>
       @endforeach
    </div>
  </section>
  <!-- Section formulas end -->
</main>
<!-- Main end -->

<!-- Footer start -->

<!-- Footer end -->
</body>
</html>

</x-layout>