<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('elem.head')
  </head>

    <body>
       <header>
         @include('component.header')
       </header>

       <main>

         <h3>{{$arr_name}}</h3>
         <ul>

           @foreach ($arrnum_disp as $num)
             <li> {{$num}} </li>
           @endforeach

         </ul>

       </main>

       <footer>
           @include('component.footer')
       </footer>

    </body>
</html>
