@extends(config('ayuda-dvs.layout'))




@section('content')

<div class="page-inner mt--5">
    <div class="row">
        @foreach ($groups as $t)
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
                        <br>
                        <br>
                        {!! $t->iframe !!}
                    </div>
                </div>
            </div>            
        @endforeach
    </div>
</div>

    
@endsection