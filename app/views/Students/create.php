<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">

</head>
<body class="bg-gray-100 min-h-screen min-w-screen flex-col grow">
    <header class="bg-blue-500 text-white">
        <div class="flex justify-between container mx-auto p-4 py-6">
            <a href="/students" class="font-bold text-2xl">Sistem Sekolah</a>
            <a href="/students/create" class="text- xl bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <div class="p-4">
    <h1>Tambah Siswa</h1>
    <p>tampil daftar siswa smth smth like that la</p>    

    <div class="a">
    <h1 class="text-red-900">fuck marvin</h1>
    </div>

    <h2>gimme reason why marvin sucks ass</h2>
    <input type="textfield" placeholder="marvin sucks ass">
    
    <main class="mx-auto space-y-2 grow">
        <div class="shadow rounded-lg p-4 bg-white">
            <h1 class="text-2xl font-bold">idk anything thats happening but ok</h1>
            <p>kata marvin ya gitu</p>
        </div>

        <div class="bg-white shadow rounded-lg p-10">
            <form action="" class="">
                <div class="space-y-2">
                    <label for="name" class="block font-bold">Nama</label>
                    <input class="w-full border-solid border-1 border-gray-300 transition-all onclick:border-black transition-all px-4 py-2 rounded-lg" type="text" id="name" placeholder="isi nama kalian woi!!! jgn jadi hama" name="name">

                    <label for="NIS" class="block font-bold">NIS</label>
                    <input class="w-full border-solid border-1 border-gray-300 transition-all onclick:border-black transition-all px-4 py-2 rounded-lg" type="text" id="NIS" placeholder="isi NISSSS kalian woi!!! jgn jadi hama" NIS="NIS">

                    <label for="kelas" class="block font-bold">Password</label>
                    <input class="w-full border-solid border-1 border-gray-300 transition-all onclick:border-black px-4 py-2 rounded-lg" type="text" id="kelas" placeholder="isi kelas kalian woi!!! jgn jadi hama" kelas="kelas" >

                    <label for="phone_number" class="block font-bold">Password</label>
                    <input class="w-full border-solid border-1 border-gray-300 transition-all onclick:border-black px-4 py-2 rounded-lg" type="text" id="phone_number" placeholder="isi no telp kalian woi!!! jgn jadi hama" phone_number="phone_number">
                </div>
            </form>
        </div>

        <h1 class="p-4 text-xl font-bold shadow rounded-lg">my kagari totally</h1>
    
        <div class="flex justify-center">
        <img src="./assets/kagari.png" alt="" class="w-[420px] h-[320px] p-4 flex">
        </div>
    </main>
    </div>
    <br>


    <footer class="bg-gray-800 text-white">
        <div class="flex justify-center container mx-auto p-4 py-6">
            &copy <?= date('Y')?> Sistem Sekolah SMK Kristen Immanuel
        </div>
    </footer>

</body>
</html>