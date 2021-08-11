<!DOCTYPE html>
<html>
<body>
<h1>All India's Pinode</h1>
<table style="width:100%">
  <tr>
    <th>S.No</th>
    <th>Officename</th>
    <th>Pincode</th>
    <th>OfficeType</th>
    <th>Deliverystatus</th>
    <th>Divisionname</th>
    <th>Regionname</th>
    <th>circlename</th>
    <th>taluk</th>
    <th>Districtname</th>
    <th>Statename</th>
  </tr>
    
        @forelse($indiaPinode as $res)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$res->officename}}</td>
            <td>{{$res->pincode}}</td>
            <td>{{$res->officeType}}</td>
            <td>{{$res->deliverystatus}}</td>
            <td>{{$res->divisionname}}</td>
            <td>{{$res->regionname}}</td>
            <td>{{$res->circlename}}</td>
            <td>{{$res->taluk}}</td>
            <td>{{$res->districtname}}</td>
            <td>{{$res->statename}}</td>
        </tr>
        @empty
        <p>No data found</p>
        @endforelse
        {{ $indiaPinode->links() }}
    
</table>
</body>
</html>