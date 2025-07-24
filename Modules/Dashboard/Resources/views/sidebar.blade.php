@component(layout('dashboard') . 'components.sidebarItem')
    @slot('url', route('dashboard.home'))
    @slot('name', trans('dashboard::dashboard.home'))
    @slot('icon', 'fas fa-layer-group')
    @slot('isActive', request()->routeIs('dashboard.home'))
@endcomponent
@if (\Module::collections()->has('Accounts'))
    @include('accounts::sidebar')
@endif
@if (\Module::collections()->has('Categories'))
    @include('categories::sidebar')
@endif
{{-- @if (\Module::collections()->has('Countries'))
    @include('countries::sidebar')
@endif --}}
@if (\Module::collections()->has('Articles'))
    @include('articles::sidebar')
@endif
@if (\Module::collections()->has('Teams'))
    @include('teams::sidebar')
@endif
@if (\Module::collections()->has('Videos'))
    @include('videos::sidebar')
@endif
@if (\Module::collections()->has('Slieds'))
    @include('slieds::sidebar')
@endif
@if (\Module::collections()->has('Settings'))
    @include('settings::sidebar')
@endif
