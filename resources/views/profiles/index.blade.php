@extends('layouts.app')

@section('content')

<script>
    $(document).ready(function() {

        var columns = [
            {name : "id", createdCell: "Id user", orderable: false, searchable: false},
            {name : "username", createdCell: "Name user"},
            {name : "email", createdCell: "Email user"},
            {name : "action", createdCell: "Options", orderable: false,  searchable: false},
        ];

        $('#users-table').DataTable({
            serverSide: true,
            processing: true,
            responsive: true,
            info: true,
            lengthMenu: [2, 5, 10, 15, 100], // nr. of results
            ajax: "{{ route('profile.showDataRecords') }}",
            columns: columns.map(
                function (item) {
                    item.createdCell = function(td, cellData, rowData, row, col){
                        $(td).attr('data-title', item.createdCell);
                    };
                    return item;
                }
            ),
            language: {
                emptyTable:     "Nu sunt date disponibile in tabel",
                infoEmpty:      "",
                thousands:      ".",
                lengthMenu:     "Afiseaza _MENU_ user",
                loadingRecords: "Loading...",
                processing:     "Incarca...",
                search:         "_INPUT_",
                searchPlaceholder: "Cauta user",
                zeroRecords:    "Nu s-a gasit niciun user",
            },
        });

        // procedures filter
        $('#folders-procedure').on('keyup change', function() {
            foldersTable.search($(this).val()).draw();
        });

        // statuses filter
        $('#folders-status').on('keyup change', function() {
            foldersTable.search($(this).val()).draw();
        });
    });
</script>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 >User Profile</h4>
        </div>
        <div class="card-body row">
            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-fluid"> 
            </div>
            <div class="col-12 col-md-8">
                <div class="container" >
                    <h2>{{ $user->name }}</h2>
                </div>
                <hr>
                @if(empty($user))
                    <p class="card-text">Data does not exist</p>
                @else
                    <ul class="container details" >
                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;">Username: </span>{{ $user->username }}</p></li>
                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;">Email: </span>{{ $user->email }}</p></li>
                    </ul>
                    <hr>
                    <div class="col-5 col-xs-6 tital " >Date Of Joining: {{ $user->created_at }} Last update: {{ $user->updated_at }}</div>
                @endif
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="card-title">User table</h2>
            <table id="users-table" class="table table-hover custom-table w-100" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Options</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection




