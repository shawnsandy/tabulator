<script>
    $(document).ready(function () {
        $("{{ $table_id or '#datatables' }}").DataTable({
            "ajax": {
                "url": "{{ $data }}",
                "dataSrc": ""
            },
            "columns": {!! $cols  !!},
            "order": [{!! $order or "['0' , 'desc']"  !!}],
            "pageLength": {!! $length or 20  !!},
            "processing": {!! $processing or true !!}
        });
    });
</script>
