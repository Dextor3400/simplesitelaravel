<x-user-master>
@section('title', 'Advertisements')
@section('content')
    <h1 class="text-center">All Advertisements</h1>
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Advertisements</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Title</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($advertisements as $advertisement)
                                <tr>
                                    <td>{{ $advertisement->id }}</td>
                                    <td>{{ $advertisement->user->name }}</td>
                                    <td>{{ $advertisement->title }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
</x-user-master>
