@extends('frame')
@section('content')
    <form action="" enctype="multipart/form-data" method="post">
        <p>
            <label for="">name</label>
            <input type="text" name="name" class="form-control">
            <span style="color: red">{{ isset($error['name']) ? $error['name'] : '' }}</span>
        </p>
        <p>
            <label for="">train_id</label>
            <select name="train_id" id="" class="form-control">
                @foreach($trains as $item)
                    <option value="{{$item->id}}">{{$item->name}} </option>
                @endforeach
            </select>
            <span style="color: red">{{ isset($error['train_id']) ? $error['train_id'] : '' }}</span>
        </p>
        <p>
            <label for="">avatar</label>
            <input type="file" name="avatar" class="form-control">
            <span style="color: red">{{ isset($error['avatar']) ? $error['avatar'] : '' }}</span>
        </p>
        <p>
            <label for="">birth_date</label>
            <input type="date" name="birth_date" class="form-control">
            <span style="color: red">{{ isset($error['birth_date']) ? $error['birth_date'] : '' }}</span>
        </p>
        <p>
            <label for="">gender</label>
            <select name="gender" id="" class="form-control">
                <option value="0">Nam</option>
                <option value="1">Nu</option>
                <option value="2">Khac</option>
            </select>
            <span style="color: red">{{ isset($error['gender']) ? $error['gender'] : '' }}</span>
        </p>
        <p>
            <label for="">phone</label>
            <input type="number" name="phone" class="form-control">
            <span style="color: red">{{ isset($error['phone']) ? $error['phone'] : '' }}</span>
        </p>
        <p>
            <button type="submit" class="btn btn-success">thêm</button>
        </p>
    </form>
@endsection
