<script src="<?= BASEURL; ?>/js/jquery.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- <script src="<?= BASEURL; ?>/js/script.js"></script> -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    $(function() {
        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Tambah Data Pasien');
            $('.modal-footer button[type=submit]').html('Tambah Data');

            $('#nama').val('');
            $('#umur').val('');
            $('#alamat').val('');
        });

        $('.tampilModalEdit').on('click', function() {
            $('#formModalLabel').html('Edit Data Pasien');
            $('.modal-footer button[type=submit]').html('Edit Data');
            $('.modal-body form').attr('action', 'http://localhost/crud-pasien/public/pasien/getEdit');

            const id_pasien = $(this).data('id_pasien');

            $.ajax({
                url: 'http://localhost/crud-pasien/public/pasien/edit',
                data: {
                    id_pasien: id_pasien
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    // const obj = JSON.parse(data);
                    $('#nama').val(data.nama);
                    $('#umur').val(data.umur);
                    $('#alamat').val(data.alamat);
                    $('#id_pasien').val(data.id_pasien);
                }
            });
        });
    });
</script>
</body>

</html>