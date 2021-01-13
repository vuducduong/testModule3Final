@extends('black-end.master')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('agency.create')}}" class="btn btn-success">ADD</a>

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Simple Table</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table style="text-align: center" class="table">
                                    <thead class=" text-primary">
                                    <th>Mã số đại lý</th>
                                    <th>Tên đại lý</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Tên người quản lý</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($agencies as $agency)
                                        <tr>
                                            <td>{{$agency->agency_number}}</td>
                                            <td>{{$agency->name}}</td>
                                            <td>{{$agency->phone_number}}</td>
                                            <td>{{$agency->email}}</td>
                                            <td>{{$agency->address}}</td>
                                            <td>{{$agency->manager_name}}</td>
                                            <td>{{$agency->status}}</td>
                                            <td><a href="{{route('agency.edit',$agency->id)}}" class="btn btn-warning">Edit</a>
                                            <a class="btn btn-danger" href="{{route('agency.delete',$agency->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                            >Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>

@endsection
