@extends('layouts.app')

@section('content')
<div class="main">
    <div class="page-header">
            <h4 class="page-title">Mijozlar ro'yxati</h4>
            <a class="btn btn-success" style="margin-left: 80%;"><i class="feather icon-user-plus"></i></a>
        </div>
    <div class="table-responsive">
        <table class="table table-bordered table-light">
            <thead>
                <tr align="center">
                    <th scope="col">№</th>
                    <th scope="col">Ism</th>
                    <th scope="col">Tel-raqam</th>
                    <th scope="col">Mahsulot turi</th>
                    <th scope="col">Sana</th>
                    <th scope="col">Amallar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($client as $item)
                    
                    <tr align="center">
                        <th scope="row"> {{ (($client->currentpage()-1)*$client->perpage()+($loop->index+1)) }} </th>
                        <td> {{$item->first_name}} </td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->flower_type}}</td>
                        <td>{{$item->sana}}</td>
                        <td>
                            <button class="btn btn-warning"><i class="feather icon-edit"></i></button>
                            <button class="btn btn-danger"><i class="feather icon-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                
              {{$client->links()}}
            </tbody>
        </table>
    </div>
</div>
@endsection