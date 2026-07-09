@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-4xl">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Reportar Nueva Incidencia</h1>
        
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Línea Afectada</label>
                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">
                    <option>Línea de Ensamble A</option>
                    <option>Línea de Pintura C</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nivel de Prioridad</label>
                <div class="grid grid-cols-3 gap-4">
                    <button type="button" class="border-2 border-green-500 text-green-600 py-2 rounded-lg hover:bg-green-50">Baja</button>
                    <button type="button" class="border-2 border-yellow-500 text-yellow-600 py-2 rounded-lg hover:bg-yellow-50">Media</button>
                    <button type="button" class="border-2 border-red-500 text-red-600 py-2 rounded-lg hover:bg-red-50">Alta</button>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Descripción del Problema</label>
                <textarea rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 p-2 border" placeholder="Detalla la falla técnica..."></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-slate-800 text-white px-6 py-2 rounded-lg hover:bg-slate-700 transition">
                    Enviar Reporte
                </button>
            </div>
        </form>
    </div>
</div>
@endsection