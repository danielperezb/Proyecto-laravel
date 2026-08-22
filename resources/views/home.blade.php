<x-app_layout title="Página Principal">
    <!-- <div class="bg-blue-500 text-white p-4">
        <h1 class="text-2xl font-bold">Bienvenido a la página principal</h1>
    </div> -->

    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-2xl font-bold">Bienvenido a la página principal</h1>

        <x-alert type="info" class="mb-4">
            <x-slot name="title">
                titulo de la alerta
            </x-slot>
            contenido variable
        </x-alert>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Quisquam, voluptatum.
        </p>

    </div>
</x-app_layout>
