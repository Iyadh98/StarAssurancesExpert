@extends('vertical.template')
@section('morecss')
    <link href="{{asset('plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />
@endsection
@section('pageTitle')

@endsection
@section('pageDescription')

@endsection

@section('content')
    <div class="row">
    <div class="col-lg-3">
        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-custom btn-block waves-effect m-t-20 waves-light">
            <i class="fi-circle-plus"></i> Créer un nouvel événement
        </a>
        <div id="external-events" class="m-t-20">
            <br>
            <p class="text-muted">Veuillez mettre les événements dans calendrier affiché</p>
            <div class="external-event bg-success" data-class="bg-success">
                <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Commande Tatouine
            </div>
            <div class="external-event bg-purple" data-class="bg-purple">
                <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Livraison effectuée
            </div>
        </div>

        <!-- checkbox -->
        <div class="checkbox checkbox-primary mt-3">
            <input type="checkbox" id="drop-remove">
            <label for="drop-remove">
                Effacer après la mise en place
            </label>
        </div>

    </div> <!-- end col-->
    <div class="col-lg-9">
        <div id="calendar"></div>
    </div> <!-- end col -->
    </div>  <!-- end row -->
    </div>

    <!-- BEGIN MODAL -->
    <div class="modal fade" id="event-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center border-bottom-0 d-block">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New Event</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Category -->
    <div class="modal fade" id="add-category" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center border-bottom-0 d-block">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title mt-2">Ajouter une categorie</h4>
                </div>
                <div class="modal-body p-4">
                    <form role="form">
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Couleur</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="pink">Pink</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                                <option value="inverse">Inverse</option>
                            </select>
                        </div>

                    </form>

                    <div class="text-right">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-custom ml-1 waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>

    <!-- end col-12 -->

@endsection
@section('morejs')
                <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
                <script src="{{asset('plugins/moment/moment.js')}}"></script>
                <script src='{{asset('plugins/fullcalendar/js/fullcalendar.min.js')}}'></script>
                <script src="{{asset('pages/jquery.calendar.js')}}"></script>

@endsection
