@extends('layout.index')
@section('main-section')
    <pre>
       {{-- {{print_r($accounts)}} ; --}}
</pre>
    <div class="container m-10 p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Addrrss</th>
                    <th scope="col">Station</th>
                    <th scope="col">Mobile</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sr_no = 1;
                @endphp
                @foreach ($accounts as $account)
                    <tr>
                        <th scope="row">{{ $sr_no }}</th>
                        <td> {{ $account->acc_name }} </td>
                        <td> {{ $account->acc_address }} </td>
                        <td> {{ $account->acc_station }} </td>
                        <td> {{ $account->acc_mob1 }} </td>
                        <td>
                            {{-- <a href={{url('/accView/del')}}/{{$account->acc_id}} >

            <button  class="btn btn-danger" >Delete</button></a> --}}

                            <a href={{ route('acc.delete', ['id' => $account->acc_id]) }}>

                                <button class="btn btn-danger">Delete</button></a>

                            <a href={{ route('acc.edit', ['id' => $account->acc_id]) }}>

                                <button class="btn btn-warning">Edit</button>
                            </a>
                        </td>

                    </tr>
                    @php
                        $sr_no++;
                    @endphp
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
