<h1>{{ $heading }}</h1>

@if(count($contacts) == 0)
    <h1>No contacts found!</h1>
@endif

<form action="/">
    <input type="text" placeholder="Search ID"/>
    <input type="submit" value="Search"/>
</form>


<table bgcolor='black' width='1000'>
    <tr bgcolor='grey'>
        <th width="200">NAME</th>
        <th width="150">COMPANY</th>
        <th width="120">PHONE</th>
        <th width="150">EMAIL</th>
        <th width="200">OPERATION</th>
    </tr>
    @foreach($contacts as $contact)
    <tr bgcolor='lightgrey' align="center">
        <td>{{ $contact['name'] }}</td>
        <td>{{ $contact['company'] }}</td>
        <td>{{ $contact['phone'] }}</td>
        <td>{{ $contact['email'] }}</td>
        <td>
            <a href="#">Edit</a>|<a href="#">Delete</a>
        </td>
    </tr>
    @endforeach
</table>