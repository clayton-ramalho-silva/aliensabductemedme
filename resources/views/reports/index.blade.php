@extends('app')

@section('content')
<div class="list-group">
    @foreach ($reports as $report)
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                <h6 class="mb-0">{{ $report->firstNome }}</h6>
                <p class="mb-0 opacity-75">{{ $report->describe }}</p>
                </div>
                <small class="opacity-50 text-nowrap">{{ $report->created_at }}</small>
            </div>
        </a>
        
    @endforeach
  </div>
@endsection