@extends('adminlte::page')

@section('title', 'create')
  

@section('content_header')
    <h1>Dashboard ventas</h1>
@stop

@section('content')
    <h1>bienvenido a la pagina para crear cursos</h1>
    <form action="{{route('asistencia.store')}}" method="POST">
        
        @csrf

        <label for="">
            trabajador_id: 
            <br>
            <input type="text" name="trabajador_id" value="{{old('trabajador_id')}}">
        </label>

        @error('trabajador_id')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            estado: 
            <br>
            <textarea rows="5" name="estado">{{old('estado')}}</textarea>
        </label>

        @error('estado')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            fecha: 
            <br>
            <input type="date" name="fecha" value="{{old('fecha')}}">
        </label>

        @error('fecha')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <button type="submit">Enviar Formulario</button>
    </form>
    <body class=" flex items-center justify-center " style="background: #f0f1f3; ">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <div class="">
          <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
              <div class="max-w-md mx-auto">
                
                <div class="divide-y divide-gray-200">
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="flex flex-col">
                      <label class="leading-loose">Trabajador id</label>
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
                          <input type="date" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="25/02/2020">
                          
                        </div>
                      </div>
                      
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
    
@endsection