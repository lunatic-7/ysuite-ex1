<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container mt-5 bg-light p-4 rounded">
        <div class="d-flex justify-content-between mb-3 bg-dark text-white p-3">
            <h4>Customers</h4>
            <button class="btn btn-light" data-toggle="modal" data-target="#addModal">Add Customer</button>
        </div>
        <div id="customerTable"></div>
    </div>

    <!-- Add Customer Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <form id="addCustomerForm">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">Add new Customer</h5>
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6 pr-5">
                                <label>Customer name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Customer name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Customer E-mail ID" required>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" name="email_notify" id="email_notify">
                                    <label class="form-check-label" for="email_notify">Enable E-mail Notification</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 pr-5">
                                <label>Customer Address</label>
                                <textarea name="address" class="form-control" rows="3" placeholder="Enter Address of the customer" required></textarea>
                            </div>
                            <div class="form-group col-md-2">
                                <label>ISD</label>
                                <select name="isd_code" class="form-control" required>
                                    <option value="91" selected>India (+91)</option>
                                    <option value="91">India (+91)</option>
                                    <option value="1">USA/Canada (+1)</option>
                                    <option value="44">UK (+44)</option>
                                    <option value="61">Australia (+61)</option>
                                    <option value="81">Japan (+81)</option>
                                    <option value="971">UAE (+971)</option>
                                    <option value="49">Germany (+49)</option>
                                    <option value="33">France (+33)</option>
                                    <option value="92">Pakistan (+92)</option>
                                </select>

                            </div>
                            <div class="form-group col-md-4">
                                <label>Customer Mobile</label>
                                <input type="text" name="mobile" class="form-control" placeholder="Enter Customer Mobile" required>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" name="sms_notify" id="sms_notify">
                                    <label class="form-check-label" for="sms_notify">Enable SMS Notification</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 pr-5">
                                <label>Customer Notes</label>
                                <textarea name="notes" class="form-control" rows="3" placeholder="Enter notes if any"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script>
        function loadCustomers() {
            $.get("fetch_customers.php", function(data) {
                $('#customerTable').html(data);
                $('#customerDataTable').DataTable({
                    order: [
                        [0, 'desc']
                    ]
                });
            });
        }


        $('#addCustomerForm').submit(function(e) {
            e.preventDefault();
            $.post("add_customer.php", $(this).serialize(), function(response) {
                $('#addModal').modal('hide');
                $('#addCustomerForm')[0].reset();
                loadCustomers();
            });
        });

        $(document).ready(function() {
            loadCustomers();
        });
    </script>
</body>

</html>