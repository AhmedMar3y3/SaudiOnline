<x-layout :title="Illuminate\Support\Str::limit($video->name, $limit = 50, $end = '...')" :breadcrumbs="['dashboard.videos.show', $video]">

    <div class="row">
        <div class="col-md-6">
            @component(layout('dashboard') . 'components.box')
                @slot('bodyClass', 'p-0')

                <table class="table table-middle">
                    <tbody>
                        <tr>
                            <th width="200">@lang('videos::videos.attributes.name')</th>
                            <td>{{ $video->name }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('videos::videos.attributes.sub_name')</th>
                            <td>{{ $video->sub_name }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('videos::videos.attributes.link')</th>
                            <td>
                                <a href="{{ $video->link }}" target="_blank" rel="noopener noreferrer">
                                    {{ $video->link }}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('videos::videos.partials.actions.edit')
                    @include('videos::videos.partials.actions.delete')
                @endslot
            @endcomponent

        </div>
    </div>

</x-layout>>
