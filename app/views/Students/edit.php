<div class="shadow rounded-lg p-4 bg-white">
    <h1 class="text-2xl font-bold">Edit Mahluk Hidup</h1>
    <p>Melakukan Perubahan</p>
</div>

<div class="bg-white shadow rounded-lg p-10">
    <form action ="/students/<?= $student['id'] ?>" method ="POST" class="grid grid-cols-2 gap-4">

        <input type="hidden" name="_method" value = "PUT">

        <div class="space-y-2">
            <label class="font-bold">Nama</label>
            <input name = "name" value = "<?= $student['name']?>" class="w-full border border-gray-300 px-4 py-2 rounded-lg">
        </div>

        <div class="space-y-2">
            <label class="font-bold">NIS</label>
            <input name = "nis" value = "<?= $student['nis']?> "class="w-full border border-gray-300 px-4 py-2 rounded-lg">
        </div>

        <div class="space-y-2">
            <label value = "<?= $student['class']?> " class="font-bold">Kelas</label>
            <input name = "kelas" class="w-full border border-gray-300 px-4 py-2 rounded-lg">
        </div>

        <div class="space-y-2">
            <label value = "<?= $student['phone_number']?> " class="font-bold">No Telp</label>
            <input name = "no_telepon" class="w-full border border-gray-300 px-4 py-2 rounded-lg">
        </div>

        <div class="col-span-2 flex justify-end gap-4">
            <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
            <button type="submit" class="px-4 py-2 bg-blue-500 rounded-lg text-white">
                Simpan
            </button>
        </div>

    </form>
</div>