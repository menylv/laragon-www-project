
<?php
ob_start();
?>

<!-- Staffs Header -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Staffs</h2>
        <p class="text-muted mb-0">Manage and track all your staffs</p>
    </div>
</div>

<!-- Staff Form -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-person-badge text-primary me-2"></i>
                    Staff Form
                </h5>
                <small class="text-muted">Fill in the details of a staff member</small>
            </div>

            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">

                <div class="col-md-6">
                    <label for="staff_num" class="form-label">
                        Staff ID <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="staff_num" id="staff_num"
                        class="form-control"
                        placeholder="Enter Staff ID" required>
                </div>

                <div class="col-md-6">
                    <label for="staff_name" class="form-label">
                        Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="staff_name" id="staff_name"
                        class="form-control"
                        placeholder="Enter Staff Name" required>
                </div>

                <div class="col-md-6">
                    <label for="staff_phone" class="form-label">
                        Phone Number <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="staff_phone" id="staff_phone"
                        class="form-control"
                        placeholder="Enter Phone Number" required>
                </div>

                <div class="col-md-6">
                    <label for="staff_email" class="form-label">
                        Email Address <span class="text-danger">*</span>
                    </label>
                    <input type="email" name="staff_email" id="staff_email"
                        class="form-control"
                        placeholder="Enter Email Address" required>
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

<!-- Staffs List -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="mb-3">
            <h5 class="mb-0">
                <i class="bi bi-people text-primary me-2"></i>
                Staffs List
            </h5>
            <small class="text-muted">List of registered staff members</small>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Staff ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>STF001</td>
                        <td>Ahmad Hakimi</td>
                        <td>0123456789</td>
                        <td>ahmad@example.com</td>
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
                        <td>STF002</td>
                        <td>Nur Aisyah</td>
                        <td>0139876543</td>
                        <td>aisyah@example.com</td>
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
                        <td>STF003</td>
                        <td>Daniel Tan</td>
                        <td>0167654321</td>
                        <td>daniel@example.com</td>
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
