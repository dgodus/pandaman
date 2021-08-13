@extends('adminlte::page')

@section('title', 'Agregar Trabajador')

@section('content_header')
    <h1>Agregar Trabajador</h1>
@stop

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body class=" flex items-center justify-center " style="background: #f0f1f3; ">
  
  <div class="">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
        <div class="max-w-md mx-auto">
          
          <div class="divide-y divide-gray-200">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
              <div class="flex flex-col">
                <label class="leading-loose">Trabajador</label>
                <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Trabajador</label>
                <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Estado</label>
                <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
              </div>
              <div class="flex items-center space-x-4">
                <div class="flex flex-col">
                  <label class="leading-loose">Fecha</label>
                  <div class="relative focus-within:text-gray-600 text-gray-400">
                    <input type="date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="25/02/2020">
                    
                  </div>
                </div>
                <div class="flex flex-col">
                  <label class="leading-loose">End</label>
                  <div class="relative focus-within:text-gray-600 text-gray-400">
                    <input type="text" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="26/02/2020">
                    
                  </div>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="flex flex-col">
                  <label class="leading-loose">Fecha</label>
                  <div class="relative focus-within:text-gray-600 text-gray-400">
                    <input type="date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="25/02/2020">
                    
                  </div>
                </div>
                <div class="flex flex-col">
                  <label class="leading-loose">End</label>
                  <div class="relative focus-within:text-gray-600 text-gray-400">
                    <input type="text" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="26/02/2020">
                    
                  </div>
                </div>
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Event Description</label>
                <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
              </div>
            </div>
            <div class="pt-4 flex items-center space-x-4">

                <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</body>  

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop