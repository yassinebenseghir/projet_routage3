<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <head> 
 
 
        <meta charset="utf-8"> 
        <title>Page d'accueil</title> 
    </head> 
    <body class="antialiased"> 
    <ul type="square"> 
            <li><a href="{{route('mot')}}">Mot du directeur</a></li> 
            <li><a href="{{route('filieres')}}">Filières</a></li> 
            <li><a href="{{route('contact')}}">Contact</a></li> 
        </ul> 
    </body> 
</html> 