@extends('vertical.template')
@section('morecss')

@endsection
@section('pageTitle')
    Liste des comptes
@endsection
@section('pageDescription')

@endsection

@section('content')
    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Localisation</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Matricule du compte</th>
        </tr>
        </thead>


        <tbody>
        @foreach($all_products as $all)
            <tr>
                <td>{{$all['NOMCPT']}}</td>
                <td>{{$all['LIBLOC']}}</td>
                <td>{{$all['LONGITUDE']}}</td>
                <td>{{$all['LATITUDE']}}</td>
                <td>{{$all['MATCPT']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('morejs')
    <script type="text/javascript">
        $(document).ready(function() {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>
@endsection
