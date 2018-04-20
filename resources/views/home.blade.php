
<ul>
@foreach($names as $v => $name)
<li>Name: {{$v}}
<ol>
	<li>Age: {{$name['Age']}}</li>
</ol>
</li>

<li>Date of birth: {{$name['DOB']}}</li>
<li>Address: {{$name['Address']}}</li>
<li>City: {{$name['City']}}</li>
<li>State: {{$name['State']}}</li>
<li>Postal Code: {{$name['Zip']}}</li>
<li>Phone#: {{$name['phone']}}</li>
@endforeach
</ul>
