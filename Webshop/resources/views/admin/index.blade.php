@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Giới thiệu
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>Tip!</h4>

          <p>Đây là trang dành cho tài khoản admin </p>
        </div>
        <div class="callout callout-danger">
          <h4>Cảnh báo!</h4>

          <p>Mọi tác động của bạn sẽ ảnh hưởng trực tiếp đến database</p>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
@endsection