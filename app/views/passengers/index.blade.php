@extends('frame')
@section('content')
    {!! isset($_GET['msg']) ? "<script>alert('". $_GET['msg'] ."')</script>" : ''!!}
    <h3>Danh sach Passengers</h3>
    <button class="btn btn-suggest"><a href="{{BASE_URL . 'passengers/tao'}}">Tạo mới</a></button>
    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Train ID</th>
        <th>Avatar</th>
        <th>Birth_date</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>created_at</th>
        <th>Updated_at</th>
        <th colspan="2">Chuc nang</th>
        </thead>
        <tbody>
        @foreach ($passengers as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->train->name}}</td>
                <td><img style="height: 50px;width: 50px" src="public/img/{{$item->avatar}}" alt=""></td>
                <td>{{$item->birth_date}}</td>
                <td>{{gender($item->gender)}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td> <a href="{{ BASE_URL }}passengers/sua/{{ $item->id }}" class="btn btn-success">sửa</a></td>
                <td> <a href="{{ BASE_URL }}passengers/xoa/{{ $item->id }}" class="btn btn-danger">xóa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection