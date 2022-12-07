@if ($errors->any())
@foreach ($errors->all() as $error)

<div class="alert alert-warning alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>{{$error}}!</strong>
</div>
    
@endforeach
@endif
    
@if (session("sucess"))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>{{session("sucess")}}</strong>
</div>
    
@endif

@if (session("error"))
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>{{session("error")}}</strong>
</div>
    
@endif