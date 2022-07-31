@extends('layouts.admin-master', ['pageName'=> 'pending', 'title' => 'Order Pending'])
{{-- @section('title', 'Service') --}}
@section('admin-content')
<main>
    {{-- @php  dd($order) @endphp --}}
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-header">
                <i class="fas fa-list"></i>
                Pending Orders
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Invoice Number</th>
                                <th>Status</th>
                                <th>Total Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($order as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->customer->name}}</td>
                                    <td>{{ $item->customer->phone}}</td>
                                    <td>{{ $item->customer->address}}</td>
                                    <td>{{ $item->invoice_number }}</td>
                                    <td>
                                        @if($item->status == 'p')
                                        <a href="{{ route('pending.state', $item->id) }}" class="btn btn-warning btn-mod-sm text-white">Pending</a>
                                        @else
                                        <a href="#!" class="btn btn-secondary btn-mod-sm text-white">No State</a>
                                        @endif
                                    </td>
                                    <td>{{ $item->total_taka }}</td>
                                    <td>
                                        <a href="{{ route('order-details', $item->id) }}" class="d-inline"><i class="far fa-eye"></i></a>
                                        <a style="padding-left: 5px" href="{{ route('contact.delete', $item->id) }}" class="d-inline" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash" style="color: red"></i></a>  
                                    </td>                          
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Data Not Found</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
