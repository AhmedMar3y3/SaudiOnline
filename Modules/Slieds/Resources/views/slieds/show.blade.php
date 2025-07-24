<x-layout :title="Illuminate\Support\Str::limit($slied->name, $limit = 50, $end = '...')" :breadcrumbs="['dashboard.slieds.show', $slied]">

    <div class="row">
        <div class="col-md-6">
            @component(layout('dashboard') . 'components.box')
                @slot('bodyClass', 'p-0')

                <table class="table table-middle">
                    <tbody>
                        <tr>
                            <th width="200">@lang('slieds::slieds.attributes.name')</th>
                            <td>{{ $slied->name }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('slieds::slieds.attributes.sub_name')</th>
                            <td>{{ $slied->sub_name }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('slieds::slieds.attributes.link')</th>
                            <td>
                                <a href="{{ $slied->link }}" target="_blank" rel="noopener noreferrer">
                                    {{ $slied->link }}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('slieds::slieds.partials.actions.edit')
                    @include('slieds::slieds.partials.actions.delete')
                @endslot
            @endcomponent

        </div>
    </div>

</x-layout>>
