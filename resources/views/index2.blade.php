<!DOCTYPE html>
<html>
<head>
    <title>Quản lý Bài viết</title>
</head>
<body>
    <h1>Danh sách Bài viết</h1>

    <a href="{{ route('blogs.create') }}">Tạo Bài viết mới</a>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <table>
        <tr>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Nội dung</th>
            <th>Thao tác</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->imageBlog }}</td>
                <td>{{ $blog->content }}</td>
                <td>
                    <a href="{{ route('blogs.edit', $blog->id) }}">Chỉnh sửa</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
