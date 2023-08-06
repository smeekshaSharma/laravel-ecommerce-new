<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .font_size {
            font_size: 40px;
            padding-bottom: 40px;
        }

        .text_color {
            color: black;
            padding-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.header')
    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        X
                    </button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="div_center">
                <h1 class="font_size">
                    Add Product
                </h1>
                <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_design">
                        <lable>Product Title : </lable>
                        <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
                    </div>
                    <div class="div_design">
                        <lable>Product Description : </lable>
                        <input class="text_color" type="text" name="description" placeholder="Write a description"
                               required="">
                    </div>
                    <div class="div_design">
                        <lable>Product Price : </lable>
                        <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
                    </div>
                    <div class="div_design">
                        <lable>Product Quantity : </lable>
                        <input class="text_color" type="number" name="quantity" min="0" placeholder="Write a quantity"
                               required="">
                    </div>
                    <div class="div_design">
                        <lable>Discount Price : </lable>
                        <input class="text_color" type="number" name="dis_price"
                               placeholder="Write a discount price (if applied)">
                    </div>
                    <div class="div_design">
                        <lable>Product Catagory : </lable>
                        <select class="text_color" name="catagory" required="">
                            <option value="" selected="">
                                Add a Catagory Here
                            </option>
                            @foreach($catagory as $catagory)
                                <option value="{{$catagory->catagory_name}}">
                                    {{$catagory->catagory_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="div_design">
                        <lable>Product Image Here : </lable>
                        <input type="file" name="image" required="">
                    </div>
                    <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('admin.script')
</body>
</html>
