<!-- resources/views/car-delete.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Xóa xe</title>
</head>
<body>
    <h1>Xóa xe</h1>

    <p>Bạn có chắc chắn muốn xóa xe này?</p>

    <form action="{{ route('car.delete', ['id' => $car->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Xóa</button>
    </form>
</body>
</html>
