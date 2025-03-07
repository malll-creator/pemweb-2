<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <style>
        /* Gaya dasar untuk hasil output */
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #ddd;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk paragraf di dalam hasil output */
        .result p {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
            line-height: 1.5;
        }

        /* Gaya untuk judul hasil output */
        .result p:first-child {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }

        /* Gaya untuk status kelulusan */
        .result p.status {
            font-weight: bold;
            margin-top: 15px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        /* Gaya untuk status Lulus */
        .result p.status.lulus {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Gaya untuk status Tidak Lulus */
        .result p.status.tidak-lulus {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $Nama = $_POST['Nama'];
        $Matkul = $_POST['Matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];

        // Hitung nilai total
        $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

        // Tentukan Grade
        if ($nilai_total >= 85) {
            $grade = "A";
        } elseif ($nilai_total >= 70) {
            $grade = "B";
        } elseif ($nilai_total >= 55) {
            $grade = "C";
        } else {
            $grade = "D";
        }

        // Tentukan status kelulusan
        $status = ($grade == "A" || $grade == "B" || $grade == "C") ? "Lulus" : "Tidak Lulus";

        // Tampilkan hasil
        echo "<div class='result'>
                <p>Nama : $Nama</p>
                <p>Matkul : $Matkul</p>
                <p>Nilai UTS: $nilai_uts</p>
                <p>Nilai UAS: $nilai_uas</p>
                <p>Nilai Tugas: $nilai_tugas</p>
                <p>Nilai Total: " . number_format($nilai_total, 2) . "</p>
                <p>Grade: $grade</p>
                <p class='status " . ($status == "Lulus" ? "lulus" : "tidak-lulus") . "'>Status : $status</p>
              </div>";
    }
    ?>
</body>
</html>
