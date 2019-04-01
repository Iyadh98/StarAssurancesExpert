@extends('vertical.template')
@section('morecss')

@endsection
@section('pageTitle')
    Ajouter un compte
@endsection
@section('pageDescription')


@section('content')



    <form  id="addUser" method="post" enctype="multipart/form-data"
           class="form-horizontal">
        {{ csrf_field() }}
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Login</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="id_expert" name="id_expert" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label>
            </div>
            <div class="col-12 col-md-9"><input type="password" id="password" name="password" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom complet</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="nom_complet" name="nom_complet" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre de dossiers</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="nbr_dossiers" name="nbr_dossiers" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lien photo</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="lien_photo" name="lien_photo" class="form-control"></div>
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
    <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBLQbCpsZBNQK-_qSSzh_HClSBkdUU3Yd0",
            authDomain: "hackathon-star.firebaseapp.com",
            databaseURL: "https://hackathon-star.firebaseio.com",
            projectId: "hackathon-star",
            storageBucket: "hackathon-star.appspot.com",
            messagingSenderId: "440225179433"
        };
        firebase.initializeApp(config);

        var database = firebase.database();

        var lastIndex = 0;
        $('#submitUser').on('click', function(){
            var values = $("#addUser").serializeArray();

            var id_expert=values[1].value
            var nom_complet= values[3].value;
            var nbr_dossiers = values[4].value;
            var lien_photo = values[5].value;
            firebase.database().ref('/experts/'+id_expert).set({
                nom_complet: nom_complet,
                nbr_dossiers: nbr_dossiers,
                lien_photo: lien_photo,

            });


            $("#addUser input").val("");
            window.location.href = "http://stackoverflow.com";
        });
    </script>
@endsection
