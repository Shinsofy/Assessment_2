<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai Apotek</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="pegawai-table"></div>

    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'get_data.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Proses dan tampilkan data dalam bentuk tabel
                var html = '<table border="1">';
                html += '<tr><th>ID</th><th>Nama Pegawai</th><th>Status Kerja</th><th>Aksi</th></tr>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                    html += '<td>' + data[i].id + '</td>';
                    html += '<td>' + data[i].nama + '</td>';
                    html += '<td>' + data[i].status_kerja + '</td>';
                    html += '<td><button class="delete-btn" data-id="' + data[i].id + '">Hapus</button></td>';
                    html += '</tr>';
                }
                html += '</table>';
                $('#pegawai-table').html(html);
            }
        });
    });
    </script>
</body>
</html>