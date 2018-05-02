@php
if (!isset($breadcrumbs)) {
$breadcrumbs = [];
}
@endphp
<div class="breadcumb-nav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            {{ Html::link('/', trans('common.homepage')) }}
                        </li>
                        @foreach ($breadcrumbs as $crumb)
                            @if (!empty($crumb['text']) && !empty($crumb['url']))
                                <li class="breadcrumb-item">
                                    <i class="fa fa-circle"></i>
                                    {{ Html::link($crumb['url'], $crumb['text']) }}
                                </li>
                            @elseif (!empty($crumb['text']))
                                <li class="breadcrumb-item">
                                    <i class="fa fa-circle"></i>
                                    <span>{{ $crumb['text'] }}</span>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
