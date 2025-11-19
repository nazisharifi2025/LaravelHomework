<div>
    <table>
        <tr>
           <th>Name</th>
              <th>Email</th>
                <th>Phone Number</th>
                    <th>Created_at</th>
                        <th>Updated_at</th>  
        <tr>
    @foreach ($all as $custumer)
        <tr>
            <td>{{ $custumer["name"] }}</td>
            <td>{{ $custumer["email"] }}</td>
            <td>{{ $custumer["phone"] }}</td>
            <td>{{ $custumer["created_at"] }}</td>
            <td>{{ $custumer["updated_at"] }}</td>
        </tr>
     
    @endforeach
    </table>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
