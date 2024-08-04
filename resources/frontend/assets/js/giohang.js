function kiemtrasoluong(x) {
  
    var num=parseInt(x.value);
    if((num>0)||(num<11)){
        if(num<0){
            x.value=1;
            alert("Nhập số lượng ít nhất là 1");
        }
        if(num>10){
            x.value=10;
            alert("Nhập số lượng nhiều nhất là 10");
        }
    }else{
        alert("Các bạn chỉ có thể nhập số từ 1 đến 10");
    }
}


function tangsoluong(button) {
    var container = button.closest('.quantity-container');
    var soluong_old = container.querySelector('.quantity-amount');
    var form = document.getElementById('update-cart-form');
    var soluong_new = parseInt(soluong_old.value) + 1;
    if (soluong_new < 11) {
        soluong_old.value = soluong_new;
      // Gọi hàm để cập nhật giỏ hàng
    } else {
        alert("Số lượng không thể lớn hơn 10");
        soluong_new = 10;
    }
    
    var idproduct = parseInt(container.querySelector('.product-id').value);
    document.getElementById('idupdate').value=idproduct;
    document.getElementById('sl').value=soluong_new;
    form.submit();
    capnhatgiohang(idproduct, soluong_new); 
  
}

function giamsoluong(button){
    var container = button.closest('.quantity-container');
    var soluong_old = container.querySelector('.quantity-amount');
    var form = document.getElementById('update-cart-form');
    var soluong_new = parseInt(soluong_old.value) - 1;
    if (soluong_new >= 0) {
        soluong_old.value = soluong_new;
     
    } else {
        alert("Số lượng phải lớn hơn 0");
        soluong_new = 1;
    }
    var idproduct = parseInt(container.querySelector('.product-id').value);
    document.getElementById('idupdate').value=idproduct; //lấy từ khi truyền vào input
    document.getElementById('sl').value=soluong_new;
    form.submit();
    capnhatgiohang(idproduct, soluong_new); // Gọi hàm để cập nhật giỏ hàng
   
}
function capnhatgiohang(id, soluong) {
    console.log("id_products",id);
    $.ajax({
        url: '/internship/cap-nhat-gio-hang/' + id,
        method: 'POST',
        data: { 
            soluong: soluong,
            _token: $('meta[name="csrf-token"]').attr('content')
         },
        success: function(response) {
            console.log("Thành công")
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi nếu có
            console.error(xhr.responseText);
        }
    });
}
function addtocart(button) {
    var productId = $(button).data('product-id'); // Using jQuery to get the data attribute
    // console.log("id",productId);
    $.ajax({
        url: '/internship/them-vao-gio-hang/' + productId,
        method: 'GET', // or 'POST' depending on your route configuration
        success: function(response) {
         
          
            Swal.fire({
                icon: 'success',
                title: 'Thành công',
                html: 'Sản phẩm đã được thêm vào giỏ hàng',
                customClass: {
                    title: 'swal-title',
                    htmlContainer: 'swal-text',
                    confirmButton: 'swal-button',
                    popup: 'custom-popup-class',
                },
                width: '300px',
                height: '250px',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout(function() {
                window.location.reload(); // Reload the page after a short delay
            }, 1600); // Wait for 1 second (1000 milliseconds) before reloading
        },
        error: function(xhr, status, error) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi',
                html: 'Không thể thêm sản phẩm vào giỏ hàng. Vui lòng thử lại sau.',
                customClass: {
                    title: 'swal-title',
                    htmlContainer: 'swal-text',
                    confirmButton: 'swal-button',
                    popup: 'custom-popup-class',
                },
                width: '300px',
                height: '250px',
                showConfirmButton: true,
            });
        }
    });
}
