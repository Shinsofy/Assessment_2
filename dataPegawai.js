$.ajax({
    url: 'get_data.php',
    dataType: 'json',
    success: function(data) {
        console.log(data); // Tampilkan data dalam konsol untuk memastikan pengambilan berhasil
    }
});