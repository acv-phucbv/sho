@extends('layouts.default', [
    'title' => trans('common.category.category_menu_add'),
    'breadcrumbs' => [
        ['text' => trans("common.category.category_menu"), 'url' => route("admin.categories.index")],
        ['text' => trans("common.category.category_create")]
    ]
])

@section('category_menu', 'active open')
@section('category_create', 'active open')

@section('content')


    {!! Form::open(['route' => "admin.categories.store"]) !!}
    <div class="page-title">
        <h2>{{ trans('common.category.category_create') }}</h2>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="name">{{ trans('common.category.name') }}&nbsp;<span class="required"
                                                                                   aria-required="true">*</span></label>
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                <label for="description">{{ trans('common.category.description') }}&nbsp;<span class="required"
                                                                                 aria-required="true">*</span></label>
                {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5', 'maxlength' => '63']) }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-actions">
                {{ Form::button('<i class="fa fa-check"></i>  ' . trans('common.submit'), ['type' => 'submit', 'class' => 'btn btn-primary', 'name' => 'submit', 'id' => 'submit']) }}
                {{ Form::button('<i class="fa fa-refresh"></i>   ' . trans('common.reset'), ['type' => 'reset', 'class' => 'btn btn-default', 'name' => 'reset', 'id' => 'reset']) }}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
