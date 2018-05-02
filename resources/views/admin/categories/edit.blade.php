@extends('layouts.default', [
    'title' => trans('common.category.category_menu_edit'),
    'breadcrumbs' => [
        ['text' => trans("common.category.category_menu"), 'url' => route("admin.categories.index")],
        ['text' => trans("common.category.category_edit")]
    ]
])

@section('category_menu', 'active open')
@section('category_create', 'active open')

@section('content')


    {!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'PUT', 'role' => 'form']) !!}
    <div class="page-title">
        <h2>{{ trans('common.category.category_edit') }}</h2>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="name">{{ trans('common.category.name') }}&nbsp;<span class="required"
                                                                                 aria-required="true">*</span></label>
                {{ Form::text('name', $category->name, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                <label for="description">{{ trans('common.category.description') }}&nbsp;<span class="required"
                                                                                               aria-required="true">*</span></label>
                {{ Form::textarea('description', $category->description, ['class' => 'form-control', 'rows' => '5', 'maxlength' => '63']) }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-actions">
                {{ Form::button('<i class="fa fa-check"></i>  ' . trans('common.update'), ['type' => 'submit', 'class' => 'btn btn-primary', 'name' => 'submit', 'id' => 'submit']) }}
                {{ Form::button('<i class="fa fa-refresh"></i>   ' . trans('common.reset'), ['type' => 'reset', 'class' => 'btn btn-default', 'name' => 'reset', 'id' => 'reset']) }}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
