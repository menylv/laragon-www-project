
<?php
ob_start();
?>

<!-- Customers Header -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Customers</h2>
        <p class="text-muted mb-0">Manage and track all your customers</p>
    </div>
</div>

<!-- Customer Form -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-person-plus text-primary me-2"></i>
                    Customer Form
                </h5>
                <small class="text-muted">Fill in the details of a customer</small>
            </div>

            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">

                <div class="col-md-4">
                    <label for="customer_num" class="form-label">
                        Customer ID <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="customer_num" id="customer_num"
                        class="form-control" placeholder="Enter Customer ID" required>
                </div>

                <div class="col-md-4">
                    <label for="customer_name" class="form-label">
                        Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="customer_name" id="customer_name"
                        class="form-control" placeholder="Enter Customer Name" required>
                </div>

                <div class="col-md-4">
                    <label for="customer_gender" class="form-label">
                        Gender <span class="text-danger">*</span>
                    </label>
                    <select name="customer_gender" id="customer_gender"
                        class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="customer_phone" class="form-label">
                        Phone Number <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="customer_phone" id="customer_phone"
                        class="form-control" placeholder="Enter Phone Number" required>
                </div>

                <div class="col-md-6">
                    <label for="register_date" class="form-label">
                        Register Date <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="register_date" id="register_date"
                        class="form-control" placeholder="Select Register Date" required>
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

<!-- Customers List -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="mb-3">
            <h5 class="mb-0">
                <i class="bi bi-people text-primary me-2"></i>
                Customers List
            </h5>
            <small class="text-muted">List of registered customers</small>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Register Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>CUS001</td>
                        <td>Ali Ahmad</td>
                        <td>Male</td>
                        <td>0123456789</td>
                        <td>2026-01-10</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>CUS002</td>
                        <td>Siti Aminah</td>
                        <td>Female</td>
                        <td>0139876543</td>
                        <td>2026-02-15</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>CUS003</td>
                        <td>Daniel Tan</td>
                        <td>Male</td>
                        <td>0167654321</td>
                        <td>2026-03-20</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td>
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
