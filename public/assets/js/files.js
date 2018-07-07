var sorted = false;

$(document).ready(function() {
    updateFiles();
});

function updateFiles()
{
    var thedata = "";
    var data = "";
    var key = value = "";
    $("#tableFiles").html("<td colspan=\"4\"><img src=\"/assets/images/spinner_radar.gif\"> Loading...</td>");

    $.getJSON("/Files", function(data)
    {
        thedata = "";
        $.each(data, function(key, value) {
            thedata += addFileRow(key, value.title, value.category, value.modified);
        });
        if (thedata == "") {
            thedata = "<tr><td colspan=\"4\">No Files Found</td></tr>";
            $('#tableFiles').html(thedata);
        } else {
            $('#tableFiles').html(thedata);
        }
    });
}

function redraw_buttons(id)
{
    $('#actions_' + id).html("<button class=\"btn btn-warning zjx-file-edit\" id=\"" + id + "\">" +
    '<i class=\"fa fa-edit\"></i></button> <button class=\"btn btn-danger zjx-file-delete\" id=\"' + id + '\">' +
    "<i class=\"fa fa-trash-o\"></i></button> <button class=\"btn zjx-file-upload\" id=\""+id+"\"><i class=\"fa fa-arrow-circle-o-up\"></i></button> " +
    "<button class=\"btn btn-blue zjx-file-view\" id=\"" + id + "\"><i class=\"fa fa-folder-open-o\"></i></button>");
}

function addFileRow(key, desc, category, modified)
{
    var thedata2;
    thedata2 = "<tr><td id=\"title_" + key + "\">" + desc + "</td><td id=\"category_" + key + "\">" + category + "</td><td id=\"modified_" + key + "\">";
    thedata2 += modified + "</td><td id=\"action_" + key + "\"><button class=\"btn btn-warning zjx-file-edit\" id=\"" + key + "\">";
    thedata2 += "<i class=\"fa fa-edit\"></i></button> <button class=\"btn btn-danger zjx-file-delete\" id=\"" + key + "\">";
    thedata2 += "<i class=\"fa fa-trash-o\"></i></button> <button class=\"btn zjx-file-upload\" id=\""+key+"\"><i class=\"fa fa-arrow-circle-o-up\"></i></button> ";
    thedata2 += "<button class=\"btn btn-blue zjx-file-view\" id=\"" + key + "\"><i class=\"fa fa-folder-open-o\"></i></button></td></tr>"
    return thedata2;
}

$(".zjx-file-new").click(function() {
    if ($('#title_new').length > 0) { alert("You can only add 1 file at a time"); return; }
    var newrow = "<tr id=\"row_new\"><td id=\"title_new\"><input type=\"text\" id=\"new_title\" size=\"64\"></td>";
    newrow += "<td><select id=\"new_category\"><option>Downloads</option><option>Events</option><option>Other</option><option>Publications</option></select>";
    newrow += "<td>0000-00-00 00:00:00</td>";
    newrow += "<td id=\"action_new\"><button class=\"btn btn-info zjx-file-save\" id=\"new\">Create</button></td></tr>";
    $('#filetable > tbody > tr:first').before(newrow);
    newrow = null;
});
$('#tableFiles').on("click", ".zjx-file-edit", function() {
alert("Soon");
});

$('#tableFiles').on("click", ".zjx-file-delete", function() {
var r = confirm("Are you sure you wish to delete this file?  OK = Yes, Cancel = No");
    if (r == true) {
        $.ajax({
            type: "DELETE",
            url: "/Staff/Files/" + this.id
        }).done(function(msg) { updateFiles(); })
            .fail(function(hxr, txt) { alert("Error: " + txt); });
    }
});

$('#tableFiles').on("click", ".zjx-file-view", function() {
    var win = window.open("/Files/" + this.id);
    win.focus();
});

$('#tableFiles').on("click", ".zjx-file-upload", function() {
    var upid = this.id;
    $('#action_' + this.id).html('<button id="browse_' + this.id + '" class="btn btn-blue">Browse</button> <button id="submit_' + this.id + '" class="btn zjx-file-upload2"><i class="fa fa-arrow-circle-o-up"></i></button>');
    var uploader = new plupload.Uploader({
        runtimes: 'html5,html4',
        browse_button: document.getElementById('browse_' + upid),
        url: '/Staff/Files/' + upid,
        chunk_size: '500kb',
        max_retries: 3,

        init: {
            PostInit: function() {
                $('#submit_' + upid).click(function() {
                    uploader.start();
                    return false;
                });
            },
            UploadProgress: function(up, file) {
                $("#action_" + upid).html("Status: " + file.percent + "%");
            },
            FileUploaded: function(up, file) {
                $("#action_" + upid).html("Completed.");
            },
            Error: function(up, err) {
                $("#action_" + upid).html("Error");
                console.error("Error discovered, " + err.code + ": " + err.message);
            }
        }
    });

    uploader.init();
});

$('#tableFiles').on('click', "#new", function() {
    var id = this.id;
    if (id == "new") {
        desc = $('#new_title');
        cate = $('#new_category');
        $('#action_new').html("<img src=\"/assets/images/spinner_radar.gif\"> Processing...");
        $.post("/Staff/Files", { id: "new", desc: $('#new_title').val(), category: $('#new_category').val() })
            .done(function (data) {
                updateFiles();
            })
            .fail(function (xhr, txt) {
                alert(txt);
            });
    }
});