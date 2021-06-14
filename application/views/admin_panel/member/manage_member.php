<link rel="stylesheet" href="<?= base_url("resources/css/memberProfile.css") ?>">
<link rel="stylesheet" href="<?= base_url("resources/css/common.css") ?>">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper arcadia-main-container ">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $member_data['vcNickName'] ?>'s Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Members</a></li>
                        <li class="breadcrumb-item active">All Members</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="mainTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="main_tab_1-tab" data-toggle="tab" href="#main_tab_1" role="tab" aria-controls="main_tab_1" aria-selected="true">Member Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="main_tab_2-tab" data-toggle="tab" href="#main_tab_2" role="tab" aria-controls="main_tab_2" aria-selected="false">Member Photo</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="main_tab_3-tab" data-toggle="tab" href="#main_tab_3" role="tab" aria-controls="main_tab_3" aria-selected="false">Member Video</a>
                    </li> -->
                </ul>

                <br>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="main_tab_1" role="tabpanel" aria-labelledby="main_tab_1">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><b>Old Content</b></h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">School / University : </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <span>asaaas</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Family Details : </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <span>sfsfsasfsafasf dgdgsgsg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">After Marriage : </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <span>dfggsgsgsg gdgdsg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">About Your Self : </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <span>TELL MORE ABOUT YOURSELF, PARTNER PREFERENCES, FAMILY, CAREER-PLAN OR ANY SPECIAL DETAILS, LIKES DISLIKES THAT YOU CANT&#039;T MENTION IN OTHER PLACE</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Describe Career : </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <span>fdsfsfsdfsdfsdf</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h4><b>New Content</b></h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <form id="change_member_description">
                                    <input type="hidden" name="member_id" id="member_id" value="63">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">School / University : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <textarea class="form-control" name="member_university" id="member_university" cols="20" rows="10">asaaas</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">Family Details : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <textarea class="form-control" name="family_details" id="family_details" cols="20" rows="10">sfsfsasfsafasf dgdgsgsg</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">After Marriage : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <textarea class="form-control" name="after_marriage" id="after_marriage" cols="20" rows="10">dfggsgsgsg gdgdsg</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">About Your Self : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <textarea name="about_your_self" id="about_your_self" class="form-control" cols="20" rows="10">TELL MORE ABOUT YOURSELF, PARTNER PREFERENCES, FAMILY, CAREER-PLAN OR ANY SPECIAL DETAILS, LIKES DISLIKES THAT YOU CANT&#039;T MENTION IN OTHER PLACE</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">Describe Career : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <textarea name="describe_member_career" id="describe_member_career" class="form-control" cols="20" rows="10">fdsfsfsdfsdfsdf</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">

                                        <button class="btn btn-sm btn-primary float-right" id="btnUpdateMemberDetailsByAdmin"><i class="fas fa-edit"></i> Update Details</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 13px;">
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-3">
                                        <button class="btn btn-sm btn-success float-right" id="btnApproval" onclick=btnApprovalMember(<?= $member_data['intMemberID'] ?>)><i class="fa fa-check"></i> Approval</button>
                                    </div>


                                    <div class="col-md-3">

                                        <button class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#addDisapprovalReason" id="btnAddDisapprovalReason"><i class="fas fa-ban"></i> Disapproval</button>

                                    </div>

                                    <div class="col-md-3 ">

                                        <div id="send_letter_div">
                                            <button class="btn btn-sm btn-primary float-right"><i class="fas fa-envelope"></i> Send a Letter</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <button class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#addMemberRemark" id="btnAddMemberRemark"><i class="fas fa-edit"></i> Add Remark</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade" id="main_tab_2" role="tabpanel" aria-labelledby="main_tab_2">
                        bbb
                    </div>


                </div>


            </div>
    </section>
</div>

<!-- btnAddMemberRemark Modallllllllllllllll -->
<div class="modal fade" id="addMemberRemark" tabindex="-1" role="dialog" aria-labelledby="addMemberRemark" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMemberRemark">Add Member Remark</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form role="form" action="<?php echo base_url('admin/addMemberRemark') ?>" method="post" id="addMemberRemarkForm">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="intRemarkMemberID" name="intRemarkMemberID" value="<?= $member_data['intMemberID'] ?>" placeholder="N/A">
                    <div class="form-group">
                        <label for="remark">Remark</label>
                        <textarea class="form-control rounded-0" id="member_remark" name="member_remark" placeholder="Enter Rmark" rows="3"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" id="btnSubmitMemberRemark" class="btn btn-success btn-flat"><i class="fas fa-download" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Save Remark</button>
                </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- addDisapprovalReason Modallllllllllllllll -->
<div class="modal fade" id="addDisapprovalReason" tabindex="-1" role="dialog" aria-labelledby="addDisapprovalReason" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDisapprovalReason">Disapproval Reason</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form role="form" action="<?php echo base_url('admin/addDisapprovalReason') ?>" method="post" id="addDisapprovalReasonForm">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="intRemarkMemberID" name="intRemarkMemberID" value="<?= $member_data['intMemberID'] ?>" placeholder="N/A">
                    <div class="form-group">
                        <label for="remark">Disapproval Reason</label>
                        <textarea class="form-control rounded-0" id="disapproval_reason" name="disapproval_reason" placeholder="Enter Reason" rows="3"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" id="btnSubmitDisapprovalReason" class="btn btn-success btn-flat"><i class="fas fa-download" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Submit</button>
                </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script src="<?php echo base_url('resources/js/admin/pageJS/manageMember.js') ?>"></script>