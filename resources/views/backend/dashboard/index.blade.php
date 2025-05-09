@extends('backend.layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <!-- Dashboard Overview Section -->
            <div class="row mb-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <h5>Total Requests</h5>
                            <h3>9</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-warning text-white text-center">
                        <div class="card-body">
                            <h5>Pending Requests</h5>
                            <h3>8</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-success text-white text-center">
                        <div class="card-body">
                            <h5>Completed Requests</h5>
                            <h3>4</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-danger text-white text-center">
                        <div class="card-body">
                            <h5>High Priority Requests</h5>
                            <h3>8</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Requests Section -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Requests</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Requestor</th>
                                <th>Type</th>
                                <th>Priority</th>
                                <th>Completion Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nang</td>
                                <td>Database Update</td>
                                <td>High</td>
                                <td>02-02-2024</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jonh</td>
                                <td>Data Query</td>
                                <td>Low</td>
                                <td>23-03-2024</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dadaka</td>
                                <td>Backup Request</td>
                                <td>Medium</td>
                                <td>09-10-2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
