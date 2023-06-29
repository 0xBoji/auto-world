<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
    <style>
        /* CSS cho bố cục responsive */
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between; /* Để tạo khoảng trống ở cả hai bên */
                margin:100px; /* Để căn cách màn hình hai bên */
                }

            .item {
                flex: 0 0 calc(33.33% - 20px); /* Chia thành 3 cột và căn cách */
                padding: 10px;
                box-sizing: border-box;
                }

            @media screen and (max-width: 767px) {
            .item {
                flex: 0 0 100%; /* Khi màn hình nhỏ hơn, một cột trên mỗi hàng */
                    }
                }

            img {
                width: 100px;
                height: 100px;
                }
    </style>
</head>
<body>
    <div class="container" id="carList"></div>

    <script>
        fetch('/api/cars')
            .then(response => response.json())
            .then(data => {
                const carList = document.getElementById('carList');

                data.forEach(car => {
                    // Tạo một div mới cho mỗi xe
                    const carDiv = document.createElement('div');
                    carDiv.classList.add('item');

                    // Tạo HTML để hiển thị thông tin xe
                    const carHTML = `
                        <h2>${car.carName}</h2>
                        <p>ID: ${car.carID}</p>
                        <p>Brand: ${car.carBrand}</p>
                        <p>Model: ${car.carModel}</p>
                        <p>Price: ${car.carPrice}</p>
                        <p>Year: ${car.carYear}</p>
                        <img src="upload/${car.carImage}" alt="Car Image" />
                    `;

                    // Đưa HTML vào div của xe
                    carDiv.innerHTML = carHTML;

                    // Thêm div vào danh sách xe
                    carList.appendChild(carDiv);
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
