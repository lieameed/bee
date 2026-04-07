<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-blue-500 text-white">
        <div class="flex justify-between container mx-auto p-4 py-6">
            <a href="/students" class="font-bold text-2xl">Sistem Sekolah</a>
            <a href="/students/create" class="text- xl bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <div class="p-4 flex-grow">
        <main class="mx-auto space-y-2">
            <div class="shadow rounded-lg p-4 bg-white">
                <h1 class="text-2xl font-bold">Show Pokoknya</h1>
            </div>

            <div class="bg-white shadow rounded-lg p-10">
                <div class="grid grid-cols-2 gap-4">

                    <div class="space-y-2">
                        <label class="font-bold">Nama</label>
                        <input class="w-full border border-gray-300 px-4 py-2 rounded-lg" readonly>
                    </div>

                    <div class="space-y-2">
                        <label class="font-bold">NIS</label>
                        <input class="w-full border border-gray-300 px-4 py-2 rounded-lg" readonly>
                    </div>

                    <div class="space-y-2">
                        <label class="font-bold">Kelas</label>
                        <input class="w-full border border-gray-300 px-4 py-2 rounded-lg" readonly>
                    </div>

                    <div class="space-y-2">
                        <label class="font-bold">No Telp</label>
                        <input class="w-full border border-gray-300 px-4 py-2 rounded-lg" readonly>
                    </div>

                    <div class="col-span-2 flex justify-end gap-4">
                        <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                    </div>

                </div>
            </div>

        </main>
    </div>

    <footer class="bg-gray-800 text-white">
        <div class="flex justify-center container mx-auto p-4 py-6">
            &copy <?= date('Y')?> Sistem Sekolah SMK Kristen Immanuel
        </div>
    </footer>

</body>
</html>