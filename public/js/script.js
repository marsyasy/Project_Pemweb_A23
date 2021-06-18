$(function(){
    $('.tampilModalUbah').on('click', function(){

    const id = $(this).data('id');
    $.ajax({
        url: 'https://localhost/sayurku/public/manage/getdata',
        data: {id : id},
        method: 'POST',
        dataType: 'json',
        success: function(data){
            $('#nama').val(data.nama);
            $('#harga').val(data.harga);
            $('#stok').val(data.stok);
        }
    })

    });
});