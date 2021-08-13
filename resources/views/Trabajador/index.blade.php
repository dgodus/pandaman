@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    <h1>Trabajador</h1>
@stop
    
@section('content')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
   <div class="col-md-12">
    
    <a href="{{route('trabajador.create')}}" class="btn btn-outline-success btn-rounded waves-effect btn-lg"><i class="fas fa-solid fa-clipboard-list pr-2"
     aria-hidden="true"></i>Agregar Nueva  Trabajador</a>
  

</div>
   
<div >
 
   <div class="flex-1 flex flex-col overflow-hidden  ">
       
       <main >
           <div class="container mx-auto px-4 py-0">

               <div class="flex flex-col mt-8">
                   <div >
                       <div
                           >
                           <table class="min-w-full">
                               <thead>
                                   <tr>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Nombre</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Apellidos</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Codigo</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Sexo</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           DNI</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           estado</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Edad</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Fecha de nacimiento</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Fecha de inicio</th>
                                       <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                   </tr>
                               </thead>

                               @foreach ($trabajador as $trabajador)

                               <tbody class="bg-white">
                                   <tr>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->Nombres}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->Apellidos}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->Codigo}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->sexo}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->DNI}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->estado}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->edad}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->Fnacimiento}}</div>
                                       </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$trabajador->Finicio}}</div>
                                       </td>
                                     
                                      

                                       <td
                                           class="px-6 py-4 whitespace-no-wrap text-right border-b border-red-200 text-sm leading-5 font-medium">
                                           <a href="#" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-regular fa-eye pr-2"
                                               ></i></a>
                                           <a href="#" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-solid fa-pen pr-2"
                                               ></i></a>
                                               
                                           <a href="{{ route('trabajador.destroy', $trabajador->id)}}" class="text-indigo-600 hover:text-indigo-900">Eliminar</a>
                                          
                                       </td>
                                   </tr>
                          
                               </tbody>

                               @endforeach
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </main>
   </div>
</div>

   {{-- {{ $asistencia->links() }} --}}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


{{-- {{route('asistencia.show', $asistencia)}} --}}