{{-- The appName is set in AppServiceProvider.php --}}
@if(!empty($value))
"title":"{{$appName}} - {{$value}}"
@else
"title":"{{$appName}}"
@endif