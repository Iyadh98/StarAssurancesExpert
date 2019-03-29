@extends('vertical.template')
@section('morecss')

@endsection
@section('pageTitle')
    Ajouter une commande
@endsection
@section('pageDescription')
@endsection

@section('content')



    <form  id="addUser" method="post" enctype="multipart/form-data"
           class="form-horizontal">
        {{ csrf_field() }}
        <div class="row form-group">
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="date_de_creation" name="date_de_creation" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="etat" name="etat" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="id" name="id" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du produit</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="id_compte" name="id_compte" class="form-control"></div>
        </div>



        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" id="submitUser">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>

@endsection
@section('morejs')
    <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase.js"></script>
    <script>
        // Initialize Firebase
        // TODO: Replace with your project's customized code snippet
        var config = {
            apiKey: "AIzaSyAD-B_bCo7e95XHBPpNkRvhc4I8xHwUKpE",
            authDomain: "agil-aee92.firebaseapp.com",
            databaseURL: "https://agil-aee92.firebaseio.com",
            projectId: "agil-aee92",
            storageBucket: ".appspot.com",
            messagingSenderId: "",
        };
        firebase.initializeApp(config);

        var database = firebase.database();

        var lastIndex = 0;
        $('#submitUser').on('click', function(){
            var values = $("#addUser").serializeArray();
            var DPOSCP = values[0].value;
            var GVRPNT = values[1].value;
            var LATITUDE = values[2].value;
            var LIBGVR = values[3].value;
            var LIBLOC = values[4].value;
            var LOCPNT = values[5].value;
            var LONGITUDE = values[6].value;
            var MATCPT = values[7].value;
            var NOMCPT = values[8].value;
            var SCPSCP = values[9].value;


            firebase.database().ref('compte/' + 157).set({
                DPOSCP: DPOSCP,
                GVRPNT: GVRPNT,
                LATITUDE: LATITUDE,
                LIBGVR: LIBGVR,
                LIBLOC: LIBLOC,
                LOCPNT: LOCPNT,
                LONGITUDE: LONGITUDE,
                MATCPT: MATCPT,
                NOMCPT: NOMCPT,
                SCPSCP: SCPSCP,
            });


            $("#addUser input").val("");
        });
    </script>
@endsection
