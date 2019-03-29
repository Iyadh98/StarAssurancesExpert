@extends('vertical.template')
@section('morecss')

@endsection
@section('pageTitle')
    Liste des livraisons
@endsection
@section('pageDescription')

@endsection

@section('content')
    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Date et heure</th>
            <th>id</th>
            <th>id depart</th>
            <th>type</th>
            <th>id commande</th>
        </tr>
        </thead>


        <tbody>
        @foreach($all_livraisons as $all)
            <tr>
                <td>{{$all['dateheure']}}</td>
                <td>{{$all['id']}}</td>
                <td>{{$all['id_dep']}}</td>
                <td>{{$all['type']}}</td>
                <td>{{$all['id_commande']['0']}}</td>
                <td>
                    <a href="{{action('LivraisonController@getDetails',$all['id'])}}">
                        <button class="btn btn-success btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Ajouter une commande
                        </button>
                    </a>
                    <a href="{{url('/geolocation')}}">
                        <button class="btn btn-success btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Activer la geolocalisation
                        </button>
                    </a>
                </td>
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
