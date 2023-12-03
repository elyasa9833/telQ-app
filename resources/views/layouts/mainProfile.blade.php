<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/small_logo.png" type="image/png" sizes="16x16">
  <title> Profiles | TelQ!</title>
  <link rel="stylesheet" href="../css/editProfile.css">
  <link rel="stylesheet" href="../../css/editProfile.css">
  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'warna1': '#AEACFF',
                        'warna2': '#726EFF',
                        'warna2h': '#807CFF',
                        'warna3': '#36465C',
                        'warna3h': '#3A4C65',
                        'bgc': '#D9D9D9',
                        'tgc': '#626262',

                    },
                    fontFamily: {
                        inter: ['Inter']
                    }
                }
            }
        }
    </script>
</head>

<body>
    @yield('profileContainer')
</body>

</html>