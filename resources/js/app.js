let dataTable;
let dataTableInitialized = false;

const dataTableOptions = {
    columnDefs: [
        {orderable: false, targets: [6] }
    ],
    pageLength: 16,
    lengthChange: false,
    searching: false,
    info: false,
    language: {
        "emptyTable": "Nenhum registro encontrado",
        "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "infoFiltered": "(Filtrados de _MAX_ registros)",
        "infoThousands": ".",
        "loadingRecords": "Carregando...",
        "zeroRecords": "Nenhum registro encontrado",
        "search": "Pesquisar",
        "paginate": {
            "next": "Próximo",
            "previous": "Anterior",
            "first": "Primeiro",
            "last": "Último"
        }
    }
}

$(document).ready(function () {
    $('#myTable').DataTable(dataTableOptions);
});
