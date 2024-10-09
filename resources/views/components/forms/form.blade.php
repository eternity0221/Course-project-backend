@if(isset($key) && isset($value))
<form enctype="{{$enctype ?? ''}}" class="form {{$className ?? ''}}" method="{{!isset($method) || $method == "GET" ? 'GET' : 'POST'}}" action="{{$action ? route($action, [$key => $value]) : ''}}">
    @if(isset($method) && $method != "GET")
        @csrf
        @method($method)
    @endif
    <div class="form__content">
        @yield($yield ?? "form")
    </div>
</form>

@else
    <form enctype="{{$enctype ?? ''}}" class="form {{$className ?? ''}}" method="{{!isset($method) || $method == "GET" ? 'GET' : 'POST'}}">
        @if(isset($method) && $method != "GET")
            @csrf
            @method($method)
        @endif
        <div class="form__content">
            @yield($yield ?? "form")
        </div>
    </form>
@endif
