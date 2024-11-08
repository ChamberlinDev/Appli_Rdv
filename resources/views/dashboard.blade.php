<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-primary-800 primary:text-primary-200 leading-tight">
            {{ __('Espace Medecin') }}
        </h1>
    </x-slot>

   @include('medecins.layout')
</x-app-layout>

