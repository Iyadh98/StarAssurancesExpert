@extends('vertical.template')
                            @section('morecss')
                                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function sayHello() {
        swal({
            title: "Commande validée!",
            text: "Vous avez bien validé la commande!",
            icon: "success",
        });
    }
</script>
                                @endsection
                            @section('pageTitle')
                                Liste des commandes
                            @endsection
                           @section('pageDescription')

                            @endsection

                            @section('content')
                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Etat</th>
                                    <th>Matricule</th>
                                    <th>Produit</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($all_commandes as $all)
                                <tr>
                                    <td>{{$all['dateCreation']}}</td>
                                    <td>{{$all['etat']}}</td>
                                    <td>{{$all['mat_compte']}}</td>
                                    <td>{{json_encode($all['produits'])}}</td>

                                    <td>
                                        <button class="btn btn-success btn-sm" onclick="sayHello()">
                                            Valider commande
                                        </button>

                                        <a href="">
                                            <button class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Ajouter à une livraison
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
    }
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
