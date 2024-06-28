<!DOCTYPE html>
<html>
<head>
    @include('admin.slider.css')
    <style>
        /* CSS for Dark Themed Table */
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1em;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            background-color: #1f1f1f;
        }

        thead tr {
            background-color: #333333;
            color: #ffffff;
            text-align: left;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #444444;
        }

        tbody tr {
            border-bottom: 1px solid #444444;
        }

        tbody tr:nth-of-type(even) {
            background-color: #2c2c2c;
        }

        tbody tr:nth-of-type(odd) {
            background-color: #1f1f1f;
        }

        tbody tr:hover {
            background-color: #3a3a3a;
            cursor: pointer;
        }

        tbody td {
            position: relative;
        }

        tbody td:before {
            content: "";
            position: absolute;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: #009879;
            transform: scaleY(0);
            transition: transform 0.2s ease-in-out;
        }

        tbody tr:hover td:before {
            transform: scaleY(1);
        }

        @media (max-width: 600px) {
            table {
                border: 0;
            }

            table thead {
                display: none;
            }

            table tbody tr {
                display: block;
                margin-bottom: .625em;
            }

            table tbody tr:nth-of-type(even),
            table tbody tr:nth-of-type(odd),
            table tbody tr:hover {
                background-color: transparent;
            }

            table tbody tr td {
                display: block;
                text-align: right;
                font-size: .8em;
                border-bottom: 1px solid #444444;
            }

            table tbody tr td:before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table tbody tr td:last-child {
                border-bottom: 0;
            }
        }
    </style>
</head>
<body>
    @include('admin.slider.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.slider.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2>Reservation List</h2>
                    <div class="container">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Persons</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                <tr>
                                    <td data-label="ID">{{ $reservation->id }}</td>
                                    <td data-label="Name">{{ $reservation->name }}</td>
                                    <td data-label="Email">{{ $reservation->email }}</td>
                                    <td data-label="Phone">{{ $reservation->phone }}</td>
                                    <td data-label="Date">{{ $reservation->date }}</td>
                                    <td data-label="Time">{{ $reservation->time }}</td>
                                    <td data-label="Persons">{{ $reservation->person }}</td>
                                    <td data-label="Message">{{ $reservation->message }}</td>
                                    <td>
                                        @if ($reservation->status == 1)
                                            <span class="badge badge-success">Confirm</span>
                                        @else
                                            <span class="badge badge-warning">Waiting</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form id="update-form-{{ $reservation->id }}" action="{{ url('update_reservation_status', $reservation->id) }}" method="POST">
                                            @csrf
                                            <button type="button" class="btn btn-primary update-button" data-id="{{ $reservation->id }}">Confirmed</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('delete_table_data', $reservation->id) }}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.update-button').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    var id = button.getAttribute('data-id');
                    if (confirm('Are you sure you want to confirm this reservation?')) {
                        document.getElementById('update-form-' + id).submit();
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
  function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');
    console.log(urlToRedirect);

    swal({
      title: "Are you sure to delete this?",
      text: "This delete is permanent",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = urlToRedirect;
      }
    });
  }
</script>
    
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('backend/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/charts-home.js') }}"></script>
    <script src="{{ asset('backend/js/front.js') }}"></script>
</body>
</html>
