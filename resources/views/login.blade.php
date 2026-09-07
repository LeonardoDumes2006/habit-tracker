<x-layout>
    <main class="py-10">
        <h1 class="">
           Faça Login
        </h1> 
        <section class="mt-4">
            <form action="/login" method="post">
                @csrf
                 
                @error('email')
                    <p class="text-red-500 text-xl mt-1">
                        {{ $message }}
                    </p>
                @enderror
                
                <input type="email" name="email" id="email" class="bg-white p-2 border-2 mb-4">
                <input type="password" name="password" id="password" class="bg-white p-2 border-2 mb-4">
                <button type="submit" class="bg-white border-2 p-2">Entrar</button>
            </form>
           
        </section>
    </main>

</x-layout>