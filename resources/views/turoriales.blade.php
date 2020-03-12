@extends(config('ayuda-dvs.layout'))




@section('content')

<div class="page-inner mt--5">
    @foreach ($groups as $t)
        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">
                                <i class="icon-arrow-right"></i> {{ $t->title }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! $t->body !!}
                        <br>
                        {!! $t->iframe !!}
                    </div>
                </div>
            </div>            
        </div>
        @endforeach
</div>

    
@endsection