@extends('frame')
@section('content')
    {!! isset($_GET['msg']) ? "<script>alert('". $_GET['msg'] ."')</script>" : ''!!}
    <h3>Danh sach Train</h3>
<button class="btn btn-suggest"><a href="{{BASE_URL . 'trains/tao'}}">Tạo mới</a></button>
<table class="table table-hover">
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Train Number</th>
    <th>Ticket_price</th>
    <th>Cabin_number</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th colspan="2">Chuc nang</th>
    </thead>
    <tbody>
    @foreach ($trains as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->train_number}}</td>
            <td>{{$item->ticket_price}}</td>
            <td>{{$item->cabin_number}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td> <a href="{{ BASE_URL }}trains/sua/{{ $item->id }}" class="btn btn-success">sửa</a></td>
            <td> <a href="{{ BASE_URL }}trains/xoa/{{ $item->id }}" class="btn btn-danger">xóa</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection