@extends('black-end.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form method="post" action="{{route('agency.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mã số đại lý</label>
                                        <input type="number" name="agency_number" class="form-control"
                                              value="{{$agency->agency_number}}" placeholder="Nhập mã đại lý">
                                        <div class="alert-danger" >{{$errors->first('agency_number')}}</div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên đại lý</label>
                                        <input type="text" name="name" class="form-control"
                                          value="{{$agency->name}}"      placeholder="Nhập tên đại lý">
                                        <div class="alert-danger" >{{$errors->first('name')}}</div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Điện thoại</label>
                                        <input type="text" name="phone_number" class="form-control"
                                              value="{{$agency->phone_number}}" placeholder="Nhập số điện thoại">
                                        <div class="alert-danger" >{{$errors->first('phone_number')}}</div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" name="email" value="{{$agency->email}}" class="form-control" placeholder="Nhập email">
                                        <div class="alert-danger" >{{$errors->first('email')}}</div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ</label>
                                        <input type="text" name="address" class="form-control"
                                              value="{{$agency->address}}" placeholder="Nhập địa chỉ">
                                        <div class="alert-danger" >{{$errors->first('address')}}</div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên người quản lý</label>
                                        <input type="text" name="manager_name" class="form-control"
                                              value="{{$agency->manager_name}}" placeholder="Nhập tên người quản lý">
                                        <div class="alert-danger" >{{$errors->first('manager_name')}}</div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option value="Hoạt động">Hoạt động</option>
                                            <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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

