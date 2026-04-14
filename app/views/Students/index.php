<div class="shadow rounded-lg p-4 bg-white">
    <h1 class="text-2xl font-bold">Daftar Mahluk Hidup</h1>
</div>

<div class="bg-white shadow rounded p-5">
    <table class="w-full">
        <thead class=" bg-blue-500 text-white">
            <tr class="">
                <th class="px-4 py-2 text-left">No</th>
                <th class="px-4 py-2 text-left">Nama</th>
                <th class="px-4 py-2 text-left">NIS</th>
                <th class="px-4 py-2 text-left">Kelas</th>
                <th class="px-4 py-2 text-left">No Telepon</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>

        <tbody class="">
            <?php foreach ($students as $index => $student): ?>

                <tr class="">
                    <td class="px-4 py-2 text-left">
                            <?= $index + 1 ?>
                    </td>
                    <td class="px-4 py-2 text-left">
                            <?= $student['name'] ?>
                    </td>
                    <td class="px-4 py-2 text-left">
                            <?= $student['nis'] ?>
                    </td>
                    <td class="px-4 py-2 text-left">
                            <?= $student['class'] ?>
                    </td>
                    <td class="px-4 py-2 text-left">
                            <?= $student['phone_number'] ?>
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex justify-center items-center gap-4">
                            <a href="/students/<?= $student['id'] ?>" class="text-green-500">Detail</a>
                            <a href="/students/<?= $student['id'] ?>/edit" class="text-blue-500">Edit</a>
                            <a href="" class="text-red-500">Hapus</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</div>