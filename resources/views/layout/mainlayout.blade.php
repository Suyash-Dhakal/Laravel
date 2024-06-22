<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suyash - @yield('title','Website')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- <div class="test"><h1 class="test">Suyash</h1></div> -->

<div id="box">
<header id="head">
<h1>Suyash Dhakal</h1>
</header>
<nav><a href="/">Home</a>  |  <a href="/About">About</a>  |  <a href="/Post">Post</a></nav>
<main>
    <article>
        @hasSection('content')
        @yield('content')
        @else
        <h2>No Content Found.</h2>
        @endif
        
         </article>
    <aside>
       @section('side-bar')
       <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/About">About</a></li>
            <li><a href="/Post">Post</a></li>
        </ul>
       @show
    </aside>
</main>
<footer id="foot">
suyash-dhakal@copyright 2024.
</footer>
</div>
   
</body>
</html>