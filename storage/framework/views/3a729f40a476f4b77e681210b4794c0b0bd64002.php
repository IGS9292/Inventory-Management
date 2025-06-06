<?php $__env->startSection('content'); ?>
<!-- You are: (shop domain name) -->
<!-- <p>You are: <?php echo e($shopDomain ?? Auth::user()->password); ?></p> -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<link rel="stylesheet" href="<?php echo e(url('public/css/style.css?v=igs9091')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
    .loading-span {
        display: inline-block;
        font-size: 16px;
        animation: blink 1.5s infinite;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }
</style>

<style>
    /* General styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    /* Table container */
    .table-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
        position: relative;
    }

    /* Right-side button container */
    .action-right {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 10px;
    }

    /* Right-side button */
    .btn.add {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .btn.add:hover {
        background-color: #0056b3;
    }

    /* Table styles */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    .custom-table thead tr {
        background-color: #007bff;
        color: #fff;
    }

    .custom-table th,
    .custom-table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .custom-table tbody tr:hover {
        background-color: #e6f7ff;
    }

    /* Button styles */
    .btn {
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .btn.edit {
        background-color: #28a745;
        color: #fff;
    }

    .btn.delete {
        background-color: #dc3545;
        color: #fff;
    }

    /* Responsive */
    @media (max-width: 600px) {

        .custom-table th,
        .custom-table td {
            font-size: 14px;
            padding: 10px;
        }

        .btn {
            font-size: 12px;
            padding: 6px 10px;
        }

        .btn.add {
            font-size: 14px;
            padding: 8px 10px;
        }
    }
</style>




<div class="igs_ad_tabs">
    <div class="tab-buttons">
        <button class="active" onclick="openTab(event, 'tab1')">Personalization Assets</button>
        <button onclick="openTab(event, 'tab2')">Personalization Product</button>
        <button onclick="openTab(event, 'tab3')">Orders</button>
        <button onclick="openTab(event, 'tab4')">Setting</button>
        <!-- <button onclick="openTab(event, 'tab5')">Plan</button>
        <button onclick="openTab(event, 'tab6')">Translation</button> -->


    </div>
    <div id="tab1" class="tab-content active">
        <div class="tab1-container">
            <!-- Category List -->
            <div class="category-list">
                <div class="igs-cat-head">
                    <h2>Category Lists</h2>
                    <span class="add-category-btn" onclick="addCategory()">Add Category</span>
                </div>
                <ul id="dy_cat_lists">
                    <span>Loading...</span>
                </ul>
            </div>

            <!-- Images -->
            <div class="p-image-gallery image-gallery">
                <div class="igs-cat-head-right">
                    <div class="right-btn"><span class="add-category-btn" onclick="addImage()">Add Image</span></div>
                    <div class="image-gallery" id="image-gallery">
                        <span class="loading-span" style="">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="tab2" class="tab-content">
        <div class="table-container">
            <div class="action-right">
                <input class="form-control" id="search_product_name" name="search_product_name" placeholder="Search Product">
                <button class="btn add add add-product" onclick="add_prod()">Add New</button>
            </div>
            <table class="custom-table" id="prod_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody_prod">
                
                </tbody>
            </table>
        </div>
    </div>
    <div id="tab3" class="tab-content">
        <table id="data-table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Customize ID</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Varient</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be inserted here by DataTables -->
            </tbody>
        </table>
    </div>

    <div id="tab4" class="tab-content">
    <div class="tab4-tab-content">
    <form action="" enctype="multipart/form-data" id="setting-form">
    <label class="form-label">Bulk Order Minimum Qty <sapn class="span_required">*</sapn></label>
    <input class="form-control" type="number" id="min-qty_igs" value="1" placeholder="Enter Value" name="minimum_qty" min="1" oninput="checkValue(this)"/> 
    <label class="form-label">Bulk Order Maximum Qty <sapn class="span_required">*</sapn></label>
    <input class="form-control" type="number" id="max-qty_igs" value="1" placeholder="Enter Value" name="maximum_qty" min="1" oninput="checkValue(this)"/> 
    <label class="form-label">Image Download Type <sapn class="span_required">*</sapn></label>
    <select class="form-control" name="image_type_dn" id="image_type_dn">
                <option value="png">PNG</option>
                <option value="jpg">JPG</option>
                <option value="jpeg">JPEG</option>
    </select>
    <button type="submit" class="btn add form-control" id="setting_from_btn">Save</button>
    </form>
    </div>
    </div>
    <div id="tab5" class="tab-content">
        <h2>Tab 5 Content</h2>
        <p>This is the content for Tab 5. Feel free to add more tabs!</p>
    </div>
    <div id="tab6" class="tab-content">
        <h2>Tab 6 Content</h2>
        <p>This is the content for Tab 6. Feel free to add more tabs!</p>
    </div>
</div>

<div class="igs-app-footer">App Developed By <a target="_blank" href="https://www.iglobesolution.com/">Iglobe Solutions</a></div>

<div id="categoryModal" class="modal-cat">
    <div class="modal-content-cat">
        <span class="close-cat">&times;</span>
        <h2>Add New Category</h2>
        <input type="text" id="categoryName" placeholder="Enter category name" />
        <div class="submit-btn"><button id="add_submit_cat" onclick="addCategory1()">Add Category</button></div>
    </div>
</div>

<div id="productModal" class="modal-prod">
    <div class="modal-content-prod">
        <span class="close-prod">&times;</span>
        <h2>Add new image to product</h2>
        <form action="" id="product_form" nctype="multipart/form-data">
            <div>
                <label class="form-label">Select Product <sapn class="span_required">*</sapn></label>
                <select class="pproduct-select2 form-control" id="product_select" name="product_name">
                </select>
            </div>

            <div id="dynamic-fields-container">
                <div class="add-more-div">
                    <label class="form-label">Title <sapn class="span_required">*</sapn></label>
                    <!-- <input class="form-control" type="text" id="title" placeholder="title" name="title[]" /> -->
                    <select class="form-control" name="title[]" id="">
                        <option value="Front">Front</option>
                        <option value="Back">Back</option>
                        <option value="Side">Side</option>
                    </select>
                    <label class="form-label">Image <sapn class="span_required">*</sapn></label>
                    <input class="form-control" type="file" name="product_img[]" />
                    <button type="button" onclick="remove_btnn(this)" class="remove-btnn">Remove</button>
                </div>
            </div>
            <div class="add-more-submit">
                <div class="add-more-btn"><span id="add-more-btn">Add More</span></div>
                <div class="submit-btn"><button type="submit" id="add_submit_prod">Submit</button></div>
            </div>
        </form>
    </div>
</div>



<div id="imgModal" class="modal-img">
    <div class="modal-content-img">
        <span class="close-img">&times;</span>
        <h2 id="img_heading">Add New Image</h2>
        <form action="" enctype="multipart/form-data" id="image-upload-form">
            <!-- <img src="<?php echo e(asset('storage/uploads/1735186779_customized-image (1).png')); ?>"  alt="Image" height="50px" weight="10px"> -->
            <input type="hidden" id="cat_img_id" name="cat_id" />
            <input type="file" id="img_ipload" name="image_upload" />
            <div class="submit-btn"><button type="submit" id="add_submit_img">Add Image</button></div>
        </form>
    </div>
</div>

<div id="customConfirm" class="confirm-box">
    <div class="confirm-content">
        <p>Are you sure you want to delete this item?</p>
        <div class="confirm-actions">
            <button id="confirmYes" class="btn btn-primary">Yes</button>
            <button id="confirmNo" class="btn btn-secondary">No</button>
        </div>
    </div>
</div>



<div id="orderviewModal" class="modal-prod">
    <div class="modal-content-orderview">
        <span class="close-orderview">&times;</span>
        <h2>Order View</h2>
        <div id="oder_deatis_igs" class="oder_deatis_igs"></div>
    </div>
</div>


<div id="printareaModal" class="modal-prod">
    <div class="modal-content-print_area">
        <span class="close-print_area">&times;</span>
        <h2>Select Print Area</h2>
        <div id="print_area_igs" class="print_area_igs">
            <canvas id="canvas" width="600" height="400"></canvas>
        </div>
        <input type="hidden" id="rectLeft" placeholder="Left Position" />
        <input type="hidden" id="rectTop" placeholder="Top Position" />
        <input type="hidden" id="rectWidth" placeholder="Width" />
        <input type="hidden" id="rectHeight" placeholder="Height" />

        <input type="hidden" id="image_id" placeholder="Height" />

        <div class="action-right">
        <button class="btn delete" id="print_remove" style="display:none;" onclick="print_confirm('remove')">Remove</button></div>
        <button class="btn add" id="print_confirm" onclick="print_confirm()">Confirm</button></div>
       
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>







<script>

function checkValue(input) {
    if (input.value < 1) {
        input.value = 1;
    }
}

   
   function view_data_img_text(id){
    $("#oder_deatis_igs").html('<span>Please wait...</span>');;
    $.ajax({
            url: 'order_view?id='+id+'&shop='+'<?php echo e(Auth::user()->name); ?>',
            type: 'GET',
            data: {},
            beforeSend: function(xhr) {},
            success: function(response) {
                $("#oder_deatis_igs").html(response.html);
            },
            error: function(xhr, status, error) {
            }
        });
    $('#orderviewModal').show();
     
   }

    $('#search_product_name').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        var rows = $('#prod_table tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            return $(this).is(':visible');
        });


        if (rows.length === 0) {
        $('#no_data_message').show(); 
        } else {
            $('#no_data_message').hide();
        }

    });






    const addMoreButton = document.getElementById('add-more-btn');
    const dynamicFieldsContainer = document.getElementById('dynamic-fields-container');
    let fieldCount = 1;
    addMoreButton.addEventListener('click', () => {
        fieldCount++;
        const newFields = document.createElement('div');
        newFields.classList.add('add-more-div');
        newFields.innerHTML = `
        <label class="form-label">Title <sapn class="span_required">*</sapn> </label>
        <select class="form-control" name="title[]" id="">
                        <option value="Front">Front</option>
                        <option value="Back">Back</option>
                        <option value="Side">Side</option>
                     </select>
        <label class="form-label">Image <sapn class="span_required">*</sapn> </label>
        <input class="form-control" type="file" name="product_img[]" />
        <button type="button" onclick="remove_btnn(this)" class="remove-btnn">Remove</button>
      `;
        // Append the new fields to the container
        dynamicFieldsContainer.appendChild(newFields);
        // Ensure "Remove" buttons are enabled
        toggleRemoveButtons();
    });




    // Remove fields
    //     dynamicFieldsContainer.on("click", ".remove-btnn", function () {
    //         alert("fff");
    //     if ($(".add-more-div").length > 1) {
    //       $(this).closest(".add-more-div").remove();
    //       toggleRemoveButtons();
    //     }
    //   });


    function remove_btnn(button) {
        if ($(".add-more-div").length > 1) {
            $(button).closest(".add-more-div").remove();

        }
        toggleRemoveButtons();
    }

    // Toggle "Remove" buttons
    function toggleRemoveButtons() {
        if ($(".add-more-div").length === 1) {
            $(".remove-btnn").prop("disabled", true).css("background-color", "gray");
        } else {
            $(".remove-btnn").prop("disabled", false).css("background-color", "red");
        }
    }
    // Initialize: Ensure at least one set is present
    toggleRemoveButtons();

    // Form validation on submit
    $("#product_form").on("submit", function(e) {
        let isValid = true;
        $(".error").remove(); // Remove previous error messages
        // Validate select field
        if ($("#product_select").val() === "") {
            $("#product_select").after('<span class="error">Please select a product.</span>');
            isValid = false;
        }
        // Validate all title and image fields
        $("input[name='title[]']").each(function() {
            if ($(this).val().trim() === "") {
                $(this).after('<span class="error">Title is required.</span>');
                isValid = false;
            }
        });
        $("input[name='product_img[]']").each(function() {
            if ($(this).val() === "") {
                $(this).after('<span class="error">Image is required.</span>');
                isValid = false;
            }
        });
        // Prevent form submission if validation fails
        if (!isValid) {
            e.preventDefault();
        } else {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                url: 'product/store', // Laravel route
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function(xhr) {
                    $('#add_submit_prod').text('Please wait..');
                },
                success: function(response) {
                    $('#add_submit_prod').text('Submit');
                    $('#product_form')[0].reset();
                    $('#product_select').trigger('change');



                    if (response.status == '200') {
                        $('#productModal').hide();
                        toastr.options.positionClass = 'toast-top-center';
                        toastr.success((response.msg));
                        $("#tbody_prod").html(response.data_products);
                    } else {
                        toastr.options.positionClass = 'toast-top-center';
                        toastr.error(response.msg);
                    }
                },
                error: function(xhr) {
                    $('#add_submit_prod').text('Submit');
                    toastr.options.positionClass = 'toast-top-center';
                    toastr.error('Something went wrong');
                }
            });
        }

    });
</script>


<script>
    fetch('products')
        .then(response => response.json())
        .then(data => {
            // append data 
            $('#product_select').html(data.html);
        })
        .catch(error => console.error('Error:', error));

    $(document).ready(function() {
        $('.pproduct-select2').select2();
    });


    function add_prod() {
        $('#product_form')[0].reset();
        $("span.error").remove();
        $('#productModal').show();
    }

    let categoryId = '';
    let type = '';
    $('#confirmNo').on('click', function() {
        $('#customConfirm').fadeOut();
    });
    $('#confirmYes').on('click', function() {
        $('#customConfirm').fadeOut();
        $.ajax({
            url: 'categorydelete',
            type: 'POST',
            data: {
                id: categoryId,
                type: type
            },
            beforeSend: function(xhr) {},
            success: function(response) {
                if (response.type == 'category_delete') {
                    $('#cat_' + categoryId).remove();
                    $('#image-gallery').html('');
                }

                if (response.type == 'img_delete') {
                    $('#img_' + categoryId).remove();
                }

                if (response.type == 'product_delete') {
                    $("#tbody_prod").html(response.data);
                }

                if (response.type == 'product_img_delete') {
                    $("#tbody_prod").html(response.data);
                }


            },
            error: function(xhr, status, error) {
                console.error('Error:', error);

            }
        });
    });



    function del_product(id) {
        categoryId = id;
        type = "product_delete";
        $("#customConfirm").fadeIn();
    }

    function delete_prod_img(id) {
        categoryId = id;
        type = "product_img_delete";
        $("#customConfirm").fadeIn();
    }

    function delete_img(id) {
        categoryId = id;
        type = "img_delete";
        $("#customConfirm").fadeIn();
    }

    function delete_cat(id) {
        categoryId = id;
        type = "category_delete";
        $("#customConfirm").fadeIn();
    }

    setTimeout(function() {
        $.ajax({
            url: 'wel_get_data',
            type: 'GET',
            data: {},
            beforeSend: function(xhr) {},
            success: function(response) {
                if (response.c_html == '') {
                    $("#dy_cat_lists").html('<span class="no-cat-igs">No category found</span>');
                    $('#image-gallery').html('<span class="no-image" style="">No image found</span>');
                } else {
                    $("#dy_cat_lists").html(response.c_html);
                    $("#image-gallery").html(response.c_images);
                }
                $("#tbody_prod").html(response.data_products);
                $("#min-qty_igs").val(response.data_setting.min_qty);
                $("#max-qty_igs").val(response.data_setting.max_qty);
                $("#image_type_dn").val(response.data_setting.image_type).trigger('change');
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }, 500);


    

    $('#setting-form').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            url: 'setting_store', // Laravel route
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(xhr) {
                $('#setting_from_btn').text('Please wait..');
            },
            success: function(response) {
                    toastr.options.positionClass = 'toast-top-center';
                    toastr.success(("Data submited successfully"));
                    $("#min-qty_igs").val(response.data.min_qty);
                    $("#max-qty_igs").val(response.data.max_qty);
                    $('#setting_from_btn').text('Save');
            },
            error: function(xhr) {
                $('#setting_from_btn').text('Save');
                toastr.options.positionClass = 'toast-top-center';
                toastr.error('Something went wrong');
            }
        });

    })

    $('#image-upload-form').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            url: 'upload-image', // Laravel route
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(xhr) {
                $('#add_submit_img').text('Please wait..');
            },
            success: function(response) {
                $('#add_submit_img').text('Add image');
                $('#image-upload-form')[0].reset();
                if (response.status == '200') {
                    $('#imgModal').hide();
                    toastr.options.positionClass = 'toast-top-center';
                    toastr.success((response.msg));
                    $('#image-gallery .no-image').remove();
                    $('#image-gallery').prepend(response.data);
                } else {
                    toastr.options.positionClass = 'toast-top-center';
                    toastr.error(response.msg);
                }
            },
            error: function(xhr) {
                $('#add_submit_img').text('Add image');
                toastr.options.positionClass = 'toast-top-center';
                toastr.error('Something went wrong');
            }
        });
    });

    function get_cat_data(cat_id) {
        $('#dy_cat_lists li').removeClass('active');
        $('#cat_' + cat_id).addClass('active');
        $.ajax({
            url: 'catego_img',
            type: 'POST',
            data: {
                id: cat_id,
            },
            beforeSend: function(xhr) {
                $('#image-gallery').html('<span class="loading-span" style="">Loading...</span>');
            },
            success: function(response) {
                $("#image-gallery").html(response.c_images);

                if (response.c_images == '') {
                    $('#image-gallery').html('<span class="no-image" style="">No image found</span>');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });

    }
    // Get the <span> element that closes the modal
    var modal = document.getElementById("categoryModal");
    var modal1 = document.getElementById("imgModal");
    var modal2 = document.getElementById("productModal");
    var modal3 = document.getElementById("orderviewModal");
    var modal4 = document.getElementById("printareaModal");
    var span = document.getElementsByClassName("close-cat")[0];
    var span1 = document.getElementsByClassName("close-img")[0];
    var span2 = document.getElementsByClassName("close-prod")[0];
    var span3 = document.getElementsByClassName("close-orderview")[0];
    var span4 = document.getElementsByClassName("close-print_area")[0];
    span.onclick = function() {
        $('#categoryName').val('');
        modal.style.display = "none";
    }

    span1.onclick = function() {
        modal1.style.display = "none";
        $('#image-upload-form')[0].reset();
    }

    span2.onclick = function() {
        modal2.style.display = "none";
    }

    span3.onclick = function() {
        modal3.style.display = "none";
    }

    span4.onclick = function() {
        modal4.style.display = "none";
    }

    function addCategory() {
        modal.style.display = "block";
    }

    function addImage() {
        var current_cat = $("li.cat_list.active").text();
        var full_id = $("li.cat_list.active").attr("id");
        if (full_id) {
            var cat_id = full_id.split('_')[1];
            $('#cat_img_id').val(cat_id);
        }
        $('#img_heading').text('Add new image to ' + current_cat + ' category');
        modal1.style.display = "block";
    }

    function addCategory1() {
        let cvalue = $('#categoryName').val();
        if (cvalue) {
            $.ajax({
                url: 'categoryadd',
                type: 'POST',
                data: {
                    name: cvalue
                },

                beforeSend: function(xhr) {
                    $('#add_submit_cat').attr('disabled', true);
                    $('#add_submit_cat').text('Please wait..');
                },
                success: function(response) {
                    $('#dy_cat_lists .no-cat-igs').remove();
                    $('#categoryModal').hide();
                    $('#add_submit_cat').text('Add Category');
                    $('#add_submit_cat').attr('disabled', false);
                    $('#dy_cat_lists').prepend(response.html);
                    $('#categoryName').val('');


                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    $('#add_submit_cat').text('Add Category');
                    $('#add_submit_cat').attr('disabled', false);
                }
            });
        } else {
            toastr.options.positionClass = 'toast-top-center';
            toastr.error("Category name is required");
        }
    }

    function openTab(event, tabId) {
        if (tabId == 'tab2') {
            $('#product_form')[0].reset();
            $("span.error").remove();
            // fetch('/products')
            //     .then(response => response.json())
            //     .then(data => {
            //         // append data 
            //         $('#product_select').html(data.html);
            //     })
            //     .catch(error => console.error('Error:', error));
        }

        if (tabId == 'tab3') {
            


            if ($.fn.dataTable.isDataTable('#data-table')) {
                    $('#data-table').DataTable().clear().destroy();
                }

           // setTimeout(function() {
                // Initialize the DataTable

                // var table = $('#data-table').DataTable({
                //     processing: true,
                //     serverSide: true,
                //     ajax: {
                //         url: '/project/custom_all/orders/', // URL to fetch data
                //         method: 'GET',
                //         dataSrc: function(json) {
                //             // This will execute only once and populate the table
                //             return json.data; // This ensures the data is returned properly
                //         }
                //     },
                //     "order": [[1, 'desc']],
                //     columns: [
                //         { data: 'DT_RowIndex'}, // Serial number column
                //         { data: 'order_name' },
                //         { data: 'unique_id' },
                //         { data: 'product_name' },
                //         { data: 'qty' },
                //         { data: 'price' },
                //         { data: 'price' },
                //         { data: 'varient' }
                //         // Add other columns based on your model
                //     ],
                //     pageLength: 10, // Set default number of items per page
                //     bStateSave: true, // To save pagination state in cookies
                // });

               // }, 1000)

                // Define a custom sorting function for the order_name column
                $.fn.dataTable.ext.type.order['order-name-pre'] = function(data) {
                    return parseInt(data.replace('#', ''), 10); // Remove '#' and convert to integer for sorting
                };

                $(document).ready(function() {
                    var table = $('#data-table').DataTable({
                        processing: true,
                        serverSide: true,
                        stateSave: false, 
                        ajax: {
                            url: '/project/custom_all/orders?shop=' + '<?php echo e(Auth::user()->name); ?>',
                            method: 'GET',
                            dataSrc: function(json) {
                                return json.data;
                            }
                        },
                        order: [
                            [1, 'desc']
                        ], // Sort by the order_name column in descending order
                        columns: [{
                                data: 'DT_RowIndex',
                            }, 
                            {
                                data: 'order_name',
                                title: 'Order Name',
                                type: 'order-name' // Apply the custom sorting type
                            },
                            {
                                data: 'unique_id'
                            },
                            {
                                data: 'product_name'
                            },
                            {
                                data: 'qty'
                            },
                            {
                                data: 'varient'
                            },
                            {
                                data: 'view'
                            }
                            // Add other columns as needed
                        ],
                        pageLength: 25, // Set default number of items per page
                        bStateSave: true // Save pagination state in cookies
                        // dom: 'Bfrtip',
                        // initComplete: function() {
                        //     // Prepend the Refresh button after DataTable is fully initialized
                        //     $("#data-table_filter").prepend('<button id="refresh-table" class="btn btn-primary">Refresh</button>');
                            
                        //     // Handle the click event of the refresh button
                        //     $('#refresh-table').click(function() {
                        //         table.ajax.reload(null, false); // Reload the table data without resetting the pagination
                        //     });
                        // }
                    });
                });


                // On button click, load the DataTable
                $('#loadData').click(function() {
                    // Load data on the first click
                    if (!table.data().count()) {
                        table.ajax.reload();
                    }
                });
        
        }


        const tabs = document.querySelectorAll('.tab-content');
        const buttons = document.querySelectorAll('.tab-buttons button');

        tabs.forEach(tab => tab.classList.remove('active'));
        buttons.forEach(button => button.classList.remove('active'));

        document.getElementById(tabId).classList.add('active');
        event.currentTarget.classList.add('active');
    }

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.js"></script>

<script>


// function print_area(id,baseImageUrl){
// var canvas = new fabric.Canvas('canvas');

// fabric.Image.fromURL(baseImageUrl, function (fabricImage) {
//         fabricImage.set({
//             scaleX: canvas.width / fabricImage.width,
//             scaleY: canvas.height / fabricImage.height,
//             selectable: false,
//         });
//         canvas.setBackgroundImage(fabricImage, canvas.renderAll.bind(canvas));
//     }, { crossOrigin: 'anonymous' });

// $("#printareaModal").show();
// }



var canvas = new fabric.Canvas('canvas');

var rectangle = null;
function print_area(id, baseImageUrl) {
    $('#image_id').val(id);
    canvas.clear();
    $('#rectLeft').val('50');
    $('#rectTop').val('50');
    $('#rectWidth').val('100');
    $('#rectHeight').val('100');
    $.ajax({
            url: 'print_area',
            type: 'POST',
            data: {
                type:'data_get',
                id: $('#image_id').val()

            },
            beforeSend: function(xhr) {
               
            },
            success: function(response) {
                if(response.data){
                    const printAreaObject = JSON.parse(response.data);
                    $('#rectLeft').val(printAreaObject.left);
                    $('#rectTop').val(printAreaObject.top);
                    $('#rectWidth').val(printAreaObject.width);
                    $('#rectHeight').val(printAreaObject.height);
                    $('#print_remove').show();  
                }
                drawRectangle();
               
                        },
            error: function(xhr, status, error) {
               
            }
        });

  
      fabric.Image.fromURL(baseImageUrl, function (fabricImage) {
          var scaleX = canvas.width / fabricImage.width;
          var scaleY = canvas.height / fabricImage.height;
          fabricImage.set({
              scaleX: scaleX,
              scaleY: scaleY,
              selectable: false,  // Image should not be selectable
              left: 0,
              top: 0
          });
          canvas.setBackgroundImage(fabricImage, canvas.renderAll.bind(canvas));
      }, { crossOrigin: 'anonymous' });


/****************
    fabric.Image.fromURL(baseImageUrl, function (fabricImage) {
    // Set canvas width and height to match the image's original dimensions
    canvas.setWidth(fabricImage.width);
    canvas.setHeight(fabricImage.height);

    // Set the image as the background without scaling
    fabricImage.set({
        selectable: false,  // Image should not be selectable
        left: 0,
        top: 0
    });

    canvas.setBackgroundImage(fabricImage, canvas.renderAll.bind(canvas));
}, { crossOrigin: 'anonymous' }); ********************/


      $("#printareaModal").show();
     
  }
  
  function drawRectangle() {
      var left = parseInt($('#rectLeft').val(), 10) || 0;
      var top = parseInt($('#rectTop').val(), 10) || 0;
      var width = parseInt($('#rectWidth').val(), 10) || 100;
      var height = parseInt($('#rectHeight').val(), 10) || 100;
      // If a rectangle already exists, remove it
      if (rectangle) {
          canvas.remove(rectangle);
      }
  
      // Create a new rectangle with the given position and size
      rectangle = new fabric.Rect({
        left: left,
        top: top,
        fill: null,  
        width: width,  
        height: height, 
        selectable: true,  
        stroke: 'gray',
        strokeWidth: 0.5,
        hasRotatingPoint: false,  // Disable rotation
        lockRotation: true , // Ensure rotation is locked
        cornerColor: 'blue',
        borderColor: 'yellow',
      });
      // Add the rectangle to the canvas
      canvas.add(rectangle);
      // Update input fields with the current rectangle position and size
      updateRectangleInputs();

      // Listen for changes to the rectangle position and size and update inputs
      rectangle.on('moving', function() {
          updateRectangleInputs();
      });
      rectangle.on('scaling', function() {
          updateRectangleInputs();
      });
  }
  
  function updateRectangleInputs() {
      // Use the scaled width and height of the rectangle
      var scaledWidth = rectangle.width * rectangle.scaleX;
      var scaledHeight = rectangle.height * rectangle.scaleY;
      
      // Update input fields
      $('#rectLeft').val(rectangle.left);
      $('#rectTop').val(rectangle.top);
      $('#rectWidth').val(Math.round(scaledWidth));  // Update width
      $('#rectHeight').val(Math.round(scaledHeight));  // Update height
  }


  function print_confirm(type=''){
    
    $.ajax({
            url: 'print_area',
            type: 'POST',
            data: {
                type:type,
                left: $('#rectLeft').val(),
                top: $('#rectTop').val(),
                width: $('#rectWidth').val(),
                height: $('#rectHeight').val(),
                id: $('#image_id').val()

            },
            beforeSend: function(xhr) {
                if(type=='remove'){
                    $('#print_remove').text('Please wait..');
                }else{
                    $('#print_confirm').text('Please wait..');
                }
                
            },
            success: function(response) {
                if(type=='remove'){
                    $('#print_remove').text('Remove');
                    $('#print_remove').hide();
                    $('#rectLeft').val('50');
                    $('#rectTop').val('50');
                    $('#rectWidth').val('100');
                    $('#rectHeight').val('100');
                    drawRectangle();
                }
                else{
                    $('#print_remove').show();
                    $('#print_confirm').text('Confirm');
                }
                
                    toastr.options.positionClass = 'toast-top-center';
                    toastr.success(('Data save successfully.'));
            },
            error: function(xhr, status, error) {
                $('#print_confirm').text('Confirm');
                $('#print_remove').text('Remove');
            }
        });
   
  }
    
 
    // actions.TitleBar.create(app, {
    //     title: 'Welcome'
    // });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shopify-app::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoiglobeco/public_html/project/resources/views/welcome.blade.php ENDPATH**/ ?>