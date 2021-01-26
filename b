var jqxhr = $.ajax({ url: "ajax.txt" })
  .success(function() { $("#output".html("All okay")); })
  .error(function() { $("#output".html("Gone wrong")); })
  .complete(function() { $("#output".html(
    "All done")); });