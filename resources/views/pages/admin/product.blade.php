@extends('layouts.admin-master', ['pageName'=> 'product', 'title' => 'Add Product'])

{{-- @section('title') Add Product @endsection --}}

@push('admin-css')
    <link href="{{ asset('summernote/summernote-bs4.min.css') }}" rel="stylesheet">  
@endpush

@section('admin-content')


<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card my-3">
                    <div class="card-header">
                        @if(@isset($productData))
                        <i class="fas fa-edit mr-1"></i>Update Product
                        @else
                        <i class="fas fa-plus mr-1"></i>Add Product
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ (@$productData) ? route('admin.product.update', $productData->id) : route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="hidden" name="old_image" value="{{ @$productData->image }}">
                            <div class="row">
                                <div class="col-md-7 mb-2">
                                    <label for="name" class="mb-2"> Product Name <span class="text-danger">*</span> </label>
                                    <input type="text" name="name" value="{{ @$productData->name }}" class="form-control form-control-sm mb-2" id="name" placeholder="Enter Product name">
                                    @error('name') <span style="color: red">{{$message}}</span> @enderror

                                    <label for="name" class="mb-2"> Product Description <span class="text-danger">*</span> </label>
                                    <textarea name="description" id="description" rows="4" class="form-control">{{ @$productData->description }}</textarea>
                                    @error('description') <span style="color: red">{{$message}}</span> @enderror
                                </div>

                                <div class="col-md-5 mb-2">

                                    <label for="product_id" class="mb-2"> Product Model </label>
                                    <input type="text" name="product_id" value="{{ @$productData->product_id }}" class="form-control form-control-sm mb-2" id="product_id" placeholder="Enter Product Model">
                                    @error('product_id') <span style="color: red">{{$message}}</span> @enderror

                                    <label for="about_image" class="mb-2">Product Image</label>
                                    <input class="form-control form-control-sm" id="image" type="file" name="image" onchange="mainThambUrl(this)">
                                    <div class="form-group mt-2">
                                        <img class="form-controlo img-thumbnail" src="{{(@$productData) ? asset($productData->image) : asset('uploads/no.png') }}" id="mainThmb" style="width: 150px;height: 120px;">
                                    </div>
                                    @error('image') <span style="color: red">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="clearfix border-top">
                                <div class="float-md-right mt-2">
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                    <button type="submit" class="btn btn-info">{{(@$productData)?'Update':'Create'}}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card my-3">
                    <div class="card-header">
                        <i class="fas fa-list mr-1"></i>
                        Product List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Model</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->product_id }}</td>
                                        <td><img src="{{ asset($item->image) }}" width="30" height="30" alt=""></td>
                                        <td>
                                            <a href="{{ route('admin.product.edit', $item->id) }}" class="btn-sm btn btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.product.delete', $item->id) }}" onclick="return confirm('Are you sure to Delete?')" class="btn-sm btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('admin-js')
<script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>
<script>
    $('#description').summernote({
        tabsize: 2,
        height: 120
    });
</script>

<script>
    function mainThambUrl(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e){
            $('#mainThmb').attr('src',e.target.result).width(150)
                  .height(120);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
</script>

@endpush
