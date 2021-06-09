$(document).ready(function () {

    // document.addEventListener('contextmenu', event => event.preventDefault());



    jQuery("#activate-home-tab").click(function () {
        console.log("opening home")
        jQuery('[href="#home"]').tab('show');
    });

    jQuery('.dropdown').on('click', function (e) {
        if (!jQuery('#tab1').is('.active')) {
            jQuery('[href="#tab1"]').tab('show');
        }
    });
    jQuery('.dropdown li [href^="#subtab"]').on('click', function (e) {
        var currHref = this.getAttribute('href');
        jQuery('[href="' + currHref + '"]').tab('show');
    });

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


    FilterItems(convertToShortDate(monthStartDate), convertToShortDate(date));

    $('input[name="daterange"]').daterangepicker({
        opens: 'center',
        startDate: new Date(date.getFullYear(), date.getMonth(), 1),
        endDate: date,
        maxDate: new Date()
    }, function (start, end) {
        selectedFromDate = start.format('YYYY-MM-DD');
        selectedToDate = end.format('YYYY-MM-DD');
        FilterItems(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'))
    });

    $('#cmbstatus').on('select2:select', function (e) {
        if (selectedFromDate == "" && selectedToDate == "") {
            FilterItems(convertToShortDate(monthStartDate), convertToShortDate(date));
        } else {
            FilterItems(selectedFromDate, selectedToDate);
        }
    });


});





function FilterItems(FromDate, ToDate) {

    debugger;

    var statusID = $('#cmbstatus').val();

    $('#tblMemberList').DataTable({
        'ajax':  base_url + 'admin/FilterMemberListData/' + statusID + '/' + '/' + FromDate + '/' + ToDate,
        'order': [],
        "bDestroy": true
    });



}
