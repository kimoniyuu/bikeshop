@extends("layouts.master") 
@section('title') BikeShop | เพิ่มข้อมูลรายการสินค้า @stop
@section('content')
<div class="container">
    <h1>เพิ่มประเภทสินค้า </h1>
    <ul class="breadcrumb">
    <li><a href="{{ URL::to('category') }}">หน้าแรก</a></li>
    <li class="active">เพิ่มประเภทสินค้า </li>
    </ul>
    {!! Form::open(array(
        'action' => 'App\Http\Controllers\CategoryController@insert',
        'method'=>'post', 
        'enctype' => 'multipart/form-data')) 
    !!}
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <strong>ข้อมูลประเภทสินค้า </strong>
                </div>
            </div>
            <div class="panel-body">
                <table>
                    <tr>
                        <td>{{ Form::label('name', 'ชื่อประเภทสินค้า ') }}</td>
                        <td>{{ Form::text('name', Request::old('name'), ['class' => 'form-control']) }}</td>
                    </tr>
                </table>
            </div>
            <div class="panel-footer">
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> บันทึก</button>
            </div>
        </div>
    {!! Form::close() !!}
</div>
@endsection