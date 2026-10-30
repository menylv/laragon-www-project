
<?php
ob_start();
?>

<!-- Orders Header -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Orders</h2>
        <p class="text-muted mb-0">Manage and track all customer orders</p>
    </div>
</div>

<!-- Orders Form -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="mb-3">
            <h5 class="mb-0">
                <i class="bi bi-cart-plus text-primary me-2"></i>
                Orders Form
            </h5>
            <small class="text-muted">Fill in the order details</small>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">

                <!-- Order Date -->
                <div class="col-md-4">
                    <label for="order_date" class="form-label">
                        Order Date <span class="text-danger">*</span>
                    </label>
                    <input
                        type="date"
                        name="order_date"
                        id="order_date"
                        class="form-control"
                        placeholder="Enter Order Date"
                        required
                    >
                </div>

                <!-- Staff -->
                <div class="col-md-4">
                    <label for="staff_num" class="form-label">
                        Staff <span class="text-danger">*</span>
                    </label>
                    <select
                        name="staff_num"
                        id="staff_num"
                        class="form-control"
                        required
                    >
                        <option value="">Please select</option>
                        <option value="STF001">STF001 - Ahmad Hakimi</option>
                        <option value="STF002">STF002 - Nur Aisyah</option>
                        <option value="STF003">STF003 - Daniel Tan</option>
                    </select>
                </div>

                <!-- Customer -->
                <div class="col-md-4">
                    <label for="customer_num" class="form-label">
                        Customer <span class="text-danger">*</span>
                    </label>
                    <select
                        name="customer_num"
                        id="customer_num"
                        class="form-control"
                        required
                    >
                        <option value="">Please select</option>
                        <option value="C001">C001 - Ali bin Abu</option>
                        <option value="C002">C002 - Siti Aminah</option>
                        <option value="C003">C003 - John Tan</option>
                    </select>
                </div>

            </div>

            <hr class="mt-4 mb-3">

            <button type="submit" name="create" class="btn btn-primary">
                <i class="bi bi-save me-1"></i> Create
            </button>

            <button type="reset" class="btn btn-secondary">
                <i class="bi bi-arrow-counterclockwise me-1"></i> Clear
            </button>
        </form>

    </div>
</div>

<!-- Orders List -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="mb-3">
            <h5 class="mb-0">
                <i class="bi bi-receipt text-primary me-2"></i>
                Orders List
            </h5>
            <small class="text-muted">List of customer orders</small>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Order Date</th>
                        <th>Staff</th>
                        <th>Customer</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>ORD001</td>
                        <td>2026-10-20</td>
                        <td>Ahmad Hakimi</td>
                        <td>Ali bin Abu</td>
                        <td>
                            <a href="order_details.php"
                               class="btn btn-sm btn-info text-white"
                               title="Order details">
                                <i class="bi bi-list"></i>
                            </a>

                            <a href="invoice.php"
                               class="btn btn-sm btn-success"
                               title="View invoice">
                                <i class="bi bi-receipt"></i>
                            </a>

                            <button type="button"
                                    class="btn btn-sm btn-warning"
                                    title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            <button type="button"
                                    class="btn btn-sm btn-danger"
                                    title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>ORD002</td>
                        <td>2026-10-22</td>
                        <td>Nur Aisyah</td>
                        <td>Siti Aminah</td>
                        <td>
                            <a href="order_details.php"
                               class="btn btn-sm btn-info text-white"
                               title="Order details">
                                <i class="bi bi-list"></i>
                            </a>

                            <a href="invoice.php"
                               class="btn btn-sm btn-success"
                               title="View invoice">
                                <i class="bi bi-receipt"></i>
                            </a>

                            <button type="button"
                                    class="btn btn-sm btn-warning"
                                    title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            <button type="button"
                                    class="btn btn-sm btn-danger"
                                    title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>ORD003</td>
                        <td>2026-10-25</td>
                        <td>Daniel Tan</td>
                        <td>John Tan</td>
                        <td>
                            <a href="order_details.php"
                               class="btn btn-sm btn-info text-white"
                               title="Order details">
                                <i class="bi bi-list"></i>
                            </a>

                            <a href="invoice.php"
                               class="btn btn-sm btn-success"
                               title="View invoice">
                                <i class="bi bi-receipt"></i>
                            </a>

                            <button type="button"
                                    class="btn btn-sm btn-warning"
                                    title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            <button type="button"
                                    class="btn btn-sm btn-danger"
                                    title="Delete">
                                <i class="bi bi-trash"></i>
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
