
// Category Form  Validation 
$(document).ready(function() {
    // Custom validation method for image file types
    $.validator.addMethod("validImage", function(value, element) {
        return this.optional(element) || /\.(jpg|jpeg|png)$/i.test(value);
    }, "Please upload a valid image file (jpg, jpeg, png).");

     // Custom validation method for image size between 20KB and 80KB
     $.validator.addMethod("CatfileSize", function(value, element) {
        if (element.files.length === 0) return true;
        var CatfileSize = element.files[0].size;
        return CatfileSize >= 10240 && CatfileSize <= 81920; // Size in bytes (10KB = 10240 bytes)
    }, "Please upload an image between 10KB and 80KB.");
    
    // Validate the form
    $("#myForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 5,
                maxlength: 30
            },
            description: {
                required: true,
                minlength: 30,
                maxlength: 200
            },

            cat_img: {
                required: true,
                validImage: true,
                CatfileSize: true 
            },
       
        },
        messages: {
            name: {
                required: "Please enter product category name.",
                minlength: "Your product category name must be at least 2 characters long.",
                maxlength: "Your product category name must be less than 30 characters."
            },
     
            description: {
                required: "Please enter category description.",
                minlength: "Your description must be at least 30 characters long.",
                maxlength: "Your description must be less than 200 characters."
            },
     
            cat_img: {
                required: "Please upload an image.",
                validImage: "Please upload a valid image file (jpg, jpeg, png).",
                CatfileSize: "Image size must be between 10KB and 80KB."
            },
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
       
    });
});



// Banner Form  Validation 
$(document).ready(function() {
    // Custom validation method for image file types
    $.validator.addMethod("validImage", function(value, element) {
        return this.optional(element) || /\.(jpg|jpeg|png)$/i.test(value);
    }, "Please upload a valid image file (jpg, jpeg, png).");

     // Custom validation method for image size between 20KB and 80KB
    $.validator.addMethod("fileSize", function(value, element) {
        if (element.files.length === 0) return true;
        var fileSize = element.files[0].size;
        return fileSize >= 20480 && fileSize <= 81920; // Size in bytes
    }, "Please upload an image between 20KB and 80KB.");

    // Validate the form
    $("#bannerForm").validate({
        rules: {
            title: {
                required: true,
            },
            banner_img: {
                required: true,
                validImage: true,
                fileSize: true 
            },
       
        },
        messages: {
            title: {
                required: "Please enter banner title name.",
            },
     
            banner_img: {
                required: "Please upload an banner image.",
                validImage: "Please upload a valid image file (jpg, jpeg, png).",
                fileSize: "Image size must be between 20KB and 80KB."
            },
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
       
    });
});

// Banner Form  Validation 


// Website Form  Validation 
$(document).ready(function() {
    // Custom validation method for image file types
    $.validator.addMethod("validImage", function(value, element) {
        return this.optional(element) || /\.(jpg|jpeg|png)$/i.test(value);
    }, "Please upload a valid image file (jpg, jpeg, png).");

    // Custom validation method for phone number (including optional country code)
    $.validator.addMethod("validPhone", function(value, element) {
        return this.optional(element) || /^\+?\d{10,12}$/.test(value);
    }, "Please enter a valid mobile number (10-12 digits, with optional + for country code).");
     // Custom validation method for image size between 20KB and 80KB
    $.validator.addMethod("fileSize", function(value, element) {
        if (element.files.length === 0) return true;
        var fileSize = element.files[0].size;
        return fileSize >= 20480 && fileSize <= 81920; // Size in bytes
    }, "Please upload an image between 20KB and 80KB.");

    // Validate the form
    $("#webForm").validate({
        rules: {
            web_address: {
                required: true,
                minlength: 10,
                maxlength: 150
            },
            web_email: {
                required: true,
                email: true
            },
            web_mobile: {
                required: true,
                validPhone: true
            },

            web_logo: {
                required: true,
                validImage: true,
                fileSize: true 
            },
       
        },
        messages: {
            web_address: {
                required: "Please enter website address.",
                minlength: "Your website address must be at least 10 characters long.",
                maxlength: "Your website address must be less than 150 characters."
            },
            web_email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
            web_mobile: {
                required: "Please enter website mobile number",
                validPhone: "Please enter a valid  website mobile number (10-15 digits, with optional + for country code)."
            },
            web_logo: {
                required: "Please upload website logo.",
                validImage: "Please upload a valid image file (jpg, jpeg, png).",
                fileSize: "logo size must be between 20KB and 80KB."
            },
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
       
    });
});



// Page Form  Validation 
$(document).ready(function() {
    // Validate the form
    $("#pageForm").validate({
        rules: {
            title: {
                required: true,
                minlength: 5,
                maxlength: 50
            },
            heading: {
                required: true,
                minlength: 30,
                maxlength: 100
            },
            desc: {
                required: true,
                minlength: 100,
                maxlength: 1000
            },
       
        },
        messages: {
            title: {
                required: "Please enter page title name.",
                minlength: "Your page title must be at least 5 characters long.",
                maxlength: "Your page title must be less than 50 characters."
            },
     
            heading: {
                required: "Please enter page heading.",
                minlength: "Your page heading must be at least 30 characters long.",
                maxlength: "Your page heading must be less than 200 characters."
            },

            desc: {
                required: "Please enter page description.",
                minlength: "Your page description must be at least 30 characters long.",
                maxlength: "Your page  must be less than 1000 characters."
            },
     
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
       
    });
});


// Product Form  Validation 
$(document).ready(function() {
    // Custom validation method for image file types
    $.validator.addMethod("validImage", function(value, element) {
        return this.optional(element) || /\.(jpg|jpeg|png)$/i.test(value);
    }, "Please upload a valid image file (jpg, jpeg, png).");

     // Custom validation method for image size between 20KB and 80KB
    $.validator.addMethod("profileSize", function(value, element) {
        if (element.files.length === 0) return true;
        var profileSize = element.files[0].size;
        return profileSize >= 10240 && profileSize <= 81920; // Size in bytes
    }, "Please upload an image between 10KB and 80KB.");

    $("#pro_price").on("keyup", function(){
        var valid = /^\d{0,6}(\.\d{0,4})?$/.test(this.value),
            val = this.value;
        
        if(!valid){
            console.log("Invalid input!");
            this.value = val.substring(0, val.length - 1);
        }
    });

    $("#pro_quantity").on("keyup", function(){
        var valid = /^\d{0,2}(\.\d{0,2})?$/.test(this.value),
            val = this.value;
        
        if(!valid){
            console.log("Invalid input!");
            this.value = val.substring(0, val.length - 1);
        }
    });
    // Validate the form
    $("#ProForm").validate({
     
        rules: {
            pro_name: {
                required: true,
                minlength: 5,
                maxlength: 30
            },
            cat_id: {
                required: true,
            },
            pro_price:{
                required: true,
                minlength: 0.01,
                maxlength: 9999.99
            },

            pro_quantity:{
                required: true,
                minlength: 1,
                maxlength: 100
            },
            pro_desc: {
                required: true,
                minlength: 30,
                maxlength: 200
            },

            pro_img: {
                required: true,
                validImage: true,
                profileSize: true 
            },
       
        },
        messages: {
            pro_name: {
                required: "Please enter product name.",
                minlength: "Your product name must be at least 5 characters long.",
                maxlength: "Your product  name must be less than 30 characters."
            },
            cat_id: {
                required: "Please select product category.",
            },
     
            pro_price: {
                required: "Please enter product price.",
                minlength: "Your product price must be at least 0.01.",
                maxlength: "Your product  price must be less than 9999."
            },
     
            pro_quantity: {
                required: "Please enter product quantity.",
                minlength: "Your product quantity must be at least 1.",
                maxlength: "Your product  quantity must be less than 100."
            },
            pro_desc: {
                required: "Please enter category description.",
                minlength: "Your description must be at least 30 characters long.",
                maxlength: "Your description must be less than 200 characters."
            },
     
            pro_img: {
                required: "Please upload an image.",
                validImage:"Please upload a valid image file (jpg, jpeg, png).",
                profileSize: "Image size must be between 10KB and 80KB."
            },
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
       
    });
});


// Category Image Preview Code
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagepreview').prop('src', e.target.result).show();
            $('#cancel').show(); 
        }
        reader.readAsDataURL(input.files[0]);
     }
    }

$("#cat_img").change(function () {
    readURL(this);
});

$("#cat_img").click(function () {
    $('#imagepreview').attr('src', '');
    $('#cancel').hide(); 
});

$('#imagepreview').click(function() {
    $('#cat_img').replaceWith($('#cat_img').clone(true));
    $('#imagepreview').hide();
    $('#cancel').hide(); 
});

$('#cancel').click(function(e) {
    $('#cat_img').val("");
    $('#imagepreview').attr("src", "images/dammy.png");
    $(this).hide(); 
})
// Category Image Preview Code



// Banner Image Preview Code
function readURL3(input3) {
    if (input3.files && input3.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#bannerpreview').prop('src', e.target.result).show();
            $('#c_banner').show(); 
        }
        reader.readAsDataURL(input3.files[0]);
     }
    }

$("#banner_img").change(function () {
    readURL3(this);
});

$("#banner_img").click(function () {
    $('#bannerpreview').attr('src', '');
    $('#c_banner').hide(); 
});

$('#bannerpreview').click(function() {
    $('#banner_img').replaceWith($('#banner_img').clone(true));
    $('#bannerpreview').hide();
    $('#c_banner').hide(); 
});

$('#c_banner').click(function(e) {
    $('#banner_img').val("");
    $('#bannerpreview').attr("src", "images/banner.jpg");
    $(this).hide(); 
})
// Banner Image Preview Code





// weblogo Preview 
function readURL2(input2) {
    if (input2.files && input2.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#webpreview').prop('src', e.target.result).show();
            $('#cancelweb').show(); 
        }
        reader.readAsDataURL(input2.files[0]);
     }
    }

$("#web_logo").change(function () {
    readURL2(this);
});

$("#web_logo").click(function () {
    $('#webpreview').attr('src', '');
    $('#cancelweb').hide(); 
});

$('#webpreview').click(function() {
    $('#web_logo').replaceWith($('#web_logo').clone(true));
    $('#webpreview').hide();
    $('#cancelweb').hide(); 
});

$('#cancelweb').click(function(e) {
    $('#web_logo').val("");
    $('#webpreview').attr("src", "images/dammy.png");
    $(this).hide(); 
})

// weblogo Preview 



// Product Image Preview Code
function readURL1(input1) {
    if (input1.files && input1.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#pro_imgpreview').prop('src', e.target.result).show();
            $('#cancel2').show(); 
        }
        reader.readAsDataURL(input1.files[0]);
     }
    }

$("#pro_img").change(function () {
    readURL1(this);
});

$("#pro_img").click(function () {
    $('#pro_imgpreview').attr('src', '');
    $('#cancel2').hide(); 
});

$('#pro_imgpreview').click(function() {
    $('#pro_img').replaceWith($('#pro_img').clone(true));
    $('#pro_imgpreview').hide();
    $('#cancel2').hide(); 
});

$('#cancel2').click(function(e) {
    $('#pro_img').val("");
    $('#pro_imgpreview').attr("src", "images/dammy.png");
    $(this).hide(); 
})
// Category Image Preview Code

//Active/Deactive category Button  code
  $(function() { 
          $('.toggle-category').change(function() { 
          var status = $(this).prop('checked') == true ? 1 : 0;  
          var category_id = $(this).data('id');  
          $.ajax({ 
   
              type: "GET", 
              dataType: "json", 
              url: '/changeStatus', 
              data: {'status': status, 'category_id':category_id}, 
              success: function(data){ 
              console.log(data.success) 
           } 
        }); 
     }) 
  }); 

  //Active/Deactive Product Button  code  
    $(function() { 
        $('.toggle-product').change(function() { 
        var status = $(this).prop('checked') == true ? 1 : 0;  
        var product_id = $(this).data('id');  
        $.ajax({ 
 
            type: "GET", 
            dataType: "json", 
            url: '/changeProStatus', 
            data: {'status': status, 'product_id':product_id}, 
            success: function(data){ 
            console.log(data.success) 
         } 
      }); 
   }) 
}); 

  //Active/Deactive Page Button  code  
  $(function() { 
    $('.toggle-page').change(function() { 
    var status = $(this).prop('checked') == true ? 1 : 0;  
    var page_id = $(this).data('id');  
    $.ajax({ 

        type: "GET", 
        dataType: "json", 
        url: '/changePageStatus', 
        data: {'status': status, 'page_id':page_id}, 
        success: function(data){ 
        console.log(data.success) 
     } 
  }); 
}) 
}); 

    //toastr
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000",
    };

   // Delete Confirm Alert 
    function confirmDelete(id) {
        swal({
            title: "Are you sure?",
            text: "You want to delete this product category record.?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm){
            if (isConfirm) {
                // Redirect to delete URL
                window.location.href = '/deletecategory?id=' + id;
            } else {
                swal("Cancelled", "Your category is safe :)", "error");
            }
        });
    }
 //Delete Confirm Alert 

//Delete Product Alert 
 function confirmProDelete(id) {
    swal({
        title: "Are you sure?",
        text: "You want to delete this product record.?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function(isConfirm){
        if (isConfirm) {
            // Redirect to delete URL
            window.location.href = '/deleteproduct?id=' + id;
        } else {
            swal("Cancelled", "Your product is safe :)", "error");
        }
    });
}
//Delete Product Alert 

 
// databale
 $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


// Logout Confirm Alert
  function confirmLogout() {
    swal({
        title: "Are you sure?",
        text: "You want to log out?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, log out!",
        cancelButtonText: "No, cancel!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function(isConfirm) {
        if (isConfirm) {
            // Redirect to logout URL
            window.location.href = '/logout'; // Change to your actual logout URL
        } else {
            swal("Cancelled", "You are still logged in :)", "error");
        }
    });
}



// Delete Category Details//
           public function deleteCategory(Request $request){
            $id=$request->query('id');
            $data=Category::find($id);

            if ($data) 
            {
                $cat_imgPath = 'backend/images/'.$data->cat_img;
                // Delete the image file if it exists
                if (file_exists($cat_imgPath)) 
                {
                    unlink($cat_imgPath);
                }
        
            }
            $data->trash = 1;
            $data->update();
    
           return redirect('/category')->with('status','Product category details have been deleted successfully!!');
   
           }