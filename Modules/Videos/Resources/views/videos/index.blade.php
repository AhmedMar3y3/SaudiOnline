<x-layout :title="trans('videos::videos.plural')" :breadcrumbs="['dashboard.videos.index']">

    @include('videos::videos.partials.filter')

    @component(layout('dashboard') . 'components.table-box')
        @slot('title', trans('videos::videos.actions.list'))
        @slot('tools')
            @include('videos::videos.partials.actions.create')
        @endslot

        <thead>
            <tr>
                <th>@lang('videos::videos.attributes.name')</th>
                <th>@lang('videos::videos.attributes.sub_name')</th>
                <th>@lang('videos::videos.attributes.link')</th>
                <th style="width: 160px">...</th>
            </tr>
        </thead>
        <tbody>
            @forelse($videos as $video)
                <tr>
                    <td>
                        <a href="{{ route('dashboard.videos.show', $video) }}" class="text-decoration-none text-ellipsis">
                            {{ Illuminate\Support\Str::limit($video->name, $limit = 50, $end = '...') }}
                        </a>
                    </td>
                    <td>
                        {{ $video->sub_name }}
                    </td>

                    <td>
                        <a href="{{ $video->link }}" class="text-decoration-none text-ellipsis">
                            {{ Illuminate\Support\Str::limit($video->link, $limit = 50, $end = '...') }}
                        </a>
                    </td>

                    <td style="width: 160px">
                        @include('videos::videos.partials.actions.show')
                        @include('videos::videos.partials.actions.edit')
                        @include('videos::videos.partials.actions.delete')
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100" class="text-center">@lang('videos::videos.empty')</td>
                </tr>
            @endforelse
        </tbody>
    @endcomponent

</x-layout>
