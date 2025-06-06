<?php $__env->startSection('content'); ?>
<!-- You are: (shop domain name) -->
<!-- <p>You are: <?php echo e($shopDomain ?? Auth::user()->password); ?></p> -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<link rel="stylesheet" href="<?php echo e(url('public/css/style.css?v=2.1')); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- DataTables CSS & JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.0.1/ckeditor.js"></script>



<style>
 .cke_editable.cke_source {
  white-space: pre-wrap !important;
  word-wrap: break-word !important;
}
</style>



<style>
         
         .email_template_submit{
             float:right;
             margin-top: 10px;
         }
         
         .email_heading {
            margin: 15px 0px;
            font-size: 15px;
            font-weight: 500;
        }

        div#variant-table-container table td p {
             width: 90px;
             font-size: small !important;
             padding: 1px;
                }


       .product-checkbox-anah-all,.product-checkbox-anah{
            cursor:pointer;   
          }

       table#product-list th {
            padding-bottom: 16px;
       }
        .varients-header {
            display: flex;
            justify-content: space-between;
        }

        #variant-modal, #overlay {
            display: none;
            position: fixed;
            z-index: 1001;
        }
        #variant-modal {
            background: white;
            padding: 20px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-height: 80vh;
            overflow-y: auto;
            width: 100%;
            max-width: 750px;
        }
        #variant-modal table {
            width: 100%;
        }
        #variant-modal table td:first-child, #variant-modal table th:first-child {
            text-align: left;
        }
        #overlay {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
        }
        .filter-group {
            margin-right: 20px;
            display: inline-block;
            vertical-align: top;
        }
    </style>
    
    
    <style>
        
        
        #filters{
            display:flex;
        }
        
        #productsTable_info , a#productsTable_previous {
            margin-top:2px !important;
        }
         
         /** Datatable New Loader set remove default **/
         
          .dataTables_processing::before,
            .dataTables_processing span,
            .dataTables_processing > div:not(.custom-loader-wrapper) {
                display: none !important;
            }
        
            .custom-loader-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 100vw;
                background: rgba(255, 255, 255, 0.8);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }
            /** End code **/
         
        
        .inventory_qty_anhh{
            width:55%;
            display: flex;
            margin: auto;
        }
        .sorting_anhaa_customm{
          display:flex;
          justify-content: center;
          margin-left: 121px;
          width: 55%;
          margin: auto;  
        }
        
        .inventory_qty_anhh table td.first-td-img-anh {
               display: flex;
               
            
        }
        
        
        
        .inventory_qty_anhh table td {
             cursor:pointer;
               
            
        }
        
        
        
        .inventory_qty_anhh table td p {
               margin-top: 19px;
            
        }
        .inventory_qty_anhh table td img {
            margin-right: 50px;
            border-radius: 6px;
            margin-left: 40px;
        
            
        }
        
        .btn-primary{
           background:#000000 !important; 
           border: 1px solid #000000 !important; 
        }
        
        .form-check-input:checked {
            background-color: #000000 !important; 
            border-color: #000000 !important; 
        }
        
        .igs-app-footer a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
        }
        
        input,select{
            outline: none !important; 
            box-shadow: none !important; 
            border-color: #dfdfdf !important; 
        }
        
        
        
        
           
        
        .loader-overlay {
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(255, 255, 255, 0.7);
              z-index: 9999;
              display: none; 
            }
        
            .loader-overlay.active {
              display: flex; 
              justify-content: center;
              align-items: center;
            }
            
            #productsTableAutomatic_length{
              margin-bottom: 31px !important;
            }
            
            #productsTable_filter{
                display: none !important;
            }
            
            #productsTable_length{
                margin-top: -60px !important;
            }
            .custom-search-anh {
               justify-content: end;
           }
            table .odd{
                background: #ececec!important;
            }
            .sales_chaneel{
                float: inline-end;
                position: relative;
                padding: 19px;
                bottom: 46px;
                background: #fbfbfb;
            }
            #channelForm button{
                width: 80px;
                padding-top: 1px;
                margin-left: 20px;
            
            }
            
            .modal-header{
                display: flex;
                justify-content: space-between;
           }
           button.close {
               border: none;
            background: transparent;
            font-size: 28px;
            color: #333;
            transition: transform 0.2s ease, color 0.2s ease;
           }
           
           button.close:hover {
            color: #ff0000;
            transform: scale(1.2); 
            cursor: pointer;
        }
        
        table.table.table-bordered.inventory_qty-anah th ,table.table.table-bordered.inventory_qty-anah td  {
            text-align:center;
        }
        
        #productsTable thead , #productsTableAutomatic thead{
            background: #000000 !important;
            color: #ffffff !important;
        }
        
        #product_modal_data table td p {
            font-size:small !important;
        }
        
        
        
        #product_modal_data table td:first-child {
              font-weight: bold;
        }
        
        
    </style>


<div class="igs_ad_tabs">
    <div class="tab-buttons">
        <button id="cus-product-igs" class="active" onclick="openTab(event, 'tab1')">Products Sales Channel Update</button>
        <button onclick="openTab(event, 'tab2')">Collections Sales Channel Update</button>
        <button onclick="openTab(event, 'tab3')">Sort Inventory Wise</button>
        <button onclick="openTab(event, 'tab4')">Setting</button>
        <!-- <button onclick="openTab(event, 'tab5')">Plan</button>
        <button onclick="openTab(event, 'tab6')">Translation</button> -->


    </div>
    
    <div id="tab1" class="tab-content active">
        <div class="tab1-container">
            <!-- Custom Filters -->
    <div class="row mb-3 custom-search-anh">
        <div class="col-md-2">
           
            <input type="text" id="title_search" class="form-control" placeholder="Search Product">
        </div>
        <div class="col-md-2" style="width: 11.666667%;">
            <select id="inventory_sort" class="form-control">
                <option value="">-- Inventory Sort --</option>
                <option value="asc">Low to High</option>
                <option value="desc">High to Low</option>
            </select>
        </div>
    </div>

        <table id="productsTable" class="table-bordered">
        <thead>
            <tr>
                   <th>#</th>
                <th>Product</th>
                <th>Vendor</th>
                <th>Price</th>
                <th>Inventory</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
    </div>
    </div>
    
    <div id="tab2" class="tab-content">
        <div class="row mb-3">
           <div class="col-md-2">
                <select id="collection-select" class="form-select">
                <option value="">--Select Collection--</option>
                </select>
            </div>
            <div class="col-md-8">
                <div id="filters" style="display:none;"></div>
            </div>
            <div class="col-md-2">
                <select id="qty-sort" style="display:none;" class="form-select">
                <option value="">--Sort by Quantity--</option>
                <option value="low-to-high">Low to High</option>
                <option value="high-to-low">High to Low</option>
                <!--<option value="out-of-stock">Out of Stock First</option>-->
                </select>
            </div>
            
            <div style="display:none;" id="bulk_sales_updte" class="col-md-6"><button class="btn btn-primary mt-2" onclick="sales_channel_update()">Update Sales Channel</button></div>
                
       </div>
    
    <table  id="product-list" class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th style="width: 40px;"> <input type="checkbox" class="product-checkbox-anah-all" value=""> </th>
          <th>Product</th>
          <th>Vendor</th>
          <th>Sales Channel</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <tr>
               <td colspan="5" style="text-align: center;"> No Record Found..</td>
          </tr>
      </tbody>
   </table>
   
    </div>

    <div id="tab3" class="tab-content">
         <form id="sorting_form_submitt" method="POST" action="collections_update">
    <div class="table-container sorting_anhaa_customm">
          <div class="col-md-4">
           <select id="all_collections" class="form-select" name="collection_id" onchange="product_get();">
                <option value="">-- Select Collection --</option>
            </select>
           </div>
           
        <div class="col-md-3 ms-2">
            <select id="inventory_sort_col" class="form-select" onchange="product_get();">
                <option value="">-- Inventory Sort --</option>
                <option value="asc">Low to High</option>
                <option value="desc">High to Low</option>
            </select>
         </div>
         
           <div class="col-md-2 ms-2" id="sorting_submit" style="display:none;">
             <button type="submit" class="btn btn-primary">Update</button>
          </div>
             
     </div>
     
     
    
     
      <div class="table-container mt-4 inventory_qty_anhh">
     <table class="table table-bordered inventory_qty-anah">
      <thead class="table-dark">
        <tr>
          <th style="width: 40px;"></th>
          <th>Product</th>
          <th>Inventory</th>
        </tr>
      </thead>
      <tbody id="sortableTable">
        
          <tr>
          <td colspan="3" style="text-align: center; padding: 12px; color: #888;">
            No data found
          </td>
        </tr>
        
      </tbody>
   </table>
    
 


    </div>
    </form>
    
  </div>

    <div id="tab4" class="tab-content">
        <div class="row">
            <div class="col-md-12">
        <div class="email_heading"> Notification Email Template </div>
       <form method="POST" id="email_template_form" action="">
        <?php echo csrf_field(); ?>
        <textarea name="content" id="editor"></textarea>
        <button type="submit" class="btn btn-primary email_template_submit" >Submit</button>
      </form>
      </div>
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



<div class="modal fade" id="productQtyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Varients Wise Inventory </h5>
        <button type="button" class="close"  data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="product_modal_data" class="modal-body">
        This is a large modal content loaded from the server.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="loader" class="loader-overlay">
  <div class="spinner-grow text-dark" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>


<div class="igs-app-footer">App Developed By <a target="_blank" href="https://anahmarketing.com/">ANAH MARKETING & INNOVATIONS</a> © 2025. All rights reserved.</div>




<div class="modal fade" id="salesChannelModal" tabindex="-1" aria-labelledby="salesChannelModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="salesChannelModalLabel">Select Sales Channels</h5>
        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body" id="salesChannelList">

      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="updateSalesChannels">Update</button>
      </div>
      
    </div>
  </div>
</div>











<div id="overlay"></div>
    <div id="variant-modal">
        <div class="varients-header" >
        <h5 style="text-align:center;font-size:20px;margin-bottom:20px;">Matching Variants</h5>
        <button type="button" class="close" onclick="closeModal()" style="margin-top: -37px;">
          <span aria-hidden="true">×</span>
        </button>
        </div>
        <div id="variant-table-container"></div>
        <p id="total-inventory" style="margin-top: 10px;"></p>
        <button style="float: right; margin-top: -44px;" class="btn btn-secondary" onclick="closeModal()">Close</button>
    </div>
    




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

 <script>
          CKEDITOR.replace('editor', {
            height: 400,
          });
      
              
        $('#email_template_form').on('submit', function (e) {
            e.preventDefault();
                const notyf = new Notyf({
                  position: {
                    x: 'center',
                    y: 'bottom',
                  }
                });
                
            var content = CKEDITOR.instances.editor.getData();
            var formData = {
                _token: $('input[name="_token"]').val(),
                content: content
            };
          document.getElementById('loader').classList.add('active');
            $.ajax({
                url: 'https://thegemart.in/Inventory/email_template_setting',
                type: 'POST',
                data: formData,
                success: function (response) {
                    document.getElementById('loader').classList.remove('active');
                    notyf.success('Data Updated Succesfully.');
                },
                error: function (xhr, status, error) {
                   document.getElementById('loader').classList.remove('active');
                   notyf.error('Something went wrong.');
                }
            });
        });

    </script>
    

<script>


$(document).on('click', '#updateSalesChannels', function () {
     document.getElementById('loader').classList.add('active');
  const selectedChannels = [];
  $('.sales-channel:checked').each(function () {
    selectedChannels.push($(this).val());
  });

  const selectedProductIds = [];
  $('.product-checkbox-anah:checked').each(function () {
    selectedProductIds.push($(this).val());
  });

  const payload = {
    product_ids: selectedProductIds,
    sales_channels: selectedChannels
  };

  $.ajax({
    url: 'https://thegemart.in/Inventory/update-product-sales-channels-bulk',
    method: 'POST',
    data: payload,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (response) {
    $("#bulk_sales_updte").hide();
      $("#collection-select").trigger('change');
      $('#salesChannelModal').modal('hide');
      // document.getElementById('loader').classList.remove('active');
    },
    error: function (xhr) {
      console.error(xhr.responseText);
       document.getElementById('loader').classList.remove('active');
    }
  });
});



function sales_channel_update(){
    $('.sales-channel').prop('checked', false);
    $("#salesChannelModal").modal('show');
}
 
    function toggleButton111() {
      const count = $('.product-checkbox-anah:checked').length;
      if (count > 0) {
        $('#bulk_sales_updte').show();
      } else {
        $('#bulk_sales_updte').hide();
      }
    }

    //   $(document).on('change', '.product-checkbox-anah, .product-checkbox-anah-all', function () {
    //       if ($(this).hasClass('product-checkbox-anah-all')) {
    //         const isChecked = $(this).is(':checked');
    //         $('.product-checkbox-anah').prop('checked', isChecked);
    //       }
        
    //       const count = $('.product-checkbox-anah:checked').length;
    //       if (count > 0) {
    //         $('#bulk_sales_updte').show();
    //       } else {
    //         $('#bulk_sales_updte').hide();
    //       }
    //     });
    
    
    $(document).on('change', '.product-checkbox-anah, .product-checkbox-anah-all', function () {
          if ($(this).hasClass('product-checkbox-anah-all')) {
            const isChecked = $(this).is(':checked');
            $('.product-checkbox-anah').prop('checked', isChecked);
          } else {
            const total = $('.product-checkbox-anah').length;
            const checked = $('.product-checkbox-anah:checked').length;
        
            if (checked === total) {
              $('.product-checkbox-anah-all').prop('checked', true);
            } else {
              $('.product-checkbox-anah-all').prop('checked', false);
            }
          }
        
          const count = $('.product-checkbox-anah:checked').length;
          if (count > 0) {
            $('#bulk_sales_updte').show();
          } else {
            $('#bulk_sales_updte').hide();
          }
        });




    toggleButton111();

</script>


<script>
        let allProducts = [];
        let totalQty = 0;
        function closeModal() {
            $('#variant-modal, #overlay').hide();
        }

        // function showVariants(index) {
           
        //     let variants = filteredProducts[index].variants;
        //     let tbody = $('#variant-list').empty();
        //     variants.forEach(v => {
        //         totalQty += v.inventoryQuantity;
        //         tbody.append(`<tr><td>${v.title}</td><td>${v.inventoryQuantity}</td></tr>`);
        //     });
        //     tbody.append(`<p style="margin-top: 10px;"><strong>Total Inventory:</strong> ${totalQty}</p>`);
        //     $('#overlay, #variant-modal').show();
        // }
        
        
         function showVariants(index) {
    const variants = filteredProducts[index].variants;
    if (!variants.length) return;

    let totalQty = 0;
    const colSet = new Set(); // Sizes (first option)
    const rowSet = new Set(); // Red / Cotton etc
    const matrix = {};

    variants.forEach(v => {
        const opts = v.selectedOptions;

        const colKey = opts[0].value; // Size: L, M, XL...
        const rowKey = opts.slice(1).map(opt => opt.value).join(' / ') || '-'; // Color/Material...

        colSet.add(colKey);
        rowSet.add(rowKey);

        matrix[rowKey] = matrix[rowKey] || {};
        matrix[rowKey][colKey] = v.inventoryQuantity;

        totalQty += v.inventoryQuantity;
    });

    const cols = Array.from(colSet);
    const rows = Array.from(rowSet);

    let html = `<table class="table table-bordered" style="border-collapse: collapse; text-align: center;">`;
    html += `<thead><tr><th></th>${cols.map(c => `<th>${c}</th>`).join('')}</tr></thead><tbody>`;

    rows.forEach(rowKey => {
        html += `<tr><td><strong>${rowKey}</strong></td>`;
        cols.forEach(colKey => {
            const qty = matrix[rowKey]?.[colKey];
            let value = qty !== undefined ? qty : '-';
            if(value == '0'){
                value= 'Sold  Out';
            }
            const bg = qty > 0 ? '#2e7d32' : qty === 0 ? '#c62828' : '#e0e0e0';
            html += `<td ><p style="background:${bg}; color:white;">${value}</p></td>`;
        });
        html += `</tr>`;
    });

    html += `</tbody></table>`;

    $('#variant-table-container').html(html);
    $('#total-inventory').html(`<strong>Total Inventory:</strong> ${totalQty}`);
    $('#overlay, #variant-modal').show();
}


        // Load collections
        $.get('https://thegemart.in/Inventory/api/get-collections?shop=<?php echo e(Auth::user()->name); ?>', function (collections) {
            collections.forEach(col => {
                $('#collection-select').append(`<option value="${col.id}">${col.title}</option>`);
            });
        });

        $('#collection-select').change(function () {
            let id = $(this).val();
            if (!id){
                    $('#filters').hide();
                    $('#qty-sort').hide();
                    $('#bulk_sales_updte').hide();
                const tbody1 = $('#product-list tbody').empty();
                tbody1.append(`<tr><td colspan="5" style="text-align: center;"> No Record Found.</td></tr>`);
                return;
            } 
            
            document.getElementById('loader').classList.add('active');
            
            $.get('https://thegemart.in/Inventory/fetch-products-and-options/' + id, function (res) {
                const data = res.data?.collection?.products?.edges || [];
                allProducts = data;
               
                if (Array.isArray(allProducts) && allProducts.length === 0) {
                    $('#filters').hide();
                    $('#qty-sort').hide();
                    $('#bulk_sales_updte').hide();
                    const tbody123 = $('#product-list tbody').empty();
                    tbody123.append(`<tr><td colspan="5" style="text-align: center;" > No Record Found.</td></tr>`);
                    document.getElementById('loader').classList.remove('active');  
                    return;
                }
                let variantOptionMap = new Map();
                data.forEach(p => {
                    p.node.variants.edges.forEach(v => {
                        v.node.selectedOptions.forEach(opt => {
                            if (!variantOptionMap.has(opt.name)) {
                                variantOptionMap.set(opt.name, new Set());
                            }
                            variantOptionMap.get(opt.name).add(opt.value);
                        });
                    });
                });
                // Show filters and clear previous
                $('#filters').empty().show();
                $('#qty-sort').show();
               
                
                variantOptionMap.forEach((values, name) => {
                    let select = $(`<select class="dynamic-filter form-select ms-2" data-name="${name}"><option value="">--Select ${name}--</option></select>`);
                    values.forEach(val => {
                        select.append(`<option value="${val}">${val}</option>`);
                    });
                    $('#filters').append(select);
                });
                renderProductList();
                  document.getElementById('loader').classList.remove('active');
                }).fail(function () {
                    // In case of error, hide loader and show an error message
                   document.getElementById('loader').classList.remove('active');
                    const tbody11 = $('#product-list tbody').empty();
                    tbody11.append(`<tr><td colspan="5" > Error loading products. Please try again.</td></tr>`);
                });
        });

        $(document).on('change', '.dynamic-filter, #qty-sort', renderProductList);

        function renderProductList() {
             $('.product-checkbox-anah-all').prop('checked', false);
              $('#bulk_sales_updte').hide();
             
            const filters = {};
            $('.dynamic-filter').each(function () {
                const name = $(this).data('name');
                const value = $(this).val();
                if (value) filters[name] = value;
            });

            const sort = $('#qty-sort').val();
             console.log('allProductsallProducts',allProducts);
            let filtered = allProducts.map(p => {
                const variants = p.node.variants.edges.map(v => v.node);
                const matchedVariants = variants.filter(v => {
                    return Object.entries(filters).every(([name, val]) =>
                        v.selectedOptions.some(opt => opt.name === name && opt.value === val)
                    );
                });

                return {
                    title: p.node.title,
                    id: p.node.id,
                    vendor: p.node.vendor,
                    salesChannels: p.node.salesChannels,
                    image: p.node.featuredImage,
                    variants: matchedVariants
                };
            }).filter(p => p.variants.length > 0);

            console.log('filtered',filtered);

            if (sort === 'low-to-high') {
                filtered.sort((a, b) => {
                    const aQty = Math.min(...a.variants.map(v => v.inventoryQuantity));
                    const bQty = Math.min(...b.variants.map(v => v.inventoryQuantity));
                    return aQty - bQty;
                });
            } else if (sort === 'high-to-low') {
                filtered.sort((a, b) => {
                    const aQty = Math.max(...a.variants.map(v => v.inventoryQuantity));
                    const bQty = Math.max(...b.variants.map(v => v.inventoryQuantity));
                    return bQty - aQty;
                });
            } else if (sort === 'out-of-stock') {
                filtered.sort((a, b) => {
                    const aQty = a.variants.some(v => v.inventoryQuantity === 0) ? 0 : 1;
                    const bQty = b.variants.some(v => v.inventoryQuantity === 0) ? 0 : 1;
                    return aQty - bQty;
                });
            }

            const tbody = $('#product-list tbody').empty();
            filtered.forEach((p, i) => {

                tbody.append(`<tr> <td style="margin-left: 1px;" ><input type="checkbox" class="product-checkbox-anah" value="${p.id}"></td><td style="display:flex;"> <img src="${p.image.url}" alt="Image" style="width: 71px; height: 40px;border-radius: 5px; margin-right: 25px;"> <p style="margin-top: 19px;"> ${p.title} </p></td> <td> <p style="margin-top: 19px;">${p.vendor}</p></td> <td> <p style="margin-top: 19px;">${p.salesChannels}</p></td> <td><button class="btn btn-sm btn-primary" onclick="showVariants(${i})">
                
                <svg fill="#ffffff" height="20" width="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80.794 80.794" xml:space="preserve">
                    <g>
                    	<g>
                    		<path d="M79.351,38.549c-0.706-0.903-17.529-22.119-38.953-22.119c-21.426,0-38.249,21.216-38.955,22.119L0,40.396l1.443,1.847
                    			c0.706,0.903,17.529,22.12,38.955,22.12c21.424,0,38.247-21.217,38.953-22.12l1.443-1.847L79.351,38.549z M40.398,58.364
                    			c-15.068,0-28.22-13.046-32.643-17.967c4.425-4.922,17.576-17.966,32.643-17.966c15.066,0,28.218,13.045,32.642,17.966
                    			C68.614,45.319,55.463,58.364,40.398,58.364z"></path>
                    		<path d="M40.397,23.983c-9.052,0-16.416,7.363-16.416,16.414c0,9.053,7.364,16.417,16.416,16.417s16.416-7.364,16.416-16.417
                    			C56.813,31.346,49.449,23.983,40.397,23.983z M40.397,50.813c-5.744,0-10.416-4.673-10.416-10.417
                    			c0-5.742,4.672-10.414,10.416-10.414c5.743,0,10.416,4.672,10.416,10.414C50.813,46.14,46.14,50.813,40.397,50.813z"></path>
                    	</g>
                    </g>
                    
                </svg>
                
</button></td></tr>`);
            });

            window.filteredProducts = filtered;

              console.log('filteredProducts',filteredProducts);
        }
    </script>
    
<script>
    new Sortable(document.getElementById('sortableTable'), {
      animation: 150,
      onEnd: function () {
        const order = [];
        document.querySelectorAll('#sortableTable tr').forEach(row => {
          order.push(row.getAttribute('data-id'));
        });
      }
    });
</script>
  
<script>
$('#sorting_form_submitt').on('submit', function(e) {
    e.preventDefault(); 
    const notyf = new Notyf({
                  position: {
                    x: 'center',
                    y: 'bottom',
                  }
                });
    let formData = $(this).serialize(); 
    $.ajax({
        url: $(this).attr('action'), 
        type: $(this).attr('method'), 
        data: formData,
        beforeSend: function() {
            document.getElementById('loader').classList.add('active');
            
        },
        success: function(response) {
            document.getElementById('loader').classList.remove('active');
             notyf.success(response.message);
        },
        error: function(xhr, status, error) {
            document.getElementById('loader').classList.remove('active');
             notyf.error(response.message);
        }
    });
});




function product_get() {
    
    document.getElementById('loader').classList.add('active');
     $("#sortableTable").html('');
    const collectionSelect = document.getElementById('all_collections');
    const sortSelect = document.getElementById('inventory_sort_col');
    const collectionId = collectionSelect.value;
    const collectionType = collectionSelect.options[collectionSelect.selectedIndex].getAttribute('data-type');
    const sort = sortSelect.value;
    $.ajax({
        url: `collections_product?collection_id=${collectionId}&type=${collectionType}&sort=${sort}`,
        type: 'GET',
        beforeSend: function(xhr) {},
        success: function(response) {
             document.getElementById('loader').classList.remove('active');
             if(response.html){
            $("#sortableTable").html(response.html);
             $("#sorting_submit").show();
            
            }else{
            $("#sortableTable").html('<tr><td colspan="3" style="text-align: center; padding: 12px; color: #888;">No data found </td></tr>');
            $("#sorting_submit").hide();
                
            }
        },
        error: function(xhr, status, error) {
            document.getElementById('loader').classList.remove('active');
            console.error('Error:', error);
            $("#sorting_submit").hide();
        }
    });
}


 setTimeout(function() {
        $.ajax({
            url: 'wel_get_data',
            type: 'GET',
            data: {},
            beforeSend: function(xhr) {},
            success: function(response) {
                $("#all_collections").html(response.col_html);
                $("#salesChannelList").html(response.sales_channel);
               // $("#editor").html(response.data_setting.value);
              CKEDITOR.instances.editor.setData(response.data_setting.value);
                
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }, 500);
    
    function openTab(event, tabId) {
        
        if (tabId == 'tab1') {

            if ($.fn.dataTable.isDataTable('#productsTable')) {
                $('#productsTable').DataTable().clear().destroy();
            }
            
            
            $(document).ready(function() {
    var table = $('#productsTable').DataTable({
       processing: true,
       serverSide: true,
        language: {
          processing: `
            <div class="custom-loader-wrapper">
              <div class="spinner-grow text-dark" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          `
        },
        ajax: {
            url: '<?php echo e(url("/shopify-products")); ?>',
            data: function (d) {
                d.inventory_sort = $('#inventory_sort').val();
                d.custom_title = $('#title_search').val();
            }
        },
        columns: [
            //  { data: 'sr_no' },
            { data: null, name: 'sr_no', orderable: false, render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1 },
            // { data: 'title',orderable: false, },
            {
              data: 'title',
              orderable: false,
              render: function(data, type, row) {
                return `
                  <div style="display: flex; align-items: center;">
                    <img src="${row.image_url}" alt="Image" style="width: 71px; height: 40px;border-radius: 5px; margin-right: 25px;">
                    <span>${row.title}</span>
                  </div>
                `;
              }
            },

            { data: 'vendor',orderable: false, },
            { data: 'price',orderable: false},
            { data: 'inventory',orderable: false, },
            {
        data: 'id',
        name: 'actions',
        orderable: false,
        searchable: false,
        render: function (data, type, row, meta) {
           // return `<button href="/shopify-products/view/${data}" class="btn btn-sm btn-primary">View</button>`;
            
            return `<button id="productModalBtn" onclick ="productModal(${data})" class="btn btn-sm btn-primary"><svg fill="#ffffff" height="20" width="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 80.794 80.794" xml:space="preserve">
<g>
	<g>
		<path d="M79.351,38.549c-0.706-0.903-17.529-22.119-38.953-22.119c-21.426,0-38.249,21.216-38.955,22.119L0,40.396l1.443,1.847
			c0.706,0.903,17.529,22.12,38.955,22.12c21.424,0,38.247-21.217,38.953-22.12l1.443-1.847L79.351,38.549z M40.398,58.364
			c-15.068,0-28.22-13.046-32.643-17.967c4.425-4.922,17.576-17.966,32.643-17.966c15.066,0,28.218,13.045,32.642,17.966
			C68.614,45.319,55.463,58.364,40.398,58.364z"/>
		<path d="M40.397,23.983c-9.052,0-16.416,7.363-16.416,16.414c0,9.053,7.364,16.417,16.416,16.417s16.416-7.364,16.416-16.417
			C56.813,31.346,49.449,23.983,40.397,23.983z M40.397,50.813c-5.744,0-10.416-4.673-10.416-10.417
			c0-5.742,4.672-10.414,10.416-10.414c5.743,0,10.416,4.672,10.416,10.414C50.813,46.14,46.14,50.813,40.397,50.813z"/>
	</g>
</g>
</svg></button>`;
        }
    }
        ]
    });

    // Trigger on filter change
    $('#inventory_sort').change(function () {
        table.ajax.reload();
    });

    $('#title_search').keyup(function () {
        table.ajax.reload();
    });
});

            
        }
        
        const tabs = document.querySelectorAll('.tab-content');
        const buttons = document.querySelectorAll('.tab-buttons button');
        tabs.forEach(tab => tab.classList.remove('active'));
        buttons.forEach(button => button.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
        event.currentTarget.classList.add('active');
    }
    
    
                setTimeout(() => {
                var button = document.getElementById("cus-product-igs");
                // Create a fake event object
                var fakeEvent = { currentTarget: button };
                // Call openTab with the fake event
                openTab(fakeEvent, 'tab1');
                }, 100);
                
                function productModal(id){
                   
                   document.getElementById('loader').classList.add('active');
                    $.ajax({
                      url: `https://thegemart.in/Inventory/shopify-product-varients?product_id=${id}`,
                      type: 'GET',
                      success: function (response) {
                          
                        $('#product_modal_data').html(response.bulk_varient);
                        $("#productQtyModal").modal('show');
                         document.getElementById('loader').classList.remove('active');
                        setTimeout(function(){
                         const table = document.querySelector('#product_modal_data .table.table-bordered');
                        const firstTh = table.querySelector('thead th:first-child');
                        const allFirstTds = table.querySelectorAll('tbody tr td:first-child');
                    
                        const isFirstThEmpty = firstTh && firstTh.textContent.trim() === '';
                        const areAllFirstTdsEmpty = Array.from(allFirstTds).every(td => td.textContent.trim() === '');
                    
                        if (isFirstThEmpty && areAllFirstTdsEmpty) {
                            firstTh.style.display = 'none';
                            allFirstTds.forEach(td => td.style.display = 'none');
                        }
                        },100)
                      },
                      error: function () {
                           document.getElementById('loader').classList.remove('active');
                        alert('Failed to load modal content');
                      }
                    });
    
                   
                }
                
                
                function updateChannels(productId) {
                  const selectedChannels = [];
                  $('#channelForm input[name="channels[]"]:checked').each(function () {
                    selectedChannels.push($(this).val());
                  });
                  
                  
                  const $btn = $('#sales_channel_update');
                  const originalHtml = $btn.html();
                
                  // Disable button and show spinner
                  $btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                  
                const notyf = new Notyf({
                  position: {
                    x: 'center',
                    y: 'bottom',
                  }
                });
                
                

                  $.ajax({
                    url: 'https://thegemart.in/Inventory/update-sales-channels',
                    method: 'POST',
                    data: {
                      product_id: productId,
                      channels: selectedChannels,
                      _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function (response) {
                        $btn.prop('disabled', false).html(originalHtml);
                      notyf.success(response.message);
                      
                    },
                    error: function () {
                        $btn.prop('disabled', false).html(originalHtml);
                      notyf.error('Failed to update sales channels');
                    }
                  });
                }


                

</script>

<script>

// $(document).ready(function() {
//     var table11 = $('#productsTableAutomatic').DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: {
//             url: '<?php echo e(url("/shopify-products")); ?>',
//             data: function (d) {
//                 d.inventory_sort = $('#inventory_sort').val();
//                 d.custom_title = $('#title_search').val();
//             }
//         },
//         columns: [
//              { data: 'sr_no' },
//             { data: 'title' },
//             { data: 'vendor' },
//             { data: 'price' },
//             { data: 'inventory' },
//             {
//         data: 'id',
//         name: 'actions',
//         orderable: false,
//         searchable: false,
//         render: function (data, type, row, meta) {
//             return `<a href="/shopify-products/view/${data}" class="btn btn-sm btn-primary">View</a>`;
//         }
//     }
//         ]
//     });

//     // Trigger on filter change
//     $('#inventory_sort').change(function () {
//         table.ajax.reload();
//     });

//     $('#title_search').keyup(function () {
//         table.ajax.reload();
//     });
// });

  </script>
  
  



  



<?php $__env->stopSection(); ?>
<?php echo $__env->make('shopify-app::layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoiglobeco/public_html/Inventory/resources/views/welcome.blade.php ENDPATH**/ ?>