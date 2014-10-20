var table = {
    init: function (tableId) {
        this.table = $(tableId);
    },

    addRow: function (row) {
       $.each(row, function (key, val) {
            items.push("<li id='" + key + "'>" + val + "</li>");

            var items = [];
            $.each(data, function (key, val) {
                items.push("<li id='" + key + "'>" + val + "</li>");
            });

            $("<tr/>", {
                "class": "my-new-list",
                html: items.join("")
            }).appendTo(this.table.find("tbody"));

        });
    },

    removeRows: function () {
        this.table.filter("tbody").html();
    },

    openDetailWindos: function () {

    }
}

var searchForm = {
    init: function (formId) {
        this.form = $(formId);
    },

    doSearch: function () {

        var name = $('name').val();
        var gender = $('gender').val();

        $.getJSON("search.json", function (data) {
            /*
             var items = [];
             $.each( data, function( key, val ) {
             items.push( "<li id='" + key + "'>" + val + "</li>" );
             });

             $( "<ul/>", {
             "class": "my-new-list",
             html: items.join( "" )
             }).appendTo( "body" );
             */
        });
    },



}

var app = {
    init: function () {
        table.init("table_search");
        searchForm.init("form_search");
    }
}

//Inits
app.init();