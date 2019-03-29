@extends('vertical.template')
@section('morecss')

@endsection
@section('pageTitle')
    Ajouter des commandes à la livraison
@endsection
@section('pageDescription')

@endsection

@section('content')



    <form  id="addUser" action={{url('livraisons')}} method="get" enctype="multipart/form-data"
           class="form-horizontal">
        {{ csrf_field() }}


        <select name="categorie" id="select_categorie">
            <option value="0" selected="selected" disabled>Choisir une commande</option>
            @if(count($all_commandes) > 0)
                @foreach($all_commandes as $all)
                    <option value="{{$all['id']}}">
                        {{$all['type']}}
                    </option>
                @endforeach
            @endif
        </select>
<br><br>

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
            var id_commande = values[1].value;
            var incr = (function () {
                var i = 2;

                return function () {
                    return i++;
                }
            })();
            firebase.database().ref('livraison/-LZl9FGJORXh4jgu5sjW/id_commande/'+ incr() ).set({
                id_commande

            });


            $("#addUser input").val("");
        });

    </script>
@endsection
