<x-layout :title="trans('slieds::slieds.plural')" :breadcrumbs="['dashboard.slieds.index']">

    <div class="card p-4">
        <div class="row">
            @forelse ($slieds as $slied)
                <div class="col col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card rounded">
                        <img src="{{ $slied->getFirstMediaUrl() }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            @include('slieds::slieds.partials.actions.edit')
                            @include('slieds::slieds.partials.actions.delete')
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center w-100 mb-0">{{ trans('slieds::slieds.empty') }}</p>
            @endforelse
        </div>
    </div>

</x-layout>
