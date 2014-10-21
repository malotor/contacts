

var table = {

  init: function (tableId) {
    this.table = $('#'+tableId);
    this.table.find('a.openModal').click( this.detailContact );
  },

  addRow: function (contact) {
    console.log(contact);
    var columns = [];

    columns.push("<td>" + contact.picture + "</li>");
    columns.push("<td>" + contact.name + "</li>");
    columns.push("<td>" + contact.age + "</li>");
    columns.push("<td>" + contact.balance + "</li>");
    columns.push("<td>" + contact.email + "</li>");

    $("<tr/>", {
      html: columns.join("")
    }).appendTo(this.table.find("tbody"));

  },

  removeRows: function () {
    this.table.find("tbody").empty();
  },

  detailContact: function (event) {
    event.preventDefault();

    $("#contact_detail_body").load( $(this).attr("href") ,function() {
      $("#contact_detail").modal('show');
    });
  }
}


var searchForm = {
  init: function (formId) {
    this.form = $("#" + formId);
    this.form.find("#do_search").click(this.doSearch);
  },

  doSearch: function (event) {
    event.preventDefault();
    var name = $('#name').val();
    var gender = $('#gender').val();

    $.post("./search_name", {
      'name' : name
    },function (data) {

      var results = data.length;
      if (results>0) {
        table.removeRows();
        $.each( data, function( key, contact ) {
          table.addRow(contact)
        });
      }
    },'json');
  },

}

var app = {
  init: function () {
    table.init("table_search");
    searchForm.init("form_search");
  }
}

$(function () {
  app.init();
});
