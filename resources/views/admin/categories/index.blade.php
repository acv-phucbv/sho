@extends('admin.layouts.dashboard')

@section('category_menu', 'active open')
@section('category_menu', 'active open')
@section('content')

    <h1 class="page-title">
        {{ trans("common.category.category_menu") }}
        <div class="actions pull-right">
            @if(\Auth::user()->isAdmin())
                <a href='{{ route("admin.categories.create") }}' class="btn green"><i
                            class="fa fa-plus"></i>&nbsp;&nbsp;{{ trans('common.add') }}</a>
            @endif
        </div>
    </h1>

    @if (! $categories->isEmpty())
        <div class="table-scrollable">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>{{ trans('common.category.category_name') }}</th>
                    <th>{{ trans('common.category.category_description') }}</th>
                    <th>{{ trans('common.action') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td class="center actions-button">
                            <a href="{{ route('categories.show', $category->slug) }}"
                               class="btn btn-sm btn-info">{{ trans('common.view') }}</a>
                            @if(\Auth::user()->isAdmin())
                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                   class="btn btn-warning btn-sm">{{ trans('common.edit') }}</a>
                                <button type="button" class="btn btn-danger btn-sm btn-item-delete"
                                        data-form="#form-delete-{{ $category->id }}">{{ trans('common.delete') }}</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-xs-12 text-right">
                {{--{{ $category->links() }}--}}
            </div>
        </div>

        @if(\Auth::user()->isAdmin())
            <div class="hidden">
                @foreach($categories as $category)
                    @include('partials.form_delete', ['route' => "admin.categories.destroy", 'item' => $category])
                @endforeach
            </div>
        @endif

    @else
        <div class="note note-danger">
            <p>{{ trans('common.no_query_results') }}</p>
        </div>
    @endif

    @include('partials.modal_message')
    @include('partials.modal_confirm')

    @if(\Auth::user()->isAdmin())
        @include('partials.form_multiple_checkbox')
    @endif

@endsection
