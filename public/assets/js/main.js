var components = {
  fieldText: function (text) {
    this.text = text;
    this.render = function () {
      return this.text;
    }
  },

  fieldImage: function (src) {
    this.src = src;
    this.render = function () {
      return '<img src="' + this.src + '">';
    }
  },

  fieldLinkDetail: function (url, title) {
    this.url = url;
    this.render = function () {
      var link = $("<a href='contact_detail/" + url + "' class='open_modal'>" + title + "</a>");
      link.click(this.detailContact);
      return link;
    }
    this.detailContact = function (event) {
      event.preventDefault();
      $("#contact_detail_body").load($(this).attr("href"), function () {
        $("#contact_detail").modal('show');
      });
    }
  },

  tableRow: function (columns) {
    this.columns = columns;
    this.render = function () {
      var row = $("<tr/>");
      this.columns.forEach(function (field) {
        var column = new components.tableColumn(field);
        row.append(column.render());
      });
      return row;
    }
  },

  tableColumn: function (field) {
    this.field = field;
    this.render = function () {
      var column = $("<td/>");
      column.append(this.field.render());
      return column;
    }
  }
};

function tableRow(columns) {
  this.columns = columns;
  this.render = function () {
    var row = $("<tr/>");
    this.columns.forEach(function (field) {
      var column = new tableColumn(field);
      row.append(column.render());
    });
    return row;
  }
}

function tableColumn(field) {
  this.field = field;
  this.render = function () {
    var column = $("<td/>");
    column.append(this.field.render());
    return column;
  }
}


var table = {

  init: function (tableId) {
    this.table = $('#' + tableId);
    this.update();
  },

  update: function () {
    var name = $('#name').val();
    var gender = $('#gender').val();
    console.log(name);
    console.log(gender);
    $.post("./search", {
      'name': name,
      'gender': gender
    }, function (data) {

      var results = data.length;
      if (results > 0) {
        table.removeRows();
        $.each(data, function (key, contact) {

          var columns = [
            new components.fieldImage(contact.picture),
            new components.fieldLinkDetail(contact.guid, contact.name),
            new components.fieldText(contact.age),
            new components.fieldText(contact.email),
            new components.fieldText(contact.gender),
            new components.fieldText(contact.balance)
          ];
          var row = new components.tableRow(columns);
          table.addRow(row);
        });
      } else {
        table.noResults();
      }
    }, 'json');
  },

  addRow: function (row) {
    row.render().appendTo(this.table.find("tbody"))
  },

  removeRows: function () {
    this.table.find("tbody").empty();
  },

  noResults: function () {
    table.removeRows();
    $('<tr class="no_results"><td colspan="6">No results</td></tr>').appendTo(this.table.find("tbody"))
  }
}


var app = {
  init: function () {
    table.init("table_search");
    $("#do_search").click(table.update);
  }
}

$(function () {
  app.init();
});
