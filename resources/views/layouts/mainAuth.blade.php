<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/small_logo.png" type="image/png" sizes="16x16">
    <title>Login | TelQ!</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'warna1' : '#AEACFF',
                'warna2' : '#726EFF'

              }
            }
          }
        }
      </script>
</head>

<body class="w-full h-full bg-[url('img/BG.svg')] bg-cover bg-center">

    <div class="min-h-screen flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        
        @yield('authContainer')

    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>