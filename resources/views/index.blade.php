<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  @include('elem.head')

    <body>

       @include('component.header')

        <h2>MAIN</h2>
        <ul>
          <li><a href="localhost:8000/odd">Visualizza una lista di numeri</a></li>
        </ul>

        @include('component.footer')


    </body>
</html>
