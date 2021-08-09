<?php
    select tb_mahasiswa.mhs_nama from tb_mahasiswa, tb_mahasiswa_nilai INNER JOIN tb_matakuliah on  tb_mahasiswa_nilai.mk_id = 1 and tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id and DESC tb_mahasiswa_nilai.nilai
?>