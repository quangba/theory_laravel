<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lear View</title>
</head>
<body>
    @if(session('msg'))
    <div>{{ session('msg') }}</div>
    @endif
    <h1>
        LIST DANH USER
        {{ $title }}
    </h1>
    <a href="{{ route('user.add') }}">Them Nguoi dung</a>
    <hr />
    <table>
        <thead>
            <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Thoi gian</th>

            <th>Action</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($usersList))
            @foreach ($usersList as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->full_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->create_add }}</td>
                <td>
                    <a href="{{ route('user.edit', ['id' => $item->id]) }}">Sua</a>
                    {{-- <a href="{{ route('user.edit', ['id' => $item->id]) }}">Sua</a> --}}
                </td>
                <td>
                    {{-- <a href="">Xoa</a> --}}
                    <a onclick="return confirm('ban chac chan muon xoa?')" href="{{ route('user.delete', ['id' => $item->id]) }}">Xoa</a>
                </td>
              </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">Data not found!!</td>
              </tr>
            @endif
        </tbody>

      </table>
</body>
</html>
