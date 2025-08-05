@props([ 'title', 'actions' ])

<div class="card bg-slate-900 w-96 shadow-2xl">
    <div class="card-body">
        <div class="card-title mb-6">{{ $title }}</div>

        {{ $slot }}
        
        <div class="card-actions flex items-center justify-between mt-6">
            {{ $actions }}
        </div>
    </div>
        
</div>