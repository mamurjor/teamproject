<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table <a href="{{ route('saveform') }}"> Add New</a></h2>

<table>
  <tr>
    <th>name</th>
    <th>email</th>
    <th>cell</th>
  </tr>


  @foreach ($employee as  $value )
  <tr>
    <td>{{ $value->full_name }}</td>
    <td>{{ $value->email }}</td>
    <td>{{ $value->cell }}</td>
  </tr>
  @endforeach




</table>

</body>
</html>

