<!DOCTYPE html>
<html>
<head>
    <title>Car Loan Calculator</title>
    <style>
        .item {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="banglaisuat" style="display: flex;">
        <div class="bg-white shadow-section w-100">
            <div class="noidung">
                <form class="m-4" style="width: 30%;">
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control" name="hang-xe" id="hang-xe"></select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <select class="form-control" name="ten-xe" id="ten-xe"></select>
                    </div>
                    <div class="form-group">
                        <label>Price of car</label>
                        <input type="text" class="form-control" name="gia-xe" id="gia-xe" disabled>
                    </div>
                    <div class="form-group">
                        <label>Percent</label>
                        <select class="form-control-1" name="so-tien-vay" id="so-tien-vay">
                            <option value="60">60%</option>
                            <option value="50">50%</option>
                            <option value="40">40%</option>
                            <option value="30">30%</option>
                            <option value="20">20%</option>
                            <option value="10">10%</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>You can borrow</label>
                        <input type="text" class="input form-control anchuot" readonly="" value="VND" name="tien-vay-no" id="tongtienvay">
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <select class="form-control-1" name="thoi-gian-tra" id="thoi-gian-tra">
                            <option value="6">6 năm</option>
                            <option value="5">5 năm</option>
                            <option value="4">4 năm</option>
                            <option value="3">3 năm</option>
                            <option value="2">2 năm</option>
                            <option value="1">1 năm</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Interest Rate</label>
                        <select class="form-control-1" name="lai-suat" id="lai-suat">
                            <option value="7.5">Agribank: 7.5%</option>
                            <option value="7.7">Vietcombank: 7.7%</option>
                            <option value="7.5">Vietinbank: 7.5%</option>
                            <option value="8.9">TP Bank: 8.9%</option>
                        </select>
                    </div>
                </form>
                <div class="m-5">
                    <div class="boxketqua">
                        <p>Principal paid annually: <span id="totalloan" style="color: red;">0</span> VND</p>
                        <p>Interest paid annually: <span id="totalprofit" style="color: red;">0</span> VND</p>
                        <p>Annual payment amount: <span id="totalmoneytopay" style="color: red;">0</span> VND</p>
                    </div>
                    <div class="button-center">
                        <input type="button" value="Calculate" onclick="calculateLoan()">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Hàm để ngăn cách đơn vị tiền
        function formatCurrencyVND(value) {
            let format = value.toLocaleString('it-IT', { style: 'currency', currency: 'VND' });
            format = format.split('');
            format.splice(-3);
            return format.join('');
        }
    
        function tienvayduoc() {
            let vaytoida = parseInt(document.getElementById('so-tien-vay').value || 0) / 100;
            let tienxe = parseInt(document.getElementById('gia-xe').value || 0);
            let ketqua = formatCurrencyVND(parseInt(vaytoida * tienxe));
            document.getElementById('tongtienvay').value = ketqua;
        }
    
        function tinhtien() {
            let vaytoida = parseInt(document.getElementById('so-tien-vay').value || 0) / 100;
            let tienxe = parseInt(document.getElementById('gia-xe').value || 0);
            let thoigianvay = parseInt(document.getElementById('thoi-gian-tra').value || 0);
            let laisuat = parseInt(document.getElementById('lai-suat').value || 0) / 100;
            let totalloan = vaytoida * tienxe;
            let principal = formatCurrencyVND(parseFloat(totalloan / thoigianvay));
            let profit = formatCurrencyVND(parseFloat(totalloan * laisuat / thoigianvay));
            let tiengoc = parseFloat(totalloan / thoigianvay);
            let tienlai = parseFloat(totalloan * laisuat / thoigianvay);
            let tongtien = formatCurrencyVND(parseFloat(tiengoc + tienlai));
    
            document.getElementById('totalloan').innerHTML = principal;
            document.getElementById('totalprofit').innerHTML = profit;
            document.getElementById('totalmoneytopay').innerHTML = tongtien;
        }
    </script>
        <script>
            fetch('/api/cars')
                .then(response => response.json())
                .then(data => {
                    const brandSelect = document.getElementById('hang-xe');
                    const nameSelect = document.getElementById('ten-xe');
                    const priceInput = document.getElementById('gia-xe');
                    const brandList = [];

                    data.forEach(car => {
                        const brand = car.carBrand;
                        if (!brandList.includes(brand)) {
                            brandList.push(brand);
                            const brandOption = document.createElement('option');
                            brandOption.textContent = brand;
                            brandSelect.appendChild(brandOption);
                        }
                    });

                    brandSelect.addEventListener('change', populateCarNames);

                    function populateCarNames() {
                        const selectedBrand = brandSelect.value;
                        nameSelect.innerHTML = '';
                        priceInput.value = '';

                        const filteredCars = data.filter(car => car.carBrand === selectedBrand);

                        filteredCars.forEach(car => {
                            const nameOption = document.createElement('option');
                            nameOption.textContent = car.carName;
                            nameSelect.appendChild(nameOption);
                        });
                    }

                    nameSelect.addEventListener('change', populateCarPrice);

                    function populateCarPrice() {
                        const selectedBrand = brandSelect.value;
                        const selectedCarName = nameSelect.value;

                        const selectedCar = data.find(car => car.carBrand === selectedBrand && car.carName === selectedCarName);

                        if (selectedCar) {
                            priceInput.value = selectedCar.carPrice;
                        }
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
</body>
</html>
