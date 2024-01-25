@extends('layout.index')


@section('main-section')
    
<div class="container m-10 p-5">
    <form action={{$url}} method="POST">
        @csrf
        {{-- <pre>
        @php
        print_r($errors->all());    
        @endphp
        </pre> --}}

        <h1>{{$title}}</h1><br>

        {{-- {{$account->acc_name}} --}}
        <x-input name='acc_name' id='acc_name' type='text' label='Account Name' value="{{ $account->acc_name ?? '' }}"/>

        <x-input name='acc_station' id='acc_station' type='text' label='Station Name' value="{{ $account->acc_station ?? '' }}" />
        <x-input name='acc_mob1' id='acc_mob1' type='tel' label='Mobile No.' value="{{ $account->acc_mob1 ?? '' }}" />
        <x-input name='acc_address' id='acc_address' type='text' label='Enter Address' value="{{ $account->acc_address ?? '' 
        
        
        
        }}" />
{{--         
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name ="password" class="form-control" id="exampleInputPassword1">
          <span class="text-danger">@error('password')
            {{$message}}
        @enderror</span>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    @endsection
