@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Danh sách sản phẩm
        </h1>
      </section>
      <div class="box-body">
        <form action="{{route('adminCategory')}}" method="get">
          <div class="input-group box-body">
            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm">
            <span class="input-group-btn">
                  <button type="submit" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
      </div>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="col-3 box-body"><a type="button" class="btn btn-info" href="#">Thêm mới sản phẩm</a></div>  
              <div class="form-group col-sm-4 box-body">
                <label>Loại sản phẩm</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Tất cả</option>
                  @foreach ($dataCategory as $key => $val)
                  <option>{{$val['name']}}</option>
                  @endforeach
                </select>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 15px">STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th style="width: 200px">Tác vụ</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if($data)
                    @foreach ($data as $key => $val)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$val['name']}}</td>
                      <td>{{$val['stock']}}</td>
                      <td>{{$val['price']}}</td>
                      <td>
                        <button type="button" class="btn btn-info">Xem</button>
                        <button type="button" class="btn btn-danger">Sửa</button>
                        <button type="button" class="btn btn-warning">Xóa</button>
                      </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td>Không có dữ liệu</td>
                    </tr>
                    @endif
                  </tbody>
                </table>
                {{$data->links()}}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
@endsection