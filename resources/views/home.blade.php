<x-layout>
    <main class="py-10">
        <h1 class="text-center">
            Veja seus hábitos ganharem vida
        </h1> 
        @auth
            @dd(auth()->user())
            <p>
                Bem-Vindo(a), {{ auth()->user()->name }}
            </p>
        @endauth
    </main>

</x-layout>