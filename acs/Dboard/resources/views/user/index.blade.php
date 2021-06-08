@extends('dboard::index')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

@endpush
@section('title','User List')

@section('dboard_content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    {!! $dataTable->table(['class'=>"table table-hover table-bordered"]) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pre_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush
@push('post_scripts')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    {!! $dataTable->scripts() !!}
    <script>
        const delete_user = (delete_url) =>{
            if (confirm('Are you sure?')){
                $.ajax({
                    url: delete_url,
                    type: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        _method : 'DELETE'
                    } ,
                    success: function (response) {
                        LaravelDataTables["usersdatatable-table"].draw();
                        // You will get response from your PHP page (what you echo or print)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }
        };
    </script>
@endpush
