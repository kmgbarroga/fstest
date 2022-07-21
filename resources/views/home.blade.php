@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Users</h4>
                    <div id="table-container"></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customjs')
    <script>
        $(document).ready(function(){
            var table = document.createElement("table");
            table.classList.add("table");
            var headers = ['Name','Username','Phone','Company Name'];

            // table headers
            var tr = table.insertRow(-1);
            for (var i = 0; i < headers.length; i++) {
                var th = document.createElement("th");
                th.innerHTML = headers[i];
                tr.appendChild(th);
            }

            // create rows of data
            // fetch from api
            $.getJSON('https://jsonplaceholder.typicode.com/users', function(users) {
                users.forEach(eachUser => {
                    // insert row
                    tr = table.insertRow(-1);

                    // create cell for data
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = eachUser["name"];

                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = eachUser["username"];

                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = eachUser["phone"];

                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = eachUser["company"]["name"];


                });
            });

            // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
            var divContainer = document.getElementById("table-container");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        })
    </script>
@endsection
