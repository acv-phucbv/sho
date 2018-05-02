@extends('layouts.default')

{{--@include('layouts.partials.breadcrumb', ['nodes' => [--}}
    {{--['text' => trans('test')]--}}
{{--]])--}}

@section('content')
    <h1>
        {{ trans('List Users') }}

        <div class="pull-right">
            {{--<a class="btn btn-primary" href="{{ route('books.create') }}">{{ trans('Create book') }}</a>--}}
        </div>
    </h1>

    @if ($users->isEmpty())
        <p class="bg-info pd-16 mt-16">{{ trans('Have no books.') }}</p>
    @else
        <div class="table-responsive mt-16">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="20">{{ trans('No') }}</th>
                    <th width="20%">{{ trans('Username') }}</th>
                    <th>{{ trans('Email') }}</th>
                    <th width="10%">{{ trans('Fullname') }}</th>
                    <th width="25%">{{ trans('Birthday') }}</th>
                </tr>
                </thead>
                <tbody>
                @php $index = 1 @endphp
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->birthday }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    @endif
@endsection