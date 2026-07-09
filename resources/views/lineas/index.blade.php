@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Monitoreo de Líneas de Producción</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-lg border-t-4 border-green-500 p-6">
            <h2 class="text-xl font-bold text-gray-700">Línea de Ensamble A</h2>
            <p class="text-sm text-gray-500 mb-4">Supervisor: Ing. García</p>
            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-bold uppercase">Operando</span>
        </div>
    </div>
</div>
@endsection