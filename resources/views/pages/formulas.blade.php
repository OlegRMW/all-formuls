<x-layout>

    <body>
        <x-slot:title>
            Список формул
            </x-slot>
            <!-- Navbar start -->

            <!-- Navbar end -->

            <!-- Main start -->
            <main class="main">
                <!-- Section formulas start -->
                <section class="formulas section-padding">
                    <div class="container">
                        <h1 class="section__title text-center formulas-title">
                            Формулы
                        </h1>

                        <div class="formulas-cards">
                            @foreach ($cards as $card)
                                <x-card :card="$card" />
                            @endforeach
                        </div>
                </section>
                <!-- Section formulas end -->
            </main>
            <!-- Main end -->

            <!-- Footer start -->

            <!-- Footer end -->
            {{ $cards->links() }}
</x-layout>
</body>

</html>
