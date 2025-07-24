<x-layout :title="trans('articles::articles.plural')" :breadcrumbs="['dashboard.articles.index']">

    @include('articles::articles.partials.filter')

    @component(layout('dashboard') . 'components.table-box')
        @slot('title', trans('articles::articles.actions.list'))
        @slot('tools')
            @include('articles::articles.partials.actions.create')
        @endslot

        <thead>
            <tr>
                <th>@lang('articles::articles.attributes.name')</th>
                <th>@lang('articles::articles.attributes.category_id')</th>
                <th style="width: 160px">...</th>
            </tr>
        </thead>
        <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>
                        <a href="{{ route('dashboard.articles.show', $article) }}" class="text-decoration-none text-ellipsis">
                            {{ Illuminate\Support\Str::limit($article->name, $limit = 50, $end = '...') }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.categories.show', $article->category) }}"
                            class="text-decoration-none text-ellipsis">
                            {{ Illuminate\Support\Str::limit($article->category->name, $limit = 50, $end = '...') }}
                        </a>
                    </td>

                    <td style="width: 160px">
                        @include('articles::articles.partials.actions.show')
                        @include('articles::articles.partials.actions.edit')
                        @include('articles::articles.partials.actions.delete')
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100" class="text-center">@lang('articles::articles.empty')</td>
                </tr>
            @endforelse
        </tbody>
    @endcomponent

</x-layout>
