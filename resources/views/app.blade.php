<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>
<body class="font-sans">
    <div id="app">
        <div class="container px-8">
            <header class="py-6 mb-8">
                <h1 class="text-3xl">Ricardo</h1>
            </header>
            <main class="flex">
                <aside class="w-1/5 pt-8">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5>
                        <ul>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/" exact>Logo</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/colors">Colors</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/typography">Typography</router-link>
                            </li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">Doodles</h5>
                        <ul>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/mascot">Mascot</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/illustrations">Illustrations</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/loaders-and-animations">Loaders & Animations</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/wallpapers">Wallpapers</router-link>
                            </li>
                        </ul>
                    </section>
                    
                </aside>
                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
    <script src={{ asset('js/app.js') }}></script>
</body>
</html>
