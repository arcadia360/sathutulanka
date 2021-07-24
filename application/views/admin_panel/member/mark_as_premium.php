<!-- <style type="text/css">
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    } 
</style> -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper arcadia-main-container ">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Premium Members</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Members</a></li>
                        <li class="breadcrumb-item active">Premium Members</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Date range -->
                        <div class="form-group">
                            <label>Date Range :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" name="daterange">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="box">
                    <div class="box-body">
                        <!-- <div>
                            Toggle column: <a class="toggle-vis" data-column="0">ID</a> - <a class="toggle-vis" data-column="1">GRN No</a> - <a class="toggle-vis" data-column="2">Office</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a>
                        </div> -->
                        <table id="tblTrustProvingMembers" class="table table-bordered table-striped">
                            <!-- style="display:block !important;" -->
                            <thead>
                                <tr>
                                    <th>Member Code</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Date Of Birth</th>
                                    <!-- <th>Marital Status</th> -->
                                    <th>Created Date</th>
                                    <th>Added Days</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.row -->
    </section>


</div>

<script>
    $(document).ready(function() {

        function convertToShortDate(str) {
            var date = new Date(str),
                mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                day = ("0" + date.getDate()).slice(-2);
            return [date.getFullYear(), mnth, day].join("-");
        }

        var date = new Date();
        var monthStartDate = new Date(date.getFullYear(), date.getMonth(), 1);

        var selectedFromDate = "";
        var selectedToDate = "";

        $('#tblTrustProvingMembers').DataTable({
            // 'ajax': 'GetPendingApprovalMember/' + convertToShortDate(monthStartDate) + '/' + convertToShortDate(date),
            // 'order': [],
            // "bDestroy": true
        });

        $('input[name="daterange"]').daterangepicker({
            opens: 'center',
            startDate: new Date(date.getFullYear(), date.getMonth(), 1),
            endDate: date,
            maxDate: new Date()
        }, function(start, end) {
            selectedFromDate = start.format('YYYY-MM-DD');
            selectedToDate = end.format('YYYY-MM-DD');
            // FilterItems(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'))

            $('#tblPendingApprovalMember').DataTable({
                'ajax': 'GetPendingApprovalMember/' + selectedFromDate + '/' + selectedToDate,
                'order': [],
                "bDestroy": true
            });
        });


    });
</script>