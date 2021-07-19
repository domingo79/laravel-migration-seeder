@extends("layout.app")
@section('title', 'Admin Page')

@section('content')
    <div class="container">
        <h1>Admin</h1>

        {{-- <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CITTA</th>
                    <th>INDIRIZZO</th>
                    <th>CAP</th>
                    <th>STRUTTURA</th>
                    <th>DESCRIZIONE</th>
                    <th>PREZZO</th>
                    <th>TRATTAMENTO</th>
                    <th>DURATA</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody> --}}
        @foreach ($packages as $package)
            <div class="card">
                <img src="{{ $package->image_url }}">
                <dl>
                    <dt>Address</dt>
                    <dd>{{ $package->address }}</dd>
                    <dt>PostCode</dt>
                    <dd>{{ $package->post_code }}</dd>
                    <dt>City</dt>
                    <dd>{{ $package->city }}</dd>
                </dl>
            </div>
        @endforeach

        {{-- @foreach ($packages as $package)
                    <tr>
                        <td class="text-info" scope="row">#{{ $package->id }}</td>
                     <td><a href="{{ route('admin.show', $package->id) }}"><img width="100"
                                    src="{{ $package->image_url }}" alt=""> </a> </td> 
                        <td>{{ $package->type }}</td>
                        <td>{{ $package->city }}</td>
                        <td>{{ $package->address }}</td>
                        <td>{{ $package->post_code }}</td>
                        <td>{{ $package->description }}</td>
                        <td>{{ $package->price }}</td>
                        <td>{{ $package->treatment }}</td>
                        <td>{{ $package->duration }}</td>
                        <td>
                            <a class="text-warning" href="{{ route('admin.edit', $package->id) }}">Edit</a>
                            <a class="text-success" href="{{ route('admin.create', $package->id) }}">Create</a>
                            <a class="text-danger" href="{{ route('admin.show', $package->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach 

        </tbody>
        </table> --}}
    </div>
@endsection
