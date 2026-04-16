<div class="shadow rounded-lg p-4 bg-white">
    <h1 class="text-2xl font-bold">Show Pokoknya</h1>
</div>

<div class="bg-white shadow rounded-lg p-10">
    <div class="grid grid-cols-2 gap-4">

        <div class="space-y-2">
            <label class="font-bold">Nama</label>
            <input value="<?= $student['name'] ?>" class="w-full border border-gray-300 px-4 py-2 rounded-lg" readonly>
        </div>

        <div class="space-y-2">
            <label class="font-bold">NIS</label>
            <input value="<?= $student['nis'] ?>" class="w-full border border-gray-300 px-4 py-2 rounded-lg" readonly>
        </div>

        <div class="space-y-2">
            <label class="font-bold">Kelas</label>
            <input value="<?= $student['class'] ?>" class="w-full border border-gray-300 px-4 py-2 rounded-lg" readonly>
        </div>

        <div class="space-y-2">
            <label class="font-bold">No Telp</label>
            <input value="<?= $student['phone_number'] ?>" class="w-full border border-gray-300 px-4 py-2 rounded-lg"
                readonly>
        </div>

        <div class="col-span-2 flex justify-end gap-4">
            <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
        </div>

    </div>
</div>