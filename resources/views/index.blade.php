<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <title>{{config('app.name')}}</title>
</head>
<body class="h-screen  overflow-hidden  items-center justify-center" style="background: #edf2f7;">
<div class="w-full bg-gray-800">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-indigo-600">
                Tapez le nom de l'utilisateur Github
            </h2>
            <form action="" method="get">
                <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray">
                    <input type="text" name="search" class=" hover:bg-gray-600"><button type="submit" class="text-center font-bold text-indigo-600 border-double border-4 border-indigo-600 hover:text-indigo-100">search</button>

                </h1>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @if(!empty($name))
                <a href="{{$response['html_url']?? "#"}}">
                    <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center hover:bg-gray-600">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full h-36 w-36" src="{{$response['avatar_url']?? asset('images/img_2.png')}}" alt="photo">
                        </div>
                        <div class="text-center">
                            <p class="text-xl text-white font-bold mb-2">{{$response['name']??$msg}}</p>
                            <p class="text-base text-gray-400 font-normal">{{$response['bio']??$msg}}</p>
                        </div>
                    </div>
                </a>
            @endif
        </div>
    </section>
</div>
<footer>@ {{date('Y')}} copyright</footer>
</body>
</html>

