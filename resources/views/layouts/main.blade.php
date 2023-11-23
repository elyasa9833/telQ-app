{{--
session_start();
include 'config.php';
$id_user = $_SESSION['id_user'];
$nama = $_SESSION['nama'];
$foto_profil = $_SESSION['foto_profil'];

if ($id_user == '') header('location: auth/login.html');

$query = "SELECT jawab.id_jawab, tanya.pertanyaan, tanya.gambar_tanya, user.id_user, user.fullname, user.foto_profil, jawab.jawaban, jawab.gambar_jawab FROM jawab JOIN tanya ON jawab.id_tanya = tanya.id_tanya JOIN user ON jawab.id_user = user.id_user";
if (isset($_POST['cari'])) {
	$caritanya = $_POST['caritanya'];
	if ($caritanya != '')
		$query .= " WHERE tanya.pertanyaan='$caritanya'";
}
$query .= " ORDER BY jawab.id_jawab DESC";
$tampil = mysqli_query($conn, $query);
--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/small_logo.png" type="image/png" sizes="16x16">
    <title>Home | TelQ!</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="../css/laporan.css">
    <!-- Daisy UI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


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

<body class="font-inter bg-bgc grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6">

    @include('partials.sidebar')

    <!-- Main section start -->
    <div class="md:col-span-3 lg:col-span-5">
        
        @include('partials.header')
        @yield('container')

    </div>
    <!-- Main section end -->

    @include('partials.footer')

    <script>
		// $(document).ready(function() {
		// 	$('#caritanya').keyup(function() {
		// 		var query = $(this).val();
		// 		if(query !='') {
		// 			$.ajax({
		// 				url: "autocomplete.php",
		// 				method: "POST",
		// 				data: {
		// 					query:query
		// 				},
		// 				success: function(data) {
		// 					$('.tanyaList').fadeIn();
		// 					$('.tanyaList').html(data);
		// 				}
		// 			});
		// 		}
		// 	});
		// 	$(document).on('click', 'li', function(){
		// 		$('#caritanya').val($(this).text());
		// 		$('.tanyaList').fadeOut;
		// 	})
		// })
	</script>

    <!-- Ini script Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>