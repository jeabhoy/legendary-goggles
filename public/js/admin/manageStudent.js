$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'studentNo', name: 'studentNo' },
            { data: 'firstName', name: 'firstName' },
            { data: 'middleName', name: 'middleName' },
            { data: 'lastName', name: 'lastName' },
            { data: 'level', name: 'level' }
        ]
    });
});
