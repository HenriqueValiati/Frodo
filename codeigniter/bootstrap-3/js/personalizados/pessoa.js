$(document).ready(function () {
    
    $('#tabelaClientes').DataTable();
    
    $('#modalI').on('click', function () {
        console.log("ola mundo111111!");

        $('#modalI').modal('show');

        console.log("ola mundo222!");
    });

});
