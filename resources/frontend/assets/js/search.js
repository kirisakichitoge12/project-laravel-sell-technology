const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');
let filteredCountries = []; // Di chuyển biến này ra ngoài phạm vi của hàm displayResults

const countries = [
'iPhone 15 Pro 128GB', 
'iPad Pro 11 inch 2022 M2 Wifi 128GB',
'iPad Gen 10 10.9 inch 2022 Wifi 64GB',
'Smart Tivi LG 4K 50 inch 50UQ7050PSA', 
'Smart Tivi NanoCell LG 4K 55 inch 55NANO76SQA',
'Google Tivi TCL 4K 55 inch 55P745',
'Laptop Acer Swift Go AI 2024 Gen 2 SFG14-73-53X7',
'Laptop Acer Swift Go AI 2024 Gen 2 SFG14-73-53X7',
'Laptop Acer Swift Go AI 2024 Gen 2 SFG14-73-53X7',
'Mainboard GIGABYTE B760M DS3H DDR4',
'CPU INTEL Core i5-12400 (6C/12T, 2.50 GHz - 4.40 GHz, 18MB) - 1700',
'Máy lạnh Sharp Inverter 1 HP AH-X10ZEW',
'Máy lạnh Nagakawa 1 HP NS-C09R2T30',
'Tai nghe In-Ear JBL C200SI',
'Tai nghe In-Ear JBL C200SI',
'Máy lạnh LG Inverter 1.5 HP V13WIN1',
'iPad Air 5 10.9 inch 2022 M1 Wifi 128GB',
'Máy lạnh LG Inverter 1 HP V10WIN1',
'Nguồn máy tính MSI MAG A650BN - 650W - 80 Plus Bronze',
'Chuột gaming Logitech G102 Gen2 Lightsync',
'Google Tivi TCL 4K 55 inch 55P745'
];

function displayResults(searchTerm) {
    filteredCountries = countries.filter(country =>
        country.toLowerCase().includes(searchTerm.toLowerCase())
    );
    const html = filteredCountries.map(country =>
        `<li>
        <svg  fill="none" viewBox="0 0 24 24" size="20s" class="css-9w5ue6" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 10.5508C5.5 7.7613 7.7613 5.5 10.5507 5.5C13.3402 5.5 15.6015 7.7613 15.6015 10.5508C15.6015 11.9258 15.052 13.1725 14.1607 14.0832C14.147 14.0951 14.1336 14.1076 14.1206 14.1206C14.1075 14.1336 14.0951 14.147 14.0832 14.1607C13.1724 15.0521 11.9258 15.6015 10.5507 15.6015C7.7613 15.6015 5.5 13.3402 5.5 10.5508ZM14.6222 15.6829C13.5042 16.571 12.0894 17.1015 10.5507 17.1015C6.93286 17.1015 4 14.1686 4 10.5508C4 6.93288 6.93286 4 10.5507 4C14.1686 4 17.1015 6.93288 17.1015 10.5508C17.1015 12.0895 16.571 13.5043 15.6829 14.6222L19.7812 18.7206C20.0741 19.0135 20.0741 19.4884 19.7812 19.7813C19.4883 20.0741 19.0134 20.0741 18.7205 19.7813L14.6222 15.6829Z" fill="#82869E"></path></svg>
        ${country}</li>`
    ).join('');
    searchResults.innerHTML = html;
}

searchInput.addEventListener('input', () => {
    if (searchInput.value.length > 0) {
        searchResults.style.display = 'block';
        displayResults(searchInput.value);
    } else {
        searchResults.style.display = 'none';
    }
});

searchResults.addEventListener('click', (e) => {
    if (e.target.tagName === 'LI') {
        searchInput.value = e.target.textContent.trim();
        searchResults.style.display = 'none';
    }
});

let selectedIndex = -1; // Biến lưu trữ chỉ số của phần tử được chọn

searchInput.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowDown') { // Khi nhấn phím mũi tên xuống
        e.preventDefault(); // Ngăn chặn hành động mặc định của trình duyệt
        selectedIndex = Math.min(selectedIndex + 1, filteredCountries.length - 1); // Tăng chỉ số lên một, giới hạn ở cuối danh sách
        updateSelectedResult();
    } else if (e.key === 'ArrowUp') { // Khi nhấn phím mũi tên lên
        e.preventDefault(); // Ngăn chặn hành động mặc định của trình duyệt
        selectedIndex = Math.max(selectedIndex - 1, -1); // Giảm chỉ số một, giới hạn ở đầu danh sách
        updateSelectedResult();
    }

    else if (e.key === 'Enter') {
        const selectedResult = document.querySelector('#searchResults li.selected');
        if (selectedResult) {
            searchInput.value = selectedResult.textContent.trim();
            searchResults.style.display = 'none';
        }
    }
});

function updateSelectedResult() {
    const results = document.querySelectorAll('#searchResults li');
    results.forEach((result, index) => {
        result.classList.toggle('selected', index === selectedIndex); // Thêm class 'selected' cho phần tử được chọn
    });
    if (selectedIndex !== -1) { // Nếu có phần tử được chọn
        results[selectedIndex].scrollIntoView({ behavior: 'smooth', block: 'nearest' }); // Cuộn đến vị trí của phần tử được chọn
    }
}


