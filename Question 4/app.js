$.getJSON("mock_data.json", function (json) {
  $("#myDataTable").DataTable({
    data: json,
    columns: [
      { data: "id" },
      { data: "name" },
      { data: "email" },
      { data: "phone" },
    ],
  });
});

