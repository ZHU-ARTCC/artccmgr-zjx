$(document).on('ready', function() {
    $.ajax({
        url: '/index-tables',
        type: 'GET',
        success: function(data) {
            $('#tableData').html(data);
            Tipped.create('.simple-tooltip');
        }
    });
    //setInterval(loadData, 10000)
});

var loadhtml = '<div class="col-md-6 weather"><h2><i class="fa fa-cloud"></i> Weather</h2><center><h2><i class="fa fa-refresh fa-spin"></i></h2></center></div><div class="col-md-6"><h2><i class="fa fa-search"></i> Who\'s Online?</h2><center><h2><i class="fa fa-refresh fa-spin"></i></h2></center></div>';

var loadData = function() {
    $('#tableData').html(loadhtml);
    $.ajax({
        url: '/index-tables',
        type: 'GET',
        success: function(data) {
            $('#tableData').html(data);
        }
    });
}