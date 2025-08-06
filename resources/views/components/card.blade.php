@props([ 'title' => null, 'actions' => null ])

<div class="card bg-slate-900 w-96 shadow-2xl">
    <div class="card-body">
        @if($title)
            <div class="card-title mb-6">{{ $title }}</div>
        @endif

        {{ $slot }}
        
        @if($actions)
            <div class="card-actions flex items-center justify-between mt-6">
                {{ $actions }}
            </div>
        @endif
    </div>
        
</div>