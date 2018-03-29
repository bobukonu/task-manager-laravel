@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('_form')
            </div>

            <div class="col-md-12">
                <h2 class="sub-header text-center mt-5">Tasks</h2>
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->date }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('tasks.show', ['id' => $d->id]) }}"><i class="fa fa-search"></i></a>
                                    <a class="btn btn-warning" href="{{ route('tasks.edit', ['id' => $d->id]) }}"><i class="fa fa-pencil"></i></a>
                                    <form action="{{ route('tasks.destroy', ['id' => $d->id]) }}" method="post" onsubmit="return confirm('Do you really want to delete?');">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $data->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
