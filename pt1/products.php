
<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your pet carrier products</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
      
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of a product</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
 
        <hr>
 
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>

                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>

                  <!-- chatgpt -->
                <div class="col-md-3">
                    <label for="type" class="form-label">Type <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_type" id="type" class="form-select" required>
                        <option value="">Select Type</option>
                        <option value="Bubble Carrier">Bubble Carrier</option>
                        <option value="Mesh Carrier">Mesh Carrier</option>
                        <option value="Expandable Carrier">Expandable Carrier</option>
                        <option value="Front Carrier">Front Carrier</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="size" class="form-label">Size <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_size" id="size" class="form-select" required>
                        <option value="">Select Size</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                    </select>
                </div>
                  <!-- chatgpt ended -->
                <div class="col-md-3">
                    <label for="colour" class="form-label">Colour <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_colour" id="colour" class="form-select" required>
                        <option value="">Select Colour</option>
                        <option value="Black">Black</option>
                        <option value="Pink">Pink</option>
                        <option value="Grey">Grey</option>
                        <option value="Beige">Red</option>
                        <option value="Blue">Blue</option>
                    </select>
                </div>
 
                <div class="col-md-3">
                    <label for="material" class="form-label">Material <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_material" id="material" class="form-select" required>
                        <option value="">Select Material</option>
                        <option value="Oxford Fabric">Oxford Fabric</option>
                        <option value="Polyester">Polyester</option>
                        <option value="PC">PC</option>
                        <option value="Canvas">Canvas</option>
                    </select>
                </div>
                 
                <div class="col-md-3">
                    <label for="weight_capacity" class="form-label">Weight Capacity (kg) <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_weight_capacity" id="weight_capacity" type="number" class="form-control" placeholder="Enter Weight Capacity" value="" required min="0.1" step="0.1">
                </div>

                <div class="col-md-3">
                    <label for="price" class="form-label">Price (RM) <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" required min="0" step="0.01">
                </div>
                 
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>

                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename" value="">
                </div>
            </div>
             
            <hr class="mt-4 mb-3">
             
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body">
  
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>
 
        <hr>
 
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>Bubble Pet Carrier Backpack</td>
                        <td>Bubble Carrier</td>
                        <td>Medium</td>
                        <td>RM89.90</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-center">No products found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
