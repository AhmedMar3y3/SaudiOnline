<x-layout :title="Illuminate\Support\Str::limit($slied->id, $limit = 50, $end = '...')" :breadcrumbs="['dashboard.slieds.edit', $slied]">

    {{ BsForm::resource('slieds::slieds')->putModel($slied, route('dashboard.slieds.update', $slied), ['files' => true, 'data-parsley-validate']) }}
    @component(layout('dashboard') . 'components.box')
        @slot('title', trans('slieds::slieds.actions.edit'))

        @include('slieds::slieds.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('slieds::slieds.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}

</x-layout>
