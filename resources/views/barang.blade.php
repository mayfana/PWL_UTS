@extends('main')
@section('title, Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Item List</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{url ('home')}}">Dashboard</a></li>
                            <li><a href="{{url ('manageItem')}}">Item List</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header"> 
            
            <div class="pull-left">
                <a> Item Data </a>

            </div>
            <div class="pull-right">
                <a href="{{url('add')}}" class="btn btn-success " >
                    <i class="fa fa-plus" ></i> add

                </a>

            </div>
            <div class="card-body table-responsive">
                <table class= "table table-bordered" style="size: 100%;" >
                    <thead class="thead-dark">
                        <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Item Code</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Item Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th></th>
                            </tr>
                            
                            <tbody>
                                @foreach ($barang as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->kode_barang}} </td>
                                        <td>{{$item->nama_barang}}</td>
                                        <td>{{$item->kategori_barang}}</td>
                                        <td>{{$item->harga}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td class="text-center">
                                            <a href="{{ url('edit', $item->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{('manageItem/' .$item->id)}}" method="post" class="d-inline" onsubmit="return confirm('Are you sure delete the data?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>


                                        </td>
                                    </tr> 
                                @endforeach
                        </tbody>
                    </thead>
        
                </table>
            </div>

        </div>

    </div>

  
    


</div>

@endsection