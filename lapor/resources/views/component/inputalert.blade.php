@if($errors->has($name))
<small class="text-danger">
    <span>{{ $errors->first($name) }}</span>
</small>
@endif