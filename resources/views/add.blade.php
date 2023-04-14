@extends('main')
@section('title, Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Item</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{url ('home')}}">Dashboard</a></li>
                            <li><a href="{{url ('manageItem')}}">Item List</a></li>
                            <li><a href="#">Add Item</a></li>
                        </ol>
                    </div>
                </div>
            </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

    <div class="card">
        <div class="card-header"> 
            
            <div class="pull-left">
                <a> Add Item </a>

            </div>
            <div class="pull-right">
                <a href="{{url('manageItem')}}" class="btn btn-secondary btn-sm " >
                    <i class="fa fa-undo" ></i> Back

                </a>

            </div>
        </div>

        <div class="card-body" >
            <div>
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{url('manageItem')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label> Item Code</label>
                                <input type="text" name="code" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Item Name</label>
                                <input type="text" name="name" class="form-control"  autofocus required>
                            </div>
                            <div>
                                    
                                <label> Item Category</label>
                                <div>
                                    <input type="radio" id="food" name="category" value="Food">
                                    <label for="food">Food</label><br>
                                    <input type="radio" id="drink" name="category" value="Drink">
                                    <label for="drink">Drink</label><br>
                                    <input type="radio" id="snack" name="category" value="Snack">
                                    <label for="snack">Snack</label>
                                    </br>
                                    <input type="radio" id="cosmetic" name="category" value="Cosmetic">
                                    <label for="snack">Cosmetic</label>
                                    
                                </div>
        
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="qty" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success text-center" > Save</button>
                        </form>
                        </div>
                    </div>
                </div>  
            </div>
            
        </div>
    </div>

  
    


</div>

@endsection