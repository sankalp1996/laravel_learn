<div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{$label}}</label>
        <input type={{$type}} name ={{$name}} class="form-control" id={{$id}} aria-describedby="emailHelp" value={{$value}}>
        <span>@error($name)
            {{$message}}
        @enderror</span>
      </div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
@php
    // Debugging code goes here
    // For example:
    // dd($variable);
@endphp
