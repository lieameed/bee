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
    <h1>Daftar Siswa</h1>
    <p>tampil daftar siswa smth smth like that la</p>    

    <div class="a">
    <h1 class="text-red-900">fuck marvin</h1>
    </div>

    <h2>gimme reason why marvin sucks ass</h2>
    <input type="textfield" placeholder="marvin sucks ass">
    
    <main class="mx-auto space-y-2 grow">
        <div class="shadow rounded-lg p-4 bg-white">
            <h1 class="text-2xl font-bold">orang gila</h1>
            <p>kata marvin ya gitu</p>
        </div>

        <div class="bg-white shadow rounded p-10">
            <table class="w-full">
                <thead class="border-solid border-1 border-black bg-blue-500 text-white">
                    <tr class="">
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">NIS</th>
                        <th class="px-4 py-2 text-left">Kelas</th>
                        <th class="px-4 py-2 text-left">No Telepon</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                    
                <tbody class="border-solid border-1 border-black">
                    <tr class="">
                        <td class="px-4 py-2 text-left">1</td>
                        <td class="px-4 py-2 text-left">Lieameed</td>
                        <td class="px-4 py-2 text-left">1234567</td>
                        <td class="px-4 py-2 text-left">XI TKJ 2</td>
                        <td class="px-4 py-2 text-left">087826455888</td>
                        <td class="px-4 py-2">
                            <div class="flex justify-center items-center gap-4">
                                <a href="" class="text-green-500">Detail</a>
                                <a href="" class="text-blue-500">Edit</a>
                                <a href="" class="text-red-500">Hapus</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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