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
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Depot sous compte</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="DPOSCP" name="DPOSCP" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">numéro de gouvernorat</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="GVRPNT" name="GVRPNT" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Latitude</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="LATITUDE" name="LATITUDE" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Libellé de gouvernorat</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="LIBGVR" name="LIBGVR" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Libelle de localisation</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="LIBLOC" name="LIBLOC" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Point de localisation</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="LOCPNT" name="LOCPNT" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Longitude</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="LONGITUDE" name="LONGITUDE" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Matricule du compte</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="MATCPT" name="MATCPT" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nom du compte</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="NOMCPT" name="NOMCPT" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Numéro du sous compte</label>
            </div>
            <div class="col-12 col-md-9"><input type="text" id="SCPSCP" name="SCPSCP" class="form-control"></div>
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
            var incr = (function () {
                var i = 157;

                return function () {
                    return i++;
                }
            })();

            firebase.database().ref('compte/' + incr()).set({
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
